<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="waves-effect waves-dark" href="index.html" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url('profile/index');?>" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Profil</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url('donatur/index');?>" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Donatur</span></a>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url('admin/index');?>" aria-expanded="false"><i class="mdi mdi-account-circle"></i><span class="hide-menu">Admin</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url('penerima_beasiswa/index');?>" aria-expanded="false"><i class="mdi mdi-account-card-details"></i><span class="hide-menu">Penerima Beasiswa</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url('pengumuman/index');?>" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span class="hide-menu">Pengumuman</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url('iuran/index');?>" aria-expanded="false"><i class="mdi mdi-cards"></i><span class="hide-menu">Iuran</span></a>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Transaksi </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url('transaksi_masuk/index');?>">Masuk</a></li>
                        <li><a href="<?php echo base_url('transaksi_keluar/index');?>">Keluar</a></li>
                    </ul>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-view-sequential"></i><span class="hide-menu">Laporan </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url('laporan_masuk/index');?>">Masuk</a></li>
                        <li><a href="<?php echo base_url('laporan_keluar/index');?>">Keluar</a></li>
                    </ul>
                </li>
            </ul>
            <!-- <div class="text-center m-t-30">
                <a href="https://wrappixel.com/templates/materialpro/" class="btn waves-effect waves-light btn-warning hidden-md-down"> Upgrade to Pro</a>
            </div> -->
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item--><a href="<?php echo base_url('login/logout');?>" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
    <!-- End Bottom points-->
</aside>