<?php
session_start();
if (!isset($_SESSION["employeid"])) {
  header('Location:signinemploye.php');
}
@$img=$_SESSION['imgsrc'];
@$fname=$_SESSION['first_name'];
@$lname=$_SESSION['last_name'];
@$mailid=$_SESSION['emailid'];
@$employe_id=$_SESSION['employeid'];
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
	          <li class="nav-item"><a href="index" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
            <li class="nav-item cta mr-md-2"><a href="logout" class="nav-link">Logout</a></li>
	  
	        </ul>
	      </div>
	    </div>
	  </nav>
    <br><br><br>
    <!-- End Nav -->
@endsection
@section('body')
    <div class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12 col-lg-8 mb-5">
    				<form method="POST">
    					<div class="row form-group">
		                <div class="col-md-12 font-weight-bold">
		                  <p> <h3>Search Job for?</h3>
		                  <select name="jobtype" class="col-md-8 mb-3 mb-md-0 form-control ">
		                  	<option>-------------------</option>
		                    <option>Website Developer </option>
		                    <option>Java Develope</option>
		                    <option>Architect</option>
		                    <option>Graphic Designer</option>
		                  </select>
		                </p>
		                </div>                
              			</div>
              			<div class="row form-group">
	            			<div class="col-md-12">
	              			<input type="submit" value="Search" name="Search" class="btn btn-primary  py-2 px-5">
	            			</div>
          				</div>
    					
    				</form>
                <div class='job-post-item bg-white p-4 d-block d-md-flex align-items-center'>

    <?php
      if (isset($_POST['Search'])) {
        $conn=mysqli_connect('localhost','root','','jobportal');
        $job=$_POST['jobtype'];
        $query="SELECT job_id,job_post,job_location,job_type FROM job_details WHERE job_post='$job'";
        $result=mysqli_query($conn,$query);
        if ($result->num_rows > 0) {
        while ($job=$result->fetch_assoc()) {
          echo '

              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3">'.$job["job_post"].'</h2>
                  <div class="badge-wrap">
                   <span class="bg-primary text-white badge py-2 px-3">'.$job["job_type"].'</span>
                  </div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><span class="icon-layers"></span> <a href=>Facebook, Inc.</a></div>
                  <div><span class="icon-my_location"></span> <span>'.$job["job_location"].'</span></div>
                </div>
              </div>
              <div class="ml-auto d-flex">
                <a href="viewjob.php?jobid='.$job["job_id"].'" class="btn btn-primary py-2 mr-1">View Job</a>
           </div>

              ';    
        }
      }

      }

    ?>
           </div>





    			</div>
          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <img style="width: 100%;height: 100%;" src="{{$edetails['imgsrc']}}">
              
            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">{{$edetails['first_name']}} {{$edetails['last_name']}}</h3>
              <p class="font-weight-bold">{{$edetails['emailid']}}</p>
              <p></p>
            </div>
          </div>
        </div>
    			
    		</div>
    		
    	</div>
    	
    </div>
    
@endsection