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
                                            <p class="text-bold-700 mb-1 ml-1">DATOS DEL PACIENTE</p>
                                        </div>

                                        <div class="col-md-6 col-12 border-right border-left">
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
                                        <div class="col-md-6 col-12 border-right border-left">
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
                                                            <td class="text-right">Indefinido</td>
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
                                    <!-- Invoice Customer Details ends -->
                                    <!-- Invoice Items Details starts -->
                                    <div id="invoice-items-details">
                                        <div class="row">
                                            <div class="table-responsive col-12">
                                                <table class="table mt-3">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Item &amp; Description</th>
                                                        <th class="text-right">Rate</th>
                                                        <th class="text-right">Hours</th>
                                                        <th class="text-right">Amount</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($exam as $exams)
                                                        <tr>
                                                            <td>{{$exams-> id}}</td>
                                                            <td>{{$exams-> medical_histories_id}} </td>
                                                            <td>{{$exams-> symptom}} </td>
                                                            <td></td>
                                                            <td><a type="button" class="btn bg-light-info" href="{{url('clinical/historial-medico/create')}}"> {{$history-> amount_visits}} Examenes</a></td>

                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row mt-3 mt-md-0">
                                            <div class="col-md-6 col-12 text-left">
                                                <p class="text-bold-700 mb-1 ml-1">Payment Methods:</p>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <table class="table table-borderless table-sm">
                                                            <tbody>
                                                            <tr>
                                                                <td>Bank name:</td>
                                                                <td class="text-right">ABC Bank, USA</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Acc name:</td>
                                                                <td class="text-right">Amanda Orton</td>
                                                            </tr>
                                                            <tr>
                                                                <td>IBAN:</td>
                                                                <td class="text-right">FGS165461646546AA</td>
                                                            </tr>
                                                            <tr>
                                                                <td>SWIFT code:</td>
                                                                <td class="text-right">BTNPP34</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <p class="text-bold-700 mb-2 ml-4">Total due</p>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <td>Sub Total</td>
                                                            <td class="text-right">$14,900.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>TAX (12%)</td>
                                                            <td class="text-right">$1,788.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold-800">Total</td>
                                                            <td class="text-bold-800 text-right"> $16,688.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Payment Made</td>
                                                            <td class="danger text-right">(-) $4,688.00</td>
                                                        </tr>
                                                        <tr class="text-bold-500">
                                                            <td>Balance Due</td>
                                                            <td class="text-right">$12,000.00</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Invoice Items Details ends -->
                                    <!-- Invoice Footer starts -->
                                    <div id="invoice-footer">
                                        <div class="row mt-2 mt-sm-0">

                                            <div class=" col-12">
                                                <div class="signature text-center">
                                                    <p>Authorized person</p>
                                                    <img src="../app-assets/img/pages/signature-scan.png"
                                                         alt="firma" width="250">
                                                    <h6 class="mt-4">Dra. Diana V. Rey </h6>
                                                    <p class="text-muted">Optometra U. de la Salle</p>

                                                </div>
                                            </div>
                                            <div class="terms-conditions mb-2">
                                                <h6>Terminos &amp; Condiciones</h6>
                                                <p> El historial medico Es un documento privado, obligatorio y sometido
                                                    a reserva, en el
                                                    cual se registran cronológicamente las condiciones de salud del
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
                                                        class="ft-printer mr-1"></i>Print Invoice
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Invoice Footer ends -->
                                </div>
                            </div>
                        </div>
                        <!-- end card-->
                        <table id="users-list-datatable" class="table table-hover file-export " >
                            <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombres Completos</th>
                                <th>No. Documento</th>
                                <th>No. Examenes</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($exam as $exams)
                                <tr>
                                    <td>{{$exams-> id}}</td>
                                    <td>{{$exams-> medical_histories_id}} </td>
                                    <td>{{$exams-> symptom}} </td>
                                    <td></td>
                                    <td><a type="button" class="btn bg-light-info" href="{{url('clinical/historial-medico/create')}}"> {{$history-> amount_visits}} Examenes</a></td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
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
