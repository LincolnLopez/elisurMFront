@extends('adminlte::page')

@section('title', 'Empleados')


@section('content_header')
@stop



@section('content')
    <form action="/empleados" method="POST">
        @csrf

        <div class="container-fluid">

            <!-- Main row -->
            <div class="row justify-content-center">
                <!-- Left col -->
                <div class="col-md-9">
                    <!-- MAP & BOX PANE -->
                    <div class="card card-info">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">



                                <div class="mb-3">
                                    <label for="" class="form-label">DNI_EMPLEADO</label>
                                    <input id="DNI_EMPLEADO" name="DNI_EMPLEADO" type="text" class="form-control"
                                        tabindex="1">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">NOMBRE DE EMPLEADO</label>
                                    <input id="NOMBRE_EMPLEADO" name="NOMBRE_EMPLEADO" type="text" class="form-control"
                                        tabindex="1">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">APELLIDOS EMPLEADO</label>
                                    <input id="APELLIDOS_EMPLEADO" name="APELLIDOS_EMPLEADO" type="text"
                                        class="form-control" tabindex="1">
                                </div>

                                <label for="country">SEXO_EMPLEADO </label>
                                <select class="form-control" id="SEXO_EMPLEADO" name="SEXO_EMPLEADO" tabindex="1">
                                    <option value="" disabled selected>Seleccione</option>
                                    <option value="H">Hombre </option>
                                    <option value="M">Mujer</option>
                                </select>

                                <label for="country">ESTADO_CIVIL_EMPLEADO</label>
                                <select class="form-control" id="ESTADO_CIVIL_EMPLEADO" name="ESTADO_CIVIL_EMPLEADO"
                                    tabindex="1">
                                    <option value="" disabled selected>Seleccione</option>
                                    <option value="S">Soltero</option>
                                    <option value="C">Casado </option>
                                    <option value="U">Union libre</option>
                                </select>

                                <div class="mb-3">
                                    <label for="" class="form-label">EDAD EMPLEADO</label>
                                    <input id="EDAD_EMPLEADO" name="EDAD_EMPLEADO" type="text" class="form-control"
                                        tabindex="1">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">TELEFONO</label>
                                    <input id="TELEFONO" name="TELEFONO" type="text" class="form-control"
                                        tabindex="1">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">CORREO</label>
                                    <input id="CORREO" name="CORREO" type="text" class="form-control" tabindex="1">
                                </div>

                                <a href="/empleados" class="btn btn-secondary" tabindex="5">Cancelar</a>
                                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

                            </div>

                        </div>



                    </div>
                </div>
            </div>

    </form>

@stop
