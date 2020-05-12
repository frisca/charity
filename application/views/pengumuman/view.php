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
                        <h3 class="text-themecolor m-b-0 m-t-0">Pengumuman</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Pengumuman</li>
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
                                <form class="form-horizontal form-material" method="post" action="<?php echo base_url('pengumuman/processUpdate/' . $pengumuman->id_pengumuman);?>">
                                    <div class="form-group">
                                        <label class="col-md-12">Judul</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="judul" value="<?php echo $pengumuman->judul;?>" required disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Pengarang</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="pengarang" value="<?php echo $pengumuman->pengarang;?>" required disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tanggal</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="createdDate" id="joinDate" value="<?php echo date('d/m/Y', strtotime($pengumuman->createdDate));?>"required disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Isi</label>
                                        <div class="col-md-12">
                                            <textarea cols="80" id="edi" name="isi" rows="10" required disabled><?php echo $pengumuman->isi;?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Status</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="status" required disabled>
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
                                            <!-- <button class="btn btn-success" type="submit">Simpan</button> &nbsp; -->
                                            <a href="<?php echo base_url('pengumuman/index');?>">
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
