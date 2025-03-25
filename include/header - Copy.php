<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>cabeloclinic</title>

    <!--favicon icon-->
    <link rel="icon" href="images/favicon.png">

    <!-- font awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- flaticon css -->
    <link rel="stylesheet" href="css/flaticon.css">

    <!--bootstrap min css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--jquery-ui css-->
    <link rel="stylesheet" href="css/jquery-ui.min.css">

    <!--menuzord css-->
    <link rel="stylesheet" href="css/menuzord.css">

    <!--animate css-->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/animate.css">

    <!--owl.carousel css-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!--nice-select css-->
    <link rel="stylesheet" href="css/nice-select.css">

    <!--venobox css-->
    <link rel="stylesheet" href="css/venobox.css">

    <!-- global style css -->
    <link rel="stylesheet" href="css/global-style.css">

    <!-- style css -->
    <link rel="stylesheet" href="style.css">
  	<!-- custom  css -->
	<link rel="stylesheet" href="custom.css">


    <!-- color css -->
    <link rel="stylesheet" href="css/colors/color-1.css">

    <!--responsive css-->
    <link rel="stylesheet" href="css/responsive.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

<script>
    $(document).ready(function(){
       $("#hpmodel").modal('show');
   });
</script>

<!-- Modal  new orange color-->
<div class="modal fade " id="hpmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
	  <button type="button" class="close p-0 m-0  p-2 text-success" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
     <!-- <div class="modal-header p-0 m-0">
      <button type="button" class="close p-0 m-0  p-2 text-white bg-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>-->
       <!-- form card cc payment -->
            <div class="card card-outline-secondary" style="background:#BFF2F5;">
              <div class="card-body">
                <h5 class="text-center">I'd like to book an</h5>
				<h4 class="text-center font-weight-bold">APPOINTMENT</h4>
                <hr>
               
			   <!-- form card cc payment -->
                <form autocomplete="off" class="form" role="form">
                  <div class="form-group my-0 py-0">
                   <input class="form-control" id="cc_name" pattern="\w+ \w+.*" required="required" placeholder="Enter Your Name* " title="Enter Your Name" type="text">
                  </div>
				  
				  <div class="d-flex">
				<label class="radio-inline " style="padding-left:0px;"><span style="font-size:20px;"> Gender: </span></label>
				
				<label class="radio-inline d-flex align-items-center" style="width: 83px;"><input type="radio" name="gender" id="inlineRadio1" value="Male" class="m-0 "> Male </label>
				<label class="radio-inline d-flex align-items-center" style="width: 83px;"><input type="radio" name="gender" id="inlineRadio1" value="Male" class="m-0 "> Female </label>
				</div>
                  
				  <div class=" row">
                   <div class="col-md-6 my-0">
                       <div class="form-group   my-1">
                   <input autocomplete="off" class="form-control" maxlength="20" pattern="\d{16}" required="" title="Enter  Number"  placeholder="Enter  Number" type="number">
                  </div>
                    </div>
					
					<div class="col-md-6 my-0">
                       <div class="form-group my-1">
                    <input autocomplete="off" class="form-control" maxlength="20" pattern="\d{16}" required="" title="Enter  Email" placeholder="Enter  Email" type="Email">
                  </div>
                    </div>
					
                  </div>
				  
				   <div class="form-group ">
                    <select class="form-control w-100 my-2" name="cc_exp_yr" size="0">
                        <option selected="">Select Category</option>
                     
                       <option value="Skin Care">Skin Care</option>
                       <option value="Hair Care">Hair Care</option>
                      
					   </select>
				  </div>
				  
				  <div class="form-group">
                    <select class="form-control w-100 my-2" name="cc_exp_yr" size="0">
                       <option value="" disable="" selected="">Select Services</option>
					   <option value="Hair Fall">Hair Fall</option>
					   <option value="Hair Transplant">Hair Transplant</option>
					   <option value="Laser Hair Reduction">Laser Hair Reduction</option>
					   <option value="Skin Lightning">Skin Lightning</option>
					   <option value="Medical Facial / HydraFacial">Medical Facial / HydraFacial</option>
					   <option value="Anti Ageing">Anti Ageing</option>
					   <option value="Pigmentation Treatment">Pigmentation Treatment</option>
					   <option value="Acne Treatment">Acne Treatment</option>
					   <option value="Scar Revision">Scar Revision</option>
					   <option value="Stretch Marks">Stretch Marks</option>
					   <option value="Tattoo Removal">Tattoo Removal</option>
					   
					</select>
				  </div>
				  
				  <div class="form-group">
                    <select class="form-control w-100 my-2" name="cc_exp_yr" size="0">
                       <option value="" disable="" selected="">Select City</option>
					   <option value="Kota">Kota</option>
					   <option value="Jaipur">Jaipur</option>
					   <option value="Udaipur">Udaipur</option>
					   <option value="Jodhpur">Jodhpur</option>
					   <option value="Bikaner">Bikaner</option>
					   </select>
				  </div>
				  
                <button type="submit" class="btn btn-success w-100"> Make Appointment</button>
                 
				 </form>
              </div>
            </div>
			<!-- /form card cc payment -->
      <div class="modal-footer p-2 m-0 text-white">
        Connecting...
      </div>
    </div>
  </div>
