
<!DOCTYPE html>
<!--
Template Name: Apex - Bootstrap 4 Admin Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/apex_admin
Renew Support: https://1.envato.market/apex_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en">
<!-- BEGIN : Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>LDB Modulos</title>
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" href="{{url('css/app/app.css')}}">
    <!-- END: Custom CSS-->
</head>
<!-- END : Head-->

<!-- BEGIN : Body-->
<body class="vertical-layout vertical-menu 2-columns  navbar-sticky" data-menu="vertical-menu" data-col="2-columns">

<nav class="navbar navbar-expand-lg navbar-light header-navbar navbar-fixed">
    <div class="container-fluid navbar-wrapper">
        <div class="navbar-header d-flex">
            <div class="navbar-toggle menu-toggle d-xl-none d-block float-left align-items-center justify-content-center" data-toggle="collapse"><i class="ft-menu font-medium-3"></i></div>
            <ul class="navbar-nav">
                <li class="nav-item mr-2 d-none d-lg-block"><a class="nav-link apptogglefullscreen" id="navbar-fullscreen" href="javascript:;"><i class="ft-maximize font-medium-3"></i></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="javascript:"><i class="ft-search font-medium-3"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i class="ft-search font-medium-3"></i></div>
                        <input class="input" type="text" placeholder="Explore Apex..." tabindex="0" data-search="template-search">
                        <div class="search-input-close"><i class="ft-x font-medium-3"></i></div>
                        <ul class="search-list"></ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="navbar-container">
            <div class="collapse navbar-collapse d-block" id="navbarSupportedContent">
                <ul class="navbar-nav">

                    <li class="dropdown nav-item"><a class="nav-link dropdown-toggle dropdown-notification p-0 mt-2" id="dropdownBasic1" href="javascript:;" data-toggle="dropdown"><i class="ft-bell font-medium-3"></i><span class="notification badge badge-pill badge-danger">4</span></a>
                        <ul class="notification-dropdown dropdown-menu dropdown-menu-media dropdown-menu-right m-0 overflow-hidden">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header d-flex justify-content-between m-0 px-3 py-2 white bg-primary">
                                    <div class="d-flex"><i class="ft-bell font-medium-3 d-flex align-items-center mr-2"></i><span class="noti-title">7 New Notification</span></div><span class="text-bold-400 cursor-pointer">Mark all as read</span>
                                </div>
                            </li>
                            <li class="scrollable-container"><a class="d-flex justify-content-between" href="javascript:void(0)">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left">
                                            <div class="mr-3"><img class="avatar" src="../app-assets/img/portrait/small/avatar-s-20.png" alt="avatar" height="45" width="45"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="m-0"><span>Kate Young</span><small class="grey lighten-1 font-italic float-right">5 mins ago</small></h6><small class="noti-text">Commented on your photo</small>
                                            <h6 class="noti-text font-small-3 m-0">Great Shot John! Really enjoying the composition on this piece.</h6>
                                        </div>
                                    </div></a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left">
                                            <div class="mr-3"><img class="avatar" src="../app-assets/img/portrait/small/avatar-s-11.png" alt="avatar" height="45" width="45"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="m-0"><span>Andrew Watts</span><small class="grey lighten-1 font-italic float-right">49 mins ago</small></h6><small class="noti-text">Liked your album: UI/UX Inspo</small>
                                        </div>
                                    </div></a><a class="d-flex justify-content-between read-notification" href="javascript:void(0)">
                                    <div class="media d-flex align-items-center py-0 pr-0">
                                        <div class="media-left">
                                            <div class="mr-3"><img src="../app-assets/img/icons/sketch-mac-icon.png" alt="avatar" height="45" width="45"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="m-0">Update</h6><small class="noti-text">MyBook v2.0.7</small>
                                        </div>
                                        <div class="media-right">
                                            <div class="border-left">
                                                <div class="px-4 py-2 border-bottom">
                                                    <h6 class="m-0 text-bold-600">Update</h6>
                                                </div>
                                                <div class="px-4 py-2 text-center">
                                                    <h6 class="m-0">Close</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div></a><a class="d-flex justify-content-between read-notification" href="javascript:void(0)">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left">
                                            <div class="avatar bg-primary bg-lighten-3 mr-3 p-1"><span class="avatar-content font-medium-2">LD</span></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="m-0"><span>Registration done</span><small class="grey lighten-1 font-italic float-right">6 hrs ago</small></h6>
                                        </div>
                                    </div></a>
                                <div class="cursor-pointer">
                                    <div class="media d-flex align-items-center justify-content-between">
                                        <div class="media-left">
                                            <div class="media-body">
                                                <h6 class="m-0">New Offers</h6>
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <div class="custom-control custom-switch">
                                                <input class="switchery" type="checkbox" checked id="notificationSwtich" data-size="sm">
                                                <label for="notificationSwtich"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer read-notification">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left">
                                            <div class="avatar bg-danger bg-lighten-4 mr-3 p-1"><span class="avatar-content font-medium-2"><i class="ft-heart text-danger"></i></span></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="m-0"><span>Application approved</span><small class="grey lighten-1 font-italic float-right">18 hrs ago</small></h6>
                                        </div>
                                    </div>
                                </div><a class="d-flex justify-content-between read-notification" href="javascript:void(0)">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left">
                                            <div class="mr-3"><img class="avatar" src="../app-assets/img/portrait/small/avatar-s-6.png" alt="avatar" height="45" width="45"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="m-0"><span>Anna Lee</span><small class="grey lighten-1 font-italic float-right">27 hrs ago</small></h6><small class="noti-text">Commented on your photo</small>
                                            <h6 class="noti-text font-small-3 text-bold-500 m-0">Woah!Loving these colors! Keep it up</h6>
                                        </div>
                                    </div></a>
                                <div class="d-flex justify-content-between cursor-pointer read-notification">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left">
                                            <div class="avatar bg-info bg-lighten-4 mr-3 p-1">
                                                <div class="avatar-content font-medium-2"><i class="ft-align-left text-info"></i></div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="m-0"><span>Report generated</span><small class="grey lighten-1 font-italic float-right">35 hrs ago</small></h6>
                                        </div>
                                    </div>
                                </div><a class="d-flex justify-content-between read-notification" href="javascript:void(0)">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left">
                                            <div class="mr-3"><img class="avatar" src="../app-assets/img/portrait/small/avatar-s-7.png" alt="avatar" height="45" width="45"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="m-0"><span>Oliver Wright</span><small class="grey lighten-1 font-italic float-right">2 days ago</small></h6><small class="noti-text">Liked your album: UI/UX Inspo</small>
                                        </div>
                                    </div></a>
                            </li>
                            <li class="dropdown-menu-footer">
                                <div class="noti-footer text-center cursor-pointer primary border-top text-bold-400 py-1">Read All Notifications</div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item mr-1"><a class="nav-link dropdown-toggle user-dropdown d-flex align-items-end" id="dropdownBasic2" href="javascript:;" data-toggle="dropdown">
                            <div class="user d-md-flex d-none mr-2"><span class="text-right">John Doe</span><span class="text-right text-muted font-small-3">Available</span></div><img class="avatar" src="../app-assets/img/portrait/small/avatar-s-1.png" alt="avatar" height="35" width="35"></a>
                        <div class="dropdown-menu text-left dropdown-menu-right m-0 pb-0" aria-labelledby="dropdownBasic2"><a class="dropdown-item" href="app-chat.html">
                                <div class="d-flex align-items-center"><i class="ft-message-square mr-2"></i><span>Chat</span></div></a><a class="dropdown-item" href="page-user-profile.html">
                                <div class="d-flex align-items-center"><i class="ft-edit mr-2"></i><span>Edit Profile</span></div></a><a class="dropdown-item" href="app-email.html">
                                <div class="d-flex align-items-center"><i class="ft-mail mr-2"></i><span>My Inbox</span></div></a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('logout') }}"
                                                                       onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <i class="ft-power mr-2"></i>{{ __('Log Out') }}

                            </form>
                            <div class="d-flex align-items-center"><span></span></div></a>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block mr-2 mt-1"><a class="nav-link notification-sidebar-toggle" href="javascript:;"><i class="ft-align-right font-medium-3"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar (Header) Ends-->

