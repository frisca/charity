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
                        <h3 class="text-themecolor m-b-0 m-t-0">User</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">User</li>
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
                                <form class="form-horizontal form-material" method="post" action="<?php echo base_url('user/processEdit/' . $user->idUser);?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-sm-12">Role</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="role" required>
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

                                    <div class="form-group">
                                        <label class="col-md-12">Nama</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="nama" required 
                                            value="<?php echo $user->nama;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" class="form-control form-control-line" name="email" id="example-email" required
                                            value="<?php echo $user->email?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Username</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $user->username;?>" class="form-control form-control-line" name="username" required>
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
                                            <input type="text" value="<?php echo $user->phone;?>" class="form-control form-control-line" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tanggal Bergabung</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo date('d/m/Y', strtotime($user->joinDate));?>" class="form-control form-control-line" name="joinDate" id="joinDate" required>
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
                                            <textarea rows="5" class="form-control form-control-line" name="alamat" required><?php echo $user->alamat;?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Gambar Profil</label>
                                        <div class="col-md-12">
                                            <img src="<?php if(!empty($donatur->image)){ echo base_url('gambar/profile/' . $donatur->image); }else{ echo base_url('assets/images/users/9.jpg');}?>" style="margin: 10px 10px 13px 10px;width: 100px;height: 100px;">
                                            <input type="file" class="form-control form-control-line" name="userfile">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit">Simpan</button> &nbsp;
                                            <a href="<?php echo base_url('user/index');?>">
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
