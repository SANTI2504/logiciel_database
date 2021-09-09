@extends('layouts.app')

@section('title')
    LDB-Editar-Examen medico
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
                            <a href="{{url('menu/clinical')}}" itemprop="item">
                                <span itemprop="name">Menu clinical</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem">
                            <a href="{{url('clinical/historial-medico')}}" itemprop="item">
                                <span itemprop="name">Historial medico</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem">
                            <a href="{{url('clinical/examen-medico', $exam->history -> id)}}" itemprop="item">
                                <span itemprop="name">Examenes medicos</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item" itemscope itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem">
                            <span itemprop="name">Editar</span>
                            <meta itemprop="position" content="2">
                        </li>
                    </ol>
                </nav>
                <!-- end migas de pan-->
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">Editar Examen del paciente: {{$exam -> history -> patient -> name}} {{$exam -> history -> patient -> lastnames}}</div>
                    </div>
                </div>

                <!-- Table starts -->
                <!-- Basic Form starts -->
                <div class="col col-12">
                    <div class="card">

                        <div class="card-body ">
                            <hr style="border-top: 1px solid grey;">
                            <div id="invoice-customer-details" class="row m-1">
                                <div class="col-12 text-center p-1">
                                    <a href="{{url('usuarios/pacientes',$exam -> history->patient->id)}}"><span
                                            class="badge bg-light-info m-2 p-2">DATOS DEL PACIENTE</span></a>
                                </div>
                                <div class="col-md-6 col-12 ">
                                    <div class="row">
                                        <div class="col-12">
                                            <table class="table table-bordered  table-hover table-sm ">
                                                <tbody>
                                                <tr>
                                                    <th>Nombres:</th>
                                                    <td class="text-right">{{$exam -> history->patient->name}} {{$exam ->history->patient->lastnames}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Sexo:</th>
                                                    <td class="text-right">{{$exam->history->patient->gender->name}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 ">
                                    <div class="row">
                                        <div class="col-12">
                                            <table class="table table-bordered table-hover table-sm ">
                                                <tbody>

                                                <tr>
                                                    <th>Tipo de documento:</th>
                                                    <td class="text-right">{{$exam -> history->patient->type_document->name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>No. documento:</th>
                                                    <td class="text-right">{{$exam -> history->patient->number_document}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 1px solid grey;">
                            <div>

                                <!-- start validaciones -->
                                @if(count($errors)>0)

                                    @foreach($errors->all() as $error)
                                        <span class="badge bg-light-danger p-2 m-1" role="alert">
                                        <i class="ft-alert-triangle"></i>
                                            {{$error}}
                                    </span>
                                    @endforeach
                                    <hr style="border-top: 1px solid grey;">
                            @endif
                            <!-- end validaciones-->

                            </div>

                            <form method="POST" novalidate action="{{url('clinical/examen-medico', $exam->id)}}">
                                @method('PUT')
                                @csrf
                                <div class="form-group mb-2" hidden>
                                    <label for="basic-form-6"> ID historial*</label>
                                    <select class="select2 form-control mb-2" name="medical_histories_id" id="medical_histories_id">
                                        <option>{{$exam ->history -> id}}</option>
                                    </select>
                                </div>

                                <div class="form-row">
                                    <div class="col col-12">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="select-group-prepend">
                                                <div class="input-group-text">Cita:</div>
                                            </div>
                                            <select class="select2 form-control mb-2" name="appointments_id"
                                                    id="appointments_id">
                                                <option value="{{$exam -> appointments_id}}">Especialista: {{$exam -> appointment -> specialist -> name}} {{$exam->appointment -> specialist -> lastnames}} | {{$exam->appointment -> date}} | {{$exam->appointment -> time}}</option>

                                                @foreach($appointments as $appointment )
                                                    @if($exam -> appointments_id == $appointment -> id)
                                                        @else
                                                    <option value="{{$appointment -> id}}">Especialista: {{$appointment -> specialist -> name}} {{$appointment -> specialist -> lastnames}} | {{$appointment -> date}} | {{$appointment -> time}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col col-12">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Razón de la consulta:</div>
                                            </div>
                                            <input type="text" class="form-control" id="reason_consultation" name="reason_consultation" value="{{$exam-> reason_consultation}}"
                                                   placeholder="reason_consultation">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 text-center p-1">
                                    <span class="badge bg-light-info m-2 p-2">EXAMEN DE AGUDEZA VISUAL</span>
                                </div>
                                <table class="table table-bordered table-sm m-0">

                                    <tr class="text-center">
                                        <th rowspan="2" class="col-2"></th>
                                        <th colspan="2">Sin correccion</th>
                                        <th colspan="2">Con correccion</th>
                                        <th rowspan="2">PH</th>
                                        <th rowspan="2">Lensometria</th>
                                    </tr>

                                    <tr class="text-center">

                                        <th>Vision lejana</th>
                                        <th>Vision proxima</th>
                                        <th>Vision lejana</th>
                                        <th>Vision proxima</th>

                                    </tr>

                                    <tbody>
                                    <tr>
                                        <th scope="row">Ojo derecho:</th>
                                        <td>
                                            <input id="sc_vl_od" type="text" name="sc_vl_od"
                                                   value="{{$exam->sc_vl_od}}"

                                                   autocomplete="sc_vl_od" class="col-12"
                                                   placeholder="sc_vl_od"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="sc_vp_od" type="text" name="sc_vp_od"
                                                   value="{{$exam->sc_vp_od}}"

                                                   autocomplete="sc_vp_od" class="col-12"
                                                   placeholder="sc_vp_od"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="cc_vl_od" type="text" name="cc_vl_od"
                                                   value="{{$exam->cc_vl_od}}"

                                                   autocomplete="cc_vl_od" class="col-12"
                                                   placeholder="cc_vl_od"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="cc_vp_od" type="text" name="cc_vp_od"
                                                   value="{{$exam->cc_vp_od}}"

                                                   autocomplete="cc_vp_od" class="col-12"
                                                   placeholder="cc_vp_od"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="ph_od" type="text" name="ph_od"
                                                   value="{{$exam->ph_od}}"

                                                   autocomplete="ph_od" class="col-12"
                                                   placeholder="ph_od"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="lensometria_od" type="text" name="lensometria_od"
                                                   value="{{$exam->lensometria_od}}"

                                                   autocomplete="lensometria_od" class="col-12"
                                                   placeholder="lensometria_od"
                                                   required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Ojo izquierdo:</th>
                                        <td>
                                            <input id="sc_vl_oi" type="text" name="sc_vl_oi"
                                                   value="{{$exam->sc_vl_oi}}"

                                                   autocomplete="sc_vl_oi" class="col-12"
                                                   placeholder="sc_vl_oi"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="sc_vp_oi" type="text" name="sc_vp_oi"
                                                   value="{{$exam->sc_vp_oi}}"

                                                   autocomplete="sc_vp_oi" class="col-12"
                                                   placeholder="sc_vp_oi"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="cc_vl_oi" type="text" name="cc_vl_oi"
                                                   value="{{$exam->cc_vl_oi}}"

                                                   autocomplete="cc_vl_oi" class="col-12"
                                                   placeholder="cc_vl_oi"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="cc_vp_oi" type="text" name="cc_vp_oi"
                                                   value="{{$exam->cc_vp_oi}}"

                                                   autocomplete="cc_vp_oi" class="col-12"
                                                   placeholder="cc_vp_oi"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="ph_oi" type="text" name="ph_oi"
                                                   value="{{$exam->ph_oi}}"

                                                   autocomplete="ph_oi" class="col-12"
                                                   placeholder="ph_oi"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="lensometria_oi" type="text" name="lensometria_oi"
                                                   value="{{$exam->lensometria_oi}}"

                                                   autocomplete="lensometria_oi" class="col-12"
                                                   placeholder="lensometria_oi"
                                                   required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Ambos ojos:</th>
                                        <td>
                                            <input id="sc_vl_ao" type="text" name="sc_vl_ao"
                                                   value="{{$exam->sc_vl_ao}}"

                                                   autocomplete="sc_vl_ao" class="col-12"
                                                   placeholder="sc_vl_ao"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="sc_vp_ao" type="text" name="sc_vp_ao"
                                                   value="{{$exam->sc_vp_ao}}"

                                                   autocomplete="sc_vp_ao" class="col-12"
                                                   placeholder="sc_vp_ao"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="cc_vl_ao" type="text" name="cc_vl_ao"
                                                   value="{{$exam->cc_vl_ao}}"

                                                   autocomplete="cc_vl_ao" class="col-12"
                                                   placeholder="cc_vl_ao"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="cc_vp_ao" type="text" name="cc_vp_ao"
                                                   value="{{$exam->cc_vp_ao}}"

                                                   autocomplete="cc_vp_ao" class="col-12"
                                                   placeholder="cc_vp_ao"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="ph_ao" type="text" name="ph_ao"
                                                   value="{{$exam->ph_ao}}"

                                                   autocomplete="ph_ao" class="col-12"
                                                   placeholder="ph_ao"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="lensometria_ao" type="text" name="lensometria_ao"
                                                   value="{{$exam->lensometria_ao}}"

                                                   autocomplete="lensometria_ao" class="col-12"
                                                   placeholder="lensometria_ao"
                                                   required>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <hr style="border-top: 1px solid grey;">
                                <div class="form-row">
                                    <div class="col col-12">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Queratometria:</div>
                                            </div>
                                            <input type="text" class="form-control" id="keratometry"
                                                   name="keratometry" placeholder="keratometry" value="{{$exam->keratometry}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col col-12">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Biomicroscopia:</div>
                                            </div>
                                            <input type="text" class="form-control" id="biomicroscopy" name="biomicroscopy"
                                                   placeholder="biomicroscopy" value="{{$exam->keratometry}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col col-12">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Examen motor:</div>
                                            </div>
                                            <input type="text" class="form-control" id="motor_test" name="motor_test"
                                                   placeholder="motor_test" value="{{$exam->keratometry}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col col-12">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Examen de fondo de ojo:</div>
                                            </div>
                                            <input type="text" class="form-control" id="exam_bottom_eye" name="exam_bottom_eye" value="{{$exam->exam_bottom_eye}}"
                                                   placeholder="exam_bottom_eye">
                                        </div>
                                    </div>
                                </div>
                                <hr style="border-top: 1px solid grey;">
                                <div class="col-12 text-center p-1">
                                    <span class="badge bg-light-info m-2 p-2">EXAMEN DE REFRACCION</span>
                                </div>
                                <table class="table table-bordered table-sm m-0">

                                    <tr class="text-center">
                                        <th class="col-2"></th>
                                        <th class="col-4">Retinoscopia</th>
                                        <th class="col-4">Afinacion</th>
                                        <th class="col-2">Agudeza visual</th>

                                    </tr>


                                    <tbody>
                                    <tr>
                                        <th scope="row">Ojo derecho:</th>
                                        <td>
                                            <input id="retinoscopia_od" type="text" name="retinoscopia_od"
                                                   value="{{$exam->retinoscopia_od}}"

                                                   autocomplete="retinoscopia_od" class="col-12"
                                                   placeholder="retinoscopia_od"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="afinacion_od" type="text" name="afinacion_od"
                                                   value="{{$exam->afinacion_od}}"

                                                   autocomplete="afinacion_od" class="col-12"
                                                   placeholder="afinacion_od"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="agudeza_vis_od" type="text" name="agudeza_vis_od"
                                                   value="{{$exam->agudeza_vis_od}}"

                                                   autocomplete="agudeza_vis_od" class="col-12"
                                                   placeholder="agudeza_vis_od"
                                                   required>
                                        </td>


                                    </tr>
                                    <tr>
                                        <th scope="row">Ojo izquierdo:</th>
                                        <td>
                                            <input id="retinoscopia_oi" type="text" name="retinoscopia_oi"
                                                   value="{{$exam->retinoscopia_oi}}"

                                                   autocomplete="retinoscopia_oi" class="col-12"
                                                   placeholder="retinoscopia_oi"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="afinacion_oi" type="text" name="afinacion_oi"
                                                   value="{{$exam->afinacion_oi}}"

                                                   autocomplete="afinacion_oi" class="col-12"
                                                   placeholder="afinacion_oi"
                                                   required>
                                        </td>
                                        <td>
                                            <input id="agudeza_vis_oi" type="text" name="agudeza_vis_oi"
                                                   value="{{$exam->agudeza_vis_oi}}"

                                                   autocomplete="agudeza_vis_oi" class="col-12"
                                                   placeholder="agudeza_vis_oi"
                                                   required>

                                        </td>


                                    </tr>

                                    </tbody>
                                </table>
                                <hr style="border-top: 1px solid grey;">

                                <div class="form-row">
                                    <div class="col col-12">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Ciclopejia:</div>
                                            </div>
                                            <input type="text" class="form-control" id="ciclopejia"
                                                   placeholder="ciclopejia" name="ciclopejia" value="{{$exam->ciclopejia}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col col-md-6 col-12">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Adicion:</div>
                                            </div>
                                            <input type="text" class="form-control" id="addiction"
                                                   placeholder="addiction" name="addiction" value="{{$exam->addiction}}">
                                        </div>
                                    </div>
                                    <div class="col col-md-6 col-12">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Distancia pupilar:</div>
                                            </div>
                                            <input type="text" class="form-control" id="pupillary_distance"
                                                   placeholder="pupillary_distance" name="pupillary_distance" value="{{$exam->pupillary_distance}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col col-12">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Sintomas:</div>
                                            </div>
                                            <input type="text" class="form-control" id="symptom"
                                                   placeholder="symptom" value="{{$exam->symptom}}" name="symptom">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col col-12">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Diagnosticos:</div>
                                            </div>
                                            <input type="text" class="form-control" id="diagnosis"
                                                   placeholder="diagnosis" value="{{$exam->diagnosis}}" name="diagnosis">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col col-md-6 col-12">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Conducta:</div>
                                            </div>
                                            <input type="text" class="form-control" id="conduct"
                                                   placeholder="conduct" value="{{$exam->conduct}}" name="conduct">
                                        </div>
                                    </div>
                                    <div class="col col-md-6 col-12">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Control:</div>
                                            </div>
                                            <input type="text" class="form-control" id="control"
                                                   placeholder="control" value="{{$exam->control}}" name="control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col col-12">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Medicamento:</div>
                                            </div>
                                            <input type="text" class="form-control" id="medicine"
                                                   placeholder="medicine" value="{{$exam->medicine}}" name="medicine">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col col-12">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text" >Examenes de apoyo diagnostico y/o
                                                    remisiones:
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" id="diagnostic_exam_support_rem"
                                                   placeholder="diagnostic_exam_support_rem" value="{{$exam->diagnostic_exam_support_rem}}" name="diagnostic_exam_support_rem">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col col-12">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="select-group-prepend">
                                                <div class="input-group-text">origen de la enfermedad:</div>
                                            </div>
                                            <select class="select2 form-control mb-2" name="identification_origen_disease_accident"
                                                    id="identification_origen_disease_accident">
                                                <option>{{$exam->identification_origen_disease_accident}}</option>
                                                <option>Paciente sano</option>
                                                <option>general o común</option>
                                                <option>profesional u ocupacional</option>
                                                <option>Accidente de trabajo</option>
                                                <option>Accidente fuera del trabajo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col col-12">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Farmacologicos:</div>
                                            </div>
                                            <input type="text" class="form-control" id="pharmacological"
                                                   placeholder="pharmacological" value="{{$exam->pharmacological}}" name="pharmacological">
                                        </div>
                                    </div>
                                </div>

                                <hr style="border-top: 1px solid grey;">
                                <button type="submit" class="btn bg-light-primary mr-1 mb-1 mb-sm-0 form-editar"><i
                                        class="ft-check-square mr-1"></i>Guardar
                                </button>
                                <a href="{{url('clinical/examen-medico', $exam->history -> id)}}" type="button"
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