<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">


    <!-- main menu-->
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    <div class="app-sidebar menu-fixed" data-background-color="mint" data-image="../app-assets/img/sidebar-bg/01.jpg" data-scroll-to-active="true" >
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header ">
            <div class="logo clearfix"><a class="logo-text float-left" href="index.html">
                    <div class="logo-img"><img src="../app-assets/img/logo.png" alt="Apex Logo"/></div><span class="text">LDB</span></a><a class="nav-toggle d-none d-lg-none d-xl-block" id="sidebarToggle" href="javascript:;"><i class="toggle-icon ft-toggle-right" data-toggle="expanded"></i></a><a class="nav-close d-block d-lg-block d-xl-none" id="sidebarClose" href="javascript:;"><i class="ft-x"></i></a></div>
        </div>
        <!-- Sidebar Header Ends-->
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="sidebar-content main-menu-content">
            <div class="nav-container">
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


                    <li class=" nav-item"><a href="{{url('inicio')}}"><i class="ft-grid"></i><span class="menu-title" data-i18n="Chat">Modulos</span></a>
                    </li>


                    <li class=" nav-item"><a href="https://pixinvent.com/apex-angular-4-bootstrap-admin-template/html-documentation" target="_blank"><i class="ft-book"></i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
                    </li>

                    <li class=" nav-item"><a href="https://pixinvent.ticksy.com/" target="_blank"><i class="ft-life-buoy"></i><span class="menu-title" data-i18n="Support">Support</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- main menu content-->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
        <!-- / main menu-->
    </div>

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <!-- start migas de pan-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                            <a href="{{url('inicio')}}" itemprop="item">
                                <span itemprop="name">Inicio</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">

                                <span itemprop="name">Menu usuarios</span>

                            <meta itemprop="position" content="2">
                        </li>

                    </ol>
                </nav>
                <!-- end migas de pan-->
                <!-- Minimal statistics section start -->
                <section id="minimal-statistics">
                    <div class="row">
                        <div class="col-12">
                            <div class="content-header">Minimal Statistics Cards</div>
                            <p class="content-sub-header mb-1">Statistics on minimal cards.</p>
                        </div>
                    </div>

                    <div class="row">

                        <div  class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-center">
                                                <h3 class="mb-1 danger">Crear usuario</h3>
                                                <spam> Crear nueva cuenta de usuario</spam>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <a href="#"><i class="ft-briefcase danger font-large-2 float-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-center">
                                                <h3 class="mb-1 danger">Ver usuarios</h3>
                                                <spam>Ver usuarios registrados</spam>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <a href="#"><i class="ft-briefcase danger font-large-2 float-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-center">
                                                <h3 class="mb-1 danger">Roles  </h3>
                                                <spam>Crear-Editar-Eliminar</spam>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <a href="#"><i class="ft-briefcase danger font-large-2 float-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-center">
                                                <h3 class="mb-1 danger">Tipo documento </h3>
                                                <spam>Crear-Editar-Eliminar</spam>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <a href="#"><i class="ft-briefcase danger font-large-2 float-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Minimal statistics section end -->

            </div>
        </div>
        <!-- END : End Main Content-->

        <!-- BEGIN : Footer-->
        <footer class="footer undefined undefined">
            <p class="clearfix text-muted m-0"><span>Copyright  &copy; 2020 &nbsp;</span><a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink" target="_blank">PIXINVENT</a><span class="d-none d-sm-inline-block">, All rights reserved.</span></p>
        </footer>
        <!-- End : Footer--><!-- Scroll to top button -->
        <button class="btn btn-primary scroll-top" type="button"><i class="ft-arrow-up"></i></button>

    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- START Notification Sidebar-->
