<header class="topbar">
    <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
                <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    
                    <!-- Light Logo icon -->
                    <img src="<?php echo base_url('assets/images/logo-light-icon.png');?>" alt="homepage" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text --><span>
                 
                 <!-- Light Logo text -->    
                 <img src="<?php echo base_url('assets/images/logo-light-text.png');?>" class="light-logo" alt="homepage" /></span> </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <!-- <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                    <form class="app-search">
                        <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                </li> -->
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->
                <!-- Profile -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown" id="notif">
                    <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                        <ul>
                            <li>
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;">
                                    <div class="message-center position-relative" style="overflow: hidden; width: auto; height: 250px;">
                                    <!-- Message -->
                                    
                                    </div>
                                   
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <?php if($this->session->userdata('role') == 2){?>
                <li class="nav-item dropdown" id="message">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                        <div class="notify"> 
                            <span class="heartbit"></span> <span class="point"></span> 
                        </div>
                    </a>
                    <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                        <ul>
                            <li>
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;">
                                    <div class="message-center position-relative" style="overflow: hidden; width: auto; height: 250px;">
                                    <!-- Message -->
                                    
                                    </div>
                                   
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <?php
                    }
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark profile" href="<?php echo base_url('profile/index');?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php if(empty($this->session->userdata('image'))){ echo base_url('assets/images/users/9.jpg');}else{ echo base_url('gambar/profile/' . $this->session->userdata('image'));}?>" alt="user" class="profile-pic m-r-10" /><?php echo $this->session->userdata('username');?></a>
                </li>
            </ul>
        </div>
    </nav>
</header>