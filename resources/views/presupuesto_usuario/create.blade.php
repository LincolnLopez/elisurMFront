@extends('adminlte::page')

@section('title', 'Presupuesto')

@section('content_header')
<h1>Solicitud de Presupuesto</h1>
@stop

@section('content')

<script>
    /*=============================================
     VALIDACION QUE SOLO PERMITA LETRAS Y NUMEROS             
    =============================================*/

    function letrasynumeros(e) {

        key = e.keyCode || e.wich;

        teclado = String.fromCharCode(key).toUpperCase();

        letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZÑ1234567890 ";

        especiales = "8-37-38-46-164";

        teclado_especial = false;

        for (var i in especiales) {

            if (key == especiales[i]) {
                teclado_especial = true;
                break;
            }
        }

        if (letras.indexOf(teclado) == -1 && !teclado_especial) {
            return false;
        }

    }

    /*=====  End of Section comment block  ======*/


    /*==============================================
    =     VALIDACION SOLO LETRAS            =
    ==============================================*/
    function sololetras(e) {

        key = e.keyCode || e.wich;

        teclado = String.fromCharCode(key).toUpperCase();

        letras = " ABCDEFGHIJKLMNOPQRSTUVWXYZÑ";

        especiales = "8-37-38-46-164";

        teclado_especial = false;

        for (var i in especiales) {

            if (key == especiales[i]) {
                teclado_especial = true;
                break;
            }
        }

        if (letras.indexOf(teclado) == -1 && !teclado_especial) {
            return false;
        }

    }




    /*==============================================
    =        VALIDACION SOLO NUMEROS           =
    ==============================================*/
    function solonumeros(e) {

        key = e.keyCode || e.wich;

        teclado = String.fromCharCode(key).toUpperCase();

        letras = "1234567890";

        especiales = "8-37-38-46-164";

        teclado_especial = false;

        for (var i in especiales) {

            if (key == especiales[i]) {
                teclado_especial = true;
                break;
            }
        }

        if (letras.indexOf(teclado) == -1 && !teclado_especial) {
            return false;
        }

    }

    function Espacio(campo, event) {
        CadenaaReemplazar = " ";
        CadenaReemplazo = "";
        CadenaTexto = campo.value;
        CadenaTextoNueva = CadenaTexto.split(CadenaaReemplazar).join(CadenaReemplazo);
        campo.value = CadenaTextoNueva;
    }




    function limitDecimalPlaces(e, count) {
        if (e.target.value.indexOf('.') == -1) {
            return;
        }
        if ((e.target.value.length - e.target.value.indexOf('.')) > count) {
            e.target.value = parseFloat(e.target.value).toFixed(count);
        }
    }

    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }
</script>

<script>
    function DobleEspacio(campo, event) {

        CadenaaReemplazar = "  ";
        CadenaReemplazo = " ";
        CadenaTexto = campo.value;
        CadenaTextoNueva = CadenaTexto.split(CadenaaReemplazar).join(CadenaReemplazo);
        campo.value = CadenaTextoNueva;

    }
</script>

<script>
    jQuery(function($) {
        $("#TELEFONO").mask("9999-9999");
        $("#TELEFONO_OPCIONAL").mask("99999-99999");
        $("#RTN_CLIENTE").mask("9999-9999-999999");

    });
</script>

