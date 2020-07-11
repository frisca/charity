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
                <h3 class="page-title">Pengumuman</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
                <div class="col">
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
                    <div class="card card-small mb-4">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Daftar Pengumuman</h6>
                            <?php if($this->session->userdata('role') == 1){?>
                            <a href="<?php echo base_url('pengumuman/add');?>">
                                <button class="btn waves-effect waves-light btn-success pull-right hidden-sm-down" 
                                style="float:right;margin-top:-30px;"><i class="mdi mdi-plus"></i> Tambah</button>
                            </a>
                            <?php } ?>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="margin-top: 30px;">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Pengarang</th>
                                        <th>Tanggal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($pengumuman as $key=>$value){?>
                                    <tr>
                                        <td><?php echo $value->judul;?></td>
                                        <td><?php echo $value->pengarang?></td>
                                        <td><?php echo date('d/m/Y', strtotime($value->createdDate));?></td>
                                        <td>
                                            <a href="<?php echo base_url('pengumuman/views/' . $value->id_pengumuman);?>">
                                                <button class="btn btn-success"><i class="material-icons">search</i></button>
                                            </a>
                                            <?php if($this->session->userdata('role') == 1){?>
                                            <a href="<?php echo base_url('pengumuman/edit/' . $value->id_pengumuman);?>">
                                                <button class="btn btn-warning"><i class="material-icons">edit</i></button>
                                            </a>
                                            <a href="<?php echo base_url('pengumuman/delete/' . $value->id_pengumuman);?>">
                                                <button class="btn btn-danger"><i class="material-icons">delete</i></button>
                                            </a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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