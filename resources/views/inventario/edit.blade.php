@extends('adminlte::page')

@section('title', 'Inventario')


@section('content_header')
@stop



@section('content')
<form action="/inventario/{{$persona->cod_inventario}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
    <label for="" class="form-label">CODIGO DE INVENTARIO</label>
    <input id="COD_INVENTARIO" name="COD_INVENTARIO" type="text" class="form-control"  value="{{$persona->cod_inventario}}">    
  </div>
    
    <div class="mb-3">
    <label for="" class="form-label">CODIGO DE ARTICULO</label>
    <input id="COD_ARTICULO" name="COD_ARTICULO" type="text" class="form-control"  value="{{$persona->cod_articulo}}">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">CANTIDAD</label>
    <input id="CANTIDAD_ARTICULO" name="CANTIDAD_ARTICULO" type="text" class="form-control"  value="{{$persona->cantidad_articulo}}">    
  </div>

  

  <a href="/inventario" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
    
@stop