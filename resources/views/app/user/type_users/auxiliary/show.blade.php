@extends('layouts.app')

@section('title')
    LDB-Detalles-Auxiliar
@endsection

@section('content')
    <!-- BEGIN : Main Content-->
    <div class="main-content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <section class="users-list-wrapper">
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
                            <a href="{{url('menu/tipos-de-usuarios')}}" itemprop="item">
                                <span itemprop="name">Menu tipos de usuarios</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem">
                            <a href="{{url('usuarios/auxiliares')}}" itemprop="item">
                                <span itemprop="name">Auxiliares</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem">

                            <span itemprop="name">Detalles</span>

                            <meta itemprop="position" content="2">
                        </li>

                    </ol>
                </nav>
                <!-- end migas de pan-->
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">Ver detalles del auxiliar</div>

                    </div>
                </div>

                <!-- Table starts -->
                <!-- Basic Form starts -->
                <div class="row justify-content-center">
                    <div class="col col-9 ">
                        <div class="card border-primary mb-3">
                            <div class="card-header bg-success text-center font-weight-bolder pb-3">
                                DATOS DEL AUXILIAR {{$auxiliary -> id}}
                            </div>
                            <div class="card-body ">
                                <table class="table table-striped table-bordered table-hover">

                                    <tr>
                                        <th class="col-5">NOMBRES</th>
                                        <td class="col-7">{{$auxiliary-> name}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5">APELLIDOS</th>
                                        <td class="col-7">{{$auxiliary-> lastnames}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5">TIPO DE DOCUMENTO</th>
                                        <td class="col-7">{{$auxiliary-> type_document -> name }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5"># DOCUMENTO</th>
                                        <td class="col-7">{{$auxiliary-> number_document}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5">TELEFONO DE CONTACTO</th>
                                        <td class="col-7">{{$auxiliary-> number_cell}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5">CORREO ELECTRONICO</th>
                                        <td class="col-7">{{$auxiliary-> email}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5">ROL</th>
                                        <td class="col-7">{{$auxiliary-> role -> name}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5">EPS</th>
                                        <td class="col-7">{{$auxiliary-> eps -> name}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5">FECHA DE NACIMIENTO</th>
                                        <td class="col-7">{{$auxiliary-> date_of_bird}}</td>
                                    </tr>
                                </table>
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
