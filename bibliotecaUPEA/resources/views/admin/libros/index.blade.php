@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>Personal <h4>Bienvenido. {{ auth()->user()->rol }}</h4></strong>
            <a href="{{ route('libros.create') }}" class="btn btn-outline-success float-right">
                Nueva Libro
            </a>
        </div>
    </div>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="personal">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">TITULO</th>
                        <th scope="col">STOCK</th>
                        <th scope="col">FECHA EDICION</th>
                        <th scope="col">FORMATO</th>
                        <th scope="col">DESCRIPCION</th>
                        <th scope="col">IMAGEN O PDF</th>
                        <th scope="col">OBSERVACIONES</th>
                        <th scope="col">OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($libro as $item)
                   <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->titulo }}</td>
                        @if( $item->cantidad_disponible  == 0)
                            <td>
                                <span class="badge bg-danger">
                                    {{ $item->cantidad_disponible }}
                                </span>
                            </td>
                        @elseif($item->cantidad_disponible  > 0 && $item->cantidad_disponible  < 6)
                            <td>
                                <span class="badge bg-warning text-dark">
                                    {{ $item->cantidad_disponible }}
                                </span>
                            </td>
                        @elseif($item->cantidad_disponible  >5)
                            <td>
                                <span class="badge bg-success">
                                    {{ $item->cantidad_disponible }}
                                </span>
                            </td>
                        @endif
                        <td>{{ $item->fecha_edicion }}</td>
                        <td>{{ $item->formato }}</td>
                        <td>{{ $item->descripcion }}</td>
                        <td>
                            @if($item->formato == "digital")
                                <a href="{{ Storage::url($item->imagen_pdf ) }}" target="_blank">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                            @elseif($item->formato == "fisico")
                                <img with="60" height="60" src="{{ Storage::url($item->imagen_pdf ) }}">    
                            @endif
                        </td>
                        <td>{{ $item->observaciones }}</td>
                        <td>
                            <a href=""  class="btn btn-outline-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button class="btn btn-outline-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    {{--Datatable css--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
@stop

@section('js')
    <script> console.log('hola mundo'); </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('eliminar')=='ok')
    <script>
        Swal.fire(
                'Eliminado!',
                'la Persona ha sido eliminada.',
                'success'
                )
    </script>    
    @endif
    <script>
        $('.form-eliminar').submit(function(e){
            e.preventDefault();
            Swal.fire({
            title: 'estas seguro?',
            text: "los datos de la persona, se eliminaran!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!',
            cancelButtonText:'Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {
                
                this.submit()
            }
            })
        })
    </script>
    {{--Datatables--}}
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script><script>
            $('#personal').DataTable({
            responsive: true,
            autowidth: false,
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "El registro no existe - disculpe",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate":{
                    "next":"Siguiente",
                    "previous":"Anterior"
                }
            }
        });
    </script>@stop