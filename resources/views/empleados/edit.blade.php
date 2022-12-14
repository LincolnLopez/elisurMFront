@extends('adminlte::page')

@section('title', 'Usuarios')


@section('content_header')
@stop



@section('content')
<form action="/empleados/{{$empleado->cod_empleado}}" method="POST">
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
      orig=document.form.NOMBRE_EMPLEADO_.value;
      nuev=orig.split('  ');
      nuev=nuev.join(' ');
      document.form.NOMBRE_EMPLEADO.value=nuev;
      if(nuev=orig.split(' ').length>=2);
    }

      
  </script>

<script>
  function onPaste(event) {
console.log('Paste!! ', event);
event.preventDefault();
event.stopPropagation();
}
</script>

<div class="mb-3">
  <label for="" class="form-label">Código de Empleado</label>
  <input id="COD_EMPLEADO" name="COD_EMPLEADO" type="text" class="form-control" maxlength="15" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" autofocus required value="{{$empleado->cod_empleado}}" onpaste="onPaste(event)" readonly>
</div>


    <div class="mb-3">
        <label for="" class="form-label">DNI</label>
        <input id="DNI_EMPLEADO" name="DNI_EMPLEADO" type="text" class="form-control" maxlength="15" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" autofocus onpaste="onPaste(event)" required value="{{$empleado->DNI_EMPLEADO}}">
    </div>

      <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="NOMBRE_EMPLEADO" name="NOMBRE_EMPLEADO" type="text" class="form-control" maxlength="70" name="txt_nom" autofocus="on"  style="text-transform: uppercase;" onkeyup="return unspaces()"  onkeypress="return soloLetras(event)" autofocus onpaste="onPaste(event)" required value="{{$empleado->nombre_empleado}}">
      </div>


      <div class="w3-half">
        <label>Sexo</label>
        <select class="form-control" id="SEXO_EMPLEADO" name="SEXO_EMPLEADO" value="{{$empleado->sexo_empleado}}"autofocus required >
           <option value="{{$empleado->sexo_empleado}}"></option>
           <option value="1">Hombre</option>
           <option value="2">Mujer</option>
        </select>
     </div>

     <div class="w3-half">
      <label>Estado Civil</label>
      <select class="form-control" id="ESTADO_CIVIL_EMPLEADO" name="ESTADO_CIVIL_EMPLEADO"  value="{{$empleado->estado_civil_empleado}}" autofocus required>
         <option value="{{$empleado->estado_civil_empleado}}"></option>
         <option value="1">Soltero</option>
         <option value="2">Casado</option>
         <option value="3">Union Libre</option>
      </select>
   </div>


      <div class="mb-3">
        <label for="" class="form-label">Edad</label>
        <input id="EDAD_EMPLEADO" name="EDAD_EMPLEADO" type="text" class="form-control" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" autofocus onpaste="onPaste(event)" required value="{{$empleado->edad_empleado}}">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input id="TELEFONO" name="TELEFONO" type="text" class="form-control" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" autofocus onpaste="onPaste(event)" required value="{{$empleado->telefono}}">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input id="CORREO" name="CORREO" type="email" class="form-control" value="{{$empleado->correo}}" autofocus onpaste="onPaste(event)" required>
      </div>





  <a href="/empleados" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</div>
</div>
</div>
</div>
</div>
</div>

</form>
    
@stop