<script>
    function onPaste(event) {
  console.log('Paste!! ', event);
  event.preventDefault();
  event.stopPropagation();
  }
  </script>

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
                                    <input id="NOMBRE" name="NOMBRE" type="text" class="form-control" tabindex="1" autocomplete="off" autofocus="on"
                                    onkeyup="DobleEspacio(this, event);" onkeypress="return sololetras(event)"
                                    placeholder="Ingrese su Nombre" onpaste="onPaste(event)" autofocus required>
                                </div>
                                <div class="form-group col-md-3">
                                    <input id="APELLIDO" name="APELLIDO" type="text" class="form-control" tabindex="1" autocomplete="off" autofocus="on"
                                    onkeyup="DobleEspacio(this, event);" onkeypress="return sololetras(event)"
                                    placeholder="Ingrese su Apellido" onpaste="onPaste(event)" autofocus required>
                                </div>
                                <div class="form-group col-md-3">
                                    <input id="TELEFONO" name="TELEFONO" type="text" class="form-control" tabindex="1" onkeypress="return isNumberKey(event)"
                                    placeholder="Ingrese su Numero de telefono sin espacios:00000000" onpaste="onPaste(event)" minlength="8" maxlength="8"
                                    autofocus required>
                                </div>
                                <div class="form-group col-md-3">
                                    <input id="CORREO_ELECTRONICO" name="CORREO_ELECTRONICO" type="email" class="form-control" placeholder="Ingrese su correo electronico"
                                    tabindex="1" onkeyup="Espacio(this, event);" onpaste="onPaste(event)" autofocus required>
                                </div>
                            </div>
                        </tr>
                        <tr>
                            <h4>Datos Emprea o domicilio </h4>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <select id="TIPO_SOLICITANTE" name="TIPO_SOLICITANTE" class="form-control" autofocus required>
                                        <option value="" disabled selected>Selecciona tipo de Solicitante:</option>
                                        <option value="EMPRESA">EMPRESA</option>
                                        <option value="CASA">CASA</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-5">
                                    <input id="NOMBRE_E_C" name="NOMBRE_E_C" type="text" class="form-control" tabindex="1"placeholder="Ingrese el nombre de la empresa" onkeyup="DobleEspacio(this, event);" onkeypress="return letrasynumeros(event)"
                                    onpaste="onPaste(event)" autofocus required>
                                </div>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <input id="RTN_DNI" name="RTN_DNI" type="text" class="form-control"
                                    tabindex="1" onkeypress="return solonumeros(event)"
                                    placeholder="En caso de aplicar Ingrese su RTN sin espacios:0000000000000"
                                    onkeyup="DobleEspacio(this, event);"  onpaste="onPaste(event)" minlength="13" maxlength="14" autofocus required>
                                </div>
                            </div>

                            <div class="form-group col-md-5">
                                <input id="TELEFONO_OPCIONAL" name="TELEFONO_OPCIONAL" type="text" class="form-control" tabindex="1" onpaste="onPaste(event)" onkeypress="return isNumberKey(event)"
                                placeholder="Ingrese su Numero de telefono sin espacios:00000000" minlength="8" maxlength="8"
                                autofocus required>
                            </div>

                        </tr>
                        <tr>
                            <div class="form-row">
                                <div class="form-group col-md-3">

                                    <select id="CIUDAD" name="CIUDAD" class="form-control" autofocus required>
                                        <option value="" disabled selected>Selecciona la ciudad:</option>
                                        <option value="Tegucigalpa">Tegucigalpa</option>
                                        <option value="San Pedro Sula">San Pedro Sula</option>
                                        <option value="Comayagua">Comayagua</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-7">
                                    <textarea id="DIRECCION_SOLICITANTE" rows="4" cols="120" name="DIRECCION_SOLICITANTE" rows="1" class="form-control" tabindex="1" autocomplete="off" autofocus="on"
                                    onkeyup="DobleEspacio(this, event);" onpaste="onPaste(event)" onkeypress="return letrasynumeros(event)"
                                    placeholder="Ingresa la dirección" autofocus required></textarea>

                                </div>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <select id="COD_SERVICIO" name="COD_SERVICIO" class="form-control">
                                        <option value="" disabled selected>Selecciona nuestros servicios</option>
                                   <option value="1">1.Aire Acondicionado</option>
                                   <option value="2">2.Construcción</option>
                                   <option value="3">3.Electricidad</option>
                                   <option value="4">4.Monitoreo CCTV</option>
                                   <option value="5">5.Pintura</option>
                                   <option value="6">6.Planta Telefonica</option>
                                   <option value="7">7.Sistema de Seguridad</option>
                                   <option value="8">8.Tabla Yeso</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-7">
                                    <textarea id="DESCRIPCION_SOLICITUD" rows="4" cols="120" name="DESCRIPCION_SOLICITUD" rows="1" class="form-control" tabindex="1" autocomplete="off" autofocus="on"
                                    onkeyup="DobleEspacio(this, event);" onpaste="onPaste(event)" onkeypress="return letrasynumeros(event)"
                                    placeholder="Ingresa la descripción solicitada" autofocus required></textarea>
                                </div>
                            </div>
                        </tr> 
                        

                        @can('crear-presupuestoUsuario')
                        <a href="/presupuesto_usuario" class="btn btn-secondary" tabindex="5">Cancelar</a>


                        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button> 
                        @endcan
                       



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection