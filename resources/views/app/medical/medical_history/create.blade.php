@extends('layouts.app')

@section('title')
    LDB-Crear-Historial
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
                            <span itemprop="name">Crear</span>
                            <meta itemprop="position" content="2">
                        </li>
                    </ol>
                </nav>
                <!-- end migas de pan-->
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">Crear nuevo historial</div>

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
                            <form method="POST" novalidate action="{{url('clinical/historial-medico')}}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-6">Paciente *</label>
                                            <select class="select2 form-control select2-hidden-accessible mb-2" name="patients_id"
                                                    id="">
                                                <option value="none" selected disabled>Seleccionar</option>
                                                <!--usamos los datos de la tabla type_documents-->
                                                @foreach($patients as $patient)
                                                    <option
                                                        value="{{$patient->id}}">Nombre: {{$patient->name}} {{$patient->lastnames}} | {{$patient->number_document}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group mb-2">
                                                <label for="basic-form-1">Antecedentes personales</label>
                                                <input type="text" id="personal_history" name="personal_history" class="form-control" placeholder="Ej: Rinitis alergica" value="{{old('personal_history')}}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group mb-2">
                                                <label for="basic-form-1">Antecedentes familiares</label>
                                                <input type="text" id="family_history" name="family_history" class="form-control" placeholder="Ej: Cataratas" required value="{{old('family_history')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group mb-2">
                                                <label for="basic-form-1">Antecedentes quirurgicos</label>
                                                <input type="text" id="surgical_history" name="surgical_history" class="form-control" placeholder="Ej: Cirujia vascular" required value="{{old('surgical_history')}}">
                                            </div>
                                        </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">

                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn bg-light-primary mr-1 mb-1 mb-sm-0 form-crear"><i
                                        class="ft-check-square mr-1"></i>Guardar
                                </button>
                                <a href="{{url('clinical/historial-medico')}}" type="button"
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
