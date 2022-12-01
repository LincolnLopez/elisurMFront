@extends('adminlte::page')

@section('title', 'Empleados')


@section('content_header')
@stop



@section('content')
<form action="/empleados" method="POST" onsubmit="return validar();"  autocomplete="off">
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
                function soloLetras(e){
                   key = e.keyCode || e.which;
                   tecla = String.fromCharCode(key).toLowerCase();
                   letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
                   especiales = "8-37-39-46";
          
                   tecla_especial = false
                   for(var i in especiales){
                        if(key == especiales[i]){
                            tecla_especial = true;
                            break;
                        }
                    }
          
                    if(letras.indexOf(tecla)==-1 && !tecla_especial){
                        return false;
                    }
                }
          </script>

          
          <script>
            function nospaces1(){
      orig=document.form.PASSWORD_USUARIO.value;
      nuev=orig.split(' ');
      nuev=nuev.join('');
      document.form.PASSWORD_USUARIO.value=nuev;
      if(nuev=orig.split(' ').length>=2);
      }
      </script>


      <script>
        function nospaces2(){
  orig=document.CORREO_USUARIO.value;
  nuev=orig.split(' ');
  nuev=nuev.join('');
  document.form.CORREO_USUARIO.value=nuev;
  if(nuev=orig.split(' ').length>=2);
}

          function validar(){
     var correo, expresion;
     correo = document.getElementById("correo").value;
     expresion= /\w+@\w+\.+[a-z]/;

      if(correo.length > 80){
      alert("El campo correo excede su capacidad de caracteres");
           }
      else if(!expresion.test(correo)){
        alert('El correo no es valido');
        return false;
      }
   }

  /*
function validar() {
if (/^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3,4})+$/.test('correo')){
alert("La dirección de email " + 'correo' + " es correcta.");
}else {
alert("La dirección de email es incorrecta.");
}
}*/
   </script>
          

   <script>
    function unspaces(){
      orig=document.form.NOMBRE_CLIENTE_.value;
      nuev=orig.split('  ');
      nuev=nuev.join(' ');
      document.form.NOMBRE_CLIENTE.value=nuev;
      if(nuev=orig.split(' ').length>=2);
    }

      
  </script>


  


              <div class="mb-3">
                <label for="" class="form-label">DNI_EMPLEADO</label>
                <input id="DNI_EMPLEADO" name="DNI_EMPLEADO" type="text" class="form-control" tabindex="1"maxlength="15" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" autofocus required>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">NOMBRE DE EMPLEADO</label>
                <input id="NOMBRE_EMPLEADO" name="NOMBRE_EMPLEADO" type="text" class="form-control" tabindex="1" maxlength="70" name="txt_nom" autofocus="on"  style="text-transform: uppercase;" onkeyup="return unspaces()"  onkeypress="return soloLetras(event)" autofocus required>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">APELLIDOS EMPLEADO</label>
                <input id="APELLIDOS_EMPLEADO" name="APELLIDOS_EMPLEADO" type="text" class="form-control" tabindex="1" maxlength="70" name="txt_nom" autofocus="on"  style="text-transform: uppercase;" onkeyup="return unspaces()"  onkeypress="return soloLetras(event)" autofocus required>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">SEXO_EMPLEADO</label>
                <input id="SEXO_EMPLEADO" name="SEXO_EMPLEADO" type="text" class="form-control" tabindex="1" maxlength="70" name="txt_nom" autofocus="on"  style="text-transform: uppercase;" onkeyup="return unspaces()"  onkeypress="return soloLetras(event)" autofocus required>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">ESTADO_CIVIL_EMPLEADO</label>
                <input id="ESTADO_CIVIL_EMPLEADO" name="ESTADO_CIVIL_EMPLEADO" type="text" class="form-control" tabindex="1" maxlength="70" name="txt_nom" autofocus="on"  style="text-transform: uppercase;" onkeyup="return unspaces()"  onkeypress="return soloLetras(event)" autofocus required>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">EDAD EMPLEADO</label>
                <input id="EDAD_EMPLEADO" name="EDAD_EMPLEADO" type="text" class="form-control" tabindex="1" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" autofocus required>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">TELEFONO</label>
                <input id="TELEFONO" name="TELEFONO" type="text" class="form-control" tabindex="1" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" autofocus required>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">CORREO</label>
                <input id="CORREO" name="CORREO" type="text" class="form-control" tabindex="1">
              </div>

              <a href="/empleados" class="btn btn-secondary" tabindex="5">Cancelar</a>
              <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

            </div>

          </div>



        </div>
      </div>
    </div>

</form>

@stop