@extends('adminlte::page')

@section('title', 'Usuarios')


@section('content_header')
@stop



@section('content')
<form action="/personas" name="form" method="POST" onsubmit="return validar();"  autocomplete="off" >
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
        orig=document.form.NOMBRE_USUARIO_.value;
        nuev=orig.split('  ');
        nuev=nuev.join(' ');
        document.form.NOMBRE_USUARIO.value=nuev;
        if(nuev=orig.split(' ').length>=2);
      }
  
        
    </script>
     
                
                

  <div class="mb-3">
    <label for="" class="form-label">NOMBRE DE USUARIO</label>
    <input id="NOMBRE_USUARIO" name="NOMBRE_USUARIO" type="text" class="form-control" tabindex="1" maxlength="70" name="txt_nom" autofocus="on"  style="text-transform: uppercase;" onkeyup="return unspaces()"  onkeypress="return soloLetras(event)" autofocus required >    
    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">CORREO</label>
    <input id="CORREO_USUARIO" name="CORREO_USUARIO" type="text" class="form-control" tabindex="1" autocomplete="off" autofocus="on" o onPaste="return false;" required  onkeyup="nospaces2();" required >    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">PASSWORD</label>
    <input id="PASSWORD_USUARIO" name="PASSWORD_USUARIO" type="password" class="form-control" tabindex="1" autofocus="on" onkeyup="return nospaces1()" onPaste="return false;"required>    
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