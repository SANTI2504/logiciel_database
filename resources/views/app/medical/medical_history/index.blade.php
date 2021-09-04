@extends('layouts.app')

@section('title')
    LDB-lista-Historial
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
                            <span itemprop="name">Historial Medico</span>
                            <meta itemprop="position" content="2">
                        </li>
                    </ol>
                </nav>
                <!-- end migas de pan-->
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">Historial Medico</div>
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
                                        <a type="button" class="btn bg-light-info" href="{{url('clinical/historial-medico/create')}}">Crear nuevo</a>
                                        <hr>
                                        <div class="table-responsive">

                                            <table id="users-list-datatable" class="table table-sm table-hover file-export " >
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nombres Completos</th>
                                                    <th>No. Documento</th>
                                                    <th>No. Examenes</th>
                                                    <th>Acciones</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($histories as $history)
                                                    <tr>
                                                        <td>{{$history-> id}}</td>
                                                        <td>{{$history-> patient -> name}} {{$history-> patient -> lastnames}}</td>
                                                        <td>{{$history-> patient -> number_document}}</td>
                                                        <td><a type="button" class="btn btn-sm bg-light-info" href="{{url('clinical/examen-medico/'. $history-> id)}}"> {{$history-> amount_visits}} Examenes</a></td>
                                                        <td class="text-truncate">
                                                            <form  action="{{url('clinical/historial-medico', $history -> id)}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <!--
                                                            <a href="javascript:;" class="btn info p-0">
                                                                <i class="ft-user font-medium-3"></i>
                                                            </a>
                                                            -->
                                                                <a href="{{url('clinical/historial-medico/'. $history-> id )}}" class=" btn info p-1">
                                                                    <i class="ft-eye font-medium-3 "></i>
                                                                </a>
                                                                <a href="{{url('clinical/historial-medico/'. $history-> id . '/edit')}}" class=" btn success p-0">
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
