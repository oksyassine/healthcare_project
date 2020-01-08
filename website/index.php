<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Smart Medical</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/heart.css">
    <link rel="stylesheet" type="text/css" href="scss/termo.scss">
  <link rel="stylesheet" type="text/css" href="css/vjlgwr.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><i class="flaticon-pharmacy"></i><span>Smart</span>Med</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item"><a href="doctor.html" class="nav-link">Doctors</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          <li class="nav-item cta"><a href="contact.html" class="nav-link">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/medfont1.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <h1 class="mb-4">Online Hospital </h1>
            <p>There is one consolation in being sick; and that is the possibility that you may recover to a better state than you were ever in before.</p><br> Henry David Thoreau Ann Wigmore</p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-services">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2 py-3 nav-link-wrap">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              
              <a class="nav-link px-1 active" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-master" role="tab" aria-controls="v-pills-master" aria-selected="true"><span class="mr-2 flaticon-cardiogram"></span> Personal info</a>

              <a class="nav-link px-1" id="v-pills-buffet-tab" data-toggle="pill" href="#v-pills-buffet" role="tab" aria-controls="v-pills-buffet" aria-selected="false"><span class="mr-3 flaticon-neurology"></span> Medical tests</a>

              <a class="nav-link px-1" id="v-pills-reception-tab" data-toggle="pill" href="#v-pills-reception" role="tab" aria-controls="v-pills-reception" aria-selected="false"><span class="mr-3 flaticon-tooth"></span> Medicines </a>

              <a class="nav-link px-1" id="v-pills-sea-tab" data-toggle="pill" href="#v-pills-sea" role="tab" aria-controls="v-pills-sea" aria-selected="false"><span class="mr-3 flaticon-vision"></span>Doctors notes </a>

              <a class="nav-link px-1" id="v-pills-spa-tab" data-toggle="pill" href="#v-pills-spa" role="tab" aria-controls="v-pills-spa" aria-selected="false"><span class="mr-3 flaticon-ambulance"></span>Emergency </a>
            </div>
          </div>

          <div class="col-md-10 ftco-animate p-4 p-md-2 d-flex align-items-center">
            
            <div class="tab-content pl-md-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active " id="v-pills-master" role="tabpanel" aria-labelledby="v-pills-master-tab">
                
                <div class="row justify-content-start" >
                  <div class="col-md-2">
                    <span class="icon mb-3 d-block flaticon-cardiogram"></span>
                  </div>
                  <div class="col-md-8">
                    <h1 class="mb-4">Personal info</h1>
                    <br>
                  </div>
                </div>
                <br>
                <div class="row" style="margin-left: 120px;">

                  <div class="col-md-2">
                      <h2 class="mb-4"></h4>
                  </div>
                  
                  <div class="col-md-10">
                    <div class="item">
                      <div class="testimony-wrap text-center">
                          <div class="user-img mb-5" style="background-image: url(images/user.png)">
                            <span class="quote d-flex align-items-center justify-content-center">
                              <i class="icon-quote-left"></i>
                            </span>
                          </div>
                          <div class="text">
                            <p class="mb-4" style="float: left;"> Nom :</p> <input name="" style="float: right;">   <br><br>
                            <p class="mb-4" style="float: left;"> Prenom :</p> <input name="" style="float: right;">   <br><br>
                           <p class="mb-4" style="float: left;"> Date de naissance</p> <input type="date" name="" style="float: right;">   <br><br>
                           <p class="mb-4" style="float: left;"> Adresse :</p> <input name="" style="float: right;">   <br><br>
                           <p class="mb-4" style="float: left;"> Telephone :</p> <input type="phone" name="" style="float: right;">   <br><br>
                           <p class="mb-4" style="float: left;"> Poids</p> <input name="" style="float: right;">   <br><br>
                           <p class="mb-5" style="float: left;"> Marié(e) ?</p> <input type="checkbox" name="" style="float: right;">   <br><br>
                           <p class="mb-5" style="float: left;"> Mail :</p> <input type="" name="" style="float: right;">   <br><br>
                            <p class="mb-5"> --------------------------------------------------------------------  ---------------------------------------- </p>
                            <p class="name"> Bienvenu </p>
                            
                          </div>
                      </div>
                    </div>
                    <a href="#" class="btn btn-primary"  class="nav-link" data-toggle="modal" data-target="#modalAppointment"><span>Modify</span></a></p>
                  </div>
                </div>     
              </div>

            <div class="tab-pane fade py-5" id="v-pills-buffet" role="tabpanel" aria-labelledby="v-pills-buffet-tab" style="float: right;">

                <div class="row justify-content-start" >
                  <div class="col-md-2">
                    <span class="icon mb-3 d-block flaticon-neurology"></span>
                  </div>
                  <div class="col-md-8">
                    <h2 class="mb-4">Medical tests</h2>
                    <br>
                  </div>
                </div>

                <div class="container">
                  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-right">
                  
                  <div class="text">
                    <strong class="number" data-number="60">0</strong>
                    <span>battements de coeur</span>
                   <img src="images/svg.gif" class="human-heart" alt="human heart" />
                  </div>

                 
                   <strong ><?php 
                    if(isset($_SESSION['POST'])){
                    echo $_SESSION['POST']['result']['0']['value'];
                  }
                     ?></strong><span> ºC</span>
                    <span>Temperature </span>

                  <svg style="display: none;">
                  <g id="termometer">
                    <path style="fill:#333; opacity: 0.2;" d="M87.252,189.971c4.044,1.249,8.214,1.92,12.333,1.89  1c4.115-0.055,8.178-0.791,11.912-2.297
                      c7.489-2.924,13.68-8.729,16.98-15.797c1.683-3.513,2.631-7.346,2.716-11.173c0.07-3.868-0.514-7.842-1.564-11.6
                      c-2.174-7.522-6.604-14.416-13.309-18.792l-0.005-0.003l-0.825-0.434l0.002-0.901l0.059-31.845l0.165-31.846l0.245-31.845
                      c0.008-2.63,0.067-5.36,0.033-7.909c-0.147-2.505-1.177-4.943-2.711-6.996c-1.543-2.051-3.521-3.816-5.802-5.088
                      c-2.272-1.274-4.823-2.127-7.482-2.267c2.659-0.132,5.36,0.511,7.784,1.689c2.418,1.189,4.646,2.859,6.353,5.008
                      c1.707,2.13,2.938,4.74,3.204,7.547c0.073,0.736,0.056,1.373,0.07,2.041l0.026,1.99l0.053,3.98l0.423,31.844l0.343,31.844
                      l0.237,31.845l-0.823-1.335l0.006,0.003c4.195,1.617,7.936,4.482,10.812,7.987c2.903,3.499,5.025,7.605,6.349,11.922
                      c1.361,4.325,1.898,8.828,1.674,13.393c-0.278,4.607-1.59,9.099-3.706,13.117c-2.137,4.014-5.087,7.536-8.55,10.382
                      c-3.479,2.831-7.507,4.936-11.746,6.199c-4.253,1.224-8.705,1.623-13.015,1.124C95.179,193.191,91.031,191.868,87.252,189.971z"/>
                    <path style="fill:none;stroke:#7B8F9B;stroke-width:3;stroke-miterlimit:10;" d="M114.706,129.586V26.287
                      c0-8.121-6.585-14.705-14.705-14.705c-8.123,0-14.707,6.584-14.707,14.705v103.299c-10.641,5.381-17.942,16.408-17.942,29.147
                      c0,18.031,14.618,32.649,32.646,32.649c18.034,0,32.65-14.618,32.65-32.649C132.648,145.994,125.349,134.967,114.706,129.586z"/>
                    <circle style="fill:#BF0026;" cx="100" cy="158.439" r="27.578"/>
                    <path style="fill:none;stroke:#FFFFFF;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;" d="M77.725,163.117
                      c0.305,1.508,0.759,2.962,1.347,4.346"/>
                    <path style="fill:none;stroke:#FFFFFF;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;" d="M87.908,139.342
                      c-5.957,3.75-10.05,10.188-10.577,17.612"/>
                    <line style="fill:#FFFFFF;stroke:#5B5B5F;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" x1="112.202" y1="122.75" x2="102.147" y2="122.75"/>
                    <line style="fill:#FFFFFF;stroke:#5B5B5F;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" x1="112.202" y1="110.229" x2="102.147" y2="110.229"/>
                    <line style="fill:#FFFFFF;stroke:#5B5B5F;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" x1="112.202" y1="97.71" x2="102.147" y2="97.71"/>
                    <line style="fill:#FFFFFF;stroke:#5B5B5F;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" x1="112.202" y1="85.19" x2="102.147" y2="85.19"/>
                    <line style="fill:#FFFFFF;stroke:#5B5B5F;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" x1="112.202" y1="72.67" x2="98.738" y2="72.67"/>
                    <line style="fill:#FFFFFF;stroke:#5B5B5F;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" x1="112.202" y1="60.15" x2="102.147" y2="60.15"/>
                    <line style="fill:#FFFFFF;stroke:#5B5B5F;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" x1="112.202" y1="47.63" x2="102.147" y2="47.63"/>
                    <line style="fill:#FFFFFF;stroke:#5B5B5F;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" x1="112.202" y1="35.11" x2="102.147" y2="35.11"/>
                  </g>
                </svg>



