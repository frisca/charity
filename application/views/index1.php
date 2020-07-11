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
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-7" style="margin-top: 45px;">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3 class="card-title">Donasi & Giving</h3>
                                                <h6 class="card-subtitle">Donasi Vs Giving</h6> </div>
                                            <div class="ml-auto">
                                                <ul class="list-inline">
                                                    <li>
                                                        <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Donasi</h6> </li>
                                                    <li>
                                                        <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Giving</h6> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="amp-pxl" style="height: 360px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5" style="margin-top: 45px;">
                        <input type="hidden" name="laki-laki" id="man" value="<?php echo $man->count_gender;?>">
                        <input type="hidden" name="perempuan" id="woman" value="<?php echo $woman->count_gender;?>">
                        <div class="card">
                            <div class="card-block">
                                <h3 class="card-title">Jenis Kelamin </h3>
                                <h6 class="card-subtitle">Jumlah jenis kelamin yang terdaftar dalam sistem</h6>
                                <div id="visitor" style="height:290px; width:100%;"></div>
                            </div>
                            <div>
                                <hr class="m-t-0 m-b-0">
                            </div>
                            <div class="card-block text-center ">
                                <ul class="list-inline m-b-0">
                                    <li>
                                        <h6 class="text-muted text-info"><i class="fa fa-circle font-10 m-r-10 "></i>Laki-Laki</h6>
                                    </li>
                                    <li>
                                        <h6 class="text-muted  text-success"><i class="fa fa-circle font-10 m-r-10"></i>Perempuan</h6> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <h3 style="padding: 10px 12px 10px 5px;border-bottom: 1px solid rgba(0,0,0,.1);">Pengumuman</h3>
                                <?php 
                                    if(!empty($pengumuman)){
                                        foreach ($pengumuman as $key => $value) {
                                ?>
                                <div class="profiletimeline" style="margin-top: 30px;">
                                    <div class="sl-item">
                                        <div class="sl-left"> 
                                            <?php
                                                if(empty($value->image)){
                                            ?>
                                                <img src="<?php echo base_url('gambar/profile/default.png');?>" alt="user" class="img-circle">
                                            <?php
                                                }else{
                                            ?> 
                                                <img src="<?php echo base_url('gambar/profile/' . $value->image);?>" alt="user" class="img-circle">
                                            <?php
                                                }
                                            ?>
                                        </div>
                                        <div class="sl-right">
                                            <div>
                                                <a href="#" class="link">
                                                    <?php echo $value->nama;?>   
                                                </a>
                                            </div>
                                            <span class="sl-date">
                                                <?php echo date('d-m-Y', strtotime($value->createdDate));?>
                                            </span>
                                            <p>
                                                <a href="#"> <?php echo $value->judul;?></a>
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 m-b-20">
                                                    <?php echo $value->isi;?>
                                                </div>
                                            </div>
                                            <div class="like-comm"> 
                                                <a href="javascript:void(0)" class="link m-r-10"><?php echo (count($comments))?> comment</a> 
                                                    <!-- <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div> 
                                        <input type="text" name="comment" class="form-control comment" placeholder="Tulis Komentar" pengumumanid="<?php echo $value->id_pengumuman;?>">
                                    </div>
                                    <div class="comments">
                                        <?php
                                            if(!empty($comments)){
                                                foreach($comments as $keys=>$values){
                                                    if($value->id_pengumuman == $values->idPengumuman){
                                        ?>
                                        <div class="sl-item" style="margin-left:65px;margin-top:25px;">
                                            <div class="sl-left"> 
                                                <?php
                                                    if(empty($values->image)){
                                                ?>
                                                    <img src="<?php echo base_url('gambar/profile/default.png');?>" alt="user" class="img-circle">
                                                <?php
                                                    }else{
                                                ?> 
                                                    <img src="<?php echo base_url('gambar/profile/' . $values->image);?>" alt="user" class="img-circle">
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                            <div class="sl-right">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 m-b-20" style="padding:5px 5px 5px 5px;">
                                                        <?php echo $values->comment;?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                                    }
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                                <hr>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
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
