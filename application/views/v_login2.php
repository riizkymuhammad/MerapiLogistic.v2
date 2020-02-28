<!DOCTYPE html>
<html lang="en">


     <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo base_url();?>assets/aset/img/logo5.png" type="image/png">
        <title>Merapi Logistic</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/aset/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/aset/vendors/linericon/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/aset/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/aset/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/aset/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/aset/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/aset/vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/aset/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/aset/css/responsive.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login/css/main.css">
<!--===============================================================================================-->

    </head>

  <body>

    <!-- Navigation -->
    <header class="header_area" style="background-color: #ffffff">
          
            <div class="main_menu">
              <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html"><img src="<?php echo base_url();?>assets/aset/img/logoMerapi.png" alt="" height="40" width="300"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">
                 <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url('home/index'); ?>">Home</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="<?php echo base_url('home/about'); ?>">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('home/formdonasi'); ?>">Donasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Login'); ?>">Login</a>
            </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
              </ul>
            </div> 
          </div>
              </nav>
            </div>
        </header>

   <body>
  
  <div class="limiter">

      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
        </div>

        <form class="login100-form validate-form" action="login/auth" method="post">
           <?php echo $this->session->flashdata('msg');?>
          <span class="login100-form-title">
            Staff Login
                 <img src="<?php echo base_url();?>assets/aset/img/logoMerapi.png" alt="" height="34" width="240">
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="username" placeholder="Email" id="username">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="password" placeholder="Password" id="password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn" style="background-color: #e54444">
              Login
            </button>
          </div>

         
        </form>
      </div>
    </div>
  </div>
  
  

  
<!--===============================================================================================-->  
  <script src="<?php echo base_url();?>assets/Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url();?>assets/Login/vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo base_url();?>assets/Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url();?>assets/Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url();?>assets/Login/vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="<?php echo base_url();?>assets/Login/js/main.js"></script>

</body>

             

 

       <script src="<?php echo base_url();?>assets/aset/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/aset/js/popper.js"></script>
        <script src="<?php echo base_url();?>assets/aset/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/aset/js/stellar.js"></script>
        <script src="<?php echo base_url();?>assets/aset/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="<?php echo base_url();?>assets/aset/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="<?php echo base_url();?>assets/aset/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo base_url();?>assets/aset/vendors/isotope/isotope-min.js"></script>
        <script src="<?php echo base_url();?>assets/aset/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url();?>assets/aset/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?php echo base_url();?>assets/aset/js/mail-script.js"></script>
        <script src="<?php echo base_url();?>assets/aset/js/theme.js"></script>

</html>


