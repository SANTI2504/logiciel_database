@extends('layouts.app')

@section('title')
    LDB-Agendamiento citas
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
                            <a href="{{url('menu/citas')}}" itemprop="item">
                                <span itemprop="name">Menú citas</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem">

                            <span itemprop="name">Citas</span>

                            <meta itemprop="position" content="2">
                        </li>

                    </ol>
                </nav>
                <!-- end migas de pan-->
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">Citas</div>
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
                                        <a type="button" class="btn bg-light-info" href="{{url('agendar-citas/create')}}">Crear nuevo</a>
                                        <hr>
                                        <div class="">
                                            <table id="users-list-datatable"  class="table table-sm table-hover file-export " >
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Paciente</th>
                                                    <th>Especialista</th>
                                                    <th>Tipo de cita</th>
                                                    <th>Fecha de la cita</th>
                                                    <th>Acciones</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($appointments as $appointment)
                                                    <tr>
                                                        <td>{{$appointment-> id}}</td>
                                                        <td>{{$appointment-> patient -> name}} {{$appointment-> patient -> lastnames}}</td>
                                                        <td>{{$appointment-> specialist -> name}} {{$appointment-> specialist -> lastnames}}</td>
                                                        <td>{{$appointment-> Type_appointment ->name}}</td>
                                                        <td>{{$appointment-> start}}</td>
                                                        <td class="text-truncate">
                                                            <form  action="{{url('agendar-citas', $appointment -> id)}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <!--
                                                            <a href="javascript:;" class="btn info p-0">
                                                                <i class="ft-user font-medium-3"></i>
                                                            </a>
                                                            -->
                                                                <a href="{{url('agendar-citas/'. $appointment-> id )}}" class=" btn info p-1">
                                                                    <i class="ft-eye font-medium-3 "></i>
                                                                </a>
                                                                <a href="{{url('agendar-citas/'. $appointment-> id . '/edit')}}" class=" btn success p-0">
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
                                            <hr>
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