</div>


    <!-- search-modal -->
    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <img src="images/search-popup-logo.png" alt="search-popup-logo">
                <form action="#" class="form-inline">
                    <input type="text" name="search" placeholder="Search here...">
                    <button><i class="fa fa-search"></i></button>
                </form>
                <div class="quick-search">
                    <h6 class="color-ff pos-relative ptb-30 text-dark">Quick search</h6>
                    <ul>
                        <li><a href="#" class="text-dark">Hair Transplant </a></li>
                        <li><a href="#" class="text-dark">Hair Fall Solution </a></li>
                        <li><a href="#" class="text-dark">Laser Hair Reduction </a></li>
                        <li><a href="#" class="text-dark">Skin Lightning </a></li>
                        <li><a href="#" class="text-dark">Offer </a></li>
                        <li><a href="#" class="text-dark">Feedback </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


 <!-- ======================================= 
        ==Start Header section==  
    =======================================-->
    <div class="header-top">
        <!--<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="opening-time text-left"><i class="fa fa-clock-o color-d5"></i> <span>Opening Hour: Mon - Fri : 09:00 - 18:00</span> </div>
                </div>

                <div class="col-md-6">
                    <div class="contact-mail text-right"> <a href="#"><i class="fa fa-envelope color-d5"></i><span>cabelokota@gmail.com</span></a> <span>/</span> <a href="tel:7300460006"><i class="fa fa-phone color-d5"></i>7300460006</a> </div>
                </div>
            </div>
        </div>-->
    </div>

     <header class="beauty-header" id="beauty-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="menuzord" class="menuzord">
                        <a href="index.php" class="menuzord-brand custom-logo"><img id="logo" src="images/logo.png" alt="logo" style="width:164px"></a>
                    
					  <ul class="menuzord-menu menuzord-right">
                            <li><a href="index.php" title="Home">Home</a></li>
							<li><a href="gallery.php" title="Gellery">Gellery</a></li>
							<li><a href="Franchise.php" title="Franchise">Franchise</a></li>
								<li><a href="Careers.php" title="Careers">Careers</a></li>
                            <li><a href="our_services.php" title="Service">Service</a></li>
                            
                         <!-- <li><a href="booking.php" title="Booking">Booking</a></li>
                           <li><a href="blogs.php" title="Blog">Blog</a></li>-->
                          <li><a href="contact.php" title="Contact">Contact</a></li>
                           
                        </ul>
                        <button type="button" id="search-button" data-toggle="modal" data-target="#search-modal"><i class="fa fa-search"></i></button>
					
					<!--dekstop search btn code start-->
					<div class="search-home-btn">
					<form action="#" class="form-inline mt-4 d-flex">
                    <input type="text" name="search" placeholder="Search here..." >
                    <button type="search" class="btn btn-info"><i class="fa fa-search"></i></button>
                </form>
				</div>
				<!--dekstop search btn code close-->
					
				
                    <!--/#menuzord-->
                </div>
                <!--/col-md-12-->
            </div>
        </div>
		
		</div>
		
		
		<div class="container-fluid p-0">
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#BFF2F5;">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown position-static">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown" style="
              border-top-left-radius: 0;
              border-top-right-radius: 0;
            ">
         <div class="container">
                    <div class="row my-4">
                     
                     
                      <div class="col-md-6 col-xl-3 mb-3 mb-md-0">
                        <div class="list-group list-group-flush">
                          <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                            Iste quaerato
                          </p>
                          <a href="" class="list-group-item list-group-item-action"> <i class="fa fa-caret-right pe-2"></i> Cras justo odio</a>
                          <a href="" class="list-group-item list-group-item-action"> <i class="fa fa-caret-right pe-2"></i> Est iure</a>
                          <a href="" class="list-group-item list-group-item-action"> <i class="fa fa-caret-right pe-2"></i> Praesentium</a>
                          <a href="" class="list-group-item list-group-item-action"> <i class="fa fa-caret-right pe-2"></i> Laboriosam</a>
                          <a href="" class="list-group-item list-group-item-action"> <i class="fa  fa-caret-right pe-2"></i> Dolor sit</a>
                          <a href="" class="list-group-item list-group-item-action"> <i class="fa fa-caret-right pe-2"></i> Amet consectetur</a>
                          <a href="" class="list-group-item list-group-item-action"> <i class="fa fa-caret-right pe-2"></i> Cras justo odio</a>
                          <a href="" class="list-group-item list-group-item-action"> <i class="fa fa-caret-right pe-2"></i> Adipiscing elit</a>
                        </div>
                      </div>
                      
					  
					   <div class="col-md-6 col-xl-9 mb-3 mb-xl-0">
					   <div class="row">
					  
					  <div class="col-6 col-lg-3  mb-3 mb-xl-0">
                        <div class="pt-2">
                          <p class="text-uppercase font-weight-bold">
                            Explicabo voluptas
                          </p>
                          <div class="bg-image hover-overlay shadow-1-strong rounded ripple mb-4" data-mdb-ripple-color="light">
                            <img src="images/services/Laser_Hair.jpg" class="img-fluid">
                            <a href="#!">
                            
                            </a>
                          </div>
                         </div>
						</div>
						
						
						  <div class="col-6  col-lg-3  mb-3 mb-xl-0">
                        <div class="pt-2">
                          <p class="text-uppercase font-weight-bold">
                            Explicabo voluptas
                          </p>
                          <div class="bg-image hover-overlay shadow-1-strong rounded ripple mb-4" data-mdb-ripple-color="light">
                            <img src="images/services/Laser_Hair.jpg" class="img-fluid">
                            <a href="#!">
                            
                            </a>
                          </div>
                         </div>
						</div>
						
						  <div class="col-6 col-lg-3 mb-3 mb-xl-0">
                        <div class="pt-2">
                          <p class="text-uppercase font-weight-bold">
                            Explicabo voluptas
                          </p>
                          <div class="bg-image hover-overlay shadow-1-strong rounded ripple mb-4" data-mdb-ripple-color="light">
                            <img src="images/services/Laser_Hair.jpg" class="img-fluid">
                            <a href="#!">
                            
                            </a>
                          </div>
                         </div>
						</div>
						
						  <div class="col-6  col-lg-3  mb-3 mb-xl-0">
                        <div class="pt-2">
                          <p class="text-uppercase font-weight-bold">
                            Explicabo voluptas
                          </p>
                          <div class="bg-image hover-overlay shadow-1-strong rounded ripple mb-4" data-mdb-ripple-color="light">
                            <img src="images/services/Laser_Hair.jpg" class="img-fluid">
                            <a href="#!">
                            
                            </a>
                          </div>
                         </div>
						</div>
						
						 <div class="col-6 col-lg-3  mb-3 mb-xl-0">
                        <div class="pt-2">
                          <p class="text-uppercase font-weight-bold">
                            Explicabo voluptas
                          </p>
                          <div class="bg-image hover-overlay shadow-1-strong rounded ripple mb-4" data-mdb-ripple-color="light">
                            <img src="images/services/Laser_Hair.jpg" class="img-fluid">
                            <a href="#!">
                            
                            </a>
                          </div>
                         </div>
						</div>
						
						
						
						
						
                      </div>
					  </div>
					  
					  

					  
                    </div>
                  </div>
        </div>
      </li>
      
    </ul>
   
  </div>
</nav>
		</div>
		
		
		
    </header>
	
	
    <!-- ======================================= 
        ==End Header section==  
    =======================================-->
