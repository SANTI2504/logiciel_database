@extends('layouts.app')

@section('title')
    LDB-lista-Examenes
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
                            <a href="{{url('menu/clinical')}}" itemprop="item">
                                <span itemprop="name">Menu clinical</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem">
                            <a href="{{url('clinical/historial-medico')}}" itemprop="item">
                                <span itemprop="name">Menu clinical</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem">
                            <span itemprop="name">Examenes Medicos</span>
                            <meta itemprop="position" content="2">
                        </li>
                    </ol>
                </nav>
                <!-- end migas de pan-->
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">Examenes Medicos de {{$name -> patient -> name}} {{$name -> patient -> lastnames}}</div>
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
                                        <a type="button" class="btn bg-light-info" href="{{url('clinical/examen-medico/create', $name-> id)}}">Crear nuevo</a>
                                        <hr>
                                        <div class="table-responsive">

                                            <table id="users-list-datatable" class="table table-hover file-export " >
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nombre</th>
                                                    <th>Sintomas</th>
                                                    <th>Diagnostico</th>
                                                    <th>fecha</th>
                                                    <th>cita</th>
                                                    <th>historial medico id</th>
                                                    <th>acciones</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($exams as $exam)
                                                    <tr>
                                                        <td>{{$exam-> id}}</td>
                                                        <td>{{$exam-> name}}</td>
                                                        <td>{{$exam-> symptom}} </td>
                                                        <td>{{$exam-> diagnosis}} </td>
                                                        <td>{{$exam-> exam_date}} </td>
                                                        <td>{{$exam-> appointments_id}} </td>
                                                        <td>{{$exam-> medical_histories_id}} </td>

                                                        <td class="text-truncate">
                                                            <form  action="{{url('clinical/historial-medico', $exam -> id)}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <!--
                                                            <a href="javascript:;" class="btn info p-0">
                                                                <i class="ft-user font-medium-3"></i>
                                                            </a>
                                                            -->
                                                                <a href="{{url('clinical/historial-medico/'. $exam-> id )}}" class=" btn info p-1">
                                                                    <i class="ft-eye font-medium-3 "></i>
                                                                </a>
                                                                <a href="{{url('clinical/historial-medico/'. $exam-> id . '/edit')}}" class=" btn success p-0">
                                                                    <i class="ft-edit-2 font-medium-3 "></i>
                                                                </a>
                                                                <button  type="submit" id="type-success" class="btn danger p-0" >
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
