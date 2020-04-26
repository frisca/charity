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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </a>
                    <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                        <ul>
                            <li>
                                <h5 class="font-medium py-3 px-4 border-bottom mb-0">You have 4 new messages</h5>
                            </li>
                            <li>
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div class="message-center" style="overflow: hidden; width: auto; height: 250px;">
                                    <!-- Message -->
                                    <a href="#" class="border-bottom d-block text-decoration-none py-2 px-3">
                                        <div class="user-img position-relative d-inline-block mr-2 mb-3"> <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle"> <span class="profile-status pull-right d-inline-block position-absolute bg-success rounded-circle"></span>
                                        </div>
                                        <div class="mail-contnet d-inline-block align-middle">
                                            <h5 class="my-1">Pavan kumar</h5> <span class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">Just
                                                see the my
                                                admin!</span>
                                            <span class="time font-12 mt-1 text-truncate overflow-hidden text-nowrap d-block">9:30
                                                AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#" class="border-bottom d-block text-decoration-none py-2 px-3">
                                        <div class="user-img position-relative d-inline-block mr-2 mb-3"> <img src="../assets/images/users/2.jpg" alt="user" class="rounded-circle"> <span class="profile-status pull-right d-inline-block position-absolute bg-danger rounded-circle"></span>
                                        </div>
                                        <div class="mail-contnet d-inline-block align-middle">
                                            <h5 class="my-1">Sonu Nigam</h5> <span class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">I've
                                                sung a song! See
                                                you at</span> <span class="time font-12 mt-1 text-truncate overflow-hidden text-nowrap d-block">9:10
                                                AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#" class="border-bottom d-block text-decoration-none py-2 px-3">
                                        <div class="user-img position-relative d-inline-block mr-2 mb-3"> <img src="../assets/images/users/3.jpg" alt="user" class="rounded-circle"> <span class="profile-status pull-right d-inline-block position-absolute bg-warning rounded-circle"></span>
                                        </div>
                                        <div class="mail-contnet d-inline-block align-middle">
                                            <h5 class="my-1">Arijit Sinh</h5> <span class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">I
                                                am a singer!</span>
                                            <span class="time font-12 mt-1 text-truncate overflow-hidden text-nowrap d-block">9:08
                                                AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#" class="border-bottom d-block text-decoration-none py-2 px-3">
                                        <div class="user-img position-relative d-inline-block mr-2 mb-3"> <img src="../assets/images/users/4.jpg" alt="user" class="rounded-circle"> <span class="profile-status pull-right d-inline-block position-absolute bg-warning rounded-circle"></span>
                                        </div>
                                        <div class="mail-contnet d-inline-block align-middle">
                                            <h5 class="my-1">Pavan kumar</h5> <span class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">Just
                                                see the my
                                                admin!</span>
                                            <span class="time font-12 mt-1 text-truncate overflow-hidden text-nowrap d-block">9:02
                                                AM</span>
                                        </div>
                                    </a>
                                </div><div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 181.686px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                            </li>
                            <li>
                                <a class="nav-link text-center border-top pt-3" href="javascript:void(0);">
                                    <strong>See all
                                        e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url('assets/images/users/9.jpg');?>" alt="user" class="profile-pic m-r-10" /><?php echo $this->session->userdata('username');?></a>
                </li>
            </ul>
        </div>
    </nav>
</header>