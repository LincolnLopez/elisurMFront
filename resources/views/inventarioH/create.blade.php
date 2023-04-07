@extends('adminlte::page')

@section('title', 'Registro de Inventario')


@section('content_header')
@stop 



@section('content')
<form action="/inventarioH" method="POST">
  @csrf
  

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


  <div class="mb-3">
    <label for="" class="form-label">Nombre de Herramienta</label>
    <input id="NOMBRE_HERRAMIENTA" name="NOMBRE_HERRAMIENTA" type="text"
    class="form-control" tabindex="1" autocomplete="off" autofocus="on" placeholder="Ingrese la dirección"
    onkeyup="DobleEspacio(this, event);" onpaste="onPaste(event)" onkeypress="return letrasynumeros(event)"
    maxlength="50" autofocus required>
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="DESCRIPCION_HERRAMIENTA" name="DESCRIPCION_HERRAMIENTA" type="text"
    class="form-control" tabindex="1" autocomplete="off" autofocus="on" placeholder="Ingrese la dirección"
    onkeyup="DobleEspacio(this, event);" onpaste="onPaste(event)" onkeypress="return letrasynumeros(event)"
    maxlength="70" autofocus required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Numero de Existencia</label>
    <input id="NUM_EXISTENCIA" name="NUM_EXISTENCIA" type="text" class="form-control" onpaste="onPaste(event)" tabindex="1" autocomplete="off" autofocus="on" onkeypress="return isNumberKey(event)" autofocus required="" pattern="[0-9]+" onkeydown="filtro()" maxlength="20">
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Nombre del empleado</label>   
    <select name="COD_EMPLEADO" id="COD_EMPLEADO" class="form-control" onpaste="onPaste(event)" maxlength="70" autofocus required>
      @foreach ($empleados as $empleado)
          <option value="{{ $empleado['cod_empleado'] }}">{{ $empleado['nombre_empleado']
          }}</option>
      @endforeach
   </select> 
  
  </div>  


  <a href="/inventarioH" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@stop