<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>SIDIL - Sistem Informasi Donasi dan Logistik</title>

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


    <link rel="icon" type="image/png" sizes="200x200" href="<?php echo base_url('../ci_login/assets/logo/VOLEM2.png');?>">



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
                <img style="width: 42px;max-height: 42px;" src="<?php echo base_url('../ci_login/assets/logo/VOLEM3.png');?>">
                ADMIN
            </a>
        </div>

        <ul class="nav">
            <li class="active">
                <a href="<?php echo base_url('admin/index'); ?>">
                    <i class="ti-view-list-alt"></i>
                    <p>Ubah Data</p>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/pengajuan'); ?>">
                    <i class="ti-receipt"></i>
                    <p>Data Pengajuan</p>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/donasi2'); ?>">
                    <i class="ti-money"></i>
                    <p>Donasi</p>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Ubah Data </h4>
                        </div>

                        <div class="content">

                         <?php echo form_open("admin/addrelawan"); ?>
                         <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text"  class="form-control border-input" name="input_nama" value="<?php echo set_value('input_nama'); ?>"required>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No Hp</label>
                                    <input type="text"  class="form-control border-input" name="input_nohp" value="<?php echo set_value('input_nohp'); ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                   <textarea name="input_alamat" class="form-control border-input" required ><?php echo set_value('input_alamat'); ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text"  class="form-control border-input" name="input_username" value="<?php echo set_value('input_username'); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control border-input" name="input_password" value="<?php echo set_value('input_password'); ?>" required>
                                </div>
                            </div>

                            <tr>
                                <td><input type="hidden" name="input_level" value="2"></td>
                            </tr>
                        </div>
                        <div class="text-center">          
                            <input type="submit" name="submit" value="Simpan">
                            <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>

                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
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


</html>
