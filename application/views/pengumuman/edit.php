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
                <h3 class="page-title">Pengumuman</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
                <div class="col">
                    <div class="card card-small mb-4">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Ubah Pengumuman</h6>
                            <!-- <a href="<?php echo base_url('user/add');?>">
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
                            <form class="form-horizontal form-material" method="post" action="<?php echo base_url('pengumuman/processUpdate/' . $pengumuman->id_pengumuman);?>">
                                <div class="form-group">
                                    <label class="col-md-12">Judul</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="judul" value="<?php echo $pengumuman->judul;?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Pengarang</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="pengarang" value="<?php echo $pengumuman->pengarang;?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Tanggal</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="createdDate" id="joinDate" value="<?php echo date('d/m/Y', strtotime($pengumuman->createdDate));?>"required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Isi</label>
                                    <div class="col-md-12">
                                        <textarea cols="80" id="edi" name="isi" rows="10" required><?php echo $pengumuman->isi;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Status</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="status" required>
                                            <?php if($pengumuman->status == 1){?>
                                            <option value="1" selected>Aktif</option>
                                            <option value="2">Tidak Aktif</option>
                                            <?php }else{ ?>
                                            <option value="1">Aktif</option>
                                            <option value="2" selected>Tidak Aktif</option>
                                            <?php } ?>
                                        </div>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit">Simpan</button> &nbsp;
                                        <a href="<?php echo base_url('pengumuman/index');?>">
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