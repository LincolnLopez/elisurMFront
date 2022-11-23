@extends('adminlte::page')

@section('title', 'Inventario')


@section('content_header')
@stop



@section('content')
<form action="/inventarioH" method="POST">
    @csrf
    <div class="mb-3">
    <label for="" class="form-label">Nombre de Herramienta</label>
    <input id="NOMBRE_HERRAMIENTA" name="NOMBRE_HERRAMIENTA" type="text" class="form-control" tabindex="1">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="DESCRIPCION_HERRAMIENTA" name="DESCRIPCION_HERRAMIENTA" type="text" class="form-control" tabindex="1">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Numero de Existencia</label>
    <input id="NUM_EXISTENCIA" name="NUM_EXISTENCIA" type="text" class="form-control" tabindex="1">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Código de Empleado</label>
    <input id="COD_EMPLEADO" name="COD_EMPLEADO" type="text" class="form-control" tabindex="1">    
  </div>
  

  <a href="/inventarioH" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
    
@stop