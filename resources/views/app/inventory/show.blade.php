@extends('layouts.app')

@section('title')
    LDB-Detalles-Artículo
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
                            <a href="{{url('menu/inventario')}}" itemprop="item">
                                <span itemprop="name">Menú usuarios</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>

                        <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem">
                            <a href="{{url('inventario')}}" itemprop="item">
                                <span itemprop="name">Inventario</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem">

                            <span itemprop="name">Detalles</span>

                            <meta itemprop="position" content="2">
                        </li>

                    </ol>
                </nav>
                <!-- end migas de pan-->
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">Ver detalles del artículo</div>

                    </div>
                </div>

                <!-- Table starts -->
                <!-- Basic Form starts -->
                <div class="row justify-content-center">
                    <div class="col-12 col-md-11 ">
                        <div class="card border-primary mb-3">
                            <div class="card-header bg-success text-center font-weight-bolder pb-3">
                                DATOS DEL ARTÍCULO {{$inventory  -> id}}
                            </div>
                            <div class="card-body ">
                                <div id="invoice-customer-details" class="row m-1">
                                    <div class="col-md-6 col-12 border-right border-left">
                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table  table-hover table-sm ">
                                                    <tbody>
                                                    <tr>
                                                        <th>Producto:</th>
                                                        <td class="text-right">{{$inventory -> product ->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Description:</th>
                                                        <td class="text-right">{{$inventory->description}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Cantidad:</th>
                                                        <td class="text-right">{{$inventory->amount}}</td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 border-right border-left">
                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table table-hover table-sm ">
                                                    <tbody>
                                                    <tr>
                                                        <th>Codigo:</th>
                                                        <td class="text-right">{{$inventory->product_code}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Fabricante o laboratorio:</th>
                                                        <td class="text-right">{{$inventory -> lab_manufacturer ->name}}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
