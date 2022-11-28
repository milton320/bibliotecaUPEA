@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>REGISTRAR RESERVA</strong>
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
        <form method="POST" action="{{ route('reservas.store')}}">
            @csrf
            <div class="mb-3">
                <label for="fecha_reserva" class="form-label">FECHA RESERVA </label>
                <input type="date" class="form-control" id="fecha_reserva" name="fecha_reserva" aria-descr>
            </div>
            <div class="mb-3">
                <label for="fecha_entrega" class="form-label">FECHA ENTREGA</label>
                <input type="date" class="form-control" id="fecha_entrega" name="fecha_entrega" aria-descr>
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">ESTADO</label>
                <input type="date" class="form-control" id="estado" name="estado" aria-descr>
            </div>
            <div class="mb-3">
                <label for="condicion_libro" class="form-label">CONDICION DE LIBRO</label>
                <input type="text" class="form-control" id="condicion_libro" name="condicion_libro" aria-descr>
            </div>
            <div class="mb-3">
                <label for="usuario_id" class="form-label">USUARIO</label>
                <input type="text" class="form-control" id="usuario_id" name="usuario_id" value="{{ auth()->user()->id }}" aria-descr>
            </div>
            <div class="mb-3">
                <label for="libro_id" class="form-label">Libro</label>
                <select class="form-control" name="libro_id">
                    @foreach ($libro as $item)
                        <option value="{{ $item->id }}"  >{{ $item->titulo }}</option>
                    @endforeach
                </select>
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
        $(document).ready(function(){
            //Código que se ejecutará al cargar la página
            $('#imagen').hide();
            $('#pdf').hide();
        })

        $(document).on('change', '#formato', function(event) {
           /* var valor = $('#servicioSelecionado').val($("#servicio option:selected").text()); */
           let valor = $("#formato option:selected").val()
            console.log(valor)
            if(valor == 'fisico' ){
                
                $('#imagen').show(1000);
                $('#pdf').hide(1000);
            }
            else if(valor == 'digital'){
                $('#pdf').show(1000);
                $('#imagen').hide(1000);
            }
        });

    </script>

@stop