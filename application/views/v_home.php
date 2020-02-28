<!--  -->
<?php
extract($_POST);
$con=mysqli_connect('localhost','root','','donasi');
?>
<!doctype html>
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
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
          
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
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
          <div class="banner_content text-center">
            <h5>Berbagi kepada sesama adalah kesenangan sejati</h5>
            <h3>Mereka Menunggu</h3>
            <p>Mereka bukan kehilangan keberuntungan tapi sedang dicoba oleh Yang Maha Kuasa.</p>
            <a class="main_btn" href="<?php echo base_url('home/formdonasi'); ?>">Donasi Sekarang</a>
          </div>
        </div>
            </div>
            <div class="donation_area">
        <div class="container">
          <div class="row donation_inner">
            <div class="col-lg-4">
              <div class="dontation_item yellow">
                <div class="media">
                  <div class="media-body">
                    <h4>Donasi</h4>
                    <p>Donasi yang telah terkumpul sampai saat ini.</p>
                  </div>
                  <div class="d-flex">
                    <h3>3000</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="dontation_item pink">
                <div class="media">
                  <div class="media-body">
                    <h4>Tersalurkan</h4>
                    <p>Donasi yang yang sudah disalurkan ke korban bencana.</p>
                  </div>
                  <div class="d-flex">
                    <h3>2910</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="dontation_item green">
                <div class="media">
                  <div class="media-body">
                    <h4>Orang Baik</h4>
                    <p>Orang yang mungkin berdompet kecil tapi berhati besar.</p>
                  </div>
                  <div class="d-flex">
                    <h3>2500</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Welcome Area =================-->
        <section class="welcome_area p_120">
          <div class="container">
            <div class="row welcome_inner">
              <div class="col-lg-6">
                <div class="welcome_text">
                  <h4>Selamat Datang di Merapi Logistic</h4>
                  <p>Terkadang donasi yang diberikan tidak sesuai dengan yang dibutuhkan. Kami hadir untuk meminimalisirkan hal tersebut. Merapi Logistic dengan teknologi SCPK mampu membagi bantuan secara efektif dan efisien.</p>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="wel_item">
                        <i class="lnr lnr-database"></i>
                        <h4>3000</h4>
                        <p>Donasi</p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="wel_item">
                        <i class="lnr lnr-book"></i>
                        <h4>2910</h4>
                        <p>Tersalurkan</p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="wel_item">
                        <i class="lnr lnr-users"></i>
                        <h4>2500</h4>
                        <p>Orang Baik</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="welcome_img">
                  <img class="img-fluid" src="<?php echo base_url();?>assets/aset/img/welcome-img.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--================End Welcome Area =================-->
        
        <!--================Causes Area =================-->

        <!--================End Causes Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
          <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
          <div class="container">
            <div class="white_title">
              <h2>Keunggulan Kami</h2>
              <p>Menggunakan Sistem Cerdas dan Pendukung Keputusan.</p>
            </div>
            <div class="row feature_inner">
              <div class="col-lg-4">
                <div class="feature_item">
                  <i class="lnr lnr-diamond"></i>
                  <h4>Sponsorship</h4>
                  <p>The French Revolutioncons tituted for the conscience of the dominant. aristocr atic class a fall from.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="feature_item">
                  <i class="lnr lnr-coffee-cup"></i>
                  <h4>Donate Amount</h4>
                  <p>The French Revolutioncons tituted for the conscience of the dominant. aristocr atic class a fall from.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="feature_item">
                  <i class="lnr lnr-wheelchair"></i>
                  <h4>Become a Volunteer</h4>
                  <p>The French Revolutioncons tituted for the conscience of the dominant. aristocr atic class a fall from.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--================End Feature Area =================-->
        
        <!--================Event Area =================-->
        <section class="event_area p_120">
          <div class="container">
            <div class="main_title">
              <h2>Upcoming Events</h2>
              <p>If you are a serious astronomy fanatic like a lot of us are, you can probably <br /> remember that one event in childhood that started.</p>
            </div>
            <div class="event_slider owl-carousel">
              <div class="item">
                <div class="event_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/event/event-1.jpg" alt="">
                    </div>
                    <div class="media-body">
                      <a href="#">25th February, 2017</a>
                      <a href="event-details.html"><h4>The Universe Through A Child S Eyes</h4></a>
                      <p>For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="event_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/event/event-2.jpg" alt="">
                    </div>
                    <div class="media-body">
                      <a href="#">25th February, 2017</a>
                      <a href="event-details.html"><h4>The Universe Through A Child S Eyes</h4></a>
                      <p>For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="event_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/event/event-1.jpg" alt="">
                    </div>
                    <div class="media-body">
                      <a href="#">25th February, 2017</a>
                      <a href="#"><h4>The Universe Through A Child S Eyes</h4></a>
                      <p>For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="event_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/event/event-2.jpg" alt="">
                    </div>
                    <div class="media-body">
                      <a href="#">25th February, 2017</a>
                      <a href="#"><h4>The Universe Through A Child S Eyes</h4></a>
                      <p>For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="event_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/event/event-1.jpg" alt="">
                    </div>
                    <div class="media-body">
                      <a href="#">25th February, 2017</a>
                      <a href="event-details.html"><h4>The Universe Through A Child S Eyes</h4></a>
                      <p>For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="event_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/event/event-2.jpg" alt="">
                    </div>
                    <div class="media-body">
                      <a href="#">25th February, 2017</a>
                      <a href="#"><h4>The Universe Through A Child S Eyes</h4></a>
                      <p>For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--================End Event Area =================-->
        
        <!--================Testimonials Area =================-->

        <!--================End Testimonials Area =================-->
        
        <!--================Clients Logo Area =================-->
 
        <!--================End Clients Logo Area =================-->
        
        
        <!--================ start footer Area  =================-->  
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Agency</h6>
                            <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Navigation Links</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Feature</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul class="list">
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>                    
                            </div>              
                        </div>
                    </div>              
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>   
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>   
                                    </div>                  
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">InstaFeed</h6>
                            <ul class="list instafeed d-flex flex-wrap">
                                <li><img src="<?php echo base_url();?>assets/aset/img/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="<?php echo base_url();?>assets/aset/img/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="<?php echo base_url();?>assets/aset/img/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="<?php echo base_url();?>assets/aset/img/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="<?php echo base_url();?>assets/aset/img/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="<?php echo base_url();?>assets/aset/img/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="<?php echo base_url();?>assets/aset/img/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="<?php echo base_url();?>assets/aset/img/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>            
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-md-4 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    <!--================ End footer Area  =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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