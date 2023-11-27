<!-- Top Bar Start -->
<div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom">
       <!-- LOGO -->
       <div class="topbar-left">
           <a href="index.html" class="logo">
               <span>
                   <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
               </span>
               <span>
                   <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg">
               </span>
           </a>
       </div>

       <ul class="list-unstyled topbar-nav float-right mb-0">
           <li class="dropdown">
               <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                   <i class="mdi mdi-bell-outline nav-icon"></i>
                   <span class="badge badge-danger badge-pill noti-icon-badge">1</span>
               </a>
               <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                   <!-- item-->
                   <h6 class="dropdown-item-text">
                       Notifications (1)
                   </h6>
                   <div class="slimscroll notification-list">
                       <!-- item-->
                       <a href="javascript:void(0);" class="dropdown-item notify-item active">
                           <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                           <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                       </a>
                   </div>
                   <!-- All-->
                   <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                       View all <i class="fi-arrow-right"></i>
                   </a>
               </div>
           </li>

           <li class="dropdown">
               <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                   <img src="assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" /> 
                   <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                   <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                   <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
               </div>
           </li>
           <li class="menu-item">
               <!-- Mobile menu toggle-->
               <a class="navbar-toggle nav-link" id="mobileToggle">
                   <div class="lines">
                       <span></span>
                       <span></span>
                       <span></span>
                   </div>
               </a>
               <!-- End mobile menu toggle-->
           </li>    
       </ul>

       {{-- <ul class="list-unstyled topbar-nav mb-0">
           <li class="hide-phone app-search">
               <form role="search" class="">
                   <input type="text" placeholder="Search..." class="form-control">
                   <a href=""><i class="fas fa-search"></i></a>
               </form>
           </li>
       </ul> --}}

   </nav>
   <!-- end navbar-->
</div>
<!-- Top Bar End -->
<div class="page-wrapper-img">
   <div class="page-wrapper-img-inner">
       <div class="sidebar-user media">                    
           <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle img-thumbnail mb-1">
           <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
           <div class="media-body">
               <h5 class="text-light">Mr. Michael Hill </h5>
               <ul class="list-unstyled list-inline mb-0 mt-2">
                   <li class="list-inline-item">
                       <a href="#" class=""><i class="mdi mdi-account text-light"></i></a>
                   </li>
                   <li class="list-inline-item">
                       <a href="#" class=""><i class="mdi mdi-settings text-light"></i></a>
                   </li>
                   <li class="list-inline-item">
                       <a href="#" class=""><i class="mdi mdi-logout text-light"></i></a>
                   </li>
               </ul>
           </div>                    
       </div>
       <!-- Page-Title -->
       <div class="row">
           <div class="col-sm-12">
               <div class="page-title-box">
                   <h4 class="page-title mb-2"><i class="mdi mdi-table-large mr-2"></i>Management Data Asset Mobil</h4>  
                   <div class="">
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="javascript:void(0);">DTI</a></li>
                           <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                           <li class="breadcrumb-item active">Assets Mobil</li>
                       </ol>
                   </div>                                      
               </div><!--end page title box-->
           </div><!--end col-->
       </div><!--end row-->
       <!-- end page title end breadcrumb -->
   </div><!--end page-wrapper-img-inner-->
</div><!--end page-wrapper-img-->
<div class="page-wrapper">
    <div class="page-wrapper-inner">

        <!-- Navbar Custom Menu -->
        <div class="navbar-custom-menu">
            
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu list-unstyled">
                        <li class="has-submenu">
                            <a href="dashboard">
                                <i class="mdi mdi-monitor"></i>
                                Dashboard
                            </a>
                            {{-- <ul class="submenu">
                                <li><a href="index.html">Dashboard 1</a></li>
                                <li><a href="index-2.html">Dashboard 2</a></li>
                                <li><a href="index-3.html">Dashboard 3</a></li>
                            </ul> --}}
                        </li>
                        <li class="has-submenu">
                            <a href="#">
                                <i class="mdi mdi-car-multiple"></i>
                                Data Mobil
                            </a>
                            <ul class="submenu">
                                <li><a href="datamobil">Assets</a></li>
                                <li><a href="pemakaian">Pengajuan Pemakaian</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="supir">
                                <i class="mdi mdi-account-card-details"></i>
                                Data Supir
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a href="pegawai">
                                <i class="mdi mdi-account-group"></i>
                                Data Pegawai
                            </a>
                        </li>
                    </ul>
                    <!-- End navigation menu -->
                </div> <!-- end navigation -->
            </div> <!-- end container-fluid -->
        </div>
        <!-- end left-sidenav-->
    </div>
    <!--end page-wrapper-inner -->