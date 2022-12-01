@extends('adminlte::page')

@section('title', 'Encuesta')

@section('content_header')
<h1>Encuesta</h1>
<td>Con tu opinión, nos ayudas a mejorar</td>
@stop

@section('content')
<form action="/encuesta" name="form" method="POST" onsubmit="return validar();"  autocomplete="off" >
    @csrf

<div class="container-fluid">
    <div class="row content">
        <div class="col-md-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">-</h3>

                    <div class="card-tools">

                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Como evaluaría el tiempo de respuesta de la falla
                                </td>
                                <td class="text-right py-0 align-middle">
                                    <form>
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <select id="p1" name="p1" class="form-control">
                                                    <option selected>Seleccionar</option>
                                                    <option value="1">Eficiente</option>
                                                    <option value="2">Regular</option>
                                                    <option value="3">Deficiente</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            <tr>
                                <td>Cortesía y amabilidad del técnico
                                </td>
                                <td class="text-right py-0 align-middle">
                                    <form>
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <select id="p2" name="p2" class="form-control">
                                                    <option value="1">Eficiente</option>
                                                    <option value="2">Regular</option>
                                                    <option value="3">Deficiente</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Efectividad del técnico
                                </td>
                                <td class="text-right py-0 align-middle">
                                    <form>
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <select id="p3" name="p3" class="form-control">
                                                    <option value="1">Eficiente</option>
                                                    <option value="2">Regular</option>
                                                    <option value="3">Deficiente</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Como evaluaría los servicios técnicos de la empresa
                                </td>
                                <td class="text-right py-0 align-middle">
                                    <form>
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <select id="p4" name="p4" class="form-control">
                                                    <option selected>Seleccionar</option>
                                                    <option value="1">Eficiente</option>
                                                    <option value="2">Regular</option>
                                                    <option value="3">Deficiente</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>¿Nuestro servicio cubre sus expectativas?</td>
                                <td class="text-right py-0 align-middle">
                                    
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <select id="p5" name="p5" class="form-control">
                                                    <option selected>Seleccionar</option>
                                                    <option value="1">Eficiente</option>
                                                    <option value="2">Regular</option>
                                                    <option value="3">Deficiente</option>
                                                </select>
                                            </div>
                                        </div>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>¿El precio del servicio va acorde con los beneficios que se brindan?</td>
                                <td class="text-right py-0 align-middle">
                                    
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <select id="p6" name="p6" class="form-control">
                                                    <option selected>Seleccionar</option>
                                                    <option value="1">Eficiente</option>
                                                    <option value="2">Regular</option>
                                                    <option value="3">Deficiente</option>
                                                </select>
                                            </div>
                                        </div>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>¿Qué mejorarías?</td>
                            </tr>
                            <tr>
                                <td class="text-right py-0 align-middle">
                                    
                                        <div class="form-row align-items-center">

                                            <div class="col-auto my-1">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    <p><textarea id="p7" name="p7" class="form-control" rows="8" cols="100" placeholder="Tu comentario es muy importante"></textarea></p>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right py-0 align-middle">
                                    
                                        <div class="form-row align-items-center">

                                            <div class="col-auto my-1">
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

@endsection