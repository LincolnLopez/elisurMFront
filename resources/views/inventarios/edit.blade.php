@extends('adminlte::page')

@section('title', 'Inventario')


@section('content_header')
@stop



@section('content')
<form action="/inventarios/{{$inventario->cod_inventario}}" method="POST">
    @csrf
    @method('PUT')

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
    <label for="" class="form-label">CODIGO DE INVENTARIO</label>
    <input id="COD_INVENTARIO" name="COD_INVENTARIO" type="text" class="form-control"  value="{{$inventario->cod_inventario}}" readonly>    
  </div>
    
    <div class="mb-3">
    <label for="" class="form-label">CODIGO DE ARTICULO</label>
    <input id="COD_ARTICULO" name="COD_ARTICULO" type="text" class="form-control"  value="{{$inventario->cod_articulo}}" autocomplete="off" autofocus="on" onkeypress="return isNumberKey(event)" autofocus required="" pattern="[0-9]+">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">CANTIDAD</label>
    <input id="CANTIDAD_ARTICULO" name="CANTIDAD_ARTICULO" type="text" class="form-control"  value="{{$inventario->cantidad_articulo}}" autocomplete="off" autofocus="on" onkeypress="return isNumberKey(event)" autofocus required="" pattern="[0-9]+">    
  </div>

  

  <a href="/inventario" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
    
@stop