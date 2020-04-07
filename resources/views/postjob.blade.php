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
    <!-- END nav -->
    @endsection
@section('body')    
      <div class="container">
        <span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Post a Job</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Post a Job</h1>
          </div>
        </div>
      </div>
    
    <div class="ftco-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
			     <form action="createjob/{{$edetails['employe_id']}}" method="post" class="p-5 bg-white">@csrf
            

              <div class="row form-group">
                <div class="col-md-12 font-weight-bold">Job Title</div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <select name="job_position" class="col-md-12 mb-3 mb-md-0 form-control">
                    <option>---------------------</option>
                    <option>Website Developer </option>
                        <option>Java Develope</option>
                        <option>Architect</option>
                        <option>Graphic Designer</option>
                  </select>                  
                </div>
              </div>              

              <div class="row form-group">
                <div class="col-md-12 font-weight-bold">Job Type</div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <select name="job_type" class="col-md-12 mb-3 mb-md-0 form-control">
                    <option>Full Time</option>
                    <option>Part Time</option>
                    <option>Work From Home</option>
                  </select>                  
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-10 font-weight-bold">Skills needed</div>
                <div class="col-md-10 font-weight-bold">Skill 1</div>
                <input type="text" name="skill1" class="form-control">
                <div class="col-md-10 font-weight-bold">Skill 2</div>
                <input type="text" name="skill2" class="form-control">
                <div class="col-md-10 font-weight-bold">Skill 3</div>
                <input type="text" name="skill3" class="form-control">
              </div>

              <div class="row form-group">
                <div class="col-md-12 font-weight-bold">
                  <h3>Experience Needed?
                  <select name="exp_need" class="col-md-4 mb-3 mb-md-0 form-control ">
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                </h3>
                </div>                
              </div>

              <div class="row form-group">
                <div class="col-md-12 font-weight-bold">
                  <label>Experience duration <input type="text" name="exp_dur" class="col-md-4 mb-3 mb-md-0"></label>
                </div>
                
              </div>             

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Location</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" name="job_loc" class="form-control" >
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12"><h3>Job Description</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="job_desc" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Post" name="createjob" class="btn btn-primary  py-2 px-5">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <img style="width: 100%;height: 100%;" src="{{$edetails['imgsrc']}}">
              
            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">{{$edetails["first_name"]}} {{$edetails["last_name"]}}</h3>
              <p class="font-weight-bold">{{$edetails["emailid"]}}</p>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection