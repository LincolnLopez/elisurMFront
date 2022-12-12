@extends('adminlte::page')

@section('title', 'Crear Articulos')


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
            $("#DNI_EMPLEADO").mask("9999-9999-99999");
            $("#EDAD_EMPLEADO").mask("99");

        });
    </script>



    < <script>
        * FUNCION PARA RESTRINGIR EL ESPACIO *
            **
            **
            **
            **
            **
            ** ** ** ** ** ** ** ** ** ** ** ** ** ** * /
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
            orig = document.form.NOMBRE_EMPLEADO_.value;
            nuev = orig.split('  ');
            nuev = nuev.join(' ');
            document.form.NOMBRE_EMPLEADO_.value = nuev;
            if (nuev = orig.split(' ').length >= 2);
        }
    </script>






@stop

@section('content')
    <form action="/articulos" method="POST" onsubmit="return validar();" autocomplete="off">
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
                                    <label for="" class="form-label">NOMBRE DE ARTICULO</label>
                                    <!--NO autocompletacion autocomplete="off"-->
                                    <!--Que se ubique el cursos en el textbox autofocus="on"-->

                                    <input id="NOMBRE_ARTICULO" name="NOMBRE_ARTICULO" type="text" class="form-control"
                                        tabindex="1" autocomplete="off" autofocus="on"
                                        onkeyup="DobleEspacio(this, event);" onkeypress="return sololetras(event)"
                                        placeholder="Ingrese"autofocus required>

                                </div>
                                <!--campo requerido required    Que no se pueda pegar onPaste="return false;"-->


                                <div class="mb-3">
                                    <label for="" class="form-label">DESCRIPCION ARTICULO</label>
                                    <input id="DESCRIPCION_ARTICULO" name="DESCRIPCION_ARTICULO" type="text"
                                        class="form-control" tabindex="1" autocomplete="off" autofocus="on"
                                        onkeypress="return letrasynumeros(event)" onkeyup="DobleEspacio(this, event);"
                                        placeholder="Ingrese una breve descripción del producto" required>
                                </div>


                                <div class="mb-3">
                                    <label for="" class="form-label">PRECIO ARTICULO</label>
                                    <input id="PRECIO_ARTICULO" name="PRECIO_ARTICULO" type="text" class="form-control"
                                        tabindex="1" autofocus required oninput="limitDecimalPlaces(event, 2)"
                                        onkeypress="return isNumberKey(event)" autofocus required minlength="2" maxlength="10">
                                </div>


                                <label for="country">CODIGO CATEGORIA</label>
                                <select class="form-control" id="COD_CATEGORIA" name="COD_CATEGORIA" autofocus required>
                                    <option value="" disabled selected>Seleccione la Categoria</option>
                                    <option value="1">Tapiceria</option>
                                    <option value="2">Albañileria</option>
                                    <option value="3">Carpinteria</option>
                                    <option value="4">Redes</option>
                                </select>


                                <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
                                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

                            </div>

                        </div>



                    </div>
                </div>
            </div>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="resources/js/sweetAlert.js"></script>
    </form>

@stop
