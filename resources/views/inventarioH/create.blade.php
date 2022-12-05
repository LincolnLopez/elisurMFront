@extends('adminlte::page')

@section('title', 'Inventario')


@section('content_header')
@stop



@section('content')
<form action="/inventarioH" method="POST">
    @csrf
    <script>
      function limitDecimalPlaces(e, count) {
      if (e.target.value.indexOf('.') == -1) { return; }
      if ((e.target.value.length - e.target.value.indexOf('.')) > count) {
        e.target.value = parseFloat(e.target.value).toFixed(count);
      }
    }
    
    function isNumberKey(evt)
    {
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    
      return true;
    }
    </script>

    <div class="mb-3">
    <label for="" class="form-label">Nombre de Herramienta</label>
    <input id="NOMBRE_HERRAMIENTA" name="NOMBRE_HERRAMIENTA" type="text" class="form-control" tabindex="1" required>    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="DESCRIPCION_HERRAMIENTA" name="DESCRIPCION_HERRAMIENTA" type="text" class="form-control" tabindex="1" required>    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Numero de Existencia</label>
    <input id="NUM_EXISTENCIA" name="NUM_EXISTENCIA" type="text" class="form-control" tabindex="1" autocomplete="off" autofocus="on" onkeypress="return isNumberKey(event)" autofocus required="" pattern="[0-9]+">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Código de Empleado</label>
    <input id="COD_EMPLEADO" name="COD_EMPLEADO" type="text" class="form-control" tabindex="1" autocomplete="off" autofocus="on" onkeypress="return isNumberKey(event)" autofocus required="" pattern="[0-9]+">    
  </div>
  

  <a href="/inventarioH" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
    
@stop