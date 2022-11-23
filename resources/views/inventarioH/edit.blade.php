@extends('adminlte::page')

@section('title', 'Inventario')


@section('content_header')
@stop



@section('content')
<form action="/inventarioH/{{$persona->cod_herramienta}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
    <label for="" class="form-label">Código de Herramienta</label>
    <input id="COD_HERRAMIENTA" name="COD_HERRAMIENTA" type="text" class="form-control"  value="{{$persona->cod_herramienta}}">    
  </div>
    
    <div class="mb-3">
    <label for="" class="form-label">Nombre de Herramienta</label>
    <input id="NOMBRE_HERRAMIENTA" name="NOMBRE_HERRAMIENTA" type="text" class="form-control"  value="{{$persona->nombre_herramienta}}">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Decripcion Herramienta</label>
    <input id="DESCRIPCION_HERRAMIENTA" name="DESCRIPCION_HERRAMIENTA" type="text" class="form-control"  value="{{$persona->descripcion_herramienta}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Numero de Existencias</label>
    <input id="NUM_EXISTENCIA" name="NUM_EXISTENCIA" type="text" class="form-control"  value="{{$persona->num_existencia}}">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Código Empleado</label>
    <input id="COD_EMPLEADO" name="COD_EMPLEADO" type="text" class="form-control"  value="{{$persona->cod_empleado}}">    
  </div>
  

  <a href="/inventarioH" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
    
@stop