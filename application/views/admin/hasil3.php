<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Merapi Logistik - Sistem Informasi Donasi dan Logistik</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('../ci_login/assets/dashboard/css/bootstrap.min.css');?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('../ci_login/assets/dashboard/css/animate.min.css');?>" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url('../ci_login/assets/dashboard/css/paper-dashboard.css');?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('../ci_login/assets/dashboard/css/demo.css');?>" rel="stylesheet" />




    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('../ci_login/assets/dashboard/css/themify-icons.css');?>" rel="stylesheet">

    <script src="<?php echo base_url('../ci_login/assets/js/Chart.bundle.js');?>"></script>
    <script src="<?php echo base_url('../ci_login/assets/js/Chart.bundle.min.js');?>"></script>
    <script src="<?php echo base_url('../ci_login/assets/js/Chart.js');?>"></script>
    <script src="<?php echo base_url('../ci_login/assets/js/Chart.min.js');?>"></script>


    <link rel="icon" type="image/png" sizes="200x200" href="<?php echo base_url('../ci_login/assets/aset/img/logo5.png');?>">

           

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href=" " class="simple-text">
                <img style="width: 150px;max-height: 100px;" src="<?php echo base_url('../ci_login/assets/aset/img/logoMerapi.png');?>">
                </a>
            </div>

            <ul class="nav">
                <li class="active" style="color: #e54444">
                    <a href="index">
                        <i class="ti-view-list-alt" style="color: #e54444"></i>
                        <p>List Relawan</p>
                    </a>
                </li>
                <li>
                    <a href="pengajuan">
                        <i class="ti-receipt" style="color: #e54444"></i>
                        <p>Data Pengajuan</p>
                    </a>
                </li>
                <li>
                    <a href="donasi2">
                        <i class="ti-money" style="color: #e54444"></i>
                        <p>Donasi</p>
                    </a>
                </li>
                  <li>
                    <a href="donasi2">
                        <i class="ti-check" style="color: #e54444"></i>
                        <p>Hitung Pengiriman</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-user"></i>
                                <p><?php echo $this->session->userdata('ses_nama'); ?></p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/login/logout'?>">
                                <i class="ti-settings"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>



        <div class="content">
            <div class="container-fluid">
                <div class="row">

                   <?php  


    if ($_SERVER['REQUEST_METHOD'] =='POST') {
            $p = trim($_POST['p']);
            $s = trim($_POST['s']);
            
            echo "Data yang Anda kirimkan: <br><br>";
            echo "p : $p <br>";
            echo "s : $s <br><br>";
                
    }

    //µ
    $korbanNaik = ($p - 2000) / 3000;
    $korbanTurun = (5000 - $p) / 3000;

    $stokBanyak = ($s - 1000) / 5000;
    $stokSedikit = (6000 - $s) / 5000;

    //Aturan 1
    $a1 = min($korbanTurun, $stokBanyak);
    $z1 = 5000 - (4000 * $a1);

    //Aturan 2
    $a2 = min($korbanNaik, $stokSedikit);
    $z2 = (4000 * $a2) + 1000;

    //Aturan 3
    $a3 = min($korbanNaik, $stokBanyak);
    $z3 = (4000 * $a3) + 1000;

    //Aturan 4
    $a4 = min($korbanTurun, $stokSedikit);
    $z4 = 5000 - (4000 * $a4);

    //Defuzzy
    $d = (($a1 * $z1) + ($a2 * $z2) + ($a3 * $z3) + ($a4 * $z4)) / ($a1 + $a2 + $a3 + $a4);  
    $d = (int) $d;

    echo "µkn : $korbanNaik <br>";
    echo "µkt : $korbanTurun <br>";
    echo "µsb : $stokBanyak <br>";
    echo "µss : $stokSedikit <br><br>";

    echo "a1 : $a1 <br>";
    echo "z1 : $z1 <br>";
    echo "a2 : $a2 <br>";
    echo "z2 : $z2 <br>";
    echo "a3 : $a3 <br>";
    echo "z3 : $z3 <br>";
    echo "a4 : $a4 <br>";
    echo "z4 : $z4 <br><br>";

    echo "Hasil : <b>$d<b> <br><br>";

?>


                            </div>
                        </div>
                    </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> by <a href="">SIDIL</a>
                </div>
            </div>
        </footer>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url('../ci_login/assets/dashboard/js/jquery-1.10.2.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('../ci_login/assets/dashboard/js/bootstrap.min.js');?>" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url('../ci_login/assets/dashboard/js/bootstrap-checkbox-radio.js');?>"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url('../ci_login/assets/dashboard/js/chartist.min.js');?>" type="text/javascript"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('../ci_login/assets/dashboard/js/bootstrap-notify.js');?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url('../ci_login/assets/dashboard/js/paper-dashboard.js');?>"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url('../ci_login/assets/dashboard/js/demo.js');?>"></script>

    <script type="text/javascript" >
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                message: "Selamat Datang di <b>Merpai Logistik</b> - ."

            },{
                type: 'success',
                timer: 4000
            });

        });
    </script>


</html>
