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
                        <h3 class="text-themecolor m-b-0 m-t-0">Donasi</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Donasi & Giving</li>
                            <li class="breadcrumb-item active">Donasi</li>
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
                                        <label class="col-md-12">Nama Donatur</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="idDonatur" required disabled>
                                                <?php
                                                    foreach ($donatur as $key => $value) {
                                                        if($value->idDonatur == $transaksi->idDonatur){
                                                ?>
                                                    <option value="<?php echo $value->idDonatur;?>" selected><?php echo $value->nama;?></option>
                                                <?php 
                                                        }else{
                                                ?>
                                                    <option value="<?php echo $value->idDonatur;?>"><?php echo $value->nama;?></option>
                                                <?php 
                                                        } 
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Jenis Donatur</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="jenisTransaksi" required disabled id="jenisDonatur">
                                                <?php if($transaksi->jenisTransaksi == 1){?>
                                                <option value="1" selected>Iuran</option>
                                                <option value="2">Sumbangan</option>
                                                <option value="3">Dan Lain-lain</option>
                                                <?php }elseif($transaksi->jenisTransaksi == 2){ ?>
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
                                    <!-- <div class="form-group">
                                        <label class="col-md-12">Bulan</label>
                                        <div class="col-md-12">
                                            <select class="form-control form-control-line" name="month" required disabled>
                                                <?php 
                                                    foreach ($bulan as $key => $value) {
                                                        if($transaksi->month == $value->value){
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
                                        <label class="col-md-12">Tahun</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $transaksi->year;?>" class="form-control form-control-line" name="year" disabled required>
                                        </div>
                                    </div> -->
                                    <div class="form-group" id="month_year">
                                        <label class="col-md-12">Bulan/Tahun</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $transaksi->month . '/'. $transaksi->year;?>" class="form-control form-control-line" name="month_year" required id="datepicker1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Bank</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $transaksi->bankDonatur;?>" class="form-control form-control-line" name="bankDonatur" required disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">No.Rekening Pengirim</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $transaksi->noRekPengirim;?>" class="form-control form-control-line" name="noRekPengirim" required disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Pengirim</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $transaksi->namaPengirim;?>" class="form-control form-control-line" name="namaPengirim" required disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Bank Transfer Tujuan</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $transaksi->bankTransferTujuan;?>" class="form-control form-control-line" name="bankTransferTujuan" required disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">No.Rekening Tujuan</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $transaksi->noRekTujuan;?>" class="form-control form-control-line" name="noRekTujuan" required disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Penerima</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $transaksi->namaPenerima;?>" class="form-control form-control-line" name="namaPenerima" required disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Total Dana</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $transaksi->jumlah;?>" class="form-control form-control-line" name="jumlah" required disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tanggal Transfer</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo date('d/m/Y', strtotime($transaksi->transferDate));?>" class="form-control form-control-line" name="transferDate" required id="joinDate" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Bukti Bayar</label>
                                        <div class="col-md-12">
                                            <img src="<?php echo base_url('gambar/' . $transaksi->buktiBayar);?>" style="margin: 10px 10px 13px 10px;width: 100px;height: 100px;">
                                            <input type="file" value="" class="form-control form-control-line" name="buktiBayar" required disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Keterangan</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $transaksi->description;?>" class="form-control form-control-line" name="description" required disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <!-- <button class="btn btn-success" type="submit">Simpan</button> &nbsp; -->
                                            <a href="<?php echo base_url('transaksi_masuk/index');?>">
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
