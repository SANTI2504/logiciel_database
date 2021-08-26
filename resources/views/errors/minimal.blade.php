
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
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" href="{{url('css/app/app.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END : Head-->

<!-- BEGIN : Body-->
<body class="vertical-layout vertical-menu 1-column auth-page navbar-sticky blank-page bg-light-info" data-menu="vertical-menu" data-col="1-column">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-overlay"></div>
            <div class="content-wrapper"><!--Error page starts-->
                <section id="error" class="auth-height">
                    <div class="container-fluid">
                        <div class="row full-height-vh">
                            <div class="col-12 d-flex align-items-center justify-content-center">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        @yield('img')
                                        <h1 class="mt-4"> @yield('code') </h1>
                                        <div class="w-75 error-text mx-auto mt-4">
                                            <p>  @yield('message') </p>
                                        </div>
                                        @yield('buttons')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Error page ends-->

            </div>
        </div>
        <!-- END : End Main Content-->

    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<!-- BEGIN: Custom CSS-->

<!-- END: Custom CSS-->
</body>
<!-- END : Body-->
</html>
