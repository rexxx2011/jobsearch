<?php
if (isset($_POST['login'])) {
	$mailid=$_POST['mailid'];
	$pswd=$_POST['password'];
	if (empty($mailid)||empty($pswd)) {
		header('Location:login.php?error=empty_fields');
	}
	else{
		$conn=mysqli_connect('localhost','root','','jobportal');
		if ($conn->connect_error) {
			die('connecton error');
		}
		$query1="SELECT * FROM employe_details WHERE email_id='$mailid' and password='$pswd'";
		$query2="SELECT * FROM employer_details WHERE emailid='$mailid' and password='$pswd'";
		$res1=mysqli_query($conn,$query1);
		$res2=mysqli_query($conn,$query2);
		if ($res1->num_rows>0) {
			$res=$res1->fetch_assoc();
			session_start();
			$_SESSION['emailid']=$res['email_id'];
			$_SESSION['first_name']=$res['first_name'];
			$_SESSION['last_name']=$res['last_name'];
			$_SESSION['imgsrc']=$res['imgsrc'];
			$_SESSION['employeid']=$res['employe_id'];
			$_SESSION['utype']='EMPLOYE';
			header('Location:employe.php');

		}
		elseif ($res2->num_rows>0) {
			$res=$res2->fetch_assoc();
			session_start();
			$_SESSION['emailid']=$res['emailid'];
			$_SESSION['first_name']=$res['first_name'];
			$_SESSION['lname']=$res['last_name'];
			$_SESSION['imgsrc']=$res['imgsrc'];
			$_SESSION['employeid']=$res['employer_id'];
			$_SESSION['utype']='EMPLOYER';
			header('Location:employer.php');

		}
		else{
			header('Loocation:login.php?error=incorrect_credentials');
		}

	}
}


?>

@extends('layouts.app')
@section('nav')
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" >
	    <div class="container">
	      <p class="navbar-brand"> JobPortal</p>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav" style="background-color: black;" >
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	          <li class="nav-item cta mr-md-2"><a href="new-post.html" class="nav-link">Logout</a></li>
	          

	        </ul>
	      </div>
	    </div>
	  </nav>
    <br><br><br>
@endsection
@section('body')
    <div class="ftco-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
			 <form action="loginemployer" method="post" class="p-5 bg-white">
        @csrf
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <p class="font-weight-bold" >Email Id
                  <input type="email" name="mailid" class="form-control" style="width: 60%;"></p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <p class="font-weight-bold" >Password
                  <input type="password" name="password" class="form-control" style="width: 60%;"></p>
                </div>
              </div>

	           <div class="row form-group">
	            <div class="col-md-12">
	              <input type="submit" value="login" name="login" class="btn btn-primary  py-2 px-5">
	            </div>
	          </div>
          </div>
          
      </form>
        </div>
       </div>
   </div>
    	
    </div>
@endsection