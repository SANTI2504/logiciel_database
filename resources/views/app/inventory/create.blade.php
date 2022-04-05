@extends('layouts.app')

@section('title')
    LDB-Crear-Inventario
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
                                <span itemprop="name">Menú inevntario</span>
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

                            <span itemprop="name">Crear</span>

                            <meta itemprop="position" content="2">
                        </li>

                    </ol>
                </nav>
                <!-- end migas de pan-->
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">Crear nuevo artículo</div>

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
                            <form method="POST" novalidate action="{{url('inventario')}}">
                                @csrf

                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="basic-form-6">Producto *</label>
                                            <select class="select2 form-control select2-hidden-accessible mb-2" name="products_id"
                                                    id="products_id">
                                                <option value="none" selected disabled>Seleccionar</option>
                                                <!--usamos los datos de la tabla type_documents-->
                                                @foreach($products as $product)
                                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label for="basic-form-6">Fabricante / laboratorio</label>
                                        <select class="select2 form-control mb-2" name="lab_manufacturers_id"
                                                id="lab_manufacturers_id">
                                            <option value="none" selected disabled>Seleccionar</option>
                                            <!--usamos los datos de la tabla type_documents-->
                                            @foreach($lab_manufacturers as $lab_manufacturer)
                                                <option value="{{$lab_manufacturer->id}}">{{$lab_manufacturer->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="date">Cantidad</label>
                                            <input type="number" class="form-control" name="amount"  id="amount"  aria-describedby="" >
                                            <small id="HelpId" class="form-text text-muted">Cantidad inicial de productos en inventario</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="date">Codigo</label>
                                            <input type="text" class="form-control" name="product_code" id="product_code"  aria-describedby="" >
                                            <small id="HelpId" class="form-text text-muted">ejemplo: 4587569852125</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="form-group mb-2">
                                            <label for="date">Descripción</label>
                                            <input type="text" class="form-control" name="description" id="description"  aria-describedby="" >
                                            <small id="HelpId" class="form-text text-muted">ejemplo: marco en poliester</small>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn bg-light-primary mr-1 mb-1 mb-sm-0 form-crear"><i
                                        class="ft-check-square mr-1"></i>Guardar
                                </button>
                                <a href="{{url('inventario')}}" type="button"
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
