@extends('adminlte::page')

@section('title', 'Reportar fallas')

@section('content_header')
<h1>Reportar Fallas</h1>
@stop

@section('content')


<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-10">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">-</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <form action="/falla" method="POST">

                        @csrf



                        <tr>
                            <label>Datos personales</label>



                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input id="NOMBRE" name="NOMBRE" type="text" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="form-group col-md-4">
                                    <input id="TELEFONO" name="TELEFONO" type="text" class="form-control" placeholder="Telefóno">
                                </div>
                                <div class="form-group col-md-4">
                                    <input id="TCORREO_ELECTRONICO" name="CORREO_ELECTRONICO" type="text" class="form-control" placeholder="Correo Electrónico">
                                </div>
                            </div>
                        </tr>

                        <tr>

                            <div class="form-group col-md-6">
                                <select id="COD_SERVICIO" name="COD_SERVICIO" class="form-control">
                                    <option>Seleccionar Tipo de Servicio</option>
                                    <option value="1">Aíre Acondicionado</option>
                                    <option value="2">Línea Telefónica</option>
                                    <option value="3">Sistema de Seguridad</option>
                                </select>
                            </div>
                            <label>Tema:</label>

                            <div class="form-group">
                                <div class="form-group col-md-6">
                                    <input id="TEMA" name="TEMA" type="text" class="form-control" placeholder="tema">
                                </div>
                        </tr>
                        <tr>
                            <label>Descripción:</label>
                        </tr>

                        <tr>
                            <td class="text-right py-0 align-middle">
                                <form>
                                    <div class="form-row align-items-center">

                                        <div class="col-auto my-1">
                                            <!-- textarea -->
                                            <div class="form-group col-md-20">
                                                <textarea id="DESCRIPCION" name="DESCRIPCION" rows="4" cols="120" class="form-control" placeholder="DESCRIPCION"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <label>Ubicación:</label>
                            <div class="form-group">
                                <div class="form-group col-md-4">
                                    <input id="UBICACION" name="UBICACION" type="text" class="form-control" placeholder="">
                                </div>
                        </tr>
                        <tr>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                            </div>
                        </tr>
                </div>
            </div>
        </div>
    </div>
</div>


</form>
@stop