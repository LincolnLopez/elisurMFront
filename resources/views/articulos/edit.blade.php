@extends('adminlte::page')

@section('title', 'Editar Articulos')


@section('content_header')
@stop



@section('content')
<form action="/articulos/{{$articulo->cod_articulo}}" method="POST">
  @csrf
  @method('PUT')

  <div class="row justify-content-center">
    <!-- Left col -->
    <div class="col-md-9">
      <!-- MAP & BOX PANE -->
      <div class="card card-info">
        <!-- /.card-header -->
        <div class="card-body">
          <div class="form-group">

            <!---validació de numeros y 2 decimales--->
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



            <div class="mb-3">
              <label for="" class="form-label">CODIGO DE ARTICULO</label>
              <input id="COD_ARTICULO" name="COD_ARTICULO" type="text" class="form-control" value="{{$articulo->cod_articulo}}" readonly>
            </div>



            <div class="mb-3">
              <label for="" class="form-label">NOMBRE DE ARTICULO</label>
              <input id="NOMBRE_ARTICULO" name="NOMBRE_ARTICULO" type="text" class="form-control"
              tabindex="1" autocomplete="off" autofocus="on"
              onkeyup="DobleEspacio(this, event);" onkeypress="return letrasynumeros(event)"
              placeholder="Ingrese la descripción"  onpaste="onPaste(event)" autofocus required value="{{$articulo->nombre_articulo}}">
            </div>


            <div class="mb-3">
              <label for="" class="form-label">DESCRIPCION ARTICULO</label>
              <input id="DESCRIPCION_ARTICULO" name="DESCRIPCION_ARTICULO" type="text" class="form-control"
              tabindex="1" autocomplete="off" autofocus="on"
              onkeyup="DobleEspacio(this, event);" onkeypress="return letrasynumeros(event)"
              placeholder="Ingrese la descripción"autofocus required onkeyup="DobleEspacio(this, event);"  onpaste="onPaste(event)" value="{{$articulo->descripcion_articulo}}">
            </div>

            <div class="mb-3">
              <label for="" class="form-label">PRECIO ARTICULO</label>
              <input id="PRECIO_ARTICULO" name="PRECIO_ARTICULO" type="text" class="form-control"
              tabindex="1" autofocus required oninput="limitDecimalPlaces(event, 2)"
              onkeypress="return isNumberKey(event)" autofocus required minlength="2" maxlength="10"  onpaste="onPaste(event)" value="{{$articulo->precio_articulo}}" autofocus required oninput="limitDecimalPlaces(event, 2)" onkeypress="return isNumberKey(event)">
            </div>

            <label for="country">CODIGO CATEGORIA</label>
            <select class="form-control" id="COD_CATEGORIA" name="COD_CATEGORIA" value="{{$articulo->cod_categoria}}" required autofocus>
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
  </div>

</form>

@stop