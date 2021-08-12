@extends('layouts.app')

@section('title')
    LDB-Roles
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

                                <span itemprop="name">Roles</span>

                                <meta itemprop="position" content="2">
                            </li>

                        </ol>
                    </nav>
                    <!-- end migas de pan-->
                    <div class="row">
                        <div class="col-12">
                            <div class="content-header">Roles de usuario</div>
                        </div>
                    </div>

                    <!-- Table starts -->
                    <div class="users-list-table">
                        <div class="row justify-content-center">
                            <div class="col-10 ">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <!-- Datatable starts -->
                                            <div class="table-responsive">
                                                <a type="button" class="btn bg-light-info mb-2" href="{{url('usuarios/roles/create')}}">Crear nuevo</a>
                                                <table id="users-list-datatable" class="table table-hover " >
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Rol</th>
                                                        <th>Acciones</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($roles as $rol)
                                                        <tr>
                                                            <td>{{$rol-> id}}</td>
                                                            <td>{{$rol-> name}}</td>
                                                            <td class="text-truncate">
                                                                <form  action="{{url('usuarios/roles', $rol -> id)}}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <!--
                                                            <a href="javascript:;" class="btn info p-0">
                                                                <i class="ft-user font-medium-3"></i>
                                                            </a>
                                                            -->
                                                                    <a href="{{url('usuarios/roles/'. $rol-> id . '/edit')}}" class=" btn success p-0">
                                                                        <i class="ft-edit-2 font-medium-3 "></i>
                                                                    </a>
                                                                    <button  type="submit"  class="btn danger p-0 form-eliminar" >
                                                                        <i class="ft-x font-medium-3"></i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- Datatable ends -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Table ends -->
                </section>

            </div>
        </div>
        <!-- END : End Main Content-->
@endsection
