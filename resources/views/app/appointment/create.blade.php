@extends('layouts.app')

@section('title')
    LDB-Crear-Cita
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

                            <span itemprop="name">Crear</span>

                            <meta itemprop="position" content="2">
                        </li>

                    </ol>
                </nav>
                <!-- end migas de pan-->
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">Crear nueva cita</div>

                    </div>
                </div>

                <!-- Table starts -->
                <!-- Basic Form starts -->
                <div class="col col-12">
                    <div class="card">
                        <span class="badge   bg-light-success p-2">LLENA TODOS LOS DATOS DEL FORMULARIO</span>
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
                            <form method="POST" novalidate action="{{url('agendar-citas')}}">
                                @csrf

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
                                            <select class="select2 form-control mb-2" name="type_appointments_id"
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
                                        <select class="select2 form-control mb-2" name="time" id="time">
                                            <option value="none" selected disabled>Seleccionar</option>
                                            <!--usamos los datos de la tabla type_documents-->
                                            @foreach($available_times as $available_time)
                                                <option
                                                    value="{{$available_time->time}}">{{$available_time->time}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-6">Paciente *</label>
                                            <select class="select2 form-control mb-2" name="patients_id"
                                                    id="patients_id">
                                                <option value="none" selected disabled>Seleccionar</option>
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
                                            <select class="select2 form-control mb-2" name="specialists_id"
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
                                <button type="submit" class="btn bg-light-primary mr-1 mb-1 mb-sm-0 form-crear"><i
                                        class="ft-check-square mr-1"></i>Guardar
                                </button>
                                <a href="{{url('agendar-citas')}}" type="button"
                                   class="btn bg-light-secondary mr-1 mb-1 mb-sm-0"><i class="ft-x mr-1"></i>Cancelar
                                </a>
                            </form>
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
