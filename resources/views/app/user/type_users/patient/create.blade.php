@extends('layouts.app')

@section('title')
    LDB-Crear-Paciente
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

                            <span itemprop="name">Crear</span>

                            <meta itemprop="position" content="2">
                        </li>

                    </ol>
                </nav>
                <!-- end migas de pan-->
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">Crear nuevo paciente</div>

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
                            <form method="POST" novalidate action="{{url('usuarios/pacientes')}}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-1">Nombres *</label>
                                            <input id="name" type="text" name="name" value="{{ old('name') }}" autofocus
                                                   autocomplete="name" class="form-control mb-2"
                                                   placeholder="ej: Camilo Andres" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-2">Apellidos *</label>
                                            <input id="lastnames" type="text" name="lastnames"
                                                   value="{{ old('lastnames') }}" autocomplete="lastnames"
                                                   class="form-control mb-2" placeholder="ej: Mesa Rincon" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-6">Sexo *</label>
                                            <select class="select2 form-control mb-2" name="gender_id"
                                                    id="gender_id">
                                                <option value="none" selected disabled>Seleccionar</option>
                                                <!--usamos los datos de la tabla type_documents-->
                                                @foreach($genders as $gender)
                                                    <option
                                                        value="{{$gender->id}}">{{$gender->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-6">Estado civil *</label>
                                            <select class="select2 form-control mb-2" name="civil_status_id"
                                                    id="civil_status_id">
                                                <option value="none" selected disabled>Seleccionar</option>
                                                <!--usamos los datos de la tabla type_documents-->
                                                @foreach($civil_statuses as $civil_status)
                                                    <option
                                                        value="{{$civil_status->id}}">{{$civil_status->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-3">E-mail *</label>
                                            <input id="email" type="email" name="email" value="{{ old('email') }}"
                                                   class="form-control mb-2" placeholder="ej: camilo@gmail.com"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-4">Numero de contacto *</label>
                                            <input id="number_cell" type="text" name="number_cell"
                                                   value="{{ old('number_cell') }}" class="form-control mb-2"
                                                   placeholder="ej: 3115676507" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-6">Tipo de documento *</label>
                                            <select class="select2 form-control mb-2" name="type_document_id"
                                                    id="type_document_id">
                                                <option value="none" selected disabled>Seleccionar</option>
                                                <!--usamos los datos de la tabla type_documents-->
                                                @foreach($type_documents as $type_document)
                                                    <option
                                                        value="{{$type_document->id}}">{{$type_document->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-2">Numero de documento *</label>
                                            <input id="number_document" type="text" name="number_document"
                                                   value="{{ old('number_document') }}" class="form-control mb-2"
                                                   placeholder="ej: 1023659635" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-5">Fecha de nacimiento *</label>
                                            <input id="date_of_bird" type="date" name="date_of_bird"
                                                   value="{{ old('date_of_bird') }}" class="form-control mb-2" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-6">EPS *</label>
                                            <select class="select2 form-control mb-2" name="eps_id" id="eps_id">
                                                <option value="none" selected disabled>Seleccionar</option>
                                                <!--usamos los datos de la tabla type_documents-->
                                                @foreach($eps as $epss)
                                                    <option value="{{$epss-> id}}">{{$epss->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border-top: 1px solid grey;">
                                <div class="form-row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-1">Direccion *</label>
                                            <input id="address" type="text" name="address" value="{{ old('address') }}" autofocus
                                                   autocomplete="address" class="form-control mb-2"
                                                   placeholder="ej: CARRERA 59B N47 17 SUR" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-1">Ciudad *</label>
                                            <input id="city" type="text" name="city" value="{{ old('city') }}" autofocus
                                                   autocomplete="city" class="form-control mb-2"
                                                   placeholder="ej: Bogota" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-2">Localidad *</label>
                                            <input id="location" type="text" name="location"
                                                   value="{{ old('location') }}" autocomplete="location"
                                                   class="form-control mb-2" placeholder="ej: Kennedy" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-2">Barrio *</label>
                                            <input id="neighborhood" type="text" name="neighborhood"
                                                   value="{{ old('neighborhood') }}" autocomplete="neighborhood"
                                                   class="form-control mb-2" placeholder="ej: Techo" required>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border-top: 1px solid grey;">
                                <div class="form-group mb-2" hidden>
                                    <label for="basic-form-6">Rol</label>
                                    <select class="select2 form-control mb-2" name="roles_id" id="roles_id">
                                        <option value="4">Auxiliar</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-1">Nombres del acompañante </label>
                                            <input id="accompanist_name" type="text" name="accompanist_name" value="{{ old('accompanist_name') }}" autofocus
                                                   autocomplete="accompanist_name" class="form-control mb-2"
                                                   placeholder="ej: Diana Sofia Ortiz Sierra" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-2">Celular del acompañante</label>
                                            <input id="accompanist_cell" type="text" name="accompanist_cell"
                                                   value="{{ old('accompanist_cell') }}" autocomplete="accompanist_cell"
                                                   class="form-control mb-2" placeholder="ej: 3115456787" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-1">Contraseña *</label>
                                            <input id="password" type="password" name="password"
                                                   autocomplete="new-password" class="form-control mb-2" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-2">Confirmar contraseña *</label>
                                            <input id="password_confirmation" type="password"
                                                   name="password_confirmation" autocomplete="new-password"
                                                   class="form-control mb-2" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn bg-light-primary mr-1 mb-1 mb-sm-0 form-crear"><i
                                        class="ft-check-square mr-1"></i>Guardar
                                </button>
                                <a href="{{url('usuarios/pacientes')}}" type="button"
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
