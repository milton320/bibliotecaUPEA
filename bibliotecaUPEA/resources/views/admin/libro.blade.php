@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @auth
        <p>Bienvenido {{ auth()->user()->rol }} al sistema de biblioteca.</p>
        <p> para ver el contenido <a href="/logout">cerrar sesion</a></p>
    @endauth

    @guest
        <p> para ver el contenido <a href="/login">inicia sesion</a></p>
    @endguest
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop