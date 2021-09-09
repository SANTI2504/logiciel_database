@extends('layouts.app')

@section('title')
    LDB-Detalles-Historial
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
                            <a href="{{url('menu/clinical')}}" itemprop="item">
                                <span itemprop="name">Menu clinical</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem">
                            <a href="{{url('clinical/historial-medico')}}" itemprop="item">
                                <span itemprop="name">Historial Medico</span>
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
                        <div class="content-header"> Historial Medico
                            De {{$history -> patient -> name}} {{$history -> patient -> lastnames}}</div>

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
                                            <h3 class="info text-uppercase">Historial Medico</h3>
                                            <p>ID: {{$history -> id}}</p>
                                            <p>{{$history->created_at}}</p>
                                        </div>
                                    </div>
                                    <!-- Invoice Company Details ends -->
                                    <!-- Invoice Customer Details starts -->

                                    <div id="invoice-customer-details" class="row">
                                        <div class="col-12 text-center p-1">
                                            <span class="badge bg-light-info m-2 p-2">DATOS DEL PACIENTE</span>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table  table-hover table-sm table-responsive-sm">
                                                        <tbody>
                                                        <tr>
                                                            <th>Nombre completo:</th>
                                                            <td class="text-right">{{$history->patient->name}} {{$history->patient->lastnames}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tipo de documento:</th>
                                                            <td class="text-right">{{$history->patient->type_document->name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>No. documento:</th>
                                                            <td class="text-right">{{$history->patient->number_document}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Fecha de nacimiento:</th>
                                                            <td class="text-right">{{$history->patient->date_of_bird}}</td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table table-hover table-sm table-responsive-sm">
                                                        <tbody>

                                                        <tr>
                                                            <th>Correo electronico:</th>
                                                            <td class="text-right">{{$history->patient->email}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>No. contacto:</th>
                                                            <td class="text-right">{{$history->patient->number_cell}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Sexo:</th>
                                                            <td class="text-right">{{$history->patient->gender->name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>EPS:</th>
                                                            <td class="text-right">{{$history->patient->eps->name}}</td>
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
                                    <div id="invoice-items-details">
                                        <div class="col-12 text-center p-1">
                                            <span class="badge bg-light-info m-2 p-2">Examenes realizados</span>
                                        </div>

                                        <div class="row">
                                            <div class="table-responsive col-12">
                                                <table class="table mt-3 table-sm">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Especialista</th>
                                                        <th>Razon de consulta</th>
                                                        <th>Sintomas</th>
                                                        <th>Diagnostico</th>
                                                        <th>Fecha</th>
                                                        <th>acciones</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($exam as $exams)
                                                        <tr>
                                                            <td>{{$exams-> id}}</td>
                                                            <td>{{$exams-> appointment -> specialist -> name}} {{$exams-> appointment -> specialist -> lastnames}}</td>
                                                            <td>{{$exams-> reason_consultation}} </td>
                                                            <td>{{$exams-> symptom}} </td>
                                                            <td>{{$exams-> diagnosis}} </td>
                                                            <td>{{$exams-> created_at}} </td>
                                                            <td><a type="button" class="btn-sm bg-light-primary" href="{{url('clinical/examen-medico/'.$exams->id.'/show')}}">+ Detalles</a></td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                <hr style="border-top: 1px solid grey;">
                                            </div>
                                        </div>
                                    <!-- Invoice Items Details ends -->

                                        <div id="invoice-customer-details" class="row">
                                            <div class="col-12 text-center p-1">
                                                <span class="badge bg-light-info m-2 p-2">ANTECEDENTES</span>
                                            </div>

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <table class="table  table-hover table-sm table-responsive-sm">
                                                            <tbody>
                                                            <tr>
                                                                <th>Antecedentes Personales:</th>
                                                                <td class="text-right">{{$history->personal_history}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Antecedentes Familiares:</th>
                                                                <td class="text-right">{{$history->family_history}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Antecedentes Quirurgicos:</th>
                                                                <td class="text-right">{{$history->surgical_history}}</td>
                                                            </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="border-top: 1px solid grey;">

                                    <!-- Invoice Footer starts -->
                                        <div id="invoice-footer">
                                            <div class="row mt-2 mt-sm-0">

                                                <div class="col-12 col-md-6">
                                                    <div class="signature text-center">
                                                        <p>Autorizado por</p>
                                                        <img src="/img/firmas/firma-ejemplo.png"
                                                             alt="firma" width="200">
                                                        <h6 class="mt-4">
                                                            Dr(a). Diana V. Rey </h6>
                                                        <p class="text-muted">Optometra U. de la Salle</p>

                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="signature text-center">
                                                        <p>Paciente</p>
                                                        <img src="/img/firmas/firma-ejemplo.png"
                                                             alt="firma" width="200">
                                                        <h6 class="mt-4">
                                                            Sr(a). {{$history->patient->name}} {{$history->patient->lastnames}}</h6>
                                                        <h6> {{$history->patient->number_document}} </h6>
                                                        <p class="text-muted"></p>

                                                    </div>
                                                </div>
                                            </div>
                                            <hr style="border-top: 1px solid grey;">
                                            <div class="col-12">
                                                <div class="terms-conditions mb-2">
                                                    <h6>Terminos &amp; Condiciones</h6>
                                                    <p> El examen medico Es un documento privado, obligatorio y sometido
                                                        a reserva, en el
                                                        cual se registran las condiciones de salud del
                                                        paciente, los actos médicos y los demás procedimientos
                                                        ejecutados por el equipo de salud que interviene en su atención.
                                                        Dicho documento únicamente puede ser conocido por terceros
                                                        previa autorización del paciente o en los casos previstos por la
                                                        ley.</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12 text-center text-sm-right">
                                                    <button type="button" class="btn btn-primary btn-print mt-2 mt-md-1"><i
                                                            class="ft-printer mr-1"></i>Imprimir
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- Invoice Footer ends -->
                                </div>
                            </div>
                        </div>
                        <!-- end card-->
                    </div>
                </div>
                <!-- Basic Form ends -->
                <!-- Table ends -->
            </section>

        </div>
    </div>
    <!-- END : End Main Content-->
@endsection
