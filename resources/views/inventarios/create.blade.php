@extends('adminlte::page')

@section('title', 'Registro de Inventario')


@section('content_header')
@stop

@section('js')

    <script type="text/javascript" src="js/validaciones.js"></script>

    <!---Mascara para los imput--->
    <script src="/js/mascara/src/jquery.maskedinput.js" type="text/javascript"></script>



    < <script>
        * FUNCION PARA RESTRINGIR EL ESPACIO *
            **
            **
            **
            ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** * /
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
    <form action="/inventarios" method="POST">
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



                                <div class="mb-3">
                                    <label for="" class="form-label">Articulos</label>
                                    <select name="COD_ARTICULO" id="COD_ARTICULO" class="form-control" onpaste="onPaste(event)" autofocus required>
                                        <option value="" disabled selected>Selecciona un Articulo:</option>
                                        @foreach ($articulos as $articulo)
                                            <option value="{{ $articulo['cod_articulo'] }}">
                                                {{ $articulo['nombre_articulo'] }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <!---ciclo para mostrar lista de articulos--->




                                <div class="mb-3">
                                    <label for="" class="form-label">Cantidad</label>
                                    <input id="CANTIDAD_ARTICULO" name="CANTIDAD_ARTICULO" type="text"
                                        class="form-control" tabindex="1" autocomplete="off" autofocus="on"
                                        onkeypress="return solonumeros(event)" placeholder="Ingrese cantidad" autofocus
                                        required="" onkeyup="DobleEspacio(this, event);" onpaste="onPaste(event)" minlength="1" maxlength="5" onkeydown="filtro()">
                                </div>


                                <a href="/inventarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
                                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


@stop
