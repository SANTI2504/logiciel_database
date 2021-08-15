@extends('layouts.app')

@section('title')
    LDB-Crear-Auxiliar
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
                            <a href="{{url('usuarios/auxiliares')}}" itemprop="item">
                                <span itemprop="name">Auxiliares</span>
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
                        <div class="content-header">Crear nuevo auxiliar</div>

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
                            <form method="POST" action="{{url('usuarios/auxiliares')}}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-1">Nombres</label>
                                            <input id="name" type="text" name="name" value="{{ old('name') }}" autofocus
                                                   autocomplete="name" class="form-control mb-2"
                                                   placeholder="ej: Camilo Andres" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-2">Apellidos</label>
                                            <input id="lastnames" type="text" name="lastnames"
                                                   value="{{ old('lastnames') }}" autocomplete="lastnames"
                                                   class="form-control mb-2" placeholder="ej: Mesa Rincon" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-3">E-mail</label>
                                            <input id="email" type="email" name="email" value="{{ old('email') }}"
                                                   class="form-control mb-2" placeholder="ej: camilo@gmail.com"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-4">Numero de contacto</label>
                                            <input id="number_cell" type="text" name="number_cell"
                                                   value="{{ old('number_cell') }}" class="form-control mb-2"
                                                   placeholder="ej: 3115676507" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-6">Tipo de documento</label>
                                            <select class="select2 form-control mb-2" name="type_document_id"
                                                    id="type_document_id">
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
                                            <label for="basic-form-2">Numero de documento</label>
                                            <input id="number_document" type="text" name="number_document"
                                                   value="{{ old('number_document') }}" class="form-control mb-2"
                                                   placeholder="ej: 1023659635" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-5">Fecha de nacimiento</label>
                                            <input id="date_of_bird" type="date" name="date_of_bird"
                                                   value="{{ old('date_of_bird') }}" class="form-control mb-2" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-6">EPS</label>
                                            <select class="select2 form-control mb-2" name="eps_id" id="eps_id">
                                                <!--usamos los datos de la tabla type_documents-->
                                                @foreach($eps_id as $epss_id)
                                                    <option value="{{$epss_id-> id}}">{{$epss_id->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="basic-form-6">Rol</label>
                                    <select class="select2 form-control mb-2" name="roles_id" id="roles_id">
                                        <option value="4">Auxiliar</option>

                                    </select>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-1">Contraseña</label>
                                            <input id="password" type="password" name="password"
                                                   autocomplete="new-password" class="form-control mb-2" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-2">Confirmar contraseña</label>
                                            <input id="password_confirmation" type="password"
                                                   name="password_confirmation" autocomplete="new-password"
                                                   class="form-control mb-2" required>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn bg-light-primary mr-1 mb-1 mb-sm-0 form-crear"><i
                                        class="ft-check-square mr-1"></i>Guardar
                                </button>
                                <a href="{{url('usuarios/auxiliares')}}" type="button"
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
