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
        <form method="POST" action="{{ route('libros.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo </label>
                <input type="text" class="form-control" id="titulo" name="titulo" aria-descr>
            </div>
            <div class="mb-3">
                <label for="cantidad_disponible" class="form-label">Cantidad</label>
                <input type="text" class="form-control" id="cantidad_disponible" name="cantidad_disponible" aria-descr>
            </div><br>
            <div class="mb-3">
                <label for="fecha_edicion" class="form-label">Fecha de edicion</label>
                <input type="date" class="form-control" id="fecha_edicion" name="fecha_edicion" aria-descr>
            </div>
            <br>
            <div class="mb-3">
                <label for="formato" class="form-label">Formato</label>
                <select class="form-control" name="formato" id="formato">                   
                    <option value="" selected="selected"></option>    
                    <option value="fisico" >Fisico</option>
                    <option value="digital"  >Digital</option>
                </select>
            </div>
            <br>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" aria-descr>
            </div>
            <br>
            <!-- <div class="mb-3">
                <label for="imagen_pdf" class="form-label">Imagen / Pdf</label>
                <input type="file" class="form-control-file" id="imagen_pdf" name="imagen_pdf" aria-descr accept="application/pdf">
            </div> -->
            <div class="mb-3" id="imagen">
                <label class="form-label">Imagen</label>
                <input type="file" class="form-control-file" name="imagen" accept="image/*">
            </div>
            <div class="mb-3"  id="pdf">
                <label class="form-label">Pdf</label>
                <input type="file" class="form-control-file" name="pdf" accept="application/pdf">
            </div>
            <br>
            <div class="mb-3">
                <label for="observaciones" class="form-label">Observaciones</label>
                <input type="text" class="form-control" id="observaciones" name="observaciones" aria-descr>
            </div>
            <br>
            <div class="mb-3">
                <label for="categoria_id" class="form-label">Categoria</label>
                <select class="form-control" name="categoria_id">
                    @foreach ($categoria as $item)
                        <option value="{{ $item->id }}"  >{{ $item->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="mb-3">
                <label for="autor_id" class="form-label">Autor</label>
                <select class="form-control" name="autor_id">
                    @foreach ($autor as $item)
                        <option value="{{ $item->id }}"  >{{ $item->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="mb-3">
                <label for="editorial_id" class="form-label">Editorial</label>
                <select class="form-control" name="editorial_id">
                    @foreach ($editorial as $item)
                        <option value="{{ $item->id }}"  >{{ $item->nombre }}</option>
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