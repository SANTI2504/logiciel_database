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
                    <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                        itemtype="http://schema.org/ListItem">
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
                        <div class="card-box bg-blue">
                            <div class="inner">
                                <h5 class="font-weight-bold"> USUARIOS </h5>
                                <p> Gestiona y administra usuarios del sistema. </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <a href="{{url('menu/usuarios')}}" class="card-box-footer">Ingresa <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- end card user-->

                    <div class="col-md-6 col-12">
                        <div class="card-box bg-green">
                            <div class="inner">
                                <h5 class="font-weight-bold"> CITAS </h5>
                                <p> Gestiona y administra citas medicas. </p>
                            </div>
                            <div class="icon">
                                <i class="fa  fa-clock-o" aria-hidden="true"></i>
                            </div>
                            <a href="{{url('menu/citas')}}" class="card-box-footer">Ingresa <i class="fa fa-arrow-circle-right  "></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card-box bg-orange">
                            <div class="inner">
                                <h5 class="font-weight-bold"> HISTORIAL MEDICO </h5>
                                <p> Gestiona y administra historias medicas. </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </div>
                            <a href="{{url('menu/clinical')}}" class="card-box-footer">Ingresa <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card-box bg-red">
                            <div class="inner">
                                <h5 class="font-weight-bold"> INVENTARIOS Y PRODUCTOS </h5>
                                <p> Gestiona y administra el inventario. </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-list-alt"></i>
                            </div>
                            <a href="#" class="card-box-footer">Ingresa <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection





