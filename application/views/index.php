<?php $this->load->view('header');?>
  <body class="h-100">
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <?php $this->load->view('menu');?>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <?php $this->load->view('navbar_header');?>
          </div>
          <div class="main-content-container container">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Home</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <!-- Slide Show -->
              <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                <div id="demo" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                  </ul>
                  
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="<?php echo base_url('assets/images/la.jpg');?>" alt="Los Angeles" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                      <img src="<?php echo base_url('assets/images/chicago.jpg');?>" alt="Chicago" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                      <img src="<?php echo base_url('assets/images/ny.jpg');?>" alt="New York" width="1100" height="500">
                    </div>
                  </div>
                  
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                </div>
              </div>
              <!-- End Slide Show -->

              <!-- About IA Del Charity -->
              <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                <div class="card card-small blog-comments">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Tentang IADEL Charity</h6>
                  </div>
                  <div style="padding: 18px 20px 20px 15px;font-size: 1;text-align: justify;font-size: 15px;">
                    Del adalah sebuah institusi akademik yang didirikan dengan visi menciptakan para agen perubahan yang membawa kebaikan di setiap lingkungan dimanapun berada. Sejak meluluskan generasi pertama di tahun 2004, ketika itu Del masih berbentuk Politeknik, keberadaan para lulusan menjadi penjabat di berbagai posisi pekerjaan baik dalam institusi pemerintahan dan swasta, merupakan indikator ketercapaian cita-cita pendiri Del.
                    </div>
                    <div style="padding: 18px 20px 20px 15px;font-size: 1;text-align: justify;font-size: 15px;">
                    Alumni Del tidak berhenti sampai pada titik tersebut. Dalam perjalanannya dengan kapasitas yang semakin besar seiring perjalanan waktu, sebagai dampak bertambahnya jumlah lulusan yang berkerja dan berkarya, para alumni merasakan dan menyadari bahwa baiklah bila keberadaannya dapat berdampak langsung bagi lingkungan. Alumni memilih untuk bisa memberi lebih lagi dalam bidang sosial, menyatakan kepedulian terhadap lingkungan. Dengan pengalaman dididik di lingkungan tepian Danau Toba dengan kondisi masyarakat yang secara garis besar termasuk pada golongan masyarakat kurang mampu, Alumni memilih untuk terlebih dahulu dapat berdampak bagi lingkungan kampusnya dan lingkungan tinggalnya.
                    </div>
                    <div style="padding: 18px 20px 20px 15px;font-size: 1;text-align: justify;font-size: 15px;">
                    Berbagai kegiatan telah dilakukan, menggalang dana untuk membantu anak sekolah di daerah Tapanuli, menggalang dana untuk beasiswa para mahasiswa aktif di Del, program donor darah, program pengadaan buku untuk kampus, dan beberapa kegiatan sosial lainnya. Kegiatan tersebut menggambarkan begitu besarnya kerinduan para alumni yang sudah terlebih dahulu merasakan berbagai kebaikan yang diperoleh dari institusi Del, untuk bisa kembali berbagi kebaikan-kebaikan yang diperoleh kepada lingkungan.
                    </div>
                    <div style="padding: 18px 20px 20px 15px;font-size: 1;text-align: justify;font-size: 15px;">
                    Suatu kerinduan untuk dapat membuat kegiatan yang berkelanjutan dan berkesinambungan dan terkoordinir dengan baik, sehingga semakin memperbesar dampak keberadaan alumni di lingkungan, membawa beberapa anggota alumni kepada suatu gagasan untuk membentuk sebuah komunitas. Komunitas tersebut nantinya akan menjadi komunitas yang bekerjasama dengan ikatan alumni dan bahkan akan berada di bawah payung Departemen Sosial Ikatan Alumni Del.
                    </div>
                </div>
              </div>
              <!-- About IA Del Charity -->

              <!-- Discussions Component -->
              <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                <div class="card card-small blog-comments">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Pengumuman</h6>
                  </div>
                  <div class="card-body p-0">
                    <?php 
                        if(!empty($pengumuman)){
                            foreach ($pengumuman as $key => $value) {
                    ?>
                    <div class="blog-comments__item d-flex p-3">
                        <div class="blog-comments__avatar mr-3">
                            <!-- <img src="images/avatars/1.jpg" alt="User avatar" />  -->
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
                        <div class="blog-comments__content">
                            <div class="blog-comments__meta text-muted">
                            <a class="text-secondary" href="#"><?php echo $value->nama;?></a>
                            <span class="text-muted">– <?php echo date('d-m-Y', strtotime($value->createdDate));?></span>
                            </div>
                            <p class="m-0 my-1 mb-2 text-muted"><?php echo $value->isi;?></p>
                            <div class="like-comm"> 
                                <a href="javascript:void(0)" class="link m-r-10"><?php echo $value->count_comment;?> comment</a> 
                                    <!-- <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div> -->
                            </div>
                            <hr>
                            <div style="width:1000px;"> 
                                <input type="text" name="comment" class="form-control comment" placeholder="Tulis Komentar" pengumumanid="<?php echo $value->id_pengumuman;?>"
                                style="margin-bottom:10px;">
                            </div>
                            <div class="comments">
                              <?php
                                  if(!empty($comments)){
                                      foreach($comments as $keys=>$values){
                                          if($value->id_pengumuman == $values->idPengumuman){
                              ?>
                              <div class="blog-comments__item d-flex p-3" style="width:1000px;">
                                <div class="blog-comments__avatar mr-3">
                                    <!-- <img src="images/avatars/1.jpg" alt="User avatar" />  -->
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
                                <div class="blog-comments__content">
                                    <div class="blog-comments__meta text-muted">
                                    <a class="text-secondary" href="#"><?php echo $values->nama;?></a>
                                    </div>
                                    <p class="m-0 my-1 mb-2 text-muted"><?php echo $values->comment;?></p>
                                </div>
                              </div>
                              <?php 
                                    }
                                  }
                                }  
                              ?>
                            </div>
                        </div>
                    </div>
                    <?php   
                            }
                        }
                    ?>
                    </div>
                    <div class="card-footer border-top">
                        <div class="row">
                            <div class="col text-center view-report">
                                <!-- <button type="submit" class="btn btn-white">View All Comments</button> -->
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <!-- End Discussions Component -->
            </div>
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
<script type="text/javascript">
  // boolean outputs "" if false, "1" if true
      var donasi = JSON.parse('<?php echo json_encode($donasi); ?>');
      var giving = JSON.parse('<?php echo json_encode($giving); ?>');
      var man = <?php echo $man->count_gender;?>;
      var woman = <?php echo $woman->count_gender;?>;
      console.log('man: ' + man + ' woman: ' + woman);
  </script>