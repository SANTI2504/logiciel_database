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
                    <div class="col-12 col-md-11 ">
                        <div class="card border-primary mb-3">
                            <div class="card-header bg-success text-center font-weight-bolder pb-3">
                                DATOS DEL PACIENTE {{$patient -> id}}
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
                                                        <td class="text-right">{{$patient->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Apellidos:</th>
                                                        <td class="text-right">{{$patient->lastnames}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tipo de documento:</th>
                                                        <td class="text-right">{{$patient->type_document->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>No. documento:</th>
                                                        <td class="text-right">{{$patient->number_document}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Fecha de nacimiento:</th>
                                                        <td class="text-right">{{$patient->date_of_bird}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nombre acompañante:</th>
                                                        <td class="text-right">{{$patient->accompanist_name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Celular acompañante:</th>
                                                        <td class="text-right">{{$patient->accompanist_cell}}</td>
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
                                                        <th>Sexo:</th>
                                                        <td class="text-right">{{$patient->gender->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Estado civil:</th>
                                                        <td class="text-right">{{$patient->civil_status->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>EPS:</th>
                                                        <td class="text-right">{{$patient->eps->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Correo electrónico:</th>
                                                        <td class="text-right">{{$patient->email}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>No. contacto:</th>
                                                        <td class="text-right">{{$patient->number_cell}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Dirección:</th>
                                                        <td class="text-right">{{$patient->address}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>C-L-B</th>
                                                        <td class="text-right">{{$patient->city}}
                                                            -{{$patient->location}}-{{$patient->neighborhood}}</td>
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
