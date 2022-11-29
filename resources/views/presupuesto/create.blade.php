@extends('adminlte::page')

@section('title', 'Presupuesto')


@section('content_header')
@stop



@section('content')
<form action="/presupuesto" method="POST">
    @csrf
    <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="NOMBRE" name="NOMBRE" type="text" class="form-control" tabindex="1">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input id="APELLIDO" name="APELLIDO" type="text" class="form-control" tabindex="1">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="TELEFONO" name="TELEFONO" type="text" class="form-control" tabindex="1">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Correo Electronico</label>
    <input id="CORREO_ELECTRONICO" name="CORREO_ELECTRONICO" type="text" class="form-control" tabindex="1">    
  </div>

  <div class="w3-half">
    <label>Tipo Solicitante</label>
    <select class="form-control" id="TIPO_SOLICITANTE" name="TIPO_SOLICITANTE">
       <option value="" disabled selected>Seleccione el tipo:</option>
       <option value="1">EMPRESA</option>
       <option value="2">CASA</option>
    </select>
 </div>

  <div class="mb-3">
    <label for="" class="form-label">Telefono opcional</label>
    <input id="TELEFONO_OPCIONAL" name="TELEFONO_OPCIONAL" type="text" class="form-control" tabindex="1">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Direccion de Solicitud</label>
    <input id="DIRECCION_SOLICITANTE" name="DIRECCION_SOLICITANTE" type="text" class="form-control" tabindex="1">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre Empresa</label>
    <input id="NOMBRE_E_C" name="NOMBRE_E_C" type="text" class="form-control" tabindex="1">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">No. identidad / RTN </label>
    <input id="RTN_DNI" name="RTN_DNI" type="text" class="form-control" tabindex="1">    
  </div>

  <div class="mb-3">
    <label>Ciudad</label>
                     <select class="form-control" id="CIUDAD" name="CIUDAD">
                        <option value="" disabled selected>Selecciona una Ciudad:</option>
                        <option value="1">Tegucigalpa</option>
                        <option value="2">San Pedro Sula</option>
                        <option value="3">Comayagua</option>
                     </select>  
  </div>

  <div class="mb-3">
  <label>Servicio</label>
                  <select class="form-control" id="COD_SERVICIO" name="COD_SERVICIO">
                     <option value="" disabled selected>Selecciona nuestros servicios</option>
                     <option value="1">Aire Acondicionado</option>
                     <option value="2">Monitoreo CCTV</option>
                     <option value="3">Pintura</option>
                  </select>
    </div>

  <div class="mb-3">
    <label for="" class="form-label">Descripción de Solicitud</label>
    <input id="DESCRIPCION_SOLICITUD" name="DESCRIPCION_SOLICITUD" type="text" class="form-control" tabindex="1">    
  </div>
  

  <a href="/presupuesto" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
    
@stop