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
                            <h6 class="m-0">Lihat Donasi</h6>
                            <!-- <a href="<?php echo base_url('donasi/edit');?>">
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
                            <div class="form-group">
                                <label class="col-md-12">Nama Donatur</label>
                                <!-- <div class="col-sm-12">
                                    <select class="form-control form-control-line" name="idDonatur" required disabled>
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
                                </div> -->
                                <div class="col-md-12">
                                    <input type="text" value="<?php echo $transaksi->nama;?>" class="form-control form-control-line" id="donaturs" name="donatur"
                                    disabled>
                                    <input type="hidden" value="<?php echo $transaksi->idDonatur;?>" class="form-control form-control-line" name="idDonatur">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Jenis Donatur</label>
                                <div class="col-sm-12">
                                    <select class="form-control form-control-line" name="jenisTransaksi" required disabled id="jenisDonatur">
                                        <?php if($transaksi->jenisTransaksi == 1){?>
                                        <option value="1" selected>Iuran</option>
                                        <option value="2">Sumbangan</option>
                                        <option value="3">Dan Lain-lain</option>
                                        <?php }elseif($transaksi->jenisTransaksi == 2){ ?>
                                        <option value="1">Iuran</option>
                                        <option value="2" selected>Sumbangan</option>
                                        <option value="3">Dan Lain-lain</option>
                                        <?php }else{ ?>
                                        <option value="1">Iuran</option>
                                        <option value="2">Sumbangan</option>
                                        <option value="3" selected>Dan Lain-lain</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label class="col-md-12">Bulan</label>
                                <div class="col-md-12">
                                    <select class="form-control form-control-line" name="month" required disabled>
                                        <?php 
                                            foreach ($bulan as $key => $value) {
                                                if($transaksi->month == $value->value){
                                        ?>  
                                        <option value="<?php echo $value->value;?>" selected><?php echo $value->name;?></option>
                                        <?php
                                                }else{
                                        ?>
                                        <option value="<?php echo $value->value;?>"><?php echo $value->name;?></option>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Tahun</label>
                                <div class="col-md-12">
                                    <input type="text" value="<?php echo $transaksi->year;?>" class="form-control form-control-line" name="year" disabled required>
                                </div>
                            </div> -->
                            <!-- <div class="form-group" id="month_year">
                                <label class="col-md-12">Bulan/Tahun</label>
                                <div class="col-md-12">
                                    <input type="text" value="<?php echo $transaksi->month . '/'. $transaksi->year;?>" class="form-control form-control-line" name="month_year" required id="datepicker1">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="col-md-12">Bank</label>
                                <div class="col-md-12">
                                    <input type="text" value="<?php echo $transaksi->bankDonatur;?>" class="form-control form-control-line" name="bankDonatur" required disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">No.Rekening Pengirim</label>
                                <div class="col-md-12">
                                    <input type="text" value="<?php echo $transaksi->noRekPengirim;?>" class="form-control form-control-line" name="noRekPengirim" required disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Nama Pengirim</label>
                                <div class="col-md-12">
                                    <input type="text" value="<?php echo $transaksi->namaPengirim;?>" class="form-control form-control-line" name="namaPengirim" required disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Bank Transfer Tujuan</label>
                                <div class="col-md-12">
                                    <input type="text" value="<?php echo $transaksi->bankTransferTujuan;?>" class="form-control form-control-line" name="bankTransferTujuan" required disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">No.Rekening Tujuan</label>
                                <div class="col-md-12">
                                    <input type="text" value="<?php echo $transaksi->noRekTujuan;?>" class="form-control form-control-line" name="noRekTujuan" required disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Nama Penerima</label>
                                <div class="col-md-12">
                                    <input type="text" value="<?php echo $transaksi->namaPenerima;?>" class="form-control form-control-line" name="namaPenerima" required disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Total Dana</label>
                                <div class="col-md-12">
                                    <input type="text" value="<?php echo $transaksi->jumlah;?>" class="form-control form-control-line" name="jumlah" required disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Tanggal Transfer</label>
                                <div class="col-md-12">
                                    <input type="text" value="<?php echo date('d/m/Y', strtotime($transaksi->transferDate));?>" class="form-control form-control-line" name="transferDate" required id="joinDate" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Bukti Bayar</label>
                                <div class="col-md-12">
                                    <img src="<?php echo base_url('gambar/' . $transaksi->buktiBayar);?>" style="margin: 10px 10px 13px 10px;width: 100px;height: 100px;">
                                    <input type="file" value="" class="form-control form-control-line" name="buktiBayar" required disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Keterangan</label>
                                <div class="col-md-12">
                                    <input type="text" value="<?php echo $transaksi->description;?>" class="form-control form-control-line" name="description" required disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <!-- <button class="btn btn-success" type="submit">Simpan</button> &nbsp; -->
                                    <a href="<?php echo base_url('transaksi_masuk/index');?>">
                                        <button class="btn btn-default" type="button">Kembali</button>
                                    </a>
                                </div>
                            </div>
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