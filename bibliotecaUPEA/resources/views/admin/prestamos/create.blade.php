@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>REGISTRAR LIBRO</strong>
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
        <form method="POST" action="{{ route('prestamos.store')}}">
            @csrf
            <div class="mb-3">
                <label for="fecha_prestamo" class="form-label">Fecha Prestamo </label>
                <input type="text" class="form-control" id="fecha_prestamo" name="fecha_prestamo" aria-descr disabled>
            </div>
            <div class="mb-3">
                <label for="fecha_devolucion" class="form-label">Fecha Devolucion</label>
                <input type="date" class="form-control" id="fecha_devolucion" name="fecha_devolucion" aria-descr>
            </div><br>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="text" class="form-control" id="cantidad" name="cantidad" aria-descr>
            </div>
            <br>
            <div class="mb-3">
                <label for="observaciones" class="form-label">observaciones</label>
                <input type="text" class="form-control" id="observaciones" name="observaciones" aria-descr>
            </div>
            <br>
            <div class="mb-3">
                <label for="condicion" class="form-label">Condicion</label>
                <input type="text" class="form-control" id="condicion" name="condicion" aria-descr>
            </div>
            <br>
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <select class="form-control" name="tipo">                   
                        <option value="prestamo"  >Prestamo</option>
                        <option value="reserva"  >Reserva</option>
                </select>
            </div>
            <br>
            <div class="mb-3">
                <label for="libro_id" class="form-label">Libro</label>
                <select class="form-control" name="libro_id">
                    @foreach ($libro as $item)
                        <option value="{{ $item->id }}"  >{{ $item->titulo }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="mb-3">
                <label for="usuario_id" class="form-label">USUARIO</label>
                <input type="text" class="form-control" id="usuario_id" name="usuario_id" value="{{ auth()->user()->id }}" aria-descr>
            </div>
            <br>
            
            
            <button type="submit" class="btn btn-success">REGISTRAR</button>
            <button type="submit" class="btn btn-primary">CANCELAR</button>
            
        </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('hola mundo'); </script>

    <script>
        
        


        date = new Date();
        year = date.getFullYear();
        month = date.getMonth() + 1;
        day = date.getDate();
        document.getElementById("fecha_prestamo").value = year + "-" + month + "-" + day;
        

        
    </script>
@stop