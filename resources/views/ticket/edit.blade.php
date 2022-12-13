@extends('adminlte::page')

@section('title', 'Edición de Ticket')


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
            $("#TELEFONO").mask("9999-9999");
        });
    </script>



    < <script>
        * FUNCION PARA RESTRINGIR EL ESPACIO *
            **
            **
            **
            **
            **
            **
            **
            ** ** ** ** ** ** ** ** ** ** ** ** * /
    </script>

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
        function soloLetras(e) {
            key = e.keyCode || e.which;
            tecla = String.fromCharCode(key).toLowerCase();
            letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
            especiales = "8-37-39-46";

            tecla_especial = false
            for (var i in especiales) {
                if (key == especiales[i]) {
                    tecla_especial = true;
                    break;
                }
            }

            if (letras.indexOf(tecla) == -1 && !tecla_especial) {
                return false;
            }
        }
    </script>





    <script>
        function nospaces2() {
            orig = document.CORREO.value;
            nuev = orig.split(' ');
            nuev = nuev.join('');
            document.form.CORREO.value = nuev;
            if (nuev = orig.split(' ').length >= 2);
        }

        function validar() {
            var correo, expresion;
            correo = document.getElementById("correo").value;
            expresion = /\w+@\w+\.+[a-z]/;

            if (correo.length > 80) {
                alert("El campo correo excede su capacidad de caracteres");
            } else if (!expresion.test(correo)) {
                alert('El correo no es valido');
                return false;
            }
        }

        /*
        function validar() {
        if (/^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3,4})+$/.test('correo')){
        alert("La dirección de email " + 'correo' + " es correcta.");
        }else {
        alert("La dirección de email es incorrecta.");
        }
        }*/
    </script>


    <script>
        function unspaces() {
            orig = document.form.NOMBRE.value;
            nuev = orig.split('  ');
            nuev = nuev.join(' ');
            document.form.NOMBRE.value = nuev;
            if (nuev = orig.split(' ').length >= 2);
        }
    </script>

<script>
    function onPaste(event) {
  console.log('Paste!! ', event);
  event.preventDefault();
  event.stopPropagation();
  }
  </script>

@stop

@section('content')
    <form action="/ticket/{{ $ticket->cod_reporte_falla }}" method="POST">
        @csrf
        @method('PUT')

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
                                    <label for="" class="form-label">COD_REPORTE_FALLA</label>
                                    <input id="COD_REPORTE_FALLA" name="COD_REPORTE_FALLA" type="text"
                                        class="form-control" value="{{ $ticket->cod_reporte_falla }}" onpaste="onPaste(event)" readonly>
                                </div>

                                <div>
                                    <label for="country">COD_SERVICIO</label>
                                    <select class="form-control" id="COD_SERVICIO" name="COD_SERVICIO"
                                        value="{{ $ticket->cod_servicio }}">
                                        <option value="{{ $ticket->cod_servicio }}">Selecciona nuestros servicios</option>
                                        <option value="1">Aire Acondicionado</option>
                                        <option value="2">Construcción</option>
                                        <option value="3">Electricidad</option>
                                        <option value="4">Monitoreo CCTV</option>
                                        <option value="5">Pintura</option>
                                        <option value="6">Planta Telefonica</option>
                                        <option value="7">Sistema de Seguridad</option>
                                        <option value="8">Tabla Yeso</option>
                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="" class="form-label">NOMBRE</label>
                                    <input id="NOMBRE" name="NOMBRE" type="text" class="form-control"
                                        value="{{ $ticket->nombre }}" autocomplete="off" autofocus="on"
                                        onkeyup="DobleEspacio(this, event);" onkeypress="return sololetras(event)"
                                        minlength="7" maxlength="40" onpaste="onPaste(event)" required>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">TELEFONO</label>
                                    <input id="TELEFONO" name="TELEFONO" type="text" class="form-control"
                                        value="{{ $ticket->telefono }}" minlength="8" maxlength="8" autocomplete="off"
                                        autofocus="on" onkeypress="return isNumberKey(event)" onpaste="onPaste(event)" autofocus required="">
                                </div>


                                <div class="mb-3">
                                    <label for="" class="form-label">CORREO_ELECTRONICO</label>
                                    <input id="CORREO_ELECTRONICO" name="CORREO_ELECTRONICO" type="email"
                                        class="form-control" autocomplete="off" onkeyup="Espacio(this, event);"
                                        value="{{ $ticket->correo_electronico }}" onpaste="onPaste(event)" required>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">TEMA</label>
                                    <input id="TEMA" name="TEMA" type="text" class="form-control"
                                        autocomplete="off" onkeyup="DobleEspacio(this, event);"
                                        onkeypress="return sololetras(event)" value="{{ $ticket->tema }}" onpaste="onPaste(event)" required>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">DESCRIPCION</label>
                                    <input id="DESCRIPCION" name="DESCRIPCION" type="text" class="form-control"
                                        autocomplete="off" onkeyup="DobleEspacio(this, event);"
                                        onkeypress="return letrasynumeros(event)" onpaste="onPaste(event)" value="{{ $ticket->descripcion }}"
                                        required>
                                </div>


                                <div class="mb-3">
                                    <label for="" class="form-label">UBICACION</label>
                                    <input id="UBICACION" name="UBICACION" type="text" class="form-control"
                                        autocomplete="off" onkeyup="DobleEspacio(this, event);"
                                        onkeypress="return letrasynumeros(event)" onpaste="onPaste(event)" value="{{ $ticket->ubicacion }}"
                                        required>
                                </div>

                                <div>
                                    <label for="country">COD_ESTADO</label>
                                    <select class="form-control" id="COD_ESTADO" name="COD_ESTADO"
                                        value="{{ $ticket->cod_estado }}">
                                        <option value="{{ $ticket->cod_estado }}">Selecciona nuestros servicios</option>
                                        <option value="1">NUEVO</option>
                                        <option value="2">EN PROCESO</option>
                                        <option value="3">FINALIZADO</option>
                                        <option value="4">CANCELADO</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">nombre_empleado</label>
                                    <input id="NOMBRE_EMPLEADO" name="NOMBRE_EMPLEADO" type="text"
                                        class="form-control" value="{{ $ticket->nombre_empleado }}"
                                        onkeyup="DobleEspacio(this, event);" onpaste="onPaste(event)" onkeypress="return sololetras(event)"
                                        required>
                                </div>

                                <a href="/ticket" class="btn btn-secondary" tabindex="5">Cancelar</a>
                                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </form>


@stop
