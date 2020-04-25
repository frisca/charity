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
                        <h3 class="text-themecolor m-b-0 m-t-0">Transaksi Masuk</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Transaksi Masuk</li>
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
                                <form class="form-horizontal form-material" method="post" action="<?php echo base_url('transaksi_masuk/processUpdate/' . $transaksi->idTransaksiMasuk);?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Donatur</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="idDonatur" required>
                                                <?php
                                                    foreach ($donatur as $key => $value) {
                                                        if($value->idDonatur == $transaksi->idDonatur){
                                                ?>
                                                    <option value="<?php echo $value->idDonatur;?>" selected><?php echo $value->nama;?></option>
                                                <?php 
                                                        }else{
                                                ?>
                                                    <option value="<?php echo $value->idDonatur;?>"><?php echo $value->nama;?></option>
                                                <?php 
                                                        } 
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Total Dana</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $transaksi->jumlah;?>" class="form-control form-control-line" name="jumlah" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Deskripsi</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $transaksi->description;?>" class="form-control form-control-line" name="description" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Bank Transfer</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $transaksi->bankTransfer;?>" class="form-control form-control-line" name="bankTransfer" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tanggal Transfer</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo date('d/m/Y', strtotime($transaksi->transferDate));?>" class="form-control form-control-line" name="transferDate" required id="joinDate">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Jenis Transaksi</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $transaksi->jenisTransaksi;?>" class="form-control form-control-line" name="jenisTransaksi" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Bukti Bayar</label>
                                        <img src="<?php echo base_url('gambar/' . $transaksi->buktiBayar);?>" style="margin: 10px 10px 13px 10px;width: 100px;height: 100px;">
                                        <div class="col-md-12">
                                            <input type="file" value="" class="form-control form-control-line" name="buktiBayar">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit">Simpan</button> &nbsp;
                                            <a href="<?php echo base_url('transaksi_masuk/index');?>">
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
