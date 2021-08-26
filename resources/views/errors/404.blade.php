@extends('errors::minimal')

@section('title', __('No encontrado'))

@section('code', '¡404 Pagina no encontrada!')

@section('img')
    <img src="/img/errors/404.png" alt="" class="img-fluid error-img mt-2" height="300" width="400">
@endsection

@section('buttons')
    <a href="{{ url('/inicio') }}" class="btn btn-warning my-2">Dashboard</a>
    <a href="{{ url('/') }}" class="btn btn-warning my-2">Vision Medics</a>
@endsection



@section('message', __('esta pagina no existe por ahora.'))
