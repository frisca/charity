<?php $this->load->view('header');?>
  <body class="h-100">
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <?php $this->load->view('menu');?>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <?php $this->load->view('navbar_header');?>
          </div>
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Donasi</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
                <div class="col">
                    <div class="card card-small mb-4">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Tambah Donasi</h6>
                            <!-- <a href="<?php echo base_url('donasi/add');?>">
                                <button class="btn waves-effect waves-light btn-success pull-right hidden-sm-down" 
                                style="float:right;margin-top:-30px;"><i class="mdi mdi-plus"></i> Tambah</button>
                            </a> -->
                        </div>
                        <div class="card-body">
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
                            <form class="form-horizontal form-material" method="post" action="<?php echo base_url('transaksi_masuk/processAdd');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-md-12">Nama Donatur</label>
                                    <!-- <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="idDonatur" required>
                                            <option value="">Pilih Nama Donatur</option>
                                            <?php
                                                foreach ($donatur as $key => $value) {
                                            ?>
                                            <option value="<?php echo $value->idDonatur;?>"><?php echo $value->nama;?></option>
                                            <?php 
                                                } 
                                            ?>
                                        </select>
                                    </div> -->
                                    <div class="col-md-12">
                                        <input type="text" value="" class="form-control form-control-line" id="donaturs" name="donatur"
                                        required>
                                        <input type="hidden" value="" class="form-control form-control-line" name="idDonatur">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Jenis Donatur</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="jenisTransaksi" required id="jenisDonatur">
                                            <option value="1">Iuran</option>
                                            <option value="2">Sumbangan</option>
                                            <option value="3">Dan Lain-lain</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label class="col-md-12">Bulan</label>
                                    <div class="col-md-12">
                                        <select class="form-control form-control-line" name="month" required>
                                            <?php 
                                                foreach ($bulan as $key => $value) {
                                            ?>  
                                            <option value="<?php echo $value->value;?>"><?php echo $value->name;?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div> -->
                                <!-- <div class="form-group" id="month_year">
                                    <label class="col-md-12">Bulan/Tahun</label>
                                    <div class="col-md-12">
                                        <input type="text" value="" class="form-control form-control-line" id="datepicker1" name="month_year">
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <label class="col-md-12">Bank</label>
                                    <div class="col-md-12">
                                        <input type="text" value="" class="form-control form-control-line" name="bankDonatur" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">No.Rekening Pengirim</label>
                                    <div class="col-md-12">
                                        <input type="text" value="" class="form-control form-control-line" name="noRekPengirim" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Nama Pengirim</label>
                                    <div class="col-md-12">
                                        <input type="text" value="" class="form-control form-control-line" name="namaPengirim" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Bank Transfer Tujuan</label>
                                    <div class="col-md-12">
                                        <input type="text" value="" class="form-control form-control-line" name="bankTransferTujuan" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">No.Rekening Tujuan</label>
                                    <div class="col-md-12">
                                        <input type="text" value="" class="form-control form-control-line" name="noRekTujuan" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Nama Penerima</label>
                                    <div class="col-md-12">
                                        <input type="text" value="" class="form-control form-control-line" name="namaPenerima" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Total Dana</label>
                                    <div class="col-md-12">
                                        <input type="text" value="" class="form-control form-control-line" name="jumlah" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Tanggal Transfer</label>
                                    <div class="col-md-12">
                                        <input type="text" value="" class="form-control form-control-line" name="transferDate" required id="joinDate">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Bukti Bayar</label>
                                    <div class="col-md-12">
                                        <input type="file" value="" class="form-control form-control-line" name="buktiBayar" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Keterangan</label>
                                    <div class="col-md-12">
                                        <input type="text" value="" class="form-control form-control-line" name="description" required>
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
            </div>
            <!-- End Default Light Table -->
            </div>
            <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
                <!-- <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                </ul> -->
                <span class="copyright ml-auto my-auto mr-2">Copyright © 2018
                <a href="https://designrevision.com" rel="nofollow">DesignRevision</a>
                </span>
            </footer>
        </main>
      </div>
    </div>
<?php $this->load->view('script_footer');?>