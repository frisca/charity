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
                <h3 class="page-title">Laporan Giving</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
                <div class="col">
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
                    <div class="card card-small mb-4">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Daftar Laporan Giving</h6>
                            <!-- <a href="<?php echo base_url('pengumuman/add');?>">
                                <button class="btn waves-effect waves-light btn-success pull-right hidden-sm-down" 
                                style="float:right;margin-top:-30px;"><i class="mdi mdi-plus"></i> Tambah</button>
                            </a> -->
                            <form method="post" action="<?php echo base_url('laporan_keluar/search/');?>">
                            <diV class="row form-material">
                                <div class="col-md-5">
                                    <label class="mt-3">Dari Tanggal</label>
                                    <input type="text" class="form-control" id="startDate" name="startDate">
                                </div>
                                <div class="col-md-5">
                                    <label class="mt-3">Sampai Tanggal</label>
                                    <input class="form-control" id="endDate" name="endDate" type="text">
                                </div>
                                <div class="col-md-2">
                                    <label class="mt-3"></label>
                                    <button type="submit" class="btn btn-primary search" style="margin-top: 42px;">Cari</button>
                                </div>
                            </diV>
                            </form>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="margin-top: 42px;">
                            <thead>
                                <tr>
                                    <th>Nama Penerima Beasiswa</th>
                                    <th>Jenis Giving</th>
                                    <th>Total Dana</th>
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
                                </tr>
                            <?php } ?>                                       
                        </tbody>
                            </table>
                            <div>
                                <label class="mt-3" style="font-weight: bold;">
                                    Total : 
                                    <?php 
                                        if(empty($total->total)){
                                            echo 0;
                                        }else{
                                            echo $total->total;
                                        }
                                    ?>
                                </label>
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