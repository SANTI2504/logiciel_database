@extends('layouts.app')

@section('title')
    LDB-lista-Especialistas
@endsection

@section('content')
    <!-- BEGIN : Main Content-->
    <div class="main-content">
        <div class="content-overlay"></div>
        <div class="content-wrapper"><section class="users-list-wrapper">
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

                            <span itemprop="name">Especialistas</span>

                            <meta itemprop="position" content="2">
                        </li>

                    </ol>
                </nav>
                <!-- end migas de pan-->
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">Especialistas</div>
                    </div>
                </div>

                <!-- Table starts -->
                <div class="users-list-table">
                    <div class="row justify-content-center">
                        <div class="col-12 ">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <!-- Datatable starts -->
                                        <a type="button" class="btn bg-light-info" href="{{url('usuarios/especialistas/create')}}">Crear nuevo</a>
                                        <hr>
                                        <div class="table-responsive">
                                            <table id="users-list-datatable" class="table table-hover file-export" >
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nombres Completos</th>
                                                    <th>No. Documento</th>
                                                    <th>Celular</th>
                                                    <th>Acciones</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($specialists as $specialist)
                                                    <tr>
                                                        <td>{{$specialist-> id}}</td>
                                                        <td>{{$specialist-> name}} {{$specialist-> lastnames}}</td>
                                                        <td>{{$specialist-> number_document}}</td>
                                                        <td>{{$specialist-> number_cell}}</td>
                                                        <td class="text-truncate">
                                                            <form  action="{{url('usuarios/especialistas', $specialist -> id)}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <!--
                                                            <a href="javascript:;" class="btn info p-0">
                                                                <i class="ft-user font-medium-3"></i>
                                                            </a>
                                                            -->
                                                                <a href="{{url('usuarios/especialistas/'. $specialist-> id )}}" class=" btn info p-1">
                                                                    <i class="ft-eye font-medium-3 "></i>
                                                                </a>
                                                                <a href="{{url('usuarios/especialistas/'. $specialist-> id . '/edit')}}" class=" btn success p-0">
                                                                    <i class="ft-edit-2 font-medium-3 "></i>
                                                                </a>
                                                                <button  type="submit" id="type-success" class="btn danger p-0 form-eliminar" >
                                                                    <i class="ft-x font-medium-3"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        <hr>
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
