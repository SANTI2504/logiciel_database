@extends('layouts.app')

@section('title')
    LDB-MODULOS
@endsection

@section('content')
<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">

        <!-- start migas de pan-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li class="breadcrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                    <a href="#" itemprop="item">
                        <span itemprop="name">Inicio</span>
                    </a>
                    <meta itemprop="position" content="1">
                </li>

            </ol>
        </nav>
        <!-- end migas de pan-->

        <!-- Minimal statistics section start -->

        <section id="minimal-statistics">
            <div class="row">
                <div class="col-12">
                    <div class="content-header">Logiciel Data Base</div>
                    <p class="content-sub-header mb-1">Modulos del sistema.</p>
                </div>
            </div>
        </section>
        <!-- // Minimal statistics section end -->

        <!-- modulos del sistema -->
        <section id="bg-variants">
            <div class="row match-height">
                <!-- start card user-->
                <div class="col-md-6 col-12">
                    <div class="card card-inverse bg-info text-center" style="">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row d-flex">
                                    <div class="col align-self-center mb-2 mb-sm-0">
                                        <img src="../app-assets/img/user.png" alt="user" width="150" class="float-sm-left mt-sm-1">
                                    </div>
                                    <div class="col align-self-center mr-sm-4">
                                        <h4 class="card-title mb-3">USUARIOS</h4>
                                        <p class="card-text">Aca se pude registrar, actualizar y eliminar usuarios</p>
                                        <a href="{{url('menu/usuarios')}}" class="btn btn-info btn-darken-3">Ingresar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="card card-inverse bg-info text-center" style="">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row d-flex">
                                    <div class="col align-self-center mb-2 mb-sm-0">
                                        <img src="../app-assets/img/user.png" alt="user" width="150" class="float-sm-left mt-sm-1">
                                    </div>
                                    <div class="col align-self-center mr-sm-4">
                                        <h4 class="card-title mb-3">USUARIOS</h4>
                                        <p class="card-text">Aca se pude registrar, actualizar y eliminar usuarios</p>
                                        <a href="{{url('menu/usuarios')}}" class="btn btn-info btn-darken-3">Ingresar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- end card user-->

            </div>
        </section>
    </div>
</div>
@endsection





