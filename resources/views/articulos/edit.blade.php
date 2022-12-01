@extends('adminlte::page')

@section('title', 'Usuarios')


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
      <label for="" class="form-label">CODIGO DE ARTICULO</label>
      <input id="COD_ARTICULO" name="COD_ARTICULO" type="text" class="form-control"  value="{{$articulo->cod_articulo}}" readonly`>    
    </div>
 
 
    
    <div class="mb-3">
    <label for="" class="form-label">NOMBRE DE ARTICULO</label>
    <input id="NOMBRE_ARTICULO" name="NOMBRE_ARTICULO" type="text" class="form-control"  value="{{$articulo->nombre_articulo}}" required autofocus>    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">DESCRIPCION ARTICULO</label>
    <input id="DESCRIPCION_ARTICULO" name="DESCRIPCION_ARTICULO" type="text" class="form-control"  value="{{$articulo->descripcion_articulo}}" required autofocus>    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">PRECIO ARTICULO</label>
    <input id="PRECIO_ARTICULO" name="PRECIO_ARTICULO" type="text" class="form-control"  value="{{$articulo->precio_articulo}}" autofocus required oninput="limitDecimalPlaces(event, 2)" onkeypress="return isNumberKey(event)" autofocus required>    
  </div>

  <label for="country">CODIGO CATEGORIA</label>
    <select class="form-control" id="COD_CATEGORIA" name="COD_CATEGORIA" value="{{$articulo->cod_categoria}}" required autofocus>
      <option value="1">Tapiceria</option>
      <option value="21">Construcción</option>
      
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