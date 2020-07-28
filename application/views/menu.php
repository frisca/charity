<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
    <div class="main-navbar">
    <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
        <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
        <div class="d-table m-auto">
            <img id="main-logo" class="d-inline-block align-top mr-1 ml-3" style="width: 70px;height: 30px;" src="<?php echo base_url();?>assets/vendor/images/logo.png" alt="IA DEL CHARITY">
            <span class="d-none d-md-inline ml-1"></span>
        </div>
        </a>
        <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
        <i class="material-icons">&#xE5C4;</i>
        </a>
    </nav>
    </div>
    <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
    <div class="input-group input-group-seamless ml-3">
        <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fas fa-search"></i>
        </div>
        </div>
        <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
    </form>
    <div class="nav-wrapper">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="<?php echo base_url('home/index');?>">
                <i class="material-icons">edit</i>
                <span>Home</span>
            </a>
        </li>
        <?php if($this->session->userdata('role') == 1){?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user/index');?>">
                    <i class="material-icons">person</i>
                    <span>User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('penerima_beasiswa/index');?>">
                    <i class="material-icons">assignment_ind</i>
                    <span>Penerima Beasiswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('pengumuman/index');?>">
                    <i class="material-icons">article</i>
                    <span>Pengumuman</span>
                </a>
            </li>
            <li class="nav-item dropdown donasi">
                <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="material-icons">note_add</i>
                    <span>Donasi & Giving</span>
                </a>
                <div class="donasis dropdown-menu dropdown-menu-small" x-placement="bottom-start" style="display: none; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(5px, 50px, 0px);">
                    <a class="dropdown-item " href="<?php echo base_url('transaksi_masuk/index');?>">Donasi & Giving - Donasi</a>
                    <a class="dropdown-item " href="<?php echo base_url('transaksi_keluar/index');?>">Donasi & Giving - Giving</a>
                </div>
            </li>
            <li class="nav-item dropdown laporan">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('laporan/index');?>" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="material-icons">event</i>
                    <span>Laporan</span>
                </a>
                <div class="laporans dropdown-menu dropdown-menu-small" x-placement="bottom-start" style="display: none; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(5px, 50px, 0px);">
                    <a class="dropdown-item donasi" href="<?php echo base_url('laporan_masuk/index');?>">Laporan - Donasi</a>
                    <a class="dropdown-item giving" href="<?php echo base_url('laporan_keluar/index');?>">Laporan - Giving</a>
                </div>
            </li>
        <?php } ?>
        <?php if($this->session->userdata('role') == 2){?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('penerima_beasiswa/index');?>">
                    <i class="material-icons">assignment_ind</i>
                    <span>Penerima Beasiswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('pengumuman/index');?>">
                    <i class="material-icons">article</i>
                    <span>Pengumuman</span>
                </a>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="material-icons">note_add</i>
                    <span>Donasi & Giving</span>
                </a>
                <div class="dropdown-menu dropdown-menu-small" x-placement="bottom-start" style="display: none; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(5px, 50px, 0px);">
                    <a class="dropdown-item " href="<?php echo base_url('transaksi_masuk/index');?>">Donasi & Giving - Donasi</a>
                    <a class="dropdown-item " href="<?php echo base_url('transaksi_keluar/index');?>">Donasi & Giving - Giving</a>
                </div>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('konfirmasi_pembayaran/index');?>">
                    <i class="material-icons">note_add</i>
                    <span>Donasi</span>
                </a>
            </li>
            <li class="nav-item dropdown laporan">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('laporan/index');?>" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="material-icons">event</i>
                    <span>Laporan</span>
                </a>
                <div class="laporans dropdown-menu dropdown-menu-small" x-placement="bottom-start" style="display: none; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(5px, 50px, 0px);">
                    <a class="dropdown-item donasi" href="<?php echo base_url('laporan_masuk/index');?>">Laporan - Donasi</a>
                    <a class="dropdown-item giving" href="<?php echo base_url('laporan_keluar/index');?>">Laporan - Giving</a>
                </div>
            </li>
        <?php } ?>
        <!-- <li class="nav-item">
        <a class="nav-link " href="components-blog-posts.html">
            <i class="material-icons">vertical_split</i>
            <span>Blog Posts</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link " href="add-new-post.html">
            <i class="material-icons">note_add</i>
            <span>Add New Post</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link " href="form-components.html">
            <i class="material-icons">view_module</i>
            <span>Forms &amp; Components</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link " href="tables.html">
            <i class="material-icons">table_chart</i>
            <span>Tables</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link " href="user-profile-lite.html">
            <i class="material-icons">person</i>
            <span>User Profile</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link " href="errors.html">
            <i class="material-icons">error</i>
            <span>Errors</span>
        </a>
        </li> -->
    </ul>
    </div>
</aside>