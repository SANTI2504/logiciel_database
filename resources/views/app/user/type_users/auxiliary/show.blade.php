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
                                <span itemprop="name">Menú usuarios</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem">
                            <a href="{{url('menu/tipos-de-usuarios')}}" itemprop="item">
                                <span itemprop="name">Menú tipos de usuarios</span>
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
                    <div class="col-12 col-md-11 ">
                        <div class="card border-primary mb-3">
                            <div class="card-header bg-success text-center font-weight-bolder pb-3">
                                DATOS DEL AUXILIAR {{$auxiliary -> id}}
                            </div>
                            <div class="card-body ">
                                <div id="invoice-customer-details" class="row m-1">
                                    <div class="col-md-6 col-12 border-right border-left">
                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table  table-hover table-sm ">
                                                    <tbody>
                                                    <tr>
                                                        <th>Nombres:</th>
                                                        <td class="text-right">{{$auxiliary->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Apellidos:</th>
                                                        <td class="text-right">{{$auxiliary->lastnames}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tipo de documento:</th>
                                                        <td class="text-right">{{$auxiliary->type_document->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>No. documento:</th>
                                                        <td class="text-right">{{$auxiliary->number_document}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Fecha de nacimiento:</th>
                                                        <td class="text-right">{{$auxiliary->date_of_bird}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Sexo:</th>
                                                        <td class="text-right">{{$auxiliary->gender->name}}</td>
                                                    </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 border-right border-left">
                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table table-hover table-sm ">
                                                    <tbody>
                                                    <tr>
                                                        <th>Estado civil:</th>
                                                        <td class="text-right">{{$auxiliary->civil_status->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>EPS:</th>
                                                        <td class="text-right">{{$auxiliary->eps->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Correo electrónico:</th>
                                                        <td class="text-right">{{$auxiliary->email}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>No. contacto:</th>
                                                        <td class="text-right">{{$auxiliary->number_cell}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Dirección:</th>
                                                        <td class="text-right">{{$auxiliary->address}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>C-L-B</th>
                                                        <td class="text-right">{{$auxiliary->city}}
                                                            -{{$auxiliary->location}}-{{$auxiliary->neighborhood}}</td>
                                                    </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
