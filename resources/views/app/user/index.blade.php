@extends('layouts.app')

@section('title')
    LDB-Usuarios
@endsection

@section('content')
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-overlay"></div>
            <div class="content-wrapper"><!-- Minimal statistics section start -->

                <section id="minimal-statistics">
                    <div class="row">
                        <div class="col-12">
                            <div class="content-header">Minimal Statistics Cards</div>
                            <p class="content-sub-header mb-1">Statistics on minimal cards.</p>
                        </div>
                    </div>
                </section>
                <!-- // Minimal statistics section end -->

                <!-- modulos del sistema -->
                <section id="bg-variants">
                    <div class="row match-height">
                        <!-- start card user-->
                        <div class="col-md-6 col-12">
                            <div class="card card-inverse bg-info text-center" style="">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row d-flex">
                                            <div class="col align-self-center mb-2 mb-sm-0">
                                                <img src="../app-assets/img/user.png" alt="user" width="150" class="float-sm-left mt-sm-1">
                                            </div>
                                            <div class="col align-self-center mr-sm-4">
                                                <h4 class="card-title mb-3">USUARIOS</h4>
                                                <p class="card-text">Aca se pude registrar, actualizar y eliminar usuarios</p>
                                                <button class="btn btn-info btn-darken-3">Ingresar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card user-->

                    </div>
                </section>
            </div>
        </div>
        <!-- END : End Main Content-->
@endsection
