<nav class="navbar navbar-expand-lg navbar-light header-navbar navbar-fixed">
    <div class="container-fluid navbar-wrapper">
        <div class="navbar-header d-flex">
            <div
                class="navbar-toggle menu-toggle d-xl-none d-block float-left align-items-center justify-content-center"
                data-toggle="collapse"><i class="ft-menu font-medium-3"></i></div>
            <ul class="navbar-nav">
                <li class="nav-item mr-2 d-none d-lg-block"><a class="nav-link apptogglefullscreen"
                                                               id="navbar-fullscreen" href="javascript:;"><i
                            class="ft-maximize font-medium-3"></i></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="javascript:"><i
                            class="ft-search font-medium-3"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i class="ft-search font-medium-3"></i></div>
                        <input class="input" type="text" placeholder="Explore Apex..." tabindex="0"
                               data-search="template-search">
                        <div class="search-input-close"><i class="ft-x font-medium-3"></i></div>
                        <ul class="search-list"></ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="navbar-container">
            <div class="collapse navbar-collapse d-block" id="navbarSupportedContent">
                <ul class="navbar-nav">


                    @auth
                    <li class="dropdown nav-item mr-1"><a
                            class="nav-link dropdown-toggle user-dropdown d-flex align-items-end" id="dropdownBasic2"
                            href="javascript:;" data-toggle="dropdown">
                            <div class="user d-md-flex d-none mr-2"><span
                                    class="text-right">{{Auth::user()->name}} {{Auth::user()->lastnames}}</span><span
                                    class="text-right text-muted font-small-3"> rol </span></div>
                            <img class="avatar" src="/app-assets/img/portrait/small/avatar-s-1.png" alt="avatar"
                                 height="35" width="35"></a>
                        <div class="dropdown-menu text-left dropdown-menu-right m-0 pb-0"
                             aria-labelledby="dropdownBasic2"><a class="dropdown-item" href="page-user-profile.html">
                                <div class="d-flex align-items-center"><i
                                        class="ft-edit mr-2"></i><span>Edit Profile</span></div>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="ft-power mr-2"></i>{{ __('Cerrar Sesion') }}

                            </form>
                            <div class="d-flex align-items-center"><span></span></div>
                            </a>
                        </div>
                    </li>
                    @else
                        <li>
                            <a href="{{ url('/inicio-sesion') }}" class="btn btn-outline-info mr-3 my-1">Iniciar sesion</a>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </div>
</nav>
