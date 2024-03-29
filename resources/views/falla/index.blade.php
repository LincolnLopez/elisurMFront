@extends('adminlte::page')

@section('title', 'Reportar fallas')

@section('content_header')
    <h1>Reportar Fallas</h1>
@stop

@section('content')

    <!------Ruta de algunas validaciones----->
@section('js')

    <script type="text/javascript" src="js/validaciones.js"></script>

    <!---Mascara para los imput--->
    <script src="/js/mascara/src/jquery.maskedinput.js" type="text/javascript"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
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
        function nospaces2() {
            orig = document.CORREO_ELECTRONICO.value;
            nuev = orig.split(' ');
            nuev = nuev.join('');
            document.form.CORREO_ELECTRONICO.value = nuev;
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

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-10">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">-</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
                    <form action="/falla" method="POST">

                        @csrf



                        <tr>
                            <label>Datos personales</label>



                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="" class="form-label">Nombre</label>
                                    <input id="NOMBRE" name="NOMBRE" type="text" class="form-control"
                                        tabindex="1" autocomplete="off" autofocus="on"
                                        onkeyup="DobleEspacio(this, event);" onkeypress="return sololetras(event)"
                                        placeholder="Ingrese Nombre"autofocus minlength="7" maxlength="40" onpaste="onPaste(event)" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="" class="form-label">Número Telefonico</label>
                                    <input id="TELEFONO" name="TELEFONO" type="text" class="form-control"
                                        tabindex="1" onkeypress="return isNumberKey(event)"
                                        placeholder="Ingrese su número de telefono: 00000000" minlength="8"
                                        maxlength="8" onpaste="onPaste(event)" autofocus required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="" class="form-label">Correo Electronico</label>
                                    <input id="TCORREO_ELECTRONICO" name="CORREO_ELECTRONICO" type="email"
                                        class="form-control" tabindex="1" onkeyup="Espacio(this, event);"
                                        placeholder="Ingrese correo" onpaste="onPaste(event)" autofocus required>
                                </div>

                            </div>
                        </tr>

                        <tr>

                            <div class="form-group col-md-6">
                                <label for="" class="form-label">Servicios</label>
                                <select id="COD_SERVICIO" name="COD_SERVICIO" class="form-control" required>
                                    <option value="" disabled selected>Seleccione el Tipo de Servicio:</option>
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
                            <label>Tema:</label>

                            <div class="form-group">
                                <div class="form-group col-md-6">
                                    <input id="TEMA" name="TEMA" type="text" class="form-control"
                                        placeholder="Asunto" onkeyup="DobleEspacio(this, event);"
                                        onkeypress="return sololetras(event)" onpaste="onPaste(event)" required>
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
                                                <textarea id="DESCRIPCION" name="DESCRIPCION" rows="4" cols="120" class="form-control"
                                                    placeholder="DESCRIPCION" onkeyup="DobleEspacio(this, event);" onkeypress="return letrasynumeros(event)"
                                                    placeholder="Ingrese una breve descripción de lo solicitado" onpaste="onPaste(event)" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <label>Ubicación:</label>
                            <div class="form-group">
                                <div class="form-group col-md">

                                    <input id="UBICACION" name="UBICACION" type="text" class="form-control"
                                        tabindex="1" autocomplete="off" autofocus="on" placeholder="Ingrese Ubicación"
                                        onkeyup="DobleEspacio(this, event);" onkeypress="return letrasynumeros(event)"
                                        autofocus onpaste="onPaste(event)" required>
                                </div>
                            </div>
                        </tr>
                        <tr>
                            <div class="modal-footer">
                                @can('crear-fallas-cliente')
                                    <button type="submit" class="btn btn-primary" tabindex="4" onclick="return validarFormulario();">Guardar</button>
                                @endcan

                            </div>
                        </tr>
                </div>
            </div>
        </div>
    </div>
</div>


</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
  function validarFormulario() {
    // Obtener todos los campos de entrada requeridos
    var campos = document.querySelectorAll('input[required], select[required], textarea[required]');

    // Verificar si algun campo requerido esta vacio
    for (var i = 0; i < campos.length; i++) {
      if (campos[i].value.trim() === '') {
        // Mostrar mensaje de error y detener el envio del formulario
        swal('Error', 'Por favor, llene el campo ' + campos[i].name, 'error');
        campos[i].focus();
        return false;
      }
    }

    // Si no hay campos requeridos vacios, mostrar mensaje de exito
    swal('Éxito', '¡El formulario se ha enviado con éxito!', 'success');
    return true;
  }
</script>

<script>
    function reporteIngresado() {
        // Mostrar alerta
        alert('Reporte ingresado');
    }
</script>


<script>
    function mostrarAlerta() {
      Swal.fire({
        title: "Reporte ingresado",
        icon: "success",
        timer: 2000,
        timerProgressBar: true,
      });
    }

    const miFormulario = document.querySelector("#miFormulario");
    miFormulario.addEventListener("submit", function(evento) {
      evento.preventDefault(); // prevenimos el envío automático del formulario

      // Validar que los campos no están vacíos
      const NOMBRE = document.querySelector("#NOMBRE").value;
      const TELEFONO = document.querySelector("#TELEFONO").value;
      const TCORREO_ELECTRONICO = document.querySelector("#TCORREO_ELECTRONICO").value;
      const COD_SERVICIO = document.querySelector("#COD_SERVICIO").value;
      const TEMA = document.querySelector("#TEMA").value;
      const DESCRIPCION = document.querySelector("#DESCRIPCION").value;
      const UBICACION = document.querySelector("#UBICACION").value;
      if (NOMBRE && TELEFONO && TCORREO_ELECTRONICO && COD_SERVICIO && TEMA && DESCRIPCION && UBICACION) {
        // Si los campos no están vacíos, mostrar la alerta
        mostrarAlerta();
      } else {
        // Si los campos están vacíos, mostrar un mensaje de error
        alert("Por favor rellene los campos.");
      }
    });
  </script>
@stop
