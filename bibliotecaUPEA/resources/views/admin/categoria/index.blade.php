@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>Personal <h4>Bienvenido. {{ auth()->user()->rol }}</h4></strong>
            <a href="{{ route('categoria.create') }}" class="btn btn-outline-success float-right">
                Nueva Categoria
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
                    <th scope="col">NOMBRE CATEGORIA</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categoria as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->descripcion }}</td>
                        <td>
                            <a href="{{ route('categoria.edit', $item) }}" class="btn btn-outline-primary">
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