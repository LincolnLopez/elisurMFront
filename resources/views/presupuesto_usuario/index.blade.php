@extends('adminlte::page')

@section('title', 'Solicitar Presupuesto')

@section('content_header')
<h1>Solicitar presupuesto</h1>
@stop
@section('css')
<style>
    body {
        font-family: Arial;
    }

    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">-</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'Hogar')">Hogar</button>
                        <button class="tablinks" onclick="openCity(event, 'Empresa')">Empresa</button>
                    </div>

                    <div id="Hogar" class="tabcontent">
                        <h3>Hogar</h3>
                        <tr>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control  col-md-5" data-inputmask-alias="datetime" placeholder="dd/mm/yyyy" data-mask="" im-insert="false">
                                </div>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-row">
                                <div class="form-group col-md-4">
<<<<<<< HEAD
                                    <input type="text" class="form-control" id="inputCity" placeholder="Nombre">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="inputCity" placeholder="apellido">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="inputCity" placeholder="Numero de Identificación">
=======
                                    <input type="text" class="form-control" id="inputCity" placeholder="Nombre de Empresa">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="inputCity" placeholder="Dirección">
>>>>>>> 9ee038d7b8378d0aea46bd573a58d5095b8a0d10
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="inputZip" placeholder="Telefóno">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="inputZip" placeholder="Correo Electrónico">
                                </div>

                            </div>
                        </tr>
                        <p>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <select id="inputState" class="form-control">
                                    <option>Ciudad</option>
                                    <option>Tegucigalpa</option>
                                    <option>San Pedro Sula</option>
                                </select>
                            </div>
                            <div class="form-group col-md-7">
                                <textarea class="form-control" rows="1" placeholder="Dirección"></textarea>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <select id="inputState" class="form-control">
                                <option>Seleccionar Tipo de Servicio</option>
                                <option>Aíre Acondicionado</option>
                                <option>Línea Telefónica</option>
                                <option>Sistema de Seguridad</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Detalle el Servicio que desea"></textarea>
                        </div>
                        </p>
                    </div>

                    <div id="Empresa" class="tabcontent">
                        <h3>Empresa</h3>
                        <tr>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control  col-md-5" data-inputmask-alias="datetime" placeholder="dd/mm/yyyy" data-mask="" im-insert="false">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </tr>
                        <tr>
                            <div class="form-row">
                                <div class="form-group col-md-4">
<<<<<<< HEAD
                                    <input type="text" class="form-control" id="inputCity" placeholder="Nombre">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="inputCity" placeholder="Apellido">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="inputCity" placeholder="Numero de Identificación">
=======
                                    <input type="text" class="form-control" id="inputCity" placeholder="Dirección">
>>>>>>> 9ee038d7b8378d0aea46bd573a58d5095b8a0d10
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="inputZip" placeholder="Telefóno">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="inputZip" placeholder="Correo Electrónico">
                                </div>
                            </div>
                        </tr>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="inputCity" placeholder="Nombre de Empresa">
                        </div>
                        <p>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <select id="inputState" class="form-control">
                                    <option>Ciudad</option>
                                    <option>Tegucigalpa</option>
                                    <option>San Pedro Sula</option>
                                </select>
                            </div>
                            <div class="form-group col-md-7">
                                <textarea class="form-control" rows="1" placeholder="Dirección"></textarea>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <select id="inputState" class="form-control">
                                <option>Seleccionar Tipo de Servicio</option>
                                <option>Aíre Acondicionado</option>
                                <option>Línea Telefónica</option>
                                <option>Sistema de Seguridad</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Detalle el Servicio que desea"></textarea>
                        </div>
                        </p>
                    </div>
                </div>
                <tr>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-lg">Enviar</button>
                    </div>
                </tr>
            </div>
        </div>
    </div>
</div>


@endsection

@section('js')
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

@stop