<div class="animate-wrap">
  <svg class="svg-scalable" version="1.1" id="temperature-animate" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="200px" height="200px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
    <use class="bar-animate" xlink:href="#bar-animate" x="0" y="0"/>
    <use class="termometer" xlink:href="#termometer" x="0" y="0"/>
  </svg>
</div>
            <p>
               <form action="post.php" method="post">
                <input type="hidden" name="op" value="getmesure" >
                <input type="hidden" name="cni" value="cd586972" >
                <input type="submit" name="valider" class="btn btn-primary" value="Get" >
              </form>

            </p>

              </div>

              <div class="tab-pane fade py-6" id="v-pills-fitness" role="tabpanel" aria-labelledby="v-pills-fitness-tab">

              </div>

             
            

            </div>
          </div>
        </div>
      </div>
    </section>

   
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animte">
            <h2 class="mb-4">Some fun facts</h2>
            <span class="subheading">Far far away, behind the word mountains, far from the countries</span>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="60">0</strong>
		                <span>Hospital</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="200">0</strong>
		                <span>Doctors</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Clinics</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="200">0</strong>
		                <span>Reviews</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    
		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/heart.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">smart medical</h2>
              <p>everyone should have health care</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
              	<li><a href="#" class="py-2 d-block">Appointments</a></li>
                <li><a href="#" class="py-2 d-block">Our Specialties</a></li>
                <li><a href="#" class="py-2 d-block">Why Choose us</a></li>
                <li><a href="#" class="py-2 d-block">Our Services</a></li>
                <li><a href="#" class="py-2 d-block">health Tips</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Doctors</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View,Fes, Mar</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+212 2 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">ensaf@mail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">


          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Modal -->
    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel">Add/Mpdify</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#">
              <div class="form-group">
                <label for="appointment_name" class="text-black">Nom complet </label>
                <input type="text" class="form-control" id="appointment_name">
              </div>
              <div class="form-group">
                <label for="appointment_email" class="text-black">Email</label>
                <input type="text" class="form-control" id="appointment_email">
              </div>
              <div class="form-group">
                    <label for="appointment_date" class="text-black">Date de naissance</label>
                    <input type="text" class="form-control" id="appointment_date">
                  </div>    
                  <div class="form-group">
                    <label for="appointment_time" class="text-black">Taille</label>
                    <input type="text" class="form-control" id="appointment_time">
                  </div>
                  <div class="form-group">
                    <label for="appointment_date" class="text-black">Poids </label>
                    <input type="text" class="form-control" id="appointment_date">
                  </div>  
                  <div class="form-group">
                    <label for="appointment_date" class="text-black">Téléphone </label>
                    <input type="text" class="form-control" id="appointment_date">
                  </div> 
                  <div class="form-group">
                    <label for="appointment_date" class="text-black">Sexe </label>
                    <input type="text" class="form-control" id="appointment_date">
                  </div>    
                
                
                
               
              </div>
              

              <div class="form-group">
                <label for="appointment_message" class="text-black">Message</label>
                <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
              </div>
               <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <input type="submit" value="Appliquer" class="btn btn-primary">
                   </div>
                  </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <input type="submit" value="Annuler" class="btn btn-primary">
                   </div>
                  </div>


            </form>
          </div>
          
        </div>
      </div>
    </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
