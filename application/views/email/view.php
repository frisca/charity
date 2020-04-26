<?php $this->load->view('script_header')?>
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
        <?php $this->load->view('header');?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php $this->load->view('menu');?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Email</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Email</li>
                        </ol>
                    </div>
                    <!-- <div class="col-md-7 col-4 align-self-center">
                        <a href="<?php echo base_url('admin/add');?>">
                            <button class="btn waves-effect waves-light btn-success pull-right hidden-sm-down"><i class="mdi mdi-plus"></i> Tambah</button>
                        </a>
                    </div> -->
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-12">
                        <div class="card-body pt-0">
                            <div class="card border shadow-none">
                                <div class="card-body">
                                    <h3 class="card-title" style="margin: 10px 0px 10px 20px;"><?php echo $email->judul;?></h3>
                                </div>
                                <div>
                                    <hr class="mt-0">
                                </div>
                                <div class="card-body">
                                    <div class="d-flex" style="margin: 10px 10px 19px 20px;">
                                        <div>
                                            <a href="javascript:void(0)"><img src="<?php echo base_url('assets/images/users/9.jpg');?>" alt="user" width="40" class="rounded-circle"></a>
                                        </div>
                                        <div class="pl-2">
                                            <h4 class="mb-0"><?php echo $email->fromUser?></h4>
                                            <small class="text-muted">From: admin@gmail.com</small>
                                        </div>
                                    </div>
                                    <div style="margin: 10px 10px 10px 25px;">
                                    <p><b>Dear <?php echo $email->nama;?></b></p>
                                    <?php echo $email->message;?>
                                    </div>
                                </div>
                                <!-- <div>
                                    <hr class="mt-0">
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <!-- <button class="btn btn-success" type="submit">Simpan</button> &nbsp; -->
                        <a href="<?php echo base_url('email/index');?>">
                            <button class="btn btn-default" type="button" style="background: #fff;">Kembali</button>
                        </a>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
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
            <?php $this->load->view('footer');?>
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
<?php $this->load->view('script_footer');?>
