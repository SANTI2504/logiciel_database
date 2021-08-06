@extends('layouts.app')

@section('title')
    LDB-Tipos-usuarios
@endsection

@section('content')
    <!-- BEGIN : Main Content-->
    <div class="main-content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <!-- start migas de pan-->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                        itemtype="http://schema.org/ListItem">
                        <a href="{{url('inicio')}}" itemprop="item">
                            <span itemprop="name">Inicio</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                        itemtype="http://schema.org/ListItem">
                        <a href="{{url('menu/usuarios')}}" itemprop="item">
                            <span itemprop="name">Menu usuarios</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                        itemtype="http://schema.org/ListItem">

                        <span itemprop="name">Menu tipos de usuarios</span>

                        <meta itemprop="position" content="2">
                    </li>

                </ol>
            </nav>
            <!-- end migas de pan-->
            <!-- Minimal statistics section start -->
            <section id="minimal-statistics">
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">Menu Tipos de usuarios</div>
                        <!--<p class="content-sub-header mb-1">Statistics on minimal cards.</p>-->
                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-4 col-lg-6 col-12">
                        <a href="{{url('usuarios/pacientes')}}">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-center dark">
                                                <h3 class="mb-1 danger">Pacientes</h3>
                                                <spam>Ver Pacientes registrados</spam>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="ft-eye danger font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <a href="{{url('usuarios')}}">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-center dark">
                                                <h3 class="mb-1 danger">Usuarios</h3>
                                                <spam>Ver Usuarios registrados</spam>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="ft-eye danger font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </section>
            <!-- // Minimal statistics section end -->

        </div>
    </div>
    <!-- END : End Main Content-->
@endsection
