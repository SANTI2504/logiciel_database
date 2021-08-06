@extends('layouts.app')

@section('title')
    LDB-Detalles-Paciente
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
                            <a href="{{url('usuarios/pacientes')}}" itemprop="item">
                                <span itemprop="name">Pacientes</span>
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
                        <div class="content-header">Ver detalles del paciente</div>

                    </div>
                </div>

                <!-- Table starts -->
                <!-- Basic Form starts -->
                <div class="row justify-content-center">
                    <div class="col col-9 ">
                        <div class="card border-primary mb-3">
                            <div class="card-header bg-success text-center font-weight-bolder pb-3">
                                DATOS DEL PACIENTE {{$patient -> id}}
                            </div>
                            <div class="card-body ">
                                <table class="table table-striped table-bordered table-hover">

                                    <tr>
                                        <th class="col-5">NOMBRES</th>
                                        <td class="col-7">{{$patient-> name}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5">APELLIDOS</th>
                                        <td class="col-7">{{$patient-> lastnames}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5">TIPO DE DOCUMENTO</th>
                                        <td class="col-7">{{$patient-> type_document -> name }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5"># DOCUMENTO</th>
                                        <td class="col-7">{{$patient-> number_document}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5">TELEFONO DE CONTACTO</th>
                                        <td class="col-7">{{$patient-> number_cell}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5">CORREO ELECTRONICO</th>
                                        <td class="col-7">{{$patient-> email}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5">ROL</th>
                                        <td class="col-7">{{$patient-> role -> name}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5">EPS</th>
                                        <td class="col-7">{{$patient-> eps -> name}}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-5">FECHA DE NACIMIENTO</th>
                                        <td class="col-7">{{$patient-> date_of_bird}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-outline-primary mb-1 mr-1" id="">Progress Bar</button>
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
