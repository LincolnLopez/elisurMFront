@extends('adminlte::page')

@section('title', 'Clientes')


@section('content_header')
@stop

@section('css')

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

@stop



@section('content')

    <body>
        </br>
        <section class="content-12">
            <div class="row">
                <div class="col-md">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3><i class="fas fa-user-plus fa-1.4x">
                                </i>Clientes</h3>
                        </div>
                        <div class="card-body">
                            @if (Session::has('success'))
                                <div class="alert alert-success text-center alert-dismissible fade show" role="alert"
                                    id="success-alert">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                    <strong> {{ Session::get('success') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (Session::has('updates'))
                                <div class="alert alert-warning text-center alert-dismissible fade show" role="alert"
                                    id="update-alert">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path
                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                    </svg>
                                    <strong> {{ Session::get('updates') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <div class="card card-info card-tabs">
                                        <div class="card-header p-0 pt-1">
                                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist"></ul>
                                        </div>
                                        <div>
                                            <a href="{{ route('usuarios.create') }}" style="float: left;"
                                                class="btn btn-success"target="_blank"><i class="fas fa-plus-circle"></i>
                                                Nuevo
                                            </a>

                                            <a href="{{ route('reporte_usuarios.index') }}" style="float: right;"
                                                class="btn btn-danger" target="_blank"><i class="fas fa-file-pdf"></i>
                                                Descargar PDF
                                            </a>

                                        </div>

                                        </br>
                                        <table id="AdministradorTable" class="table table-striped table-bordered"
                                            cellspacing="10" width="100%">

                                            <thead style="background-color:#6777ef">
                                                <th style="display: none;">ID</th>
                                                <th style="color:#fff;">Nombre</th>
                                                <th style="color:#fff;">E-mail</th>
                                                <th style="color:#fff;">Rol</th>
                                                <th style="color:#fff;">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($usuarios as $usuario)
                                                    <tr>
                                                        <td style="display: none;">{{ $usuario->id }}</td>
                                                        <td>{{ $usuario->name }}</td>
                                                        <td>{{ $usuario->email }}</td>
                                                        <td>
                                                            @if (!empty($usuario->getRoleNames()))
                                                                @foreach ($usuario->getRoleNames() as $rolNombre)
                                                                    <h5><span
                                                                            class="badge badge-dark">{{ $rolNombre }}</span>
                                                                    </h5>
                                                                @endforeach
                                                            @endif
                                                        </td>

                                                        <td>
                                                            <a class="btn btn-info"
                                                                href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>

                                                            {!! Form::open([
                                                                'method' => 'DELETE',
                                                                'route' => ['usuarios.destroy', $usuario->id],
                                                                'style' => 'display:inline',
                                                            ]) !!}
                                                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                                            {!! Form::close() !!}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <!-- Centramos la paginacion a la derecha -->
                                        <div class="pagination justify-content-end">
                                            {!! $usuarios->links() !!}
                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>

            </div>

            </div>


        </section>
    </body>

@stop




@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>


    <script>
        $(function() {
            $('#AdministradorTable').DataTable({
                responsive: true,
                scrollX: true,
                autoWidth: true,
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json'
                }
            });
        });
    </script>

    <script>
        $("#success-alert").fadeTo(2000, 500).slideUp(400, function() {
            $("#success-alert").slideUp(500);
        });
    </script>
    <script>
        $("#delete-alert").fadeTo(2000, 500).slideUp(400, function() {
            $("#delete-alert").slideUp(500);
        });
    </script>
    <script>
        $("#update-alert").fadeTo(2000, 500).slideUp(400, function() {
            $("#update-alert").slideUp(500);
        });
    </script>


@stop
