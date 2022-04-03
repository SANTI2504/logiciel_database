@extends('layouts.app')

@section('title')
    LDB-Detalles-Cita
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
                            <a href="{{url('menu/citas')}}" itemprop="item">
                                <span itemprop="name">Menú citas</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem">
                            <a href="{{url('agendar-citas')}}" itemprop="item">
                                <span itemprop="name">Citas</span>
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
                        <div class="content-header"> Cita del paciente
                            {{$appointment -> patient -> name}} {{$appointment -> patient -> lastnames}}</div>

                    </div>
                </div>

                <!-- Table starts -->
                <!-- Basic Form starts -->
                <div class="row justify-content-center">
                    <div class="col col-11">
                        <div class="card">
                            <div class="card-content p-3">
                                <div id="invoice-template" class="card-body pb-0">
                                    <!-- Invoice Company Details starts -->
                                    <div id="invoice-company-details" class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="media">
                                                <img src="/img/logo-LDB.png" alt="company logo"
                                                     width="80" height="80">
                                                <div class="media-body ml-4">
                                                    <ul class="m-0 list-unstyled">
                                                        <li class="text-bold-800">OPTICA VISON MEDICS</li>
                                                        <li>Carrera. 79a #42 f</li>
                                                        <li>Kennedy, Bogotá, CO</li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-12 text-right">
                                            <h3 class="info text-uppercase">Cita Agendada</h3>
                                            <p>ID: {{$appointment -> id}}</p>
                                            <p>{{$appointment->created_at}}</p>
                                        </div>
                                    </div>
                                    <!-- Invoice Company Details ends -->
                                    <!-- Invoice Customer Details starts -->

                                    <div id="invoice-customer-details" class="row">
                                        <div class="col-12 text-center p-1">
                                            <span class="badge bg-light-info m-2 p-2">DATOS DEL PACIENTE</span>
                                        </div>
                                        <div class="col-md-6 col-12 table-responsive">
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table  table-hover table-sm">
                                                        <tbody>
                                                        <tr>
                                                            <th>Nombre completo:</th>
                                                            <td class="text-right">{{$appointment -> patient-> name}} {{$appointment->patient->lastnames}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tipo de documento:</th>
                                                            <td class="text-right">{{$appointment ->patient->type_document->name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>No. documento:</th>
                                                            <td class="text-right">{{$appointment ->patient->number_document}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Fecha de nacimiento:</th>
                                                            <td class="text-right">{{$appointment ->patient->date_of_bird}}</td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 table-responsive">
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table table-hover table-sm">
                                                        <tbody>

                                                        <tr>
                                                            <th>Correo electrónico:</th>
                                                            <td class="text-right">{{$appointment ->patient->email}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>No. contacto:</th>
                                                            <td class="text-right">{{$appointment ->patient->number_cell}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Sexo:</th>
                                                            <td class="text-right">{{$appointment ->patient->gender->name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>EPS:</th>
                                                            <td class="text-right">{{$appointment ->patient->eps->name}}</td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border-top: 1px solid grey;">
                                    <div id="invoice-customer-details" class="row ">
                                        <div class="col-12 text-center p-1">
                                            <span class="badge bg-light-info m-2 p-2">DATOS DE LA CITA</span>
                                        </div>
                                        <div class="col-md-6 col-12 table-responsive ">
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table  table-hover table-sm ">
                                                        <tbody>
                                                        <tr>
                                                            <th>ID:</th>
                                                            <td class="text-right">{{$appointment-> id}} </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Fecha:</th>
                                                            <td class="text-right">{{$appointment-> date}} </td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 table-responsive">
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table table-hover table-sm">
                                                        <tbody>
                                                        <tr>
                                                            <th>Especialista:</th>
                                                            <td class="text-right">{{$appointment-> specialist-> name}} {{$appointment-> specialist-> lastnames}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Hora:</th>
                                                            <td class="text-right">{{$appointment-> time}} </td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border-top: 1px solid grey;">
                                    <!-- Invoice Customer Details ends -->
                                    <!-- Invoice Items Details starts -->
                                    <!-- Invoice Footer starts -->
                                    <div id="invoice-footer">


                                        <div class="col-12">
                                            <div class="terms-conditions mb-2">
                                                <h6>¡IMPORTANTE!</h6>
                                                <p>
                                                    - Debera asistir al lugar de la cita por lo menos con 5 minutos de anticipacion,
                                                    de lo contrario la cita sera cancelada.
                                                    - la cita no tiene ningun costos siempre y cuando el paciente adquiera las gafas en Vision Medics
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 text-center text-sm-right">
                                                <button type="button"
                                                        class="btn btn-primary btn-print mt-2 mt-md-1"><i
                                                        class="ft-printer mr-1"></i>Imprimir
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Invoice Footer ends -->

                                </div>
                            </div>
                            <!-- end card-->
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
