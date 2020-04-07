<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\employes;
use App\employers;
class SignInController extends Controller
{
    public function EmployeSignin(Request $request)
    {
    	$fname=$request->fname;
    	$lname=$request->lname;
    	$mailid=$request->emailid;
    	$pswd=$request->password;
    	$gender=$request->gender;
    	$degname=$request->degreename;
    	$sc1type=$request->sc1type;
    	$sc1=$request->sc1;
    	$sc2type=$request->sc2type;
    	$sc2=$request->sc2;
    	$sc3type=$request->sc3type;
    	$sc3=$request->sc3;
    	$empid=substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0,7);
    	$employes=new employes;
    	request()->validate([
    		'fname'=>'required',
    		'lname'=>'required',
    		'emailid'=>'required',
    		'password'=>'required',
    		'gender'=>'required',
    		'degreename'=>'required',
    		'sc1type'=>'required',
    		'sc1'=>'required',
    		'sc2type'=>'required',
    		'sc2'=>'required',
    		'sc3type'=>'required',
    		'sc3'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = $empid.'.'.request()->image->getClientOriginalExtension();
        $imagePath='images/'.$imageName;
        request()->image->move(public_path('images'), $imageName);
    	$employes->employe_id=$empid;
    	$employes->first_name=$fname;
    	$employes->last_name=$lname;
    	$employes->emailid=$mailid;
    	$employes->password=$pswd;
    	$employes->degreename=$degname;
    	$employes->sc1type=$sc1type;
    	$employes->sc1=$sc1;
    	$employes->gender=$gender;
    	$employes->imgsrc=$imagePath;
    	$employes->sc2type=$sc2type;
    	$employes->sc2=$sc2;
    	$employes->sc3type=$sc3type;
    	$employes->sc3=$sc3;
    	$employes->save();
        $edetails= array('first_name' =>$fname ,'last_name'=>$lname,'imgsrc'=>$imagePath,'emailid'=>$mailid );
        return view('employe',['edetails'=>$edetails]);
    }
    public function EmployerSignin(Request $request)
    {
    	$fname=$request->fname;
    	$lname=$request->lname;
    	$mailid=$request->emailid;
    	$pswd=$request->password;
    	$gender=$request->gender;
    	$companyname=$request->companyname;
    	$companyaddress=$request->companyaddress;
    	$empid=substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0,9);
    	$employers=new employers;
    	request()->validate([
    		'fname'=>'required',
    		'lname'=>'required',
    		'emailid'=>'required',
    		'password'=>'required',
    		'gender'=>'required',
    		'companyname'=>'required',
    		'companyaddress'=>'required',
    		'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = $empid.'.'.request()->image->getClientOriginalExtension();
        $imagePath='images/'.$imageName;
        request()->image->move(public_path('images'), $imageName);
    	$employers->employe_id=$empid;
    	$employers->first_name=$fname;
    	$employers->last_name=$lname;
    	$employers->emailid=$mailid;
    	$employers->password=$pswd;
    	$employers->gender=$gender;
    	$employers->imgsrc=$imagePath;
    	$employers->company_name=$companyname;
    	$employers->company_address=$companyaddress;
    	$employers->save();
        $edetails= array('first_name' =>$fname ,'last_name'=>$lname,'imgsrc'=>$imagePath,'emailid'=>$mailid );

        return view('employer',['edetails'=>$edetails]);
    }
}
