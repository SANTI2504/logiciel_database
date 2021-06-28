@extends('layouts.app')

@section('title')
    LDB-Crear-Usuario
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
                            <div class="content-header">Minimal Statistics Cards</div>
                            <p class="content-sub-header mb-1">Statistics on minimal cards.</p>
                        </div>
                    </div>

                    <!-- Table starts -->
                    <!-- Basic Form starts -->
                    <div class="col col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Form</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p>This is the most basic and default form having inputs, labels and buttons.</p>
                                    <form>
                                        <div class="form-row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group mb-2">
                                                    <label for="basic-form-1">First Name</label>
                                                    <input type="text" id="basic-form-1" class="form-control" name="fname">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group mb-2">
                                                    <label for="basic-form-2">Last Name</label>
                                                    <input type="text" id="basic-form-2" class="form-control" name="lname">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group mb-2">
                                                    <label for="basic-form-3">E-mail</label>
                                                    <input type="text" id="basic-form-3" class="form-control" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group mb-2">
                                                    <label for="basic-form-4">Contact Number</label>
                                                    <input type="number" id="basic-form-4" class="form-control" name="phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="basic-form-5">Company</label>
                                            <input type="text" id="basic-form-5" class="form-control" name="company">
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group mb-2">
                                                    <label for="basic-form-6">Interested in</label>
                                                    <select id="basic-form-6" name="interested" class="form-control">
                                                        <option value="none" selected disabled>Interested in</option>
                                                        <option value="design">Design</option>
                                                        <option value="development">Development</option>
                                                        <option value="illustration">Illustration</option>
                                                        <option value="branding">Branding</option>
                                                        <option value="video">Video</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group mb-2">
                                                    <label for="basic-form-7">Budget</label>
                                                    <select id="basic-form-7" name="budget" class="form-control">
                                                        <option value="0" selected disabled>Budget</option>
                                                        <option value="less than $5000">less than $5000</option>
                                                        <option value="$5000 - $10000">$5000 - $10000</option>
                                                        <option value="$10000 - $20000">$10000 - $20000</option>
                                                        <option value="more than $20000">more than $20000</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="basic-form-8">Select File</label>
                                            <input type="file" class="form-control-file" id="basic-form-8">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="basic-form-9">About Project</label>
                                            <textarea id="basic-form-9" rows="4" class="form-control" name="comment"></textarea>
                                        </div>
                                        <button type="button" class="btn btn-primary mr-2"><i class="ft-check-square mr-1"></i>Save</button>
                                        <button type="button" class="btn btn-secondary"><i class="ft-x mr-1"></i>Cancel</button>
                                    </form>
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
