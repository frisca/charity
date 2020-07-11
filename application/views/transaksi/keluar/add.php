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
                <h3 class="page-title">Giving</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
                <div class="col">
                    <div class="card card-small mb-4">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Ubah Giving</h6>
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