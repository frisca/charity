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
                        <h3 class="text-themecolor m-b-0 m-t-0">Laporan Keluar</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Laporan Keluar</li>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title" style="margin-bottom: 25px;">Laporan Keluar</h4>
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
                                        <button type="submit" class="btn btn-primary search" style="margin-top: 50px;">Cari</button>
                                    </div>
                                </diV>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <table id="example" class="table table-striped table-bordered" style="margin-top: 30px;">
                                    <thead>
                                            <tr>
                                                <th>Nama Penerima Beasiswa</th>
                                                <th>Jenis Transaksi</th>
                                                <th>Total Dana</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($transaksi as $key=>$value){?>
                                            <tr>
                                                <td><?php echo $value->nama;?></td>
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
