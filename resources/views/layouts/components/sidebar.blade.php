<!-- main menu-->
<!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
<div class="app-sidebar menu-fixed" data-background-color="mint" data-image="/app-assets/img/sidebar-bg/01.jpg" data-scroll-to-active="true" >
    <!-- main menu header-->
    <!-- Sidebar Header starts-->
    <div class="sidebar-header ">
        <div class="logo clearfix"><a class="logo-text float-left" href="{{url('/')}}">
                    <div class="logo-img"><img src="/app-assets/img/logo.png" alt="LDB LOGO"/></div><span class="text text-white h6">Vision medics</span></a><a class="nav-toggle d-none d-lg-none d-xl-block" id="sidebarToggle" href="javascript:;"><i class="toggle-icon ft-toggle-right" data-toggle="expanded"></i></a><a class="nav-close d-block d-lg-block d-xl-none" id="sidebarClose" href="javascript:;"><i class="ft-x"></i></a></div>
    </div>
    <!-- Sidebar Header Ends-->
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="sidebar-content main-menu-content">
        <div class="nav-container">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class=" nav-item"><a href="{{url('inicio')}}"><i class="ft-grid"></i><span class="menu-title" data-i18n="Chat">Modulos</span></a>

                </li>


                <li class=" nav-item"><a href="documentacion" target="_blank"><i class="ft-book"></i><span class="menu-title" data-i18n="Documentacion">Documentation</span></a>
                </li>

                <li class=" nav-item"><a href="ayuda" target="_blank"><i class="ft-life-buoy"></i><span class="menu-title" data-i18n="Support">Ayuda</span></a>
                </li>
                <!--
                <li class="has-sub nav-item"><a href="{{url('usuarios')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="tag badge badge-pill badge-danger float-right mr-1 mt-1">3</span></a>
                    <ul class="menu-content">
                        <li><a href="#"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Dashboard 1">Dashboard 1</span></a>
                        </li>
                        <li><a href="{{url('usuarios')}}"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Dashboard 2">Dashboard 2</span></a>
                        </li>
                        <li><a href="{{url('usuarios')}}"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Dashboard 2">Dashboard 2</span></a>
                        </li>
                    </ul>
                </li>
                -->
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
