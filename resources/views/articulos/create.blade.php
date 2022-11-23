@extends('adminlte::page')

@section('title', 'Articulos')


@section('content_header')
@stop



@section('content')
<form action="/articulos" method="POST">
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
    <label for="" class="form-label">NOMBRE DE USUARIO</label>
    <input id="NOMBRE_USUARIO" name="NOMBRE_USUARIO" type="text" class="form-control" tabindex="1">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">CORREO</label>
    <input id="CORREO_USUARIO" name="CORREO_USUARIO" type="text" class="form-control" tabindex="1">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">PASSWORD</label>
    <input id="PASSWORD_USUARIO" name="PASSWORD_USUARIO" type="text" class="form-control" tabindex="1">    
  </div>


  <label for="country">Rol</label>
    <select class="form-control" id="ROL" name="ROL">
      <option value="1">Administrador</option>
      <option value="2">CLIENTE</option>
      <option value="3">Empleado</option>
    </select>
  

  <a href="/personas" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</div>

</div>



</div>
</div>
</div>

</form>
    
@stop