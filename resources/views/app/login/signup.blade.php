
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
    <title>Registro-usuario</title>
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{url('css/app/app.css')}}">

    <!-- END: Custom CSS-->
</head>
<!-- END : Head-->

<!-- BEGIN : Body-->
<body class="vertical-layout vertical-menu 1-column auth-page navbar-sticky blank-page" data-menu="vertical-menu" data-col="1-column">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-overlay"></div>
            <div class="content-wrapper"><!--Registration Page Starts-->
                <section id="regestration" class="auth-height">
                    <div class="row full-height-vh m-0">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="card overflow-hidden">
                                <div class="card-content">
                                    <div class="card-body auth-img">
                                        <div class="row m-0">
                                            <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center text-center auth-img-bg py-2">
                                                <img src="../app-assets/img/gallery/register.png" alt="" class="img-fluid" width="350" height="230">
                                            </div>
                                            <div class="col-lg-6 col-md-12 px-4 py-3">
                                                <h4 class="card-title mb-2">CREAR CUENTA</h4>
                                                <p>Ingresa todos los datos para crear tu cuenta.</p>
                                                <input type="text" class="form-control mb-2" placeholder="Nombres">
                                                <input type="text" class="form-control mb-2" placeholder="Apellidos">
                                                <input type="email" class="form-control mb-2" placeholder="Correo electronico">
                                                <input type="text" class="form-control mb-2" placeholder="tipo de documento">
                                                <input type="text" class="form-control mb-2" placeholder="Numero de documento">
                                                <input type="date" class="form-control mb-2" placeholder="Fecha de nacimiento">
                                                <input type="number" class="form-control mb-2" placeholder="Numero de celular">
                                                <input type="password" class="form-control mb-2" placeholder="Contraseña">
                                                <div class="checkbox auth-checkbox font-small-2 mb-3">
                                                    <input type="checkbox" id="auth-ligin">
                                                    <label for="auth-ligin"><span>Acepto terminos y condiciones</span></label>
                                                </div>
                                                <div class="d-flex justify-content-between flex-sm-row flex-column">
                                                    <a href="{{url('inicio-sesion')}}" class="btn bg-light-primary mb-2 mb-sm-0">Iniciar sesion</a>
                                                    <a href="auth-login.html" class="btn btn-primary">Registrarse</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Registration Page Ends-->

            </div>
        </div>
        <!-- END : End Main Content-->
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- BEGIN VENDOR JS-->
<script src="{{url('js/app/app.js')}}"></script>

</body>
<!-- END : Body-->
</html>
