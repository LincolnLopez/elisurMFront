@extends('adminlte::page')

@section('title', 'Presupuesto')


@section('content_header')
@stop



@section('content')
<form action="/presupuesto/{{$presupuesto->cod_solicitud}}" method="POST">
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
      <input id="COD_SOLICITUD" name="COD_SOLICITUD" type="text" class="form-control"  value="{{$presupuesto->cod_solicitud}}" readonly>    
    </div>
 
 
    
    <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="NOMBRE" name="NOMBRE" type="text" class="form-control"  value="{{$presupuesto->nombre}}" autocomplete="off" autofocus="on" autofocus required="" pattern="[a-z A-Z ñÑ ÁÉÍÓÚáéíóú ]+">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input id="APELLIDO" name="APELLIDO" type="text" class="form-control"  value="{{$presupuesto->apellido}}" autocomplete="off" autofocus="on" autofocus required="" pattern="[a-z A-Z ñÑ ÁÉÍÓÚáéíóú ]+">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="TELEFONO" name="TELEFONO" type="text" class="form-control"  value="{{$presupuesto->telefono}}" minlength="8" maxlength="13" autocomplete="off" autofocus="on" onkeypress="return isNumberKey(event)" autofocus required="" pattern="[0-9]+">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Correo Electronico</label>
    <input id="CORREO_ELECTRONICO" name="CORREO_ELECTRONICO" type="email" class="form-control"  value="{{$presupuesto->correo_electronico}}" autocomplete="off" autofocus="on" autofocus required>    
  </div>

  

<div>
  <label for="country">Tipo Solicitante</label>
  <select class="form-control" id="TIPO_SOLICITANTE" name="TIPO_SOLICITANTE" value="{{$presupuesto->tipo_solicitante}}" autocomplete="off" autofocus="on" autofocus required>
    <option value="1">EMPRESA</option>
    <option value="2">CASA</option>
  </select>
</div>

<div class="mb-3">
  <label for="" class="form-label">Telefono Opcional</label>
  <input id="TELEFONO_OPCIONAL" name="TELEFONO_OPCIONAL" type="text" class="form-control"  value="{{$presupuesto->telefono_opcional}}" minlength="8" maxlength="13" autocomplete="off" autofocus="on" onkeypress="return isNumberKey(event)" autofocus required="" pattern="[0-9]+">    
</div>


<div class="mb-3">
  <label for="" class="form-label">Dirección</label>
  <input id="DIRECCION_SOLICITANTE" name="DIRECCION_SOLICITANTE" type="text" class="form-control"  value="{{$presupuesto->direccion_solicitante}}" autocomplete="off" autofocus="on" autofocus required>    
</div>

<div class="mb-3">
  <label for="" class="form-label">Nombre Empresa</label>
  <input id="NOMBRE_E_C" name="NOMBRE_E_C" type="text" class="form-control"  value="{{$presupuesto->nombre_e_c}}" autocomplete="off" autofocus="on" autofocus required>    
</div>

<div class="mb-3">
  <label for="" class="form-label">No. Identidad / RTN</label>
  <input id="RTN_DNI" name="RTN_DNI" type="text" class="form-control"  value="{{$presupuesto->rtn_dni}}" minlength="9" maxlength="14" autocomplete="off" autofocus="on" autofocus required>    
</div>

<div>
  <label for="country">Ciudad</label>
  <select class="form-control" id="CIUDAD" name="CIUDAD" value="{{$presupuesto->ciudad}}" autofocus required>
    <option value="" disabled selected>Selecciona una Ciudad:</option>
    <option value="1">Tegucigalpa</option>
    <option value="2">San Pedro Sula</option>
    <option value="3">Comayagua</option>
 </select>
</div>

<div>
  <label for="country">Servicio</label>
  <select class="form-control" id="COD_SERVICIO" name="COD_SERVICIO" value="{{$presupuesto->cod_servicio}}" autofocus required>
    <option value="" disabled selected>Selecciona nuestros servicios</option>
    <option value="1">Aire Acondicionado</option>
    <option value="2">Construcción</option>
    <option value="3">Electricidad</option>
    <option value="4">Monitoreo CCTV</option>
    <option value="5">Pintura</option>
    <option value="6">Planta Telefonica</option>
    <option value="7">Sistema de Seguridad</option>
    <option value="8">Tabla Yeso</option> <option value="1">Aire Acondicionado</option>
  </select>
</div>

<div class="mb-3">
  <label for="" class="form-label">Descripció de solicitud</label>
  <input id="DESCRIPCION_SOLICITUD" name="DESCRIPCION_SOLICITUD" type="text" class="form-control"  value="{{$presupuesto->descripcion_solicitud}}" autofocus required>    
</div>


<div>
  <label for="country">Estado</label>
  <select class="form-control" id="COD_ESTADO" name="COD_ESTADO" value="{{$presupuesto->cod_estado}}" autofocus required>
    <option value="" disabled selected>Selecciona nuestros servicios</option>
  <option value="1">NUEVO</option>
   <option value="2">EN PROCESO</option>
   <option value="3">FINALIZADO</option>
   <option value="4">CANCELADO</option>
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