<aside class="notification-sidebar d-none d-sm-none d-md-block" id="notification-sidebar"><a class="notification-sidebar-close"><i class="ft-x font-medium-3 grey darken-1"></i></a>
    <div class="side-nav notification-sidebar-content">
        <div class="row">
            <div class="col-12 notification-nav-tabs">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="activity-tab" href="#activity-tab" aria-expanded="true">Activity</a></li>
                    <li class="nav-item"><a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="settings-tab" href="#settings-tab" aria-expanded="false">Settings</a></li>
                </ul>
            </div>
            <div class="col-12 notification-tab-content">
                <div class="tab-content">
                    <div class="row tab-pane active" id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1">
                        <div class="col-12" id="activity">
                            <h5 class="my-2 text-bold-500">System Logs</h5>
                            <div class="timeline-left timeline-wrapper mb-3" id="timeline-1">
                                <ul class="timeline">
                                    <li class="timeline-line mt-4"></li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class="ft-download primary"></i></span></div>
                                        <div class="activity-list-text">
                                            <h6 class="mb-1"><span>New Update Available</span><span class="float-right grey font-italic font-small-2">1 min ago</span></h6>
                                            <p class="mt-0 mb-2 font-small-3">Android Pie 9.0.0_r52v availabe (658MB).</p>
                                            <div class="notification-note">
                                                <div class="p-1 pl-2"><span class="text-bold-500">Download Now!</span></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><img class="avatar" src="../app-assets/img/portrait/small/avatar-s-15.png" alt="avatar" width="40"></span></div>
                                        <div class="activity-list-text">
                                            <h6 class="mb-1"><span>Reminder!</span><span class="float-right grey font-italic font-small-2">52 min ago</span></h6>
                                            <p class="mt-0 mb-2 font-small-3">Your meeting is scheduled with Mr. Derrick Walters at 16:00.</p>
                                            <div class="notification-note">
                                                <div class="p-1 pl-2"><span class="text-bold-500">Snooze</span></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><img class="avatar" src="../app-assets/img/portrait/small/avatar-s-16.png" alt="avatar" width="40"></span></div>
                                        <div class="activity-list-text">
                                            <h6 class="mb-1"><span>Recieved a File</span><span class="float-right grey font-italic font-small-2">4 hours ago</span></h6>
                                            <p class="mt-0 mb-2 font-small-3">Christina Rogers sent you a file for the next conference.</p>
                                            <div class="notification-note">
                                                <div class="p-1 pl-2"><img src="../app-assets/img/icons/sketch-mac-icon.png" alt="icon" width="20"><span class="text-bold-500 ml-2">Diamond.sketch</span></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class="ft-mic primary"></i></span></div>
                                        <div class="activity-list-text">
                                            <h6 class="mb-1"><span>Voice Message</span><span class="float-right grey font-italic font-small-2">10 hours ago</span></h6>
                                            <p class="mt-0 mb-2 font-small-3">Natalya Parker sent you a voice message.</p>
                                            <div class="notification-note">
                                                <div class="p-1 pl-2"><span class="text-bold-500">Listen</span></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class="ft-cloud-drizzle primary"></i></span></div>
                                        <div class="activity-list-text">
                                            <h6 class="mb-1"><span>Weather Update</span><span class="float-right grey font-italic font-small-2">Yesterday</span></h6>
                                            <p class="mt-0 mb-2 font-small-3">Hi John! It is a rainy day with 16&deg;C.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <h5 class="my-2 text-bold-500">Applications Logs</h5>
                            <div class="timeline-left timeline-wrapper" id="timeline-2">
                                <ul class="timeline">
                                    <li class="timeline-line mt-4"></li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><img class="avatar" src="../app-assets/img/portrait/small/avatar-s-26.png" alt="avatar" width="40"></span></div>
                                        <div class="activity-list-text">
                                            <h6 class="mb-1"><span>Gmail</span><span class="float-right grey font-italic font-small-2">Just now</span></h6>
                                            <p class="mt-0 mb-2 font-small-3">Victoria Hampton sent you a mail and has a file attachment with it.</p>
                                            <div class="notification-note">
                                                <div class="p-1 pl-2"><img src="../app-assets/img/icons/pdf.png" alt="pdf icon" width="20"><span class="text-bold-500 ml-2">Register.pdf</span></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class="ft-droplet primary"></i></span></div>
                                        <div class="activity-list-text">
                                            <h6 class="mb-1"><span>MakeMyTrip</span><span class="float-right grey font-italic font-small-2">7 hours ago</span></h6>
                                            <p class="mt-0 mb-2 font-small-3">Your next flight for San Francisco will be on 24th March.</p>
                                            <div class="notification-note">
                                                <div class="p-1 pl-2"><span class="text-bold-500">Important</span></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><img class="avatar" src="../app-assets/img/portrait/small/avatar-s-23.png" alt="avatar" width="40"></span></div>
                                        <div class="activity-list-text">
                                            <h6 class="mb-1"><span>CNN</span><span class="float-right grey font-italic font-small-2">16 hours ago</span></h6>
                                            <p class="mt-0 mb-2 font-small-3">U.S. investigating report says email account linked to CIA Director was hacked.</p>
                                            <div class="notification-note">
                                                <div class="p-1 pl-2"><span class="text-bold-500">Read full article</span></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class="ft-map primary"></i></span></div>
                                        <div class="activity-list-text">
                                            <h6 class="mb-1"><span>Maps</span><span class="float-right grey font-italic font-small-2">Yesterday</span></h6>
                                            <p class="mt-0 mb-2 font-small-3">You visited Walmart Supercenter in Chicago.</p>
                                            <div class="notification-note">
                                                <div class="p-1 pl-2"><span class="text-bold-500">Write a Review!</span></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class="ft-package primary"></i></span></div>
                                        <div class="activity-list-text">
                                            <h6 class="mb-1"><span>Updates Available</span><span class="float-right grey font-italic font-small-2">2 days ago</span></h6>
                                            <p class="mt-0 mb-2 font-small-3">19 app updates found.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row tab-pane" id="settings-tab" aria-labelledby="base-tab2">
                        <div class="col-12" id="settings">
                            <h5 class="mt-2 mb-3">General Settings</h5>
                            <ul class="list-unstyled mb-0 mx-2">
                                <li class="mb-3">
                                    <div class="mb-1"><span class="text-bold-500">Notifications</span>
                                        <div class="float-right">
                                            <div class="custom-switch">
                                                <input class="custom-control-input" id="noti-s-switch-1" type="checkbox">
                                                <label class="custom-control-label" for="noti-s-switch-1"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-small-3 m-0">Use switches when looking for yes or no answers.</p>
                                </li>
                                <li class="mb-3">
                                    <div class="mb-1"><span class="text-bold-500">Show recent activity</span>
                                        <div class="float-right">
                                            <div class="checkbox">
                                                <input id="noti-s-checkbox-1" type="checkbox" checked>
                                                <label for="noti-s-checkbox-1"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-small-3 m-0">The "for" attribute is necessary to bind checkbox with the input.</p>
                                </li>
                                <li class="mb-3">
                                    <div class="mb-1"><span class="text-bold-500">Product Update</span>
                                        <div class="float-right">
                                            <div class="custom-switch">
                                                <input class="custom-control-input" id="noti-s-switch-4" type="checkbox" checked>
                                                <label class="custom-control-label" for="noti-s-switch-4"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-small-3 m-0">Message and mail me on weekly product updates.</p>
                                </li>
                                <li class="mb-3">
                                    <div class="mb-1"><span class="text-bold-500">Email on Follow</span>
                                        <div class="float-right">
                                            <div class="custom-switch">
                                                <input class="custom-control-input" id="noti-s-switch-3" type="checkbox">
                                                <label class="custom-control-label" for="noti-s-switch-3"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-small-3 m-0">Mail me when someone follows me.</p>
                                </li>
                                <li class="mb-3">
                                    <div class="mb-1"><span class="text-bold-500">Announcements</span>
                                        <div class="float-right">
                                            <div class="checkbox">
                                                <input id="noti-s-checkbox-2" type="checkbox" checked>
                                                <label for="noti-s-checkbox-2"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-small-3 m-0">Receive all the news and announcements from my clients.</p>
                                </li>
                                <li class="mb-3">
                                    <div class="mb-1"><span class="text-bold-500">Date and Time</span>
                                        <div class="float-right">
                                            <div class="checkbox">
                                                <input id="noti-s-checkbox-3" type="checkbox">
                                                <label for="noti-s-checkbox-3"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-small-3 m-0">Show date and time on top of every page.</p>
                                </li>
                                <li>
                                    <div class="mb-1"><span class="text-bold-500">Email on Comments</span>
                                        <div class="float-right">
                                            <div class="custom-switch">
                                                <input class="custom-control-input" id="noti-s-switch-2" type="checkbox" checked>
                                                <label class="custom-control-label" for="noti-s-switch-2"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-small-3 m-0">Mail me when someone comments on my article.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- END Notification Sidebar-->
