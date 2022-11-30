@extends('adminlte::page')

@section('title', 'Presupuesto')

@section('content_header')
<h1>Solicitud de Presupuesto</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-10">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">-</h3>
                </div>
                <div class="card-body">

                    <form action="/presupuesto_usuario" method="POST">
                        @csrf
                        <tr>
                            <h4>Datos personales </h4>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input id="NOMBRE" name="NOMBRE" type="text" class="form-control" placeholder="NOMBRE">
                                </div>
                                <div class="form-group col-md-3">
                                    <input id="APELLIDO" name="APELLIDO" type="text" class="form-control" placeholder="APELLIDO">
                                </div>
                                <div class="form-group col-md-3">
                                    <input id="TELEFONO" name="TELEFONO" type="text" class="form-control" placeholder="TELEFONO">
                                </div>
                                <div class="form-group col-md-3">
                                    <input id="CORREO_ELECTRONICO" name="CORREO_ELECTRONICO" type="text" class="form-control" placeholder="CORREO ELECTRONICO">
                                </div>
                            </div>
                        </tr>
                        <tr>
                            <h4>Datos Emprea o domicilio </h4>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <select id="TIPO_SOLICITANTE" name="TIPO_SOLICITANTE" class="form-control">
                                        <option>Tipo de Solicitante </option>
                                        <option value="EMPRESA">EMPRESA</option>
                                        <option value="CASA">CASA</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-5">
                                    <input id="NOMBRE_E_C" name="NOMBRE_E_C" type="text" class="form-control" placeholder="NOMBRE EMPRESA/COLONIA">
                                </div>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <input id="RTN_DNI" name="RTN_DNI" type="text" class="form-control" placeholder="NUMERO IDENTIFICACION ">
                                </div>
                            </div>

                            <div class="form-group col-md-5">
                                <input id="TELEFONO_OPCIONAL" name="TELEFONO_OPCIONAL" type="text" class="form-control" placeholder="TELEFONO">
                            </div>

                        </tr>
                        <tr>
                            <div class="form-row">
                                <div class="form-group col-md-3">

                                    <select id="CIUDAD" name="CIUDAD" class="form-control">
                                        <option>Ciudad</option>
                                        <option value="Tegucigalpa">Tegucigalpa</option>
                                        <option value="San Pedro Sula">San Pedro Sula</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-7">
                                    <textarea id="DIRECCION_SOLICITANTE" rows="4" cols="120" name="DIRECCION_SOLICITANTE" rows="1" class="form-control" placeholder="Dirección"></textarea>

                                </div>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <select id="COD_SERVICIO" name="COD_SERVICIO" class="form-control">
                                        <option>Seleccionar Tipo de Servicio</option>
                                        <option value="1">Aíre Acondicionado</option>
                                        <option value="2">Línea Telefónica</option>
                                        <option value="3">Sistema de Seguridad</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-7">
                                    <textarea id="DESCRIPCION_SOLICITUD" rows="4" cols="120" name="DESCRIPCION_SOLICITUD" rows="1" class="form-control" placeholder="DESCRIPCION"></textarea>
                                </div>
                            </div>
                        </tr> 
                        <a href="/presupuesto_usuario" class="btn btn-secondary" tabindex="5">Cancelar</a>

                        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection