@extends('adminlte::page')

@section('title', 'Clientes')


@section('content_header')
@stop



@section('content')
<form action="/clientes/{{$cliente->cod_cliente}}" method="POST">
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
      <label for="" class="form-label">CODIGO DE CLIENTE</label>
      <input id="COD_CLIENTE" name="COD_CLIENTE" type="text" class="form-control"  value="{{$cliente->cod_cliente}}" >    
    </div>
 
    <div class="mb-3">
        <label for="" class="form-label">DNI_CLIENTE</label>
        <input id="DNI_CLIENTE" name="DNI_CLIENTE" type="text" class="form-control"  value="{{$cliente->dni_cliente}}">    
      </div>

    <div class="mb-3">
    <label for="" class="form-label">NOMBRE DE CLIENTE</label>
    <input id="NOMBRE_CLIENTE" name="NOMBRE_CLIENTE" type="text" class="form-control"  value="{{$cliente->nombre_cliente}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">APELLIDOS_CLIENTE</label>
    <input id="APELLIDOS_CLIENTE" name="APELLIDOS_CLIENTE" type="text" class="form-control"  value="{{$cliente->apellidos_cliente}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">DIRECCION_CLIENTE</label>
    <input id="DIRECCION_CLIENTE" name="DIRECCION_CLIENTE" type="text" class="form-control"  value="{{$cliente->direccion_cliente}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">CIUDAD_CLIENTE</label>
    <input id="CIUDAD_CLIENTE" name="CIUDAD_CLIENTE" type="text" class="form-control"  value="{{$cliente->ciudad_cliente}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">RTN_CLIENTE</label>
    <input id="RTN_CLIENTE" name="RTN_CLIENTE" type="text" class="form-control"  value="{{$cliente->rtn_cliente}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">FECHA_REGISTRO</label>
    <input id="FECHA_REGISTRO" name="FECHA_REGISTRO" type="text" class="form-control"  value="{{$cliente->fecha_registro}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">ESTADO_CLIENTE</label>
    <input id="ESTADO_CLIENTE" name="ESTADO_CLIENTE" type="text" class="form-control"  value="{{$cliente->estado_cliente}}">    
  </div>

 
  <label for="country">COD_TIPO_CLIENTE</label>
    <select class="form-control" id="COD_TIPO_CLIENTE" name="COD_TIPO_CLIENTE" value="{{$cliente->cod_tipo_cliente}}">
        <option value="1">Premium</option>
        <option value="6">Nuevo</option>
    </select>

  <a href="/personas" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</div>
</div>
</div>
</div>
</div>
</div>

</form>
    
@stop