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
                    <?php 
                        if(!empty($email)){
                    ?>
                    <div class="col-md-12">
                        <div class="card-body pt-0">
                            <div class="card border shadow-none">
                                <div class="inbox-center table-responsive">
                                    <table class="table table-hover no-wrap">
                                        <tbody>
                                            <?php
                                                foreach ($email as $key => $value) {
                                                    if($value->status == 0){
                                            ?>
                                                    <tr class="unread">
                                                        <td class="hidden-xs-down">
                                                            <a href="<?php echo base_url('email/views/' . $value->idEmail);?>"><b><?php echo $value->fromUser;?></b></a>
                                                        </td>
                                                        <td class="max-texts"> 
                                                            <a href="<?php echo base_url('email/views/' . $value->idEmail);?>">
                                                                <b><span class="badge badge-info mr-2"><?php echo $value->judul;?></span></b>
                                                            </a>
                                                        </td>
                                                        <td class="text-right">
                                                            <a href="<?php echo base_url('email/views/' . $value->idEmail);?>">
                                                                <b><?php echo date('d/m/Y', strtotime($value->dateEmail))?></b>
                                                            </a>
                                                        </td>
                                                    </tr>
                                            <?php 
                                                    }else{
                                            ?>
                                                    <tr class="unread">
                                                        <td class="hidden-xs-down">
                                                            <a href="<?php echo base_url('email/views/' . $value->idEmail);?>"><?php echo $value->fromUser;?></a>
                                                        </td>
                                                        <td class="max-texts"> 
                                                            <a href="<?php echo base_url('email/views/' . $value->idEmail);?>">
                                                                <span class="badge badge-info mr-2"><?php echo $value->judul;?></span>
                                                            </a>
                                                        </td>
                                                        <td class="text-right">
                                                            <a href="<?php echo base_url('email/views/' . $value->idEmail);?>">
                                                                <?php echo date('d/m/Y', strtotime($value->dateEmail))?>
                                                            </a>
                                                        </td>
                                                    </tr>
                                            <?php
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
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
