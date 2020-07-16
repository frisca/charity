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
                <h3 class="page-title">User</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
                <div class="col">
                    <div class="card card-small mb-4">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Lihat User</h6>
                            <!-- <a href="<?php echo base_url('user/add');?>">
                                <button class="btn waves-effect waves-light btn-success pull-right hidden-sm-down" 
                                style="float:right;margin-top:-30px;"><i class="mdi mdi-plus"></i> Tambah</button>
                            </a> -->
                        </div>
                        <div class="card-body">                             
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Role</label>
                                <div class="col-sm-10">
                                    <select class="form-control form-control-line" name="role" required disabled>
                                        <option value="0">Pilih Role</option>
                                        <?php
                                            if(!empty($role)){
                                                foreach ($role as $key => $value) {
                                                    if($user->role == $value->id_role){
                                        ?>
                                        <option value="<?php echo $value->id_role;?>" selected><?php echo $value->role?></option>
                                        <?php
                                                    }else{
                                        ?>
                                        <option value="<?php echo $value->id_role;?>"><?php echo $value->role?></option>
                                        <?php
                                                    }
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-line" name="nama" required 
                                    value="<?php echo $user->nama;?>" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email" class="col-sm-2 col-form-label text-right">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control form-control-line" name="email" id="example-email" required
                                    value="<?php echo $user->email?>" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php echo $user->username;?>" class="form-control form-control-line" name="username" required disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label text-right">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" value="" class="form-control form-control-line" name="password" required disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">No. Handphone</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php echo $user->phone;?>" class="form-control form-control-line" name="phone" required disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Tanggal Bergabung</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php echo date('d/m/Y', strtotime($user->joinDate));?>" class="form-control form-control-line" name="joinDate" id="joinDate" required disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php echo date('d/m/Y', strtotime($donatur->birthDate));?>" class="form-control form-control-line" name="birthDate" id="birthDate" required disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <select class="form-control form-control-line" name="gender" required disabled>
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
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Angkatan</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php echo $donatur->angkatan;?>" class="form-control form-control-line" name="angkatan" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea rows="5" class="form-control form-control-line" name="alamat" required disabled><?php echo $user->alamat;?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Gambar Profil</label>
                                <div class="col-sm-2 col-form-label text-right">
                                    <img src="<?php if(!empty($donatur->image)){ echo base_url('gambar/profile/' . $donatur->image); }else{ echo base_url('assets/images/users/9.jpg');}?>" style="margin: 10px 10px 13px 10px;width: 100px;height: 100px;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <!-- <button class="btn btn-success" type="submit">Simpan</button> &nbsp; -->
                                    <a href="<?php echo base_url('user/index');?>">
                                        <button class="btn btn-default" style="float:right" type="button">Kembali</button>
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