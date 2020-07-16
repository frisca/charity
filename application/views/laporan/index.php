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
                <h3 class="page-title">Analytics</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <!-- Users Stats -->
              <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
                <div class="card card-small">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Donasi vs Giving</h6>
                  </div>
                  <div class="card-body pt-0">
                    <!-- <div class="row border-bottom py-2 bg-light">
                      <div class="col-12 col-sm-6">
                        <div id="blog-overview-date-range" class="input-daterange input-group input-group-sm my-auto ml-auto mr-auto ml-sm-auto mr-sm-0" style="max-width: 350px;">
                          <input type="text" class="input-sm form-control" name="start" placeholder="Start Date" id="blog-overview-date-range-1">
                          <input type="text" class="input-sm form-control" name="end" placeholder="End Date" id="blog-overview-date-range-2">
                          <span class="input-group-append">
                            <span class="input-group-text">
                              <i class="material-icons"></i>
                            </span>
                          </span>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 d-flex mb-2 mb-sm-0">
                        <button type="button" class="btn btn-sm btn-white ml-auto mr-auto ml-sm-auto mr-sm-0 mt-3 mt-sm-0">View Full Report &rarr;</button>
                      </div>
                    </div> -->
                    <canvas height="130" style="max-width: 100% !important;" class="blog-overview-users"></canvas>
                  </div>
                </div>
              </div>
              <!-- End Users Stats -->
              <!-- Users By Device Stats -->
              <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card card-small h-100">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Jenis Kelamin</h6>
                  </div>
                  <div class="card-body d-flex py-0">
                    <canvas height="220" class="blog-users-by-device m-auto"></canvas>
                  </div>
                  <!-- <div class="card-footer border-top">
                    <div class="row">
                      <div class="col">
                        <select class="custom-select custom-select-sm" style="max-width: 130px;">
                          <option selected>Last Week</option>
                          <option value="1">Today</option>
                          <option value="2">Last Month</option>
                          <option value="3">Last Year</option>
                        </select>
                      </div>
                      <div class="col text-right view-report">
                        <a href="#">Full report &rarr;</a>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
              <!-- End Users By Device Stats -->
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
                                <a href="javascript:void(0)" class="link m-r-10"><?php echo (count($comments))?> comment</a> 
                                    <!-- <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div> -->
                            </div>
                            <hr>
                            <div> 
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