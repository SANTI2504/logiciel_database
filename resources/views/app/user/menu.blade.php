@extends('layouts.app')

@section('title')
    LDB-Usuarios
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

                        <span itemprop="name">Menú usuarios</span>

                        <meta itemprop="position" content="2">
                    </li>

                </ol>
            </nav>
            <!-- end migas de pan-->
            <!-- Minimal statistics section start -->
            <section id="minimal-statistics">
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">Menú de usuarios</div>
                        <!--<p class="content-sub-header mb-1">Statistics on minimal cards.</p>-->
                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-4 col-lg-6 col-12">
                        <a href="{{url('menu/tipos-de-usuarios')}}">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-center dark">
                                                <h3 class="mb-1 danger">Tipos de usuarios</h3>
                                                <spam>ver los tipos de usuarios</spam>
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
                        <a href="{{url('usuarios/roles')}}">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-center dark">
                                                <h3 class="mb-1 danger">Roles </h3>
                                                <spam>Crear-Editar-Eliminar</spam>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="ft-share-2 danger font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <a href="{{url('usuarios/tipo-documento')}}">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-center dark">
                                                <h3 class="mb-1 danger">Tipo documento </h3>
                                                <spam>Crear-Editar-Eliminar</spam>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="ft-file-minus danger font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <a href="{{url('usuarios/eps')}}">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-center dark">
                                                <h3 class="mb-1 danger">EPS </h3>
                                                <spam>Crear-Editar-Eliminar</spam>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="ft-file-minus danger font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <a href="{{url('usuarios/estado-civil')}}">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-center dark">
                                                <h3 class="mb-1 danger">Estado civil </h3>
                                                <spam>Crear-Editar-Eliminar</spam>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="ft-file-minus danger font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <a href="{{url('usuarios/generos')}}">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-center dark">
                                                <h3 class="mb-1 danger">Géneros </h3>
                                                <spam>Crear-Editar-Eliminar</spam>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="ft-file-minus danger font-large-2 float-right"></i>
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