<!-- Theme customizer Starts-->
<div class="customizer d-none d-lg-none d-xl-block"><a class="customizer-close"><i class="ft-x font-medium-3"></i></a><a class="customizer-toggle bg-primary" id="customizer-toggle-icon"><i class="ft-settings font-medium-1 spinner white align-middle"></i></a>
    <div class="customizer-content p-3 ps-container ps-theme-dark" data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a">
        <h4 class="text-uppercase">Theme Customizer</h4>
        <p>Customize & Preview in Real Time</p>
        <!-- Layout Options Starts-->
        <div class="ct-layout">
            <hr>
            <h6 class="mb-3 d-flex align-items-center"><i class="ft-layout font-medium-2 mr-2"></i><span>Layout Options</span></h6>
            <div class="layout-switch">
                <div class="radio radio-sm d-inline-block light-layout mr-3">
                    <input id="ll-switch" type="radio" name="layout-switch" checked>
                    <label for="ll-switch">Light</label>
                </div>
                <div class="radio radio-sm d-inline-block dark-layout mr-3">
                    <input id="dl-switch" type="radio" name="layout-switch">
                    <label for="dl-switch">Dark</label>
                </div>
                <div class="radio radio-sm d-inline-block transparent-layout">
                    <input id="tl-switch" type="radio" name="layout-switch">
                    <label for="tl-switch">Transparent</label>
                </div>
            </div>
            <!-- Layout Options Ends-->
        </div>
        <!-- Navbar Types-->
        <div class="ct-navbar-type">
            <hr>
            <h6 class="mb-3 d-flex align-items-center"><i class="ft-more-horizontal- font-medium-2 mr-2"></i><span>Navbar Type</span></h6>
            <div class="navbar-switch">
                <div class="radio radio-sm d-inline-block nav-static mr-3">
                    <input id="nav-static" type="radio" name="navbar-switch" checked="checked">
                    <label for="nav-static">Static</label>
                </div>
                <div class="radio radio-sm d-inline-block nav-fixed">
                    <input id="nav-fixed" type="radio" name="navbar-switch">
                    <label for="nav-fixed">Fixed</label>
                </div>
            </div>
        </div>
        <!-- Sidebar Options Starts-->
        <div class="ct-bg-color">
            <hr>
            <h6 class="sb-options d-flex align-items-center mb-3"><i class="ft-droplet font-medium-2 mr-2"></i><span>Sidebar Color Options</span></h6>
            <div class="cz-bg-color sb-color-options">
                <div class="row mb-3">
                    <div class="col px-2"><span class="gradient-mint d-block rounded" style="width:30px; height:30px;" data-bg-color="mint"></span></div>
                    <div class="col px-2"><span class="gradient-king-yna d-block rounded" style="width:30px; height:30px;" data-bg-color="king-yna"></span></div>
                    <div class="col px-2"><span class="gradient-ibiza-sunset d-block rounded" style="width:30px; height:30px;" data-bg-color="ibiza-sunset"></span></div>
                    <div class="col px-2"><span class="gradient-flickr d-block rounded" style="width:30px; height:30px;" data-bg-color="flickr"></span></div>
                    <div class="col px-2"><span class="gradient-purple-bliss d-block rounded" style="width:30px; height:30px;" data-bg-color="purple-bliss"></span></div>
                    <div class="col px-2"><span class="gradient-man-of-steel d-block rounded" style="width:30px; height:30px;" data-bg-color="man-of-steel"></span></div>
                    <div class="col px-2"><span class="gradient-purple-love d-block rounded" style="width:30px; height:30px;" data-bg-color="purple-love"></span></div>
                </div>
                <div class="row">
                    <div class="col px-2"><span class="bg-black d-block rounded" style="width:30px; height:30px;" data-bg-color="black"></span></div>
                    <div class="col px-2"><span class="bg-grey bg-lighten-3 d-block rounded" style="width:30px; height:30px;" data-bg-color="white"></span></div>
                    <div class="col px-2"><span class="bg-primary bg-darken-1 d-block rounded" style="width:30px; height:30px;" data-bg-color="primary"></span></div>
                    <div class="col px-2"><span class="bg-success bg-darken-1 d-block rounded" style="width:30px; height:30px;" data-bg-color="success"></span></div>
                    <div class="col px-2"><span class="bg-warning bg-darken-1 d-block rounded" style="width:30px; height:30px;" data-bg-color="warning"></span></div>
                    <div class="col px-2"><span class="bg-info bg-darken-1 d-block rounded" style="width:30px; height:30px;" data-bg-color="info"></span></div>
                    <div class="col px-2"><span class="bg-danger bg-darken-1 d-block rounded" style="width:30px; height:30px;" data-bg-color="danger"></span></div>
                </div>
            </div>
            <!-- Sidebar Options Ends-->
            <!-- Transparent BG Image Ends-->
            <div class="tl-bg-img">
                <h6 class="d-flex align-items-center mb-3"><i class="ft-star font-medium-2 mr-2"></i><span>Background Colors with Shades</span></h6>
                <div class="cz-tl-bg-image row">
                    <div class="col-sm-3">
                        <div class="rounded bg-glass-1 ct-glass-bg" data-bg-image="bg-glass-1"></div>
                    </div>
                    <div class="col-sm-3">
                        <div class="rounded bg-glass-2 ct-glass-bg" data-bg-image="bg-glass-2"></div>
                    </div>
                    <div class="col-sm-3">
                        <div class="rounded bg-glass-3 ct-glass-bg" data-bg-image="bg-glass-3"></div>
                    </div>
                    <div class="col-sm-3">
                        <div class="rounded bg-glass-4 ct-glass-bg" data-bg-image="bg-glass-4"></div>
                    </div>
                </div>
            </div>
            <!-- Transparent BG Image Ends-->
        </div>
        <!-- Sidebar BG Image Starts-->
        <div class="ct-bg-image">
            <hr>
            <h6 class="sb-bg-img d-flex align-items-center mb-3"><i class="ft-sidebar font-medium-2 mr-2"></i><span>Sidebar Bg Image</span></h6>
            <div class="cz-bg-image row sb-bg-img">
                <div class="col-2 px-2"><img class="rounded sb-bg-01" src="../app-assets/img/sidebar-bg/01.jpg" alt="sidebar bg image" width="90"></div>
                <div class="col-2 px-2"><img class="rounded sb-bg-02" src="../app-assets/img/sidebar-bg/02.jpg" alt="sidebar bg image" width="90"></div>
                <div class="col-2 px-2"><img class="rounded sb-bg-03" src="../app-assets/img/sidebar-bg/03.jpg" alt="sidebar bg image" width="90"></div>
                <div class="col-2 px-2"><img class="rounded sb-bg-04" src="../app-assets/img/sidebar-bg/04.jpg" alt="sidebar bg image" width="90"></div>
                <div class="col-2 px-2"><img class="rounded sb-bg-05" src="../app-assets/img/sidebar-bg/05.jpg" alt="sidebar bg image" width="90"></div>
                <div class="col-2 px-2"><img class="rounded sb-bg-06" src="../app-assets/img/sidebar-bg/06.jpg" alt="sidebar bg image" width="90"></div>
            </div>
            <!-- Transparent Layout Bg color Options-->
            <div class="tl-color-option">
                <h6 class="tl-color-options d-flex align-items-center mb-3"><i class="ft-droplet font-medium-2 mr-2"></i><span>Background Colors</span></h6>
                <div class="cz-tl-bg-color">
                    <div class="row">
                        <div class="col"><span class="bg-glass-hibiscus d-block rounded ct-color-bg" style="width:30px; height:30px;" data-bg-color="bg-glass-hibiscus"></span></div>
                        <div class="col"><span class="bg-glass-purple-pizzazz d-block rounded ct-color-bg" style="width:30px; height:30px;" data-bg-color="bg-glass-purple-pizzazz"></span></div>
                        <div class="col"><span class="bg-glass-blue-lagoon d-block rounded ct-color-bg" style="width:30px; height:30px;" data-bg-color="bg-glass-blue-lagoon"></span></div>
                        <div class="col"><span class="bg-glass-electric-violet d-block rounded ct-color-bg" style="width:30px; height:30px;" data-bg-color="bg-glass-electric-violet"></span></div>
                        <div class="col"><span class="bg-glass-portage d-block rounded ct-color-bg" style="width:30px; height:30px;" data-bg-color="bg-glass-portage"></span></div>
                        <div class="col"><span class="bg-glass-tundora d-block rounded ct-color-bg" style="width:30px; height:30px;" data-bg-color="bg-glass-tundora"></span></div>
                    </div>
                </div>
            </div>
            <!-- Transparent Layout Bg color Ends-->
        </div>
        <!-- Sidebar BG Image Toggle Starts-->
        <div class="ct-bg-image-toggler">
            <div class="togglebutton toggle-sb-bg-img">
                <hr>
                <div class="switch"><span>Sidebar Bg Image</span>
                    <div class="float-right">
                        <div class="checkbox">
                            <input class="cz-bg-image-display" id="sidebar-bg-img" type="checkbox" checked>
                            <label for="sidebar-bg-img"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar BG Image Toggle Ends-->
        <!-- Compact Menu Starts-->
        <div class="ct-compact-toggler">
            <hr>
            <div class="togglebutton">
                <div class="switch"><span>Compact Menu</span>
                    <div class="float-right">
                        <div class="checkbox">
                            <input class="cz-compact-menu" id="cz-compact-menu" type="checkbox">
                            <label for="cz-compact-menu"></label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Compact Menu Ends-->
        </div>
        <!-- Sidebar Width Starts-->
        <div class="ct-sidebar-size">
            <hr>
            <p>Sidebar Width</p>
            <div class="cz-sidebar-width btn-group btn-group-toggle" id="cz-sidebar-width" data-toggle="buttons">
                <label class="btn btn-outline-primary">
                    <input id="cz-btn-radio-1" type="radio" name="cz-btn-radio" value="small"><span>Small</span>
                </label>
                <label class="btn btn-outline-primary active">
                    <input id="cz-btn-radio-2" type="radio" name="cz-btn-radio" value="medium" checked><span>Medium</span>
                </label>
                <label class="btn btn-outline-primary">
                    <input id="cz-btn-radio-3" type="radio" name="cz-btn-radio" value="large"><span>Large</span>
                </label>
            </div>
        </div>
        <!-- Sidebar Width Ends-->
    </div>
</div>

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
<!-- BEGIN VENDOR JS-->
<script src="{{url('js/app/app.js')}}" ></script>
<!-- END: Custom CSS-->
</body>
<!-- END : Body-->
</html>
