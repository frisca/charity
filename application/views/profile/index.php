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
                <h3 class="page-title">Profil</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-block">
                        <center class="m-t-30"> <img src="<?php if(empty($donatur->image)){echo base_url('assets/images/users/9.jpg');}else{ echo base_url('gambar/profile/' . $donatur->image);}?>" class="img-circle" width="150" />
                            <h4 class="card-title m-t-10"><?php echo $profile->nama;?></h4>
                            <!--  <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                            </div> -->
                        </center>
                    </div>
                </div>
            </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Detail Profil</h6>
                    </div>
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
                            <form class="form-horizontal form-material" method="post" action="<?php echo base_url('profile/processUpdate');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-md-12">Nama</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="nama" required 
                                        value="<?php echo $profile->nama;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" class="form-control form-control-line" name="email" id="example-email" required
                                        value="<?php echo $profile->email?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Username</label>
                                    <div class="col-md-12">
                                        <input type="text" value="<?php echo $profile->username;?>" class="form-control form-control-line" name="username" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-12">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" value="" class="form-control form-control-line" name="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">No. Handphone</label>
                                    <div class="col-md-12">
                                        <input type="text" value="<?php echo $profile->phone;?>" class="form-control form-control-line" name="phone" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Tanggal Bergabung</label>
                                    <div class="col-md-12">
                                        <input type="text" value="<?php echo date('d/m/Y', strtotime($profile->joinDate));?>" class="form-control form-control-line" name="joinDate" id="joinDate" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Tanggal Lahir</label>
                                    <div class="col-md-12">
                                        <input type="text" value="<?php echo date('d/m/Y', strtotime($donatur->birthDate));?>" class="form-control form-control-line" name="birthDate" id="birthDate" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Jenis Kelamin</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="gender" required>
                                            <?php if($donatur->gender == "Laki-laki"){?>
                                            <option value="Laki-laki" selected>Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                            <?php }else{ ?>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan" selected>Perempuan</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Angkatan</label>
                                    <div class="col-md-12">
                                        <input type="text" value="<?php echo $donatur->angkatan;?>" class="form-control form-control-line" name="angkatan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Alamat</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line" name="alamat" required><?php echo $profile->alamat;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Gambar Profil</label>
                                    <div class="col-md-12">
                                        <input type="file" class="form-control form-control-line" name="userfile">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Ubah Profil</button>
                                    </div>
                                </div>
                            </form>
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