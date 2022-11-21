@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>ACTUALIZAR {{ $categoria->nombre }}</strong>
        </div>
    </div>

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
        <form method="POST" action="{{ route('categoria.update', $categoria) }}">
            @csrf
            @method('PUT')
            <h1>{!! csrf_field() !!}</h1>
            <div class="mb-3">
                <label for="nombre" class="form-label">NOMBRE</label>
                <input type="text" class="form-control" id="primer_nombre" name="nombre" value="{{ $categoria->nombre }}" >
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Segundo Nombre</label>
                <input type="text" class="form-control" id="descripcion" value="{{ $categoria->descripcion }}" name="segundo_nombre" aria-descr>
            </div>
            
            <br>
            
            <button type="submit" class="btn btn-success">ACTIALIZAR</button>
            <button type="submit" class="btn btn-primary">CANCELA</button>
            <button class="btn btn-primary" onclick="window.print()">Print this page</button>
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