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
                        <h3 class="text-themecolor m-b-0 m-t-0">Penerima Beasiswa</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Penerima Beasiswa</li>
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
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Nama</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $beasiswa->nama;?>" class="form-control form-control-line" name="nama" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Angkatan</label>
                                        <div class="col-md-12">
                                            <input type="angkatan" value="<?php echo $beasiswa->angkatan;?>" class="form-control form-control-line" name="angkatan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Jenjang Studi</label>
                                        <div class="col-md-12">
                                            <input type="angkatan" value="<?php echo $beasiswa->jenjang_studi;?>" class="form-control form-control-line" name="jenjang_studi" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Jenis Kelamin</label>
                                        <div class="col-sm-12">
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
                                    <div class="form-group">
                                        <label class="col-md-12">Alamat</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line" name="alamat" required><?php echo $beasiswa->alamat;?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tanggal Bergabung</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo date('d/m/Y', strtotime($beasiswa->tgl_bergabung));?>" class="form-control form-control-line" name="tgl_bergabung" id="joinDate" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tanggal Lahir</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo date('d/m/Y', strtotime($beasiswa->birth_date));?>"  class="form-control form-control-line" name="birth_date" id="birthDate" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Semester</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $beasiswa->semester;?>" class="form-control form-control-line" name="semester" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Anak ke</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $beasiswa->anak_ke;?>" class="form-control form-control-line" name="anak_ke" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Jumlah Saudara</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $beasiswa->jmlh_saudara;?>" class="form-control form-control-line" name="jmlh_saudara" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Ayah</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $beasiswa->nama_ayah;?>" class="form-control form-control-line" name="nama_ayah" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Pekerjaan Ayah</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $beasiswa->pekerjaan_ayah;?>" class="form-control form-control-line" name="pekerjaan_ayah" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Penghasilan Ayah</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $beasiswa->penghasilan_ayah;?>" class="form-control form-control-line" name="penghasilan_ayah" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Ibu</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $beasiswa->nama_ibu;?>" class="form-control form-control-line" name="nama_ibu" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Pekerjaan Ibu</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $beasiswa->pekerjaan_ibu;?>" class="form-control form-control-line" name="pekerjaan_ibu" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Penghasilan Ibu</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $beasiswa->penghasilan_ibu;?>" class="form-control form-control-line" name="penghasilan_ibu" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Rekening</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $beasiswa->rekening;?>" class="form-control form-control-line" name="rekening" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Status</label>
                                        <div class="col-sm-12">
                                            <?php if($beasiswa->status == 1){?>
                                            <option value="1" selected>Aktif</option>
                                            <option value="2">Tidak Aktif</option>
                                            <?php }else{ ?>
                                            <option value="1">Aktif</option>
                                            <option value="2" selected>Tidak Aktif</option>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Keterangan</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $beasiswa->keterangan;?>" class="form-control form-control-line" name="keterangan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <!-- <button class="btn btn-success" type="submit">Simpan</button> &nbsp; -->
                                            <a href="<?php echo base_url('penerima_beasiswa/index');?>">
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
