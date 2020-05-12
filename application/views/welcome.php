<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/favicon.png');?>">
    <title>Charity</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo base_url('assets/plugins/chartist-js/dist/chartist.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/plugins/chartist-js/dist/chartist-init.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css');?>" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="<?php echo base_url('assets/plugins/c3-master/c3.min.css');?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/plugins/css/style.css');?>" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url('assets/plugins/css/colors/blue.css" id="theme');?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url('assets/images/logo-light-icon.png');?>" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         
                         <!-- Light Logo text -->    
                         <img src="<?php echo base_url('assets/images/logo-light-text.png');?>" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <!-- <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li> -->
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url('assets/images/users/1.jpg');?>" alt="user" class="profile-pic m-r-10" />Markarn Doe</a>
                            <a href="">Login</a>
                        </li> -->
                        <li class="nav-item"> 
                            <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="<?php echo base_url('login/index');?>"> <i class="mdi mdi-login"></i> Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="margin-left: 0px;">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-md-7" style="margin-top: 45px;">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3 class="card-title">Donasi & Giving</h3>
                                                <h6 class="card-subtitle">Donasi Vs Giving</h6> </div>
                                            <div class="ml-auto">
                                                <ul class="list-inline">
                                                    <li>
                                                        <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Donasi</h6> </li>
                                                    <li>
                                                        <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Giving</h6> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="amp-pxl" style="height: 360px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5" style="margin-top: 45px;">
                        <input type="hidden" name="laki-laki" id="man" value="<?php echo $man->count_gender;?>">
                        <input type="hidden" name="perempuan" id="woman" value="<?php echo $woman->count_gender;?>">
                        <div class="card">
                            <div class="card-block">
                                <h3 class="card-title">Jenis Kelamin </h3>
                                <h6 class="card-subtitle">Jumlah jenis kelamin yang terdaftar dalam sistem</h6>
                                <div id="visitor" style="height:290px; width:100%;"></div>
                            </div>
                            <div>
                                <hr class="m-t-0 m-b-0">
                            </div>
                            <div class="card-block text-center ">
                                <ul class="list-inline m-b-0">
                                    <li>
                                        <h6 class="text-muted text-info"><i class="fa fa-circle font-10 m-r-10 "></i>Laki-Laki</h6>
                                    </li>
                                    <li>
                                        <h6 class="text-muted  text-success"><i class="fa fa-circle font-10 m-r-10"></i>Perempuan</h6> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <h3 style="padding: 10px 12px 10px 5px;border-bottom: 1px solid rgba(0,0,0,.1);">Pengumuman</h3>
                                <div class="profiletimeline" style="margin-top: 30px;">
                                    <?php 
                                        if(!empty($pengumuman)){
                                            foreach ($pengumuman as $key => $value) {
                                    ?>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="<?php echo base_url('assets/images/users/1.jpg');?>" alt="user" class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div>
                                                <a href="#" class="link">
                                                    <?php echo $value->nama;?>   
                                                </a>
                                            </div>
                                            <span class="sl-date">
                                                <?php echo date('d-m-Y', strtotime($value->createdDate));?>
                                            </span>
                                            <p>
                                                <a href="#"> <?php echo $value->judul;?></a>
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 m-b-20">
                                                    <?php echo $value->isi;?>
                                                </div>
                                            </div>
                                            <div class="like-comm"> 
                                                <a href="javascript:void(0)" class="link m-r-10"><?php echo (count($pengumuman))?> comment</a> 
                                                    <!-- <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <?php
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer" style="text-align: center;left: 0px;"> © 2017 Material Pro Admin by wrappixel.com </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js');?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/tether.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url('assets/plugins/js/jquery.slimscroll.js');?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('assets/plugins/js/waves.js');?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('assets/plugins/js/sidebarmenu.js');?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js');?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/plugins/js/custom.min.js');?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="<?php echo base_url('assets/plugins/chartist-js/dist/chartist.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js');?>"></script>
    <!--c3 JavaScript -->
    <script src="<?php echo base_url('assets/plugins/d3/d3.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/c3-master/c3.min.js');?>"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url('assets/plugins/js/dashboard1.js');?>"></script>
    <script type="text/javascript">
    // boolean outputs "" if false, "1" if true
    var donasi = JSON.parse('<?php echo json_encode($donasi); ?>');
    var giving = JSON.parse('<?php echo json_encode($giving); ?>');
    </script>
</body>

</html>
