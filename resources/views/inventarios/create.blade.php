@extends('adminlte::page')

@section('title', 'Inventario')


@section('content_header')
@stop



@section('content')
<form action="/inventarios" method="POST">
    @csrf
    <div class="mb-3">
    <label for="" class="form-label">Código Articulo</label>
    <input id="COD_ARTICULO" name="COD_ARTICULO" type="text" class="form-control" tabindex="1">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="CANTIDAD_ARTICULO" name="CANTIDAD_ARTICULO" type="text" class="form-control" tabindex="1">    
  </div>
  

  <a href="/inventario" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
    
@stop