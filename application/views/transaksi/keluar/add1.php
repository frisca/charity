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
                        <div class="card">
                            <div class="card-block">
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
                                <form class="form-horizontal form-material" method="post" action="<?php echo base_url('transaksi_keluar/processAdd');?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12">Jenis Giving</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="jenisTransaksiKeluar" required>
                                               <option value="1">Beasiswa & Pendidikan</option>
                                               <option value="2">Panti Asuhan</option>
                                               <option value="3">Kegiatan Sosial</option>
                                               <option value="4">Kemanusiaan</option>
                                               <option value="5">Bencana Alam</option>
                                               <option value="6">Hadiah & Apreasiasi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Total Dana</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" class="form-control form-control-line" name="jumlah" required>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label class="col-md-12">Nama Penerima Beasiswa</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="id_beasiswa" required>
                                                <option value="">Pilih Nama Penerima Beasiswa</option>
                                                <?php
                                                    foreach ($beasiswa as $key => $value) {
                                                ?>
                                                <option value="<?php echo $value->id_beasiswa;?>"><?php echo $value->nama;?></option>
                                                <?php 
                                                    } 
                                                ?>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Penerima Beasiswa</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" class="form-control form-control-line" name="penerima_beasiswa" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tanggal Transfer</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" class="form-control form-control-line" name="tanggalTransaksi" required id="joinDate">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Keterangan</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" class="form-control form-control-line" name="keterangan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit">Simpan</button> &nbsp;
                                            <a href="<?php echo base_url('transaksi_keluar/index');?>">
                                                <button class="btn btn-default" type="button">Kembali</button>
                                            </a>
                                        </div>
                                    </div>
                                </form>
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
