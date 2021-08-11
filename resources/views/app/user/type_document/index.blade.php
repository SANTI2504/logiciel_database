@extends('layouts.app')

@section('title')
    LDB-TipoDocumento
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

                                <span itemprop="name">Tipo documento</span>

                                <meta itemprop="position" content="2">
                            </li>

                        </ol>
                    </nav>
                    <!-- end migas de pan-->
                    <div class="row">
                        <div class="col-12">
                            <div class="content-header">Tipos de documento</div>
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
                                                <a type="button" class="btn bg-light-info mb-2" href="{{url('usuarios/tipo-documento/create')}}">Crear nuevo</a>
                                                <table id="users-list-datatable" class="table table-hover " >
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Tipo de documento</th>
                                                        <th>Acciones</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($type_documents as $type_document)
                                                    <tr>
                                                        <td>{{$type_document-> id}}</td>
                                                        <td>{{$type_document-> name}}</td>
                                                        <td class="text-truncate">
                                                            <form  action="{{url('usuarios/tipo-documento', $type_document -> id)}}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                            <!--
                                                            <a href="javascript:;" class="btn info p-0">
                                                                <i class="ft-user font-medium-3"></i>
                                                            </a>
                                                            -->
                                                            <a href="{{url('usuarios/tipo-documento/'. $type_document-> id. '/edit')}}" class=" btn success p-0">
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
                                                <button type="button" class="btn bg-light-primary mr-1 basic-alert mb-1 mb-sm-0">Basic</button>
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

@section('js')

    @if((session('eliminar') == 'ok'))
        <script>
            Swal.fire({
                type: "success",
                title: "Eliminado!",
                text: "Your file has been deleted.",
                confirmButtonClass: "btn btn-success"
            })
        </script>
    @endauth

    <script>
        $('.form-eliminar').on('click',function(e){
            e.preventDefault();

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#2F8BE6",
                cancelButtonColor: "#F55252",
                confirmButtonText: "Your text here!",
                confirmButtonClass: "btn btn-primary",
                cancelButtonClass: "btn btn-danger ml-1",
                buttonsStyling: !1
            }).then((result) => {
                if(result.value) {
                    this.form.submit();
                }

                /*Swal.fire({
                    type: "success",
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    confirmButtonClass: "btn btn-success"
                })
                */
            })

        });
    </script>
@endsection
