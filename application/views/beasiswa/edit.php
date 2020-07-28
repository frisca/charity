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
                <h3 class="page-title">Penerima Beasiswa</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
                <div class="col">
                    <div class="card card-small mb-4">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Ubah Penerima Beasiswa</h6>
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
                            <form class="form-horizontal form-material" method="post" action="<?php echo base_url('penerima_beasiswa/processUpdate/' . $beasiswa->id_beasiswa);?>">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label>Nama</label>
                                        <div class="input-group">
                                            <input type="text" value="<?php echo $beasiswa->nama;?>" class="form-control form-control-line" name="nama" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Tanggal Lahir</label>
                                        <div class="input-group">
                                            <input type="text" value="<?php echo date('d/m/Y', strtotime($beasiswa->birth_date));?>"  class="form-control form-control-line" name="birth_date" id="birthDate" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Jenis Kelamin</label>
                                        <div class="input-group">
                                            <select class="form-control form-control-line" name="gender" required>
                                                <?php if($beasiswa->gender == "Laki-laki"){?>
                                                <option value="Laki-laki" selected>Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                                <?php }else{ ?>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan" selected>Perempuan</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group col-sm-12">
                                        <label>Angkatan</label>
                                        <div class="input-group">
                                            <input type="angkatan" value="<?php echo $beasiswa->angkatan;?>" class="form-control form-control-line" name="angkatan" required>
                                        </div>
                                    </div> -->
                                    <div class="form-group col-sm-12">
                                        <label>Pendidikan</label>
                                        <div class="input-group">
                                            <input type="angkatan" value="<?php echo $beasiswa->jenjang_studi;?>" class="form-control form-control-line" name="jenjang_studi" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label>Alamat</label>
                                        <div class="input-group">
                                            <textarea rows="5" class="form-control form-control-line" name="alamat" required><?php echo $beasiswa->alamat;?></textarea>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group col-sm-12">
                                        <label>Tanggal Bergabung</label>
                                        <div class="input-group">
                                            <input type="text" value="<?php echo date('d/m/Y', strtotime($beasiswa->tgl_bergabung));?>" class="form-control form-control-line" name="tgl_bergabung" id="joinDate" required>
                                        </div>
                                    </div> -->
                                    <!-- <div class="form-group col-sm-12">
                                        <label>Semester</label>
                                        <div class="input-group">
                                            <input type="text" value="<?php echo $beasiswa->semester;?>" class="form-control form-control-line" name="semester" required>
                                        </div>
                                    </div> -->
                                    <div class="form-group col-sm-4">
                                        <label>Anak ke</label>
                                        <div class="input-group">
                                            <input type="text" value="<?php echo $beasiswa->anak_ke;?>" class="form-control form-control-line" name="anak_ke" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Jumlah Saudara</label>
                                        <div class="input-group">
                                            <input type="text" value="<?php echo $beasiswa->jmlh_saudara;?>" class="form-control form-control-line" name="jmlh_saudara" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Nama Ayah</label>
                                        <div class="input-group">
                                            <input type="text" value="<?php echo $beasiswa->nama_ayah;?>" class="form-control form-control-line" name="nama_ayah" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Pekerjaan Ayah</label>
                                        <div class="input-group">
                                            <input type="text" value="<?php echo $beasiswa->pekerjaan_ayah;?>" class="form-control form-control-line" name="pekerjaan_ayah" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Penghasilan Ayah</label>
                                        <div class="input-group">
                                            <input type="text" value="<?php echo $beasiswa->penghasilan_ayah;?>" class="form-control form-control-line" name="penghasilan_ayah" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Nama Ibu</label>
                                        <div class="input-group">
                                            <input type="text" value="<?php echo $beasiswa->nama_ibu;?>" class="form-control form-control-line" name="nama_ibu" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Pekerjaan Ibu</label>
                                        <div class="input-group">
                                            <input type="text" value="<?php echo $beasiswa->pekerjaan_ibu;?>" class="form-control form-control-line" name="pekerjaan_ibu" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Penghasilan Ibu</label>
                                        <div class="input-group">
                                            <input type="text" value="<?php echo $beasiswa->penghasilan_ibu;?>" class="form-control form-control-line" name="penghasilan_ibu" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>No. Rekening</label>
                                        <div class="input-group">
                                            <input type="text" value="<?php echo $beasiswa->rekening;?>" class="form-control form-control-line" name="rekening" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Status Pendidikan</label>
                                        <div class="input-group">
                                            <select class="form-control form-control-line" name="status" required>
                                            <?php if($beasiswa->status == 1){?>
                                            <option value="1" selected>Aktif</option>
                                            <option value="2">Tidak Aktif</option>
                                            <?php }else{ ?>
                                            <option value="1">Aktif</option>
                                            <option value="2" selected>Tidak Aktif</option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label>Keterangan</label>
                                        <div class="input-group">
                                            <input type="text" value="<?php echo $beasiswa->keterangan;?>" class="form-control form-control-line" name="keterangan" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12">
                                    <a href="<?php echo base_url('penerima_beasiswa/index');?>">
                                        <button class="btn btn-default" style="float:right" type="button">Kembali</button>
                                        </a>
                                        <button class="btn btn-success" style="float:right" type="submit">Simpan</button> &nbsp;
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