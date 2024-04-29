@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Atualizar sistema</h1>
@stop

@section('content')
    <form enctype="multipart/form-data" action="{{ route('systems.update', $system->id) }}" method="POST">
        @method('PUT')
        @include('Components.form')
    </form>
@stop
