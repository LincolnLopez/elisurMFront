@extends('adminlte::page')

@section('title', 'Edición de Inventario')


@section('content_header')
@stop

<!------Ruta de algunas validaciones----->
@section('js')

    <script type="text/javascript" src="js/validaciones.js"></script>

    <!---Mascara para los imput--->
    <script src="/js/mascara/src/jquery.maskedinput.js" type="text/javascript"></script>





    < <script>
        * FUNCION PARA RESTRINGIR EL ESPACIO *
            **
            **
            **
            **
            ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** * /
    </script>

    <script>
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
    function onPaste(event) {
  console.log('Paste!! ', event);
  event.preventDefault();
  event.stopPropagation();
  }
  </script>

<script>
    function filtro()
    {
    var tecla = event.key;
    if (['.','e'].includes(tecla))
       event.preventDefault()
    }
    </script>


@stop

@section('content')
    <form action="/inventarios/{{ $inventario->cod_inventario }}" method="POST">
        @csrf
        @method('PUT')


        <div class="mb-3">
            <label for="" class="form-label">CODIGO DE INVENTARIO</label>
            <input id="COD_INVENTARIO" name="COD_INVENTARIO" type="text" class="form-control"
                value="{{ $inventario->cod_inventario }}" onpaste="onPaste(event)" readonly>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">CODIGO DE ARTICULO</label>
            <input id="COD_ARTICULO" name="COD_ARTICULO" type="text" class="form-control"
                value="{{ $inventario->cod_articulo }}" autocomplete="off" autofocus="on"
                onkeypress="return isNumberKey(event)" autofocus required="" onpaste="onPaste(event)" pattern="[0-9]+" readonly>
        </div>


        <div class="mb-3">
            <label for="" class="form-label">CANTIDAD</label>
            <input id="CANTIDAD_ARTICULO" name="CANTIDAD_ARTICULO" type="text" class="form-control"
                value="{{ $inventario->cantidad_articulo }}"  onpaste="onPaste(event)" autocomplete="off" autofocus="on"
                onkeypress="return solonumeros(event)" autofocus required="" onkeyup="DobleEspacio(this, event);" 
                minlength="1" maxlength="5" onkeydown="filtro()">

        </div>



        <a href="/inventarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>

@stop
