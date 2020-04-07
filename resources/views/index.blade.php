@extends('layouts.app')
@section('nav')    
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.php">JobPortal</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="index" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="about" class="nav-link">About</a></li>
              <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
              <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
              <li class="nav-item cta mr-md-2"><a href="signinemployer" class="nav-link">Post a job</a></li>
              <li class="nav-item cta cta-colored"><a href="signinemploye" class="nav-link">Want a job</a></li>

            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->
  @endsection
  @section('body')  
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have <span class="number" data-number="850000">0</span> great job offers you deserve!</p>
            <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Dream <br><span>Job is Waiting</span></h1>

                        <div class="ftco-search">
                            <div class="row">
                    <div class="col-md-12 nav-link-wrap">
                        <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find a Job</a>

                          <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Find a Candidate</a>

                        </div>
                      </div>
                      <div class="col-md-12 tab-wrap">
                        
                        <div class="tab-content p-4" id="v-pills-tabContent">

                          <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                            <form action="#" class="search-job">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <div class="icon"><span class="icon-briefcase"></span></div>
                                                <input type="text" class="form-control" placeholder="eg. Garphic. Web Developer">
                                              </div>
                                          </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <div class="select-wrap">
                                              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                              <select name="" id="" class="form-control">
                                                <option value="">Category</option>
                                                <option value="">Full Time</option>
                                                <option value="">Part Time</option>
                                                <option value="">Freelance</option>
                                                <option value="">Internship</option>
                                                <option value="">Temporary</option>
                                              </select>
                                            </div>
                                              </div>
                                          </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <div class="icon"><span class="icon-map-marker"></span></div>
                                                <input type="text" class="form-control" placeholder="Location">
                                              </div>
                                          </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <input type="submit" value="Search" class="form-control btn btn-primary">
                                              </div>
                                          </div>
                                    </div>
                                </div>
                            </form>
                          </div>

                          <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                            <form action="#" class="search-job">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <div class="icon"><span class="icon-user"></span></div>
                                                <input type="text" class="form-control" placeholder="eg. Adam Scott">
                                              </div>
                                          </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <div class="select-wrap">
                                              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                              <select name="" id="" class="form-control">
                                                <option value="">Category</option>
                                                <option value="">Full Time</option>
                                                <option value="">Part Time</option>
                                                <option value="">Freelance</option>
                                                <option value="">Internship</option>
                                                <option value="">Temporary</option>
                                              </select>
                                            </div>
                                              </div>
                                          </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <div class="icon"><span class="icon-map-marker"></span></div>
                                                <input type="text" class="form-control" placeholder="Location">
                                              </div>
                                          </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <input type="submit" value="Search" class="form-control btn btn-primary">
                                              </div>
                                          </div>
                                    </div>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-resume"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Search Millions of Jobs</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-collaboration"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Easy To Manage Jobs</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-promotions"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Top Careers</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-employee"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Search Expert Candidates</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Categories work wating for you</span>
            <h2 class="mb-4"><span>Current</span> Job Posts</h2>
          </div>
        </div>
        <div class="row">
            <div class="col-md-3 ftco-animate">
                <ul class="category">
                    <li><a href="#">Web Development <span class="number" data-number="1000">0</span></a></li>
                    <li><a href="#">Graphic Designer <span class="number" data-number="1000">0</span></a></li>
                    <li><a href="#">Multimedia <span class="number" data-number="2000">0</span></a></li>
                    <li><a href="#">Advertising <span class="number" data-number="900">0</span></a></li>
                </ul>
            </div>
            <div class="col-md-3 ftco-animate">
                <ul class="category">
                    <li><a href="#">Education &amp; Training <span class="number" data-number="3500">0</span></a></li>
                    <li><a href="#">English <span class="number" data-number="1560">0</span></a></li>
                    <li><a href="#">Social Media <span class="number" data-number="1000">0</span></a></li>
                    <li><a href="#">Writing <span class="number" data-number="2500">0</span></a></li>
                </ul>
            </div>
            <div class="col-md-3 ftco-animate">
                <ul class="category">
                    <li><a href="#">PHP Programming <span class="number" data-number="5500">0</span></a></li>
                    <li><a href="#">Project Management <span class="number" data-number="2000">0</span></a></li>
                    <li><a href="#">Finance Management <span class="number" data-number="800">0</span></a></li>
                    <li><a href="#">Office &amp; Admin <span class="number" data-number="7000">0</span></a></li>
                </ul>
            </div>
            <div class="col-md-3 ftco-animate">
                <ul class="category">
                    <li><a href="#">Web Designer <span><span class="number" data-number="8000">0</span></span></a></li>
                    <li><a href="#">Customer Service <span class="number" data-number="4000">0</span></a></li>
                    <li><a href="#">Marketing &amp; Sales <span class="number" data-number="3300">0</span></a></li>
                    <li><a href="#">Software Development <span class="number" data-number="1356">0</span></a></li>
                </ul>
            </div>
        </div>
        </div>
    </section>


    <!-- This code will b e used for displaying the jobs -->

         <section class="ftco-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Recently Added Jobs</span>
            <h2 class="mb-4"><span>Recent</span> Jobs</h2>
          </div>
        </div>
                <div class="row">
                    <div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3">Frontend Development</h2>
                  <div class="badge-wrap">
                   <span class="bg-primary text-white badge py-2 px-3">Partime</span>
                  </div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
                  <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="signinemploye.php" class="btn btn-primary py-2 mr-1">Apply Job</a>                
              </div>
            </div>
          </div><!-- end -->

          <div class="col-md-12 ftco-animate">
                        <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                          <div class="mb-4 mb-md-0 mr-5">
                           <div class="job-post-item-header d-flex align-items-center">
                             <h2 class="mr-3 text-black h4">Full Stack Developer</h2>
                             <div class="badge-wrap">
                              <span class="bg-warning text-white badge py-2 px-3">Full Time</span>
                             </div>
                           </div>
                           <div class="job-post-item-body d-block d-md-flex">
                             <div class="mr-3"><span class="icon-layers"></span> <a href="#">Google, Inc.</a></div>
                             <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                           </div>
                          </div>

                          <div class="ml-auto d-flex">
                            <a href="signinemploye.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
                
              </div>

                        </div>
          </div> <!-- end -->
          <div class="col-md-12 ftco-animate">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Open Source Interactive Developer</h2>
                 <div class="badge-wrap">
                  <span class="bg-info text-white badge py-2 px-3">Freelance</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
                 <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
               </div>
              </div>
              
              <div class="ml-auto d-flex">
                <a href="signinemploye.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
                </div>
           </div>
         </div> <!-- end -->
         <div class="col-md-12 ftco-animate">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Frontend Development</h2>
                 <div class="badge-wrap">
                  <span class="bg-secondary text-white badge py-2 px-3">Internship</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
                 <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
               </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="signinemploye.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
              </div>
           </div>
         </div> <!-- end -->
         <div class="col-md-12 ftco-animate">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Open Source Interactive Developer</h2>
                 <div class="badge-wrap">
                  <span class="bg-danger text-white badge py-2 px-3">Temporary</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
                 <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
               </div>
              </div>
              
              <div class="ml-auto d-flex">
                <a href="signinemploye.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
               
              </div>
           </div>
         </div> <!-- end -->
         <div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3">Frontend Development</h2>
                  <div class="badge-wrap">
                   <span class="bg-primary text-white badge py-2 px-3">Partime</span>
                  </div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
                  <div><span class="icon-map-marker"></span> <span>Western City, UK</span></div>
                </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="signinemploye.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
              </div>
            </div>
          </div><!-- end -->

          <div class="col-md-12 ftco-animate">
                        <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                          <div class="mb-4 mb-md-0 mr-5">
                           <div class="job-post-item-header d-flex align-items-center">
                             <h2 class="mr-3 text-black h4">Full Stack Developer</h2>
                             <div class="badge-wrap">
                              <span class="bg-warning text-white badge py-2 px-3">Full Time</span>
                             </div>
                           </div>
                           <div class="job-post-item-body d-block d-md-flex">
                             <div class="mr-3"><span class="icon-layers"></span> <a href="#">Google, Inc.</a></div>
                             <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                           </div>
                          </div>

                          <div class="ml-auto d-flex">
                <a href="signinemploye.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
              </div>

                        </div>
          </div> <!-- end -->
          <div class="col-md-12 ftco-animate">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Open Source Interactive Developer</h2>
                 <div class="badge-wrap">
                  <span class="bg-info text-white badge py-2 px-3">Freelance</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
                 <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
               </div>
              </div>
              
              <div class="ml-auto d-flex">
                <a href="signinemploye.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
              </div>
           </div>
         </div> <!-- end -->
         <div class="col-md-12 ftco-animate">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Frontend Development</h2>
                 <div class="badge-wrap">
                  <span class="bg-secondary text-white badge py-2 px-3">Internship</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
                 <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
               </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="signinemploye.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
                </div>
           </div>
         </div> <!-- end -->
         <div class="col-md-12 ftco-animate">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Open Source Interactive Developer</h2>
                 <div class="badge-wrap">
                  <span class="bg-danger text-white badge py-2 px-3">Temporary</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
                 <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
               </div>
              </div>
              
              <div class="ml-auto d-flex">
                <a href="signinemploye.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
              </div>
           </div>
         </div> <!-- end -->
                </div>

        </section>
   
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <strong class="number" data-number="1350000">0</strong>
                        <span>Jobs</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <strong class="number" data-number="40000">0</strong>
                        <span>Members</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <strong class="number" data-number="30000">0</strong>
                        <span>Resume</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <strong class="number" data-number="10500">0</strong>
                        <span>Company</span>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Testimonial</span>
            <h2 class="mb-4"><span>Happy</span> Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
 @endsection 

  <!-- loader -->
  <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
 -->

  