@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>REGISTRAR EDITORIAL</strong>
        </div>
    </div>{{ auth()->user()->rol }}

@stop

@section('content')
<div class="card">
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach 
                    </ul>
                </div>
            @endif
        <form method="POST" action="{{ route('editorial.store')}}">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre </label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-descr>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion" aria-descr>
            </div><br>
            <div class="mb-3">
                <label for="pais" class="form-label">Pais</label>
                <input type="text" class="form-control" id="pais" name="pais" aria-descr>
            </div>
            <br>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" aria-descr>
            </div>
            <br>
            
            
            <button type="submit" class="btn btn-success">REGISTRAR</button>
            <button type="submit" class="btn btn-primary">CANCELA</button>
            
        </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('hola mundo'); </script>
@stop