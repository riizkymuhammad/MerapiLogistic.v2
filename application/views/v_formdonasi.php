<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

     <link rel="icon" href="<?php echo base_url();?>assets/aset/img/logo5.png" type="image/png">
        <title>Merapi Logistic</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>assets/css/clean-blog.min.css" rel="stylesheet">

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


</head>

<body>

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

  <!-- Page Header -->
  <header class="masthead" style="background-color: transparent; " )">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h2>Form Donatur</h2>
             <img src="<?php echo base_url();?>assets/aset/img/logoMerapi.png" alt="" height="34" width="240">
             <br>
             <br>
             <br>
            <!-- Menampilkan Error jika validasi tidak valid -->
            <div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>

            <?php echo form_open("gambar/tambah", array('enctype'=>'multipart/form-data')); ?>
            <table cellpadding="12" >
              <tr>
               <td >Nama</td>
               <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>"></td>
             </tr>
             <tr>
               <td >No Hp</td>
               <td><input type="text" name="input_nohp" value="<?php echo set_value('input_nohp'); ?>"></td>
             </tr>
             <tr>
               <td >Alamat</td>
               <td><input type="text" name="input_alamat" value="<?php echo set_value('input_alamat'); ?>"></td>
             </tr>
             <tr>
               <td >Nominal Transfer</td>
               <td><input type="text" name="input_nominal" value="<?php echo set_value('input_nominal'); ?>"></td>
             </tr>
             <tr>
               <td >Gambar</td>
               <td><input type="file" name="input_gambar"></td>
             </tr>
           </table>

           <hr>
           <input type="submit" name="submit" value="Simpan" style="background-color: #e54444">
           <a href="<?php echo base_url(); ?>"><input type="button" value="Batal" style="background-color: #e54444"></a>
           <?php echo form_close(); ?>


         </div>
       </div>
     </div>
   </div>
 </header>

 <!-- Main Content -->

 <hr>

 <!-- Footer -->
 <footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <ul class="list-inline text-center">
          <li class="list-inline-item">
            <a href="#">
              <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-github fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
        </ul>
        <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php echo base_url();?>assets/js/clean-blog.min.js"></script>


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

</body>

</html>






