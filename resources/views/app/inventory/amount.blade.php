@extends('layouts.app')

@section('title')
    LDB-Modificar-Cantidad
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
                                <span itemprop="name">Menú inventario</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem">
                            <a href="{{url('inventario')}}" itemprop="item">
                                Inventario</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem">
                            <span itemprop="name">Cantidad</span>
                            <meta itemprop="position" content="2">
                        </li>

                    </ol>
                </nav>
                <!-- end migas de pan-->
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">Editar cantidad del articulo con id {{$inventory -> id}}</div>

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
                            <form method="POST" action="{{url('cantidad/'. $inventory -> id)}}">
                                @method('PUT')
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-6">Producto</label>
                                            <select class="select2 form-control mb-2" name="products_id" disabled
                                                    id="products_id">
                                                <option
                                                    value="{{$inventory -> product ->id}}">{{$inventory -> product ->name}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label for="basic-form-6">Fabricante / laboratorio</label>
                                        <select class="select2 form-control mb-2" name="lab_manufacturers_id" disabled
                                                id="lab_manufacturers_id">
                                            <option
                                                value="{{$inventory -> lab_manufacturer ->id}}">{{$inventory -> lab_manufacturer ->name}}</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="text">Descripción</label>
                                            <input type="text" class="form-control" name="description" disabled id="description" value="{{$inventory -> description}}" aria-describedby="" >
                                            <small id="HelpId" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="text">Codigo</label>
                                            <input type="text" class="form-control" name="product_code" disabled id="product_code" value="{{$inventory -> product_code}}" aria-describedby="" >
                                            <small id="HelpId" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row " hidden>
                                    <div class="col-12">
                                        <div class="form-group mb-2">
                                            <label for="number">Cantidad Actual</label>
                                            <input type="number" class="form-control" name="amount"  id="amount"  value="{{$inventory -> amount}}" aria-describedby="" readonly>
                                            <small id="HelpId" class="form-text text-muted">Cantidad total de productos en inventario</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 text-center p-1">
                                    <span class="badge bg-light-info m-2 p-2">ACTUALMENTE HAY {{$inventory -> amount}} ARTÍCULOS</span>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="number">cantidad a agregar</label>
                                            <input type="number" class="form-control" name="add"  id="add"  aria-describedby="" >
                                            <small id="HelpId" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="number">Cantidad a eliminar</label>
                                            <input type="text" class="form-control" name="subtract"  id="subtract"  aria-describedby="" >
                                            <small id="HelpId" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn bg-light-primary mr-1 mb-1 mb-sm-0 form-editar"><i
                                        class="ft-check-square mr-1"></i>Guardar
                                </button>
                                <a href="{{url('inventario')}}" type="button" ARIA-SETSIZE=""
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
