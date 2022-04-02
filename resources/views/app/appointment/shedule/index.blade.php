@extends('layouts.app')
@section('title')
    LDB-Calendario-Agendamiento
@endsection

@section('content')
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
                                <span itemprop="name">Menu citas</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem">

                            <span itemprop="name">Calendario citas</span>

                            <meta itemprop="position" content="2">
                        </li>

                    </ol>
                </nav>
                <!-- end migas de pan-->
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">Calendario: Agendamiento de citas</div>

                    </div>
                </div>

                <!-- Table starts -->
                <!-- Basic Form starts -->
                <div class="col col-12">
                    <div class="card">
                        <span class="badge   bg-light-success p-2">CALENDARIO DE CITAS</span>
                        <div class="card-header">

                            <!-- start validaciones -->
                            @if(count($errors)>0)

                                @foreach($errors->all() as $error)
                                    <span class="badge bg-light-danger p-2 m-1" role="alert">
                                        <i class="ft-alert-triangle"></i>
                                            {{$error}}
                                    </span>
                            @endforeach
                        @endif
                        <!-- end validaciones-->
                        </div>
                        <div class="card-body ">
                            <div class="container">
                                <div id="calendar">

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

@endsection

@section('modales')
    <!-- Modal -->
    <div class="modal fade" id="evento" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Agenda tu cita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="formularioEventos">
                    @csrf
                    <!-- start validaciones -->
                        <!-- end validaciones-->
                        <div class="form-row" >
                            <div class="col-md-12 col-12">
                                <div class="form-group mb-2">
                                    <label for="id">ID</label>
                                    <input type="text" class="form-control" name="id" id="id" aria-describedby="" readonly>
                                    <small id="HelpId" class="form-text text-muted">El id es un dato automatico y no se puede modificar</small>
                                </div>
                            </div>
                        </div>
                        <div class="form-row" hidden>
                            <div class="col-md-12 col-12">
                                <div class="form-group mb-2">
                                    <label for="title">Titulo</label>
                                    <input type="text" class="form-control" name="title" id="title" value="Agendamiento" aria-describedby="">
                                    <small id="HelpId" class="form-text text-muted">Help text</small>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12 col-12">
                                <div class="form-group mb-2">
                                    <label for="basic-form-6">Tipo de cita *</label>
                                    <select class="form-control mb-2" name="type_appointments_id"
                                            id="type_appointments_id">
                                        <option value="none" selected disabled>Seleccionar</option>
                                        <!--usamos los datos de la tabla type_documents-->
                                        @foreach($type_appointments as $type_appointment)
                                            <option
                                                value="{{$type_appointment->id}}">{{$type_appointment->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="date">Fecha</label>
                                    <input type="date" class="form-control" name="date" id="date" aria-describedby="" >
                                    <small id="HelpId" class="form-text text-muted">ejemplo hora</small>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="basic-form-6">Hora</label>
                                <select class=" form-control mb-2" name="time" id="time">
                                    <option value="none" selected disabled>Seleccionar</option>
                                    <!--usamos los datos de la tabla type_documents-->
                                    @foreach($available_times as $available_time)
                                        <option
                                            value="{{$available_time->id}}">{{$available_time->time}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12 col-12">
                                <div class="form-group mb-2">
                                    <label for="basic-form-6">Paciente *</label>
                                    <select class=" form-control mb-2" name="patients_id"
                                            id="patients_id">
                                        <option value="none" selected disabled>Seleccionar</option>
                                        <option value="">Sin asignar</option>
                                        <!--usamos los datos de la tabla type_documents-->
                                        @foreach($patients as $patient)
                                            <option
                                                value="{{$patient->id}}">{{$patient->name}} {{$patient->lastnames}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 col-12">
                                <div class="form-group mb-2">
                                    <label for="basic-form-6">Especialista *</label>
                                    <select class=" form-control mb-2" name="specialists_id"
                                            id="specialists_id" data-live-search="true">
                                        <option value="none" selected disabled>Seleccionar</option>
                                        <!--usamos los datos de la tabla type_documents-->
                                        @foreach($specialists as $specialist)
                                            <option
                                                value="{{$specialist->id}}">{{$specialist->name}} {{$specialist->lastnames}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnGuardar" >Guardar</button>
                    <button type="button" class="btn btn-warning" id="btnModificar" >Modificar</button>
                    <button type="button" class="btn btn-danger" id="btnEliminar" >Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="/js/app/schedule.js"></script>

    <script type="text/javascript">
        //recibe la url de acceso al de public
        var baseURL = {!! json_encode(url('/')) !!};
    </script>
@endsection


