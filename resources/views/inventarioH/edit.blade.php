@extends('adminlte::page')

@section('title', 'Edición de Inventario')


@section('content_header')
@stop



@section('content')
<form action="/inventarioH/{{$persona->cod_herramienta}}" method="POST">
    @csrf





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






    function DobleEspacio(campo, event) {

      CadenaaReemplazar = "  ";
      CadenaReemplazo = " ";
      CadenaTexto = campo.value;
      CadenaTextoNueva = CadenaTexto.split(CadenaaReemplazar).join(CadenaReemplazo);
      campo.value = CadenaTextoNueva;

    }




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
  </script>









    @method('PUT')
    <div class="mb-3">
    <label for="" class="form-label">Código de Herramienta</label>
    <input id="COD_HERRAMIENTA" name="COD_HERRAMIENTA" type="text" class="form-control"  value="{{$persona->cod_herramienta}}" readonly>    
  </div>
    
    <div class="mb-3">
    <label for="" class="form-label">Nombre de Herramienta</label>
    <input id="NOMBRE_HERRAMIENTA" name="NOMBRE_HERRAMIENTA" type="text" class="form-control"  onkeyup="DobleEspacio(this, event);" value="{{$persona->nombre_herramienta}}">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Decripcion Herramienta</label>
    <input id="DESCRIPCION_HERRAMIENTA" name="DESCRIPCION_HERRAMIENTA" type="text" class="form-control"  onkeyup="DobleEspacio(this, event);"  value="{{$persona->descripcion_herramienta}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Numero de Existencias</label>
    <input id="NUM_EXISTENCIA" name="NUM_EXISTENCIA" type="text" class="form-control" onkeypress="return isNumberKey(event)" value="{{$persona->num_existencia}}">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Código Empleado</label>
    <input id="COD_EMPLEADO" name="COD_EMPLEADO" type="text" class="form-control" onkeypress="return isNumberKey(event)" value="{{$persona->cod_empleado}}">    
  </div>

  
  

  <a href="/inventarioH" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
    
@stop