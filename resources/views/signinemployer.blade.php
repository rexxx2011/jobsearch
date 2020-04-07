<?php
?>
@extends('layouts.app')
@section('nav')
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" >
	    <div class="container">
	      <p class="navbar-brand">JobPortal</p>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav" style="background-color: black;" >
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>       

	        </ul>
	      </div>
	    </div>
	  </nav>
    <br><br><br>
    <!-- END nav -->

@endsection
@section('body')
	  <section>
	  	<form enctype="multipart/form-data" method="post" action="createemployer">
	  	@csrf
	  	<div class="ftco-section bg-light">
	  		<div class="container">
	  			<div class="row">
	  				<div class="col-md-12 col-lg-8 mb-4">
	  					<div class="row form-group">
			                <div class="col-md-12 mb-3 mb-md-0">
			                  <label class="font-weight-bold">First Name:</label>
			                  <input type="text" name="fname" class="form-control" placeholder="">
			                </div>
			              </div>
			              <div class="row form-group">
			                <div class="col-md-12 mb-3 mb-md-0">
			                  <label class="font-weight-bold" >Last Name:</label>
			                  <input type="text" name="lname" class="form-control" placeholder="">
			                </div>
			              </div>

			              <div class="row form-group">
			                <div class="col-md-12 mb-3 mb-md-0">
			                  <label class="font-weight-bold" >Emailid:</label>
			                  <input type="email" name="emailid" class="form-control" placeholder="">
			                </div>
			              </div>

			              <div class="row form-group">
			                <div class="col-md-12 mb-3 mb-md-0">
			                  <label class="font-weight-bold" >Password:</label>
			                  <input type="password" name="password" class="form-control" placeholder="">
			                </div>
			              </div>

			              <div class="row form-group">
			                <div class="col-md-12 font-weight-bold">Gender</div>
			                <div class="col-md-12 mb-3 mb-md-0">
			                  <select name="gender" class="col-md-12 mb-3 mb-md-0 form-control">
			                    <option>-----------</option>
			                    <option>Male</option>
			                    <option>Female</option>
			                  </select>                  
			                </div>
			              </div>

			              <div class="row form-group">
			                <div class="col-md-12 mb-3 mb-md-0">
			                  <label class="font-weight-bold" >Company Name</label>
			                  <input type="text" name="companyname" class="form-control" placeholder="">
			                </div>
			              </div>

			              <div class="row form-group">
			                <div class="col-md-12 mb-3 mb-md-0">
			                  <label class="font-weight-bold">Company Address:</label>
			                  <input type="text" name="companyaddress" class="form-control" placeholder="">
			                </div>
			              </div>

			              <div class="row form-group">
			              	<div class="col-md-12 mb-3 mb-md-0">
			              		<input type="file" name="image" class="form-control">
			              		
			              	</div>
			              	
			              </div>

			              <div class="row form-group">
			                <div class="col-md-12">
			                  <input type="submit" value="Signup" name="create" class="btn btn-primary  py-2 px-5">
			                </div>
			              </div>
		              	  <a href="login" class="nav-link">Existing User? Login</a>

	  						
	  					</div>
	  					
	  				</div>
	  				
	  			</div>
	  			
	  		</div>
	  		
	  	</div>
	  </form>

@endsection