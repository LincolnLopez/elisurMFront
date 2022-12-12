@extends('adminlte::page')

@section('title', 'Registrar Clientes')


@section('content_header')
@stop

<!------Ruta de algunas validaciones----->
@section('js')

    <script type="text/javascript" src="js/validaciones.js"></script>

    <!---Mascara para los imput--->
    <script src="/js/mascara/src/jquery.maskedinput.js" type="text/javascript"></script>
    <!---Formato numero de telefono e id-->
    <script>
        jQuery(function($) {
            $("#TELEFONO_CLIENTE").mask("9999-9999");
            $("#DNI_CLIENTE").mask("9999-9999-99999");
            $("#RTN_CLIENTE").mask("9999-9999-999999");

        });
    </script>

  

    < <script>
        * FUNCION PARA RESTRINGIR EL ESPACIO *
            **
            ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** * /
    </script>

@stop

@section('content')
    <form action="/clientes" method="POST">
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





                                <div class="mb-3">
                                    <label for="" class="form-label">DNI</label>
                                    <input id="DNI_CLIENTE" name="DNI_CLIENTE" type="text" class="form-control"
                                        tabindex="1" onkeypress="return isNumberKey(event)"
                                        placeholder="Ingrese su ID sin espacios:0000000000000" minlength="13" maxlength="13"
                                        autofocus required>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Nombre</label>
                                    <input id="NOMBRE_CLIENTE" name="NOMBRE_CLIENTE" type="text" class="form-control"
                                        tabindex="1" autocomplete="off" autofocus="on"
                                        onkeyup="DobleEspacio(this, event);" onkeypress="return sololetras(event)"
                                        placeholder="Ingrese Nombre"autofocus required>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Apellido</label>
                                    <input id="APELLIDOS_CLIENTE" name="APELLIDOS_CLIENTE" type="text"
                                        class="form-control" tabindex="1" autocomplete="off" autofocus="on"
                                        onkeyup="DobleEspacio(this, event);" onkeypress="return sololetras(event)"
                                        placeholder="Ingrese Apellido"autofocus required>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Direcciones</label>
                                    <input id="DIRECCION_CLIENTE" name="DIRECCION_CLIENTE" type="text"
                                        class="form-control" tabindex="1" autocomplete="off" autofocus="on" placeholder="Ingrese la dirección"
                                        onkeyup="DobleEspacio(this, event);" onkeypress="return letrasynumeros(event)"
                                        autofocus required>
                                </div>

                                <div class="mb-3">
                                    <label>Ciudad</label>
                                    <select class="form-control" id="CIUDAD" name="CIUDAD" autofocus required>
                                        <option value="" disabled selected>Selecciona una Ciudad:</option>
                                        <option value="1">Tegucigalpa</option>
                                        <option value="2">San Pedro Sula</option>
                                        <option value="3">Comayagua</option>
                                    </select>
                                </div>
                                Opcional
                                <div class="mb-3">
                                    <label for="" class="form-label">RTN</label>
                                    <input id="RTN_CLIENTE" name="RTN_CLIENTE" type="text" class="form-control"
                                        tabindex="1" onkeypress="return solonumeros(event)"
                                        placeholder="En caso de aplicar Ingrese su RTN sin espacios:0000000000000"
                                        onkeyup="DobleEspacio(this, event);" minlength="14" maxlength="14" autofocus required>
                                </div>

                                <div class="mb-3">
                                  <label for="" class="form-label">TELEFONO</label>
                                  <input id="TELEFONO_CLIENTE" name="TELEFONO_CLIENTE" type="text" class="form-control"
                                      tabindex="1" onkeypress="return isNumberKey(event)"
                                      placeholder="Ingrese su Numero de telefono sin espacios:00000000" minlength="8" maxlength="8"
                                      autofocus required>
                              </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Correo</label>
                                    <input id="CORREO_CLIENTE" name="CORREO_CLIENTE" type="email" class="form-control"
                                        tabindex="1" onkeyup="Espacio(this, event);" autofocus required>
                                </div>


                                <label for="country">Tipo de CLiente</label>
                                <select class="form-control" id="COD_TIPO_CLIENTE" name="COD_TIPO_CLIENTE" autofocus
                                    required>
                                    <option value="1">Premium</option>
                                    <option value="2">Nuevo</option>
                                </select>

                                <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
                                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

                            </div>

                        </div>



                    </div>
                </div>
            </div>

    </form>

@stop
