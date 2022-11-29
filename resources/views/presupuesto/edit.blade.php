@extends('adminlte::page')

@section('title', 'Presupuesto')


@section('content_header')
@stop



@section('content')
<form action="/presupuesto/{{$presupuesto->cod_solicitud}}" method="POST">
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

  
    <div class="mb-3">
      <label for="" class="form-label">Código de Solicitud</label>
      <input id="COD_SOLICITUD" name="COD_SOLICITUD" type="text" class="form-control"  value="{{$presupuesto->cod_solicitud}}" >    
    </div>
 
 
    
    <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="NOMBRE" name="NOMBRE" type="text" class="form-control"  value="{{$presupuesto->nombre}}">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input id="APELLIDO" name="APELLIDO" type="text" class="form-control"  value="{{$presupuesto->apellido}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="TELEFONO" name="TELEFONO" type="text" class="form-control"  value="{{$presupuesto->telefono}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Correo Electronico</label>
    <input id="CORREO_ELECTRONICO" name="CORREO_ELECTRONICO" type="text" class="form-control"  value="{{$presupuesto->correo_electronico}}">    
  </div>

  

<div>
  <label for="country">Tipo Solicitante</label>
  <select class="form-control" id="TIPO_SOLICITANTE" name="TIPO_SOLICITANTE" value="{{$presupuesto->tipo_solicitante}}">
    <option value="1">EMPRESA</option>
    <option value="2">CASA</option>
  </select>
</div>

<div class="mb-3">
  <label for="" class="form-label">Telefono Opcional</label>
  <input id="TELEFONO_OPCIONAL" name="TELEFONO_OPCIONAL" type="text" class="form-control"  value="{{$presupuesto->telefono_opcional}}">    
</div>


<div class="mb-3">
  <label for="" class="form-label">Dirección</label>
  <input id="DIRECCION_SOLICITANTE" name="DIRECCION_SOLICITANTE" type="text" class="form-control"  value="{{$presupuesto->direccion_solicitante}}">    
</div>

<div class="mb-3">
  <label for="" class="form-label">Nombre Empresa</label>
  <input id="NOMBRE_E_C" name="NOMBRE_E_C" type="text" class="form-control"  value="{{$presupuesto->nombre_e_c}}">    
</div>

<div class="mb-3">
  <label for="" class="form-label">No. Identidad / RTN</label>
  <input id="RTN_DNI" name="RTN_DNI" type="text" class="form-control"  value="{{$presupuesto->rtn_dni}}">    
</div>

<div>
  <label for="country">Ciudad</label>
  <select class="form-control" id="CIUDAD" name="CIUDAD" value="{{$presupuesto->ciudad}}">
    <option value="" disabled selected>Selecciona una Ciudad:</option>
    <option value="1">Tegucigalpa</option>
    <option value="2">San Pedro Sula</option>
    <option value="3">Comayagua</option>
 </select>
</div>

<div>
  <label for="country">Servicio</label>
  <select class="form-control" id="COD_SERVICIO" name="COD_SERVICIO" value="{{$presupuesto->cod_servicio}}">
    <option value="" disabled selected>Selecciona nuestros servicios</option>
  <option value="1">Aire Acondicionado</option>
   <option value="2">Monitoreo CCTV</option>
   <option value="3">Pintura</option>
  </select>
</div>

<div class="mb-3">
  <label for="" class="form-label">Descripció de solicitud</label>
  <input id="DESCRIPCION_SOLICITUD" name="DESCRIPCION_SOLICITUD" type="text" class="form-control"  value="{{$presupuesto->descripcion_solicitud}}">    
</div>


<div>
  <label for="country">Estado</label>
  <select class="form-control" id="COD_ESTADO" name="COD_ESTADO" value="{{$presupuesto->cod_estado}}">
    <option value="" disabled selected>Selecciona nuestros servicios</option>
  <option value="1">Nuevo</option>
   <option value="2">Abierto CCTV</option>
   <option value="3">Pendiente</option>
   <option value="4">Resuelto</option>
   <option value="5">Cancelado</option>
  </select>
</div>


  
  

  <a href="/presupuesto" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</div>
</div>
</div>
</div>
</div>
</div>

</form>
    
@stop