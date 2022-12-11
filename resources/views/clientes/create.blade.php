@extends('adminlte::page')

@section('title', 'Registrar Clientes')


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
               
                <div class="mb-3">
                    <label for="" class="form-label">DNI</label>
                    <input id="DNI_CLIENTE" name="DNI_CLIENTE" type="text" class="form-control"  tabindex="1" autofocus required>    
                </div>
              
                <div class="mb-3">
                  <label for="" class="form-label">Nombre</label>
                  <input id="NOMBRE_CLIENTE" name="NOMBRE_CLIENTE" type="text" class="form-control" tabindex="1" autocomplete="off" autofocus="on" autofocus required="" pattern="[a-z A-Z ñÑ ÁÉÍÓÚáéíóú ]+">    
                </div>
              
                <div class="mb-3">
                  <label for="" class="form-label">Apellido</label>
                  <input id="APELLIDOS_CLIENTE" name="APELLIDOS_CLIENTE" type="text" class="form-control"  tabindex="1" autocomplete="off" autofocus="on" autofocus required="" pattern="[a-z A-Z ñÑ ÁÉÍÓÚáéíóú ]+">    
                </div>
              
                <div class="mb-3">
                  <label for="" class="form-label">Direcciones</label>
                  <input id="DIRECCION_CLIENTE" name="DIRECCION_CLIENTE" type="text" class="form-control"  tabindex="1" autofocus required>    
                </div>
              
                <div class="mb-3">
                  <label for="" class="form-label">Ciudad</label>
                  <input id="CIUDAD_CLIENTE" name="CIUDAD_CLIENTE" type="text" class="form-control"  tabindex="1" autofocus required>    
                </div>
              
                <div class="mb-3">
                  <label for="" class="form-label">RTN</label>
                  <input id="RTN_CLIENTE" name="RTN_CLIENTE" type="text" class="form-control"  tabindex="1" minlength="9" maxlength="14" autocomplete="off" autofocus="on" autofocus required>    
                </div>
              
                <div class="mb-3">
                  <label for="" class="form-label">Telefono</label>
                  <input id="TELEFONO_CLIENTE" name="TELEFONO_CLIENTE" type="text" class="form-control"  tabindex="1" minlength="8" maxlength="13" autocomplete="off" autofocus="on" onkeypress="return isNumberKey(event)" autofocus required="" pattern="[0-9]+">    
                </div>
              
                <div class="mb-3">
                  <label for="" class="form-label">Correo</label>
                  <input id="CORREO_CLIENTE" name="CORREO_CLIENTE" type="email" class="form-control"  tabindex="1" autofocus required>    
                </div>
              

                <label for="country">Tipo de CLiente</label>
                <select class="form-control" id="COD_TIPO_CLIENTE" name="COD_TIPO_CLIENTE" autofocus required>
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