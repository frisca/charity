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
                        <h3 class="text-themecolor m-b-0 m-t-0">Giving</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Donasi & Giving</li>
                            <li class="breadcrumb-item active">Giving</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <a href="<?php echo base_url('transaksi_keluar/add');?>">
                            <button class="btn waves-effect waves-light btn-success pull-right hidden-sm-down"><i class="mdi mdi-plus"></i> Tambah</button>
                        </a>
                    </div>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title" style="margin-bottom: 25px;">Daftar Giving</h4>
                                <?php if($this->session->flashdata('success') != ""){ ?>
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <?php echo $this->session->flashdata('success');?>
                                </div>  
                                <?php }else if($this->session->flashdata('error') != ""){ ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <?php echo $this->session->flashdata('error');?>
                                </div>  
                                <?php } ?> 
                                <!-- <div class="table-responsive"> -->
                                    <table id="example" class="table table-striped table-bordered" style="margin-top: 30px;">
                                        <thead>
                                            <tr>
                                                <th>Nama Penerima Beasiswa</th>
                                                <th>Jenis Giving</th>
                                                <th>Total Dana</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php foreach($transaksi as $key=>$value){?>
                                            <tr>
                                                <td><?php echo $value->penerimaBeasiswa;?></td>
                                                <td>
                                                    <?php 
                                                        if($value->jenisTransaksiKeluar == 1){ 
                                                            echo 'Beasiswa & Pendidikan';
                                                        }elseif($value->jenisTransaksiKeluar == 2){
                                                            echo 'Panti Asuhan';
                                                        }elseif($value->jenisTransaksiKeluar == 3){
                                                            echo 'Kegiatan Sosial';
                                                        }elseif($value->jenisTransaksiKeluar == 4){
                                                            echo 'Kemanusiaan';
                                                        }elseif($value->jenisTransaksiKeluar == 5){
                                                            echo 'Bencana Alam';
                                                        }else{
                                                            echo 'Hadiah & Apreasiasi';
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php echo $value->jumlah;?></td>
                                                <td>
                                                    <a href="<?php echo base_url('transaksi_keluar/views/' . $value->idTransaksiKeluar);?>">
                                                        <button class="btn btn-success"><i class="ti-search"></i></button>
                                                    </a>
                                                    <a href="<?php echo base_url('transaksi_keluar/edit/' . $value->idTransaksiKeluar);?>">
                                                        <button class="btn btn-warning"><i class="mdi mdi-border-color"></i></button>
                                                    </a>
                                                    <a href="<?php echo base_url('transaksi_keluar/delete/' . $value->idTransaksiKeluar);?>">
                                                        <button class="btn btn-danger"><i class="mdi mdi-beer"></i></button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php } ?>                                        
                                        </tbody>
                                    </table>
                                <!-- </div> -->
                            </div>
                        </div>
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
