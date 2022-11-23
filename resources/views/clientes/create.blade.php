@extends('adminlte::page')

@section('title', 'Usuarios')


@section('content_header')
@stop



@section('content')
<form action="/clientes" method="POST">
    @csrf

    <div class="container-fluid">

      <!-- Main row -->
      <div class="row justify-content-center">
        <!-- Left col -->
        <div class="col-md-9">
          <!-- MAP & BOX PANE -->
          <div class="card card-info">
            <!-- /.card-header -->
            <div class="card-body">
              <div class="form-group">


               
                <div class="mb-3">
                    <label for="" class="form-label">DNI_CLIENTE</label>
                    <input id="DNI_CLIENTE" name="DNI_CLIENTE" type="text" class="form-control"  tabindex="1">    
                </div>
              
                <div class="mb-3">
                  <label for="" class="form-label">NOMBRE DE CLIENTE</label>
                  <input id="NOMBRE_CLIENTE" name="NOMBRE_CLIENTE" type="text" class="form-control" tabindex="1">    
                </div>
              
                <div class="mb-3">
                  <label for="" class="form-label">APELLIDOS_CLIENTE</label>
                  <input id="APELLIDOS_CLIENTE" name="APELLIDOS_CLIENTE" type="text" class="form-control"  tabindex="1">    
                </div>
              
                <div class="mb-3">
                  <label for="" class="form-label">DIRECCION_CLIENTE</label>
                  <input id="DIRECCION_CLIENTE" name="DIRECCION_CLIENTE" type="text" class="form-control"  tabindex="1">    
                </div>
              
                <div class="mb-3">
                  <label for="" class="form-label">CIUDAD_CLIENTE</label>
                  <input id="CIUDAD_CLIENTE" name="CIUDAD_CLIENTE" type="text" class="form-control"  tabindex="1">    
                </div>
              
                <div class="mb-3">
                  <label for="" class="form-label">RTN_CLIENTE</label>
                  <input id="RTN_CLIENTE" name="RTN_CLIENTE" type="text" class="form-control"  tabindex="1">    
                </div>
              
                <div class="mb-3">
                  <label for="" class="form-label">TELEFONO</label>
                  <input id="TELEFONO_CLIENTE" name="TELEFONO_CLIENTE" type="text" class="form-control"  tabindex="1">    
                </div>
              
                <div class="mb-3">
                  <label for="" class="form-label">CORREO</label>
                  <input id="CORREO_CLIENTE" name="CORREO_CLIENTE" type="text" class="form-control"  tabindex="1">    
                </div>
              

                <label for="country">COD_TIPO_CLIENTE</label>
                <select class="form-control" id="COD_TIPO_CLIENTE" name="COD_TIPO_CLIENTE">
                   <option value="1">Premium</option>
                   <option value="2">Nuevo</option>
                </select>
  
                <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</div>

</div>



</div>
</div>
</div>

</form>
    
@stop