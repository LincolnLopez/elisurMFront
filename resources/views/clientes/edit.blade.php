@extends('adminlte::page')

@section('title', 'Clientes')


@section('content_header')
@stop



@section('content')
<form action="/clientes/{{$cliente->cod_cliente}}" method="POST" onsubmit="return validar();"  autocomplete="off">
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
      orig=document.form.NOMBRE_CLIENTE_.value;
      nuev=orig.split('  ');
      nuev=nuev.join(' ');
      document.form.NOMBRE_CLIENTE.value=nuev;
      if(nuev=orig.split(' ').length>=2);
    }

      
  </script>


               
    <div class="mb-3">
      <label for="" class="form-label">CODIGO DE CLIENTE</label>
      <input id="COD_CLIENTE" name="COD_CLIENTE" type="text" class="form-control"  value="{{$cliente->cod_cliente}}" readonly>    
    </div>
 
    <div class="mb-3">
        <label for="" class="form-label">DNI_CLIENTE</label>
        <input id="DNI_CLIENTE" name="DNI_CLIENTE" type="text" class="form-control" maxlength="70" name="txt_nom" autofocus="on"  style="text-transform: uppercase;" onkeyup="return unspaces()"  onkeypress="return soloLetras(event)" autofocus required value="{{$cliente->dni_cliente}}">    
      </div>

    <div class="mb-3">
    <label for="" class="form-label">NOMBRE DE CLIENTE</label>
    <input id="NOMBRE_CLIENTE" name="NOMBRE_CLIENTE" type="text" class="form-control"  autocomplete="off" autofocus="on" o onPaste="return false;" required  onkeyup="nospaces2();" required  value="{{$cliente->nombre_cliente}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">APELLIDOS_CLIENTE</label>
    <input id="APELLIDOS_CLIENTE" name="APELLIDOS_CLIENTE" type="text" class="form-control" autofocus="on" onkeyup="return nospaces1()" onPaste="return false;"required  value="{{$cliente->apellidos_cliente}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">DIRECCION_CLIENTE</label>
    <input id="DIRECCION_CLIENTE" name="DIRECCION_CLIENTE" type="text" class="form-control"  value="{{$cliente->direccion_cliente}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">RTN_CLIENTE</label>
    <input id="RTN_CLIENTE" name="RTN_CLIENTE" type="text" class="form-control"  value="{{$cliente->rtn_cliente}}">    
  </div>
  
  <div class="mb-3">
    <label for="" class="form-label">TELEFONO_CLIENTE</label>
    <input id="TELEFONO_CLIENTE" name="TELEFONO_CLIENTE" type="text" class="form-control"  value="{{$cliente->telefono_cliente}}">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">CORREO_CLIENTE</label>
    <input id="CORREO_CLIENTE" name="CORREO_CLIENTE" type="text" class="form-control"  value="{{$cliente->correo_cliente}}">    
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