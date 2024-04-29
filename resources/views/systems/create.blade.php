@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Criar</h1>
@stop

@section('content')
    <form enctype="multipart/form-data" action="{{ route('systems.store') }}" method="POST">
        @include('Components.form')
    </form>
@stop
