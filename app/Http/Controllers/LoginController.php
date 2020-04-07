<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employes;
use App\employers;
use App\job_details;
use App\job_applications;

class LoginController extends Controller
{
    public function LoginEmploye(Request $request)
    {
    	$emailid=$request->mailid;
    	$password=$request->password;
    	$user=employes::where([['emailid','=',$emailid],['password','=',$password]])->first();
        $edetails=array('first_name' => $user->fist_name,'last_name'=>$user->last_name,'imgsrc'=>$user->imgsrc,'emailid'=>$user->emailid );
    	return view('employe',['edetails'=>$edetails]);
    }

    public function LoginEmployer(Request $request)
    {
    	$emailid=$request->mailid;
    	$password=$request->password;
    	$user=employers::where([['emailid','=',$emailid],['password','=',$password]])->first();
        $edetails=array('first_name' => $user->fist_name,'last_name'=>$user->last_name,'imgsrc'=>$user->imgsrc,'emailid'=>$user->emailid,'employe_id'=>$user->employe_id );
        $jobdetails=job_details::where('employer_id',$user->employe_id)->first();
        if (is_null($jobdetails)) {
            return view('postjob',['edetails'=>$edetails]);            
        }
        else{
            $applications=job_applications::where('job_id',$jobdetails->job_id)->all();
            return view('employer',['edetails'=>$edetails,'applications'=>$applications]);
        }
    
    }
    public function createjob()
    {
        $jobpost=Request('job_position');
        $jobtype=Request('job_type');
        $skill1=Request('skill1');
        $skill2=Request('skill2');
        $skill3=Request('skill3');
        $expneed=Request('exp_need');
        $expdur=Request('exp_dur');
        $jobloc=Request('job_loc');
        $jobdesc=Request('job_desc');
        $jobobj=new job_details;
        $empid=Request('id');
        $jobid=substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0,7);
        $jobobj->employer_id=$empid;
        $jobobj->job_id=$jobid;
        $jobobj->job_post=$jobpost;
        $jobobj->job_location=$jobloc;
        $jobobj->job_type=$jobtype;
        $jobobj->exp_needed=$expneed;
        $jobobj->exp_duration=$expdur;
        $jobobj->skill1=$skill1;
        $jobobj->skill2=$skill2;
        $jobobj->skill3=$skill3;
        $jobobj->job_description=$jobdesc;
        $jobobj->save();
        $emp=employers::where('employe_id',$empid)->first();
        $edetails=array('first_name' => $emp->fist_name,'last_name'=>$emp->last_name,'imgsrc'=>$emp->imgsrc,'emailid'=>$emp->emailid,'employe_id'=>$emp->employe_id );
        $applications=array('No Applications Yet!!');
        return view('employer',['edetails'=>$edetails,'applications'=>$applications]);
    }

}

