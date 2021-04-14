@extends('adminlte::page')

@section('title', 'Cadastrar novo plano')

@section('content_header')
    <h1>Cadastrar novo perfil </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('profiles.store') }}" method="POST" class="form">
                @csrf
                @include('admin.pages.profiles._partials.form')
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Enviar</button>    
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="../vendor/adminlte/dist/css/admin_custom.css">
@stop
