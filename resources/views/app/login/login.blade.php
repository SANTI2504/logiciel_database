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
    <meta name="description"
          content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Iniciar-sesion</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link
        href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{url('css/app/app.css')}}">
    <!-- END:  CSS-->
</head>
<!-- END : Head-->

<!-- BEGIN : Body-->
<body class="vertical-layout vertical-menu 1-column auth-page navbar-sticky blank-page" data-menu="vertical-menu"
      data-col="1-column">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-overlay"></div>
            <div class="content-wrapper"><!--Login Page Starts-->
                <section id="login" class="auth-height">
                    <div class="row full-height-vh m-0">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="card overflow-hidden">
                                <div class="card-content">
                                    <div class="card-body auth-img">
                                        <div class="row m-0">
                                            <div
                                                class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center auth-img-bg p-3">
                                                <img src="../app-assets/img/gallery/login.png" alt="" class="img-fluid"
                                                     width="300" height="230">
                                            </div>
                                            @auth
                                                <div class="col-lg-6 col-12 px-4 py-3">
                                                    <h4 class="mb-2 card-title">INICIO DE SESION</h4>
                                                    <p>Bienvenido de vuelta, tienes una sesion iniciada</p>
                                                    <hr>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <div class="d-flex justify-content-between flex-sm-row flex-column">
                                                            <a href="{{ url('/inicio') }}" class="btn btn-primary ">Dashboard</a>
                                                            <a href="{{ url('/') }}" class="btn btn-primary ">Vision Medics</a>
                                                        </div>
                                                        <hr>

                                                        <button type="submit" class="btn btn-outline-secondary"
                                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                            Cerrar Sesion
                                                        </button>

                                                    </form>
                                                </div>

                                            @else
                                                <div class="col-lg-6 col-12 px-4 py-3">
                                                    <h4 class="mb-2 card-title">INICIO DE SESION</h4>
                                                    <p>Bienvenido de vuelta, por favor ingresa a tu cuenta.</p>

                                                    <!-- start validaciones -->
                                                    @if(count($errors)>0)

                                                        @foreach($errors->all() as $error)
                                                            <div class="alert bg-light-danger p-2 m-1" role="alert">
                                                                <i class="ft-alert-triangle"></i>
                                                                {{$error}}
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                    <form method="POST" action="{{ url('inicio-sesion') }}">
                                                        @csrf

                                                        <input id="email" type="email" name="email"
                                                               value="{{old('email')}}"
                                                               required autofocus class="form-control mb-3"
                                                               placeholder="Correo electronico">
                                                        <input id="password" type="password" name="password" required
                                                               autocomplete="current-password" class="form-control mb-2"
                                                               placeholder="Contraseña">

                                                        <div
                                                            class="d-sm-flex justify-content-between mb-3 font-small-2">
                                                            <div class="remember-me mb-2 mb-sm-0">
                                                                <div class="checkbox auth-checkbox">
                                                                    <input type="checkbox" id="auth-ligin">
                                                                    <label
                                                                        for="auth-ligin"><span> Recordar usuario</span></label>
                                                                </div>
                                                            </div>
                                                            <a href="#">Olvidaste tu contraseña?</a>
                                                        </div>

                                                        <hr>
                                                        <div class="d-flex justify-content-between flex-sm-row flex-column">
                                                            <a href="{{url('registrarse')}}"
                                                               class="btn bg-light-primary mb-2 mb-sm-0">Registrarse</a>
                                                            <button
                                                                class="btn btn-primary">{{ __('Iniciar sesion') }}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Login Page Ends-->
            </div>
        </div>
        <!-- END : End Main Content-->
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- END APEX JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->
<!-- BEGIN: Custom CSS-->
<script src="{{ url('js/app/app.js') }}"></script>
<!-- END: Custom CSS-->
</body>
<!-- END : Body-->
</html>
