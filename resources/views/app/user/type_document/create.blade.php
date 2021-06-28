@extends('layouts.app')

@section('title')
    LDB-Crear-TipoDocumento
@endsection

@section('content')
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-overlay"></div>
            <div class="content-wrapper"><section class="users-list-wrapper">
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
                                <a href="{{url('menu/usuarios')}}" itemprop="item">
                                    <span itemprop="name">Menu usuarios</span>
                                </a>
                                <meta itemprop="position" content="1">
                            </li>
                            <li class="breadcrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                                <a href="{{url('usuarios/tipo-documento')}}" itemprop="item">
                                    <span itemprop="name">Tipo documento</span>
                                </a>
                                <meta itemprop="position" content="1">
                            </li>
                            <li class="breadcrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">

                                <span itemprop="name">Crear nuevo</span>

                                <meta itemprop="position" content="2">
                            </li>

                        </ol>
                    </nav>
                    <!-- end migas de pan-->
                    <div class="row">
                        <div class="col-12">
                            <div class="content-header">Crear nuevo tipo de documento</div>

                        </div>
                    </div>

                    <!-- Table starts -->
                    <!-- Basic Form starts -->
                    <div class="col col-12">
                        <div class="card">
                            <div class="card-header">

                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p>Llena todos los datos para guardar.</p>
                                    <form action="{{url('usuarios/tipo-documento')}}" method="POST">
                                        @csrf

                                        <div class="form-row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group mb-2">
                                                    <label for="basic-form-1">Nombre del tipo de documento</label>
                                                    <input type="text" id="name" name="name" class="form-control" placeholder="Ej: Cedula de ciudadania">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2"><i class="ft-check-square mr-1"></i>Guardar</button>
                                        <a href="{{url('usuarios/tipo-documento')}}"type="button" class="btn btn-secondary"><i class="ft-x mr-1"></i>Cancelar </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Basic Form ends -->
                    <!-- Table ends -->
                </section>

            </div>
        </div>
        <!-- END : End Main Content-->
@endsection
