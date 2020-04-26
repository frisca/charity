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
                        <h3 class="text-themecolor m-b-0 m-t-0">Pembayaran</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Pembayaran</li>
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
                                <form class="form-horizontal form-material" method="post" action="<?php echo base_url('konfirmasi_pembayaran/processUpdate/' . $konfirmasi_pembayaran->idTransaksiMasuk);?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12">Jenis Transaksi</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="jenisTransaksi" required>
                                                <?php if($konfirmasi_pembayaran->jenisTransaksi == 1){?>
                                                <option value="1" selected>Iuran</option>
                                                <option value="2">Sumbangan</option>
                                                <option value="3">Dan Lain-lain</option>
                                                <?php }elseif($konfirmasi_pembayaran->jenisTransaksi == 2){ ?>
                                                <option value="1">Iuran</option>
                                                <option value="2" selected>Sumbangan</option>
                                                <option value="3">Dan Lain-lain</option>
                                                <?php }else{ ?>
                                                <option value="1">Iuran</option>
                                                <option value="2">Sumbangan</option>
                                                <option value="3" selected>Dan Lain-lain</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Bulan</label>
                                        <div class="col-md-12">
                                            <select class="form-control form-control-line" name="month" required>
                                                <?php 
                                                    foreach ($bulan as $key => $value) {
                                                        if($konfirmasi_pembayaran->month == $value->value){
                                                ?>  
                                                <option value="<?php echo $value->value;?>" selected><?php echo $value->name;?></option>
                                                <?php
                                                        }else{
                                                ?>
                                                <option value="<?php echo $value->value;?>"><?php echo $value->name;?></option>
                                                <?php
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Bank Donatur</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $konfirmasi_pembayaran->bankDonatur;?>" class="form-control form-control-line" name="bankDonatur" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">No.Rekening Pengirim</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $konfirmasi_pembayaran->noRekPengirim;?>" class="form-control form-control-line" name="noRekPengirim">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Pengirim</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $konfirmasi_pembayaran->namaPengirim;?>" class="form-control form-control-line" name="namaPengirim" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Bank Transfer Tujuan</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $konfirmasi_pembayaran->bankTransferTujuan;?>" class="form-control form-control-line" name="bankTransferTujuan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">No.Rekening Tujuan</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $konfirmasi_pembayaran->noRekTujuan;?>" class="form-control form-control-line" name="noRekTujuan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Penerima</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $konfirmasi_pembayaran->namaPenerima;?>" class="form-control form-control-line" name="namaPenerima" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Total Dana</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $konfirmasi_pembayaran->jumlah;?>" class="form-control form-control-line" name="jumlah" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tanggal Transfer</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo date('d/m/Y', strtotime($konfirmasi_pembayaran->transferDate));?>" class="form-control form-control-line" name="transferDate" required id="joinDate">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Bukti Bayar</label>
                                        <div class="col-md-12">
                                            <img src="<?php echo base_url('gambar/' . $konfirmasi_pembayaran->buktiBayar);?>" style="margin: 10px 10px 13px 10px;width: 100px;height: 100px;">
                                            <input type="file" value="" class="form-control form-control-line" name="buktiBayar">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Keterangan</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $konfirmasi_pembayaran->description;?>" class="form-control form-control-line" name="description" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit">Simpan</button> &nbsp;
                                            <a href="<?php echo base_url('konfirmasi_pembayaran/index');?>">
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
