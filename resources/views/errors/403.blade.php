@extends('errors::minimal')

@section('title', __('Prohibido'))
@section('code', '¡403 Usuario sin autorización!')

@section('img')
    <img src="/img/errors/403.png" alt="" class="img-fluid error-img mt-2" height="300" width="400">
@endsection

@section('buttons')
    <a href="{{ url('/inicio') }}" class="btn btn-warning my-2">Dashboard</a>
    <a href="{{ url('/') }}" class="btn btn-warning my-2">Vision Medics</a>
@endsection

@section('message', __('no tienes acceso a esta pagina'))

