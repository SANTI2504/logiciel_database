@extends('layouts.app')

@section('title')
    LDB-Crear-Rol
@endsection

@section('content')
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-overlay"></div>
            <div class="content-wrapper"><section class="users-list-wrapper">
                    <!-- start migas de pan-->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                            <li class="breadcrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                                <a href="{{url('inicio')}}" itemprop="item">
                                    <span itemprop="name">Inicio</span>
                                </a>
                                <meta itemprop="position" content="1">
                            </li>
                            <li class="breadcrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                                <a href="{{url('menu/usuarios')}}" itemprop="item">
                                    <span itemprop="name">Menu usuarios</span>
                                </a>
                                <meta itemprop="position" content="1">
                            </li>
                            <li class="breadcrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                                <a href="{{url('usuarios/roles')}}" itemprop="item">
                                    <span itemprop="name">Roles</span>
                                </a>
                                <meta itemprop="position" content="1">
                            </li>
                            <li class="breadcrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">

                                <span itemprop="name">Crear Nuevo</span>

                                <meta itemprop="position" content="2">
                            </li>

                        </ol>
                    </nav>
                    <!-- end migas de pan-->
                    <div class="row">
                        <div class="col-12">
                            <div class="content-header">Crear nuevo Rol de usuario</div>

                        </div>
                    </div>

                    <!-- Table starts -->
                    <!-- Basic Form starts -->
                    <div class="col col-12">
                        <div class="card">
                            <div class="card-header">

                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p>Llena todos los datos para guardar.</p>

                                    @if(count($errors)>0)
                                    <div class="alert bg-light-danger mb-2" role="alert">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                    <li>
                                                        {{$error}}
                                                    </li>
                                            @endforeach
                                        </ul>

                                    </div>

                                    @endif
                                    <form action="{{url('usuarios/roles')}}" method="POST">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group mb-2">
                                                    <label for="basic-form-1">Nombre del rol</label>
                                                    <input  type="text" id="quanti" name="name" class="form-control" placeholder="Ej: Administrador" required>
                                                </div>
                                            </div>
                                        </div>
                                        <button   type="submit" class="btn bg-light-success mr-1 mb-1 mb-sm-0"><i class="ft-check-square mr-1"></i>Guardar</button>
                                        <a href="{{url('usuarios/roles')}}"type="button" class="btn btn-secondary"><i class="ft-x mr-1"></i>Cancelar </a>
                                    </form>
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
