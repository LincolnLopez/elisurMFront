@extends('adminlte::page')

@section('title', 'Tickets')

@section('content_header')
<h1>Asignar empleado</h1>
@stop

@section('css')
<style>
    table {
        border-spacing: 10;
        width: 100%;
        border: 1px solid rgb(24, 118, 153);
    }

    th {
        cursor: pointer;
    }

    th,
    td {
        text-align: left;
        padding: 16px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-12">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Formulario-->
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">AREA</th>
                            <th scope="col">ESTATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Carlos</td>
                            <td>redes</td>
                            <td><button type="button" class="btn btn-success btn-sm">Disponible</button></td>
                            <td><button type="button" class="btn btn-primary btn-sm">APLICAR</button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Marcos</td>
                            <td>mantenimiento</td>
                            <td><button type="button" class="btn btn-danger btn-sm">No Disponible</button></td>
                            <td><button type="button" class="btn btn-primary btn-sm">APLICAR</button></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Marcos</td>
                            <td>redes</td>
                            <td><button type="button" class="btn btn-danger btn-sm">No Disponible</button></td>
                            <td><button type="button" class="btn btn-primary btn-sm">APLICAR</button></td>
                        </tr>
                    </tbody>
                </table>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
@endsection