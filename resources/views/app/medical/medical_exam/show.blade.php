@extends('layouts.app')

@section('title')
    LDB-Detalles-Examen
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
                                <span itemprop="name">Menú clinical</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem">
                            <a href="{{url('clinical/historial-medico')}}" itemprop="item">
                                <span itemprop="name">Historial médico</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem">
                            <a href="{{url('clinical/examen-medico', $exam -> history -> id)}}" itemprop="item">
                                <span itemprop="name">Exámenes médicos</span>
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
                        <div class="content-header"> Examen Médico
                            De {{$exam -> history -> patient -> name}} {{$exam -> history -> patient -> lastnames}}</div>

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
                                            <h3 class="info text-uppercase">Examen Médico</h3>
                                            <p>ID: {{$exam -> id}}</p>
                                            <p>{{$exam -> created_at}}</p>
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
                                                            <td class="text-right">{{$exam -> history-> patient-> name}} {{$exam -> history->patient->lastnames}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tipo de documento:</th>
                                                            <td class="text-right">{{$exam -> history->patient->type_document->name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>No. documento:</th>
                                                            <td class="text-right">{{$exam -> history->patient->number_document}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Fecha de nacimiento:</th>
                                                            <td class="text-right">{{$exam -> history->patient->date_of_bird}}</td>
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
                                                            <td class="text-right">{{$exam -> history->patient->email}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>No. contacto:</th>
                                                            <td class="text-right">{{$exam -> history->patient->number_cell}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Sexo:</th>
                                                            <td class="text-right">{{$exam -> history->patient->gender->name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>EPS:</th>
                                                            <td class="text-right">{{$exam -> history->patient->eps->name}}</td>
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
                                                            <td class="text-right">{{$exam -> appointment-> id}} </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Fecha:</th>
                                                            <td class="text-right">{{$exam -> appointment-> date}} </td>
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
                                                            <td class="text-right">{{$exam -> appointment-> specialist-> name}} {{$exam -> appointment-> specialist-> lastnames}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Hora:</th>
                                                            <td class="text-right">{{$exam -> appointment-> time}} </td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border-top: 1px solid grey;">

                                    <div id="invoice-customer-details" class="row">
                                        <div class="col-12 text-center p-1">
                                            <span class="badge bg-light-info m-2 p-2">EXAMEN DE AGUDEZA VISUAL</span>
                                        </div>

                                        <div class="col-12 table-responsive ">
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table table-bordered table-sm m-0">
                                                        <tr class="text-center">
                                                            <th rowspan="2"></th>
                                                            <th colspan="2">Sin corrección</th>
                                                            <th colspan="2">Con corrección</th>
                                                            <th rowspan="2">PH</th>
                                                            <th rowspan="2">Lensometría</th>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <th>Visión lejana</th>
                                                            <th>Visión próxima</th>
                                                            <th>Visión lejana</th>
                                                            <th>Visión próxima</th>
                                                        </tr>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">Ojo derecho:</th>
                                                            <td>
                                                                {{$exam ->sc_vl_od}}
                                                            </td>
                                                            <td>
                                                                {{$exam ->sc_vp_od}}
                                                            </td>
                                                            <td>
                                                                {{$exam ->cc_vl_od}}
                                                            </td>
                                                            <td>
                                                                {{$exam ->cc_vp_od}}
                                                            </td>
                                                            <td>
                                                                {{$exam ->ph_od}}
                                                            </td>
                                                            <td>
                                                                {{$exam ->lensometria_od}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ojo izquierdo:</th>
                                                            <td>
                                                                {{$exam ->sc_vl_oi}}
                                                            </td>
                                                            <td>
                                                                {{$exam ->sc_vp_oi}}
                                                            </td>
                                                            <td>
                                                                {{$exam ->cc_vl_oi}}
                                                            </td>
                                                            <td>
                                                                {{$exam ->cc_vp_oi}}
                                                            </td>
                                                            <td>
                                                                {{$exam ->ph_oi}}
                                                            </td>
                                                            <td>
                                                                {{$exam ->lensometria_oi}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ambos ojos:</th>
                                                            <td>
                                                                {{$exam ->sc_vl_ao}}
                                                            </td>
                                                            <td>
                                                                {{$exam ->sc_vp_ao}}
                                                            </td>
                                                            <td>
                                                                {{$exam ->cc_vl_ao}}
                                                            </td>
                                                            <td>
                                                                {{$exam ->cc_vp_ao}}
                                                            </td>
                                                            <td>
                                                                {{$exam ->ph_ao}}
                                                            </td>
                                                            <td>
                                                                {{$exam ->lensometria_ao}}
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border-top: 1px solid grey;">
                                    <div id="invoice-customer-details" class="row">
                                        <div class="col-12 text-center p-1">
                                            <span class="badge bg-light-info m-2 p-2">EXAMEN DE REFRACCION</span>
                                        </div>

                                        <div class="col-12 table-responsive ">
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table table-bordered table-sm m-0">
                                                        <tr class="text-center">
                                                            <th></th>
                                                            <th>Retinoscopia</th>
                                                            <th>Afinación</th>
                                                            <th>Agudeza visual</th>
                                                        </tr>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">Ojo derecho:</th>
                                                            <td>
                                                                {{$exam -> retinoscopia_od}}
                                                            </td>
                                                            <td>
                                                                {{$exam -> afinacion_od}}
                                                            </td>
                                                            <td>
                                                                {{$exam -> agudeza_vis_od}}
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ojo izquierdo:</th>
                                                            <td>
                                                                {{$exam -> retinoscopia_oi}}
                                                            </td>
                                                            <td>
                                                                {{$exam -> afinacion_oi}}
                                                            </td>
                                                            <td>
                                                                {{$exam -> agudeza_vis_oi}}
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border-top: 1px solid grey;">

                                    <div id="invoice-customer-details" class="row">
                                        <div class="col-12 text-center p-1">
                                            <span class="badge bg-light-info m-2 p-2">OTROS EXAMENES</span>
                                        </div>
                                        <div class="col-md-6 col-12 table-responsive">
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table table-sm table-hover  ">
                                                        <tbody class="table-striped ">

                                                        <tr>
                                                            <th>Queratometría:</th>
                                                            <td class="text-right">{{$exam -> keratometry}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Examen motor:</th>
                                                            <td class="text-right">{{$exam -> motor_test}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Ciclopejia:</th>
                                                            <td class="text-right">{{$exam -> ciclopejia}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Distancia pupilar:</th>
                                                            <td class="text-right">{{$exam -> pupillary_distance}}</td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 table-responsive">
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table table-sm table-hover  ">
                                                        <tbody class="table-striped ">
                                                        <tr>
                                                            <th>Biomicroscopia:</th>
                                                            <td class="text-right">{{$exam -> biomicroscopy}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Examen de fondo de ojo:</th>
                                                            <td class="text-right">{{$exam -> exam_bottom_eye}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Adición:</th>
                                                            <td class="text-right">{{$exam -> addiction}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Exámenes de apoyo diagnóstico y/o remisiones:</th>
                                                            <td class="text-right">{{$exam -> diagnostic_exam_support_rem}}</td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border-top: 1px solid grey;">

                                    <div id="invoice-customer-details" class="row">
                                        <div class="col-12 text-center p-1">
                                            <span class="badge bg-light-info m-2 p-2">RESULTADOS DE LA CONSULTA</span>
                                        </div>
                                        <div class="col-md-6 col-12 table-responsive">
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table table-sm table-hover  ">
                                                        <tbody class="table-striped ">
                                                        <tr>
                                                            <th>Razón de la consulta:</th>
                                                            <td class="text-right">{{$exam -> reason_consultation}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Síntomas:</th>
                                                            <td class="text-right">{{$exam -> symptom}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Control:</th>
                                                            <td class="text-right">{{$exam -> control}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Conducta:</th>
                                                            <td class="text-right">{{$exam -> conduct}}</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 table-responsive">
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table table-sm table-hover  ">
                                                        <tbody class="table-striped ">
                                                        <tr>
                                                            <th>origen de la enfermedad::</th>
                                                            <td class="text-right">{{$exam -> identification_origen_disease_accident}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Diagnósticos:</th>
                                                            <td class="text-right">{{$exam -> diagnosis}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Medicamento:</th>
                                                            <td class="text-right">{{$exam -> medicine}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Farmacologicos:</th>
                                                            <td class="text-right">{{$exam -> pharmacological}}</td>
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
                                        <div class="row mt-2 mt-sm-0">

                                            <div class="col-12 col-md-6">
                                                <div class="signature text-center">
                                                    <p>Especialista</p>
                                                    <img src="/img/firmas/firma-ejemplo.png"
                                                         alt="firma" width="200">
                                                    <h6 class="mt-4">
                                                        Dr(a). {{$exam->appointment->specialist->name}} {{$exam->appointment->specialist->lastnames}} </h6>
                                                    <h6>{{$exam->appointment->specialist->type_document->name}} {{$exam->appointment->specialist->number_document}} </h6>
                                                    <p class="text-muted">Optometra U. de la Salle</p>

                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="signature text-center">
                                                    <p>Paciente</p>
                                                    <img src="/img/firmas/firma-ejemplo.png"
                                                         alt="firma" width="200">
                                                    <h6 class="mt-4">
                                                        Sr(a). {{$exam->appointment->patient->name}} {{$exam->appointment->patient->lastnames}}</h6>
                                                    <h6>{{$exam->appointment->patient->type_document->name}} {{$exam->appointment->patient->number_document}} </h6>
                                                    <p class="text-muted"></p>

                                                </div>
                                            </div>
                                        </div>
                                        <hr style="border-top: 1px solid grey;">
                                        <div class="col-12">
                                            <div class="terms-conditions mb-2">
                                                <h6>Terminos &amp; Condiciones</h6>
                                                <p>
                                                    El examen médico es un documento privado, obligatorio y sometido
                                                    a reserva, en el
                                                    cual se registran las condiciones de salud del
                                                    paciente, los actos médicos y los demás procedimientos
                                                    ejecutados por el equipo de salud que interviene en su atención.
                                                    Dicho documento únicamente puede ser conocido por terceros
                                                    previa autorización del paciente o en los casos previstos por la
                                                    ley.
                                                </p>
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

                        <!--end prueba -->
                    </div>
                </div>
                <!-- Basic Form ends -->
                <!-- Table ends -->
            </section>

        </div>
    </div>
    <!-- END : End Main Content-->
@endsection
