@extends('adminlte::page')

@section('title', 'Ticket')


@section('content_header')
@stop



@section('content')
<form action="/ticket/{{$ticket->cod_reporte_falla}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
    <label for="" class="form-label">COD_REPORTE_FALLA</label>
    <input id="COD_REPORTE_FALLA" name="COD_REPORTE_FALLA" type="text" class="form-control"  value="{{$ticket->cod_reporte_falla}}">    
  </div>
    
  <div>
    <label for="country">COD_SERVICIO</label>
    <select class="form-control" id="COD_SERVICIO" name="COD_SERVICIO" value="{{$ticket->cod_servicio}}" autofocus required>
      <option value="" disabled selected>Selecciona nuestros servicios</option>
      <option value="1">Aire Acondicionado</option>
      <option value="2">Construcción</option>
      <option value="3">Electricidad</option>
      <option value="4">Monitoreo CCTV</option>
      <option value="5">Pintura</option>
      <option value="6">Planta Telefonica</option>
      <option value="7">Sistema de Seguridad</option>
      <option value="8">Tabla Yeso</option>
    </select>
  </div>


  <div class="mb-3">
    <label for="" class="form-label">NOMBRE</label>
    <input id="NOMBRE" name="NOMBRE" type="text" class="form-control"  value="{{$ticket->nombre}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">TELEFONO</label>
    <input id="TELEFONO" name="TELEFONO" type="text" class="form-control"  value="{{$ticket->telefono}}">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">CORREO_ELECTRONICO</label>
    <input id="CORREO_ELECTRONICO" name="CORREO_ELECTRONICO" type="text" class="form-control"  value="{{$ticket->correo_electronico}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">TEMA</label>
    <input id="TEMA" name="TEMA" type="text" class="form-control"  value="{{$ticket->tema}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">DESCRIPCION</label>
    <input id="DESCRIPCION" name="DESCRIPCION" type="text" class="form-control"  value="{{$ticket->descripcion}}">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">UBICACION</label>
    <input id="UBICACION" name="UBICACION" type="text" class="form-control"  value="{{$ticket->ubicacion}}">    
  </div>

  <div>
    <label for="country">COD_ESTADO</label>
    <select class="form-control" id="COD_ESTADO" name="COD_ESTADO" value="{{$ticket->cod_estado}}" autofocus required>
      <option value="" disabled selected>Selecciona nuestros servicios</option>
      <option value="1">NUEVO</option>
      <option value="2">EN PROCESO</option>
      <option value="3">FINALIZADO</option>
      <option value="4">CANCELADO</option>
    </select>
  </div>
  

  <a href="/ticket" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
    
@stop