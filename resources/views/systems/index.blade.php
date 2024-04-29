@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Sistemas</h1>
@stop

@section('content')
    @include('Components.table')
@stop
