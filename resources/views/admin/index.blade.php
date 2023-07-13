@extends('adminlte::page')

@section('title', 'Soporte NTL')

@section('content_header')
    
@stop

@section('content')
    <br>
    @livewire('admin-users')
    @livewireScripts
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop