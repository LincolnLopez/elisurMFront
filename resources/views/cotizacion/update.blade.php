s@extends('adminlte::page')

@section('title', 'Presupuesto')

@section('content_header')
<h1>Solicitud de Presupuesto</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">-</h3>
                </div>
                <div class="card-body">
                    <tr>
                        <div class="form-group">
                            <label>Fecha:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input type="text" class="form-control  col-md-5" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                            </div>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group col-md-6">
                            <label>Servicio:</label>
                            <select id="inputState" class="form-control">
                                <option>Aíre Acondicionado</option>
                                <option>Línea Telefónica</option>
                                <option>Sistema de Seguridad</option>
                            </select>
                        </div>
                    </tr>
                    <tr>
                        <label>usuario:</label>
                        <div class="form-group">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="inputCity" placeholder="njrodriguezp">
                            </div>
                    </tr>
                    <tr>
                        <label>Texto:</label>
                        <div class="form-group">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="inputCity" placeholder="">
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
                                        <div class="form-group">
                                            <p><textarea class="form-control" rows="6" cols="100" placeholder="enter...."></textarea></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-lg">Enviar</button>
                        </div>
                    </tr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection