@extends('adminlte::page')

@section('title', 'Editar Cliente')


@section('content_header')
@stop



@section('content')

<!--Validaciones-->


<script>
  /*=============================================
   VALIDACION QUE SOLO PERMITA LETRAS Y NUMEROS             
  =============================================*/

  function letrasynumeros(e) {

      key = e.keyCode || e.wich;

      teclado = String.fromCharCode(key).toUpperCase();

      letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZÑ1234567890 ";

      especiales = "8-37-38-46-164";

      teclado_especial = false;

      for (var i in especiales) {

          if (key == especiales[i]) {
              teclado_especial = true;
              break;
          }
      }

      if (letras.indexOf(teclado) == -1 && !teclado_especial) {
          return false;
      }

  }

  /*=====  End of Section comment block  ======*/


  /*==============================================
  =     VALIDACION SOLO LETRAS            =
  ==============================================*/
  function sololetras(e) {

      key = e.keyCode || e.wich;

      teclado = String.fromCharCode(key).toUpperCase();

      letras = " ABCDEFGHIJKLMNOPQRSTUVWXYZÑ";

      especiales = "8-37-38-46-164";

      teclado_especial = false;

      for (var i in especiales) {

          if (key == especiales[i]) {
              teclado_especial = true;
              break;
          }
      }

      if (letras.indexOf(teclado) == -1 && !teclado_especial) {
          return false;
      }

  }




  /*==============================================
  =        VALIDACION SOLO NUMEROS           =
  ==============================================*/
  function solonumeros(e) {

      key = e.keyCode || e.wich;

      teclado = String.fromCharCode(key).toUpperCase();

      letras = "1234567890";

      especiales = "8-37-38-46-164";

      teclado_especial = false;

      for (var i in especiales) {

          if (key == especiales[i]) {
              teclado_especial = true;
              break;
          }
      }

      if (letras.indexOf(teclado) == -1 && !teclado_especial) {
          return false;
      }

  }

  function Espacio(campo, event) {
      CadenaaReemplazar = " ";
      CadenaReemplazo = "";
      CadenaTexto = campo.value;
      CadenaTextoNueva = CadenaTexto.split(CadenaaReemplazar).join(CadenaReemplazo);
      campo.value = CadenaTextoNueva;
  }




  function limitDecimalPlaces(e, count) {
      if (e.target.value.indexOf('.') == -1) {
          return;
      }
      if ((e.target.value.length - e.target.value.indexOf('.')) > count) {
          e.target.value = parseFloat(e.target.value).toFixed(count);
      }
  }

  function isNumberKey(evt) {
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
          return false;

      return true;
  }
</script>

<script>
  function DobleEspacio(campo, event) {

      CadenaaReemplazar = "  ";
      CadenaReemplazo = " ";
      CadenaTexto = campo.value;
      CadenaTextoNueva = CadenaTexto.split(CadenaaReemplazar).join(CadenaReemplazo);
      campo.value = CadenaTextoNueva;

  }
</script>

<script>
  jQuery(function($) {
      $("#TELEFONO").mask("9999-9999");
      $("#TELEFONO_OPCIONAL").mask("99999-99999");
      $("#RTN_CLIENTE").mask("9999-9999-999999");

  });
</script>


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

  
                                <script>
                                    /*=============================================
                                     VALIDACION QUE SOLO PERMITA LETRAS Y NUMEROS             
                                    =============================================*/

                                    function letrasynumeros(e) {

                                        key = e.keyCode || e.wich;

                                        teclado = String.fromCharCode(key).toUpperCase();

                                        letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZÑ1234567890 ";

                                        especiales = "8-37-38-46-164";

                                        teclado_especial = false;

                                        for (var i in especiales) {

                                            if (key == especiales[i]) {
                                                teclado_especial = true;
                                                break;
                                            }
                                        }

                                        if (letras.indexOf(teclado) == -1 && !teclado_especial) {
                                            return false;
                                        }

                                    }

                                    /*=====  End of Section comment block  ======*/


                                    /*==============================================
                                    =     VALIDACION SOLO LETRAS            =
                                    ==============================================*/
                                    function sololetras(e) {

                                        key = e.keyCode || e.wich;

                                        teclado = String.fromCharCode(key).toUpperCase();

                                        letras = " ABCDEFGHIJKLMNOPQRSTUVWXYZÑ";

                                        especiales = "8-37-38-46-164";

                                        teclado_especial = false;

                                        for (var i in especiales) {

                                            if (key == especiales[i]) {
                                                teclado_especial = true;
                                                break;
                                            }
                                        }

                                        if (letras.indexOf(teclado) == -1 && !teclado_especial) {
                                            return false;
                                        }

                                    }




                                    /*==============================================
                                    =        VALIDACION SOLO NUMEROS           =
                                    ==============================================*/
                                    function solonumeros(e) {

                                        key = e.keyCode || e.wich;

                                        teclado = String.fromCharCode(key).toUpperCase();

                                        letras = "1234567890";

                                        especiales = "8-37-38-46-164";

                                        teclado_especial = false;

                                        for (var i in especiales) {

                                            if (key == especiales[i]) {
                                                teclado_especial = true;
                                                break;
                                            }
                                        }

                                        if (letras.indexOf(teclado) == -1 && !teclado_especial) {
                                            return false;
                                        }

                                    }

                                    function Espacio(campo, event) {
                                        CadenaaReemplazar = " ";
                                        CadenaReemplazo = "";
                                        CadenaTexto = campo.value;
                                        CadenaTextoNueva = CadenaTexto.split(CadenaaReemplazar).join(CadenaReemplazo);
                                        campo.value = CadenaTextoNueva;
                                    }




                                    function limitDecimalPlaces(e, count) {
                                        if (e.target.value.indexOf('.') == -1) {
                                            return;
                                        }
                                        if ((e.target.value.length - e.target.value.indexOf('.')) > count) {
                                            e.target.value = parseFloat(e.target.value).toFixed(count);
                                        }
                                    }

                                    function isNumberKey(evt) {
                                        var charCode = (evt.which) ? evt.which : evt.keyCode;
                                        if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
                                            return false;

                                        return true;
                                    }
                                </script>

                                <script>
                                    function DobleEspacio(campo, event) {

                                        CadenaaReemplazar = "  ";
                                        CadenaReemplazo = " ";
                                        CadenaTexto = campo.value;
                                        CadenaTextoNueva = CadenaTexto.split(CadenaaReemplazar).join(CadenaReemplazo);
                                        campo.value = CadenaTextoNueva;

                                    }
                                </script>

<script>
  jQuery(function($) {
      $("#TELEFONO_CLIENTE").mask("9999-9999");
      $("#DNI_CLIENTE").mask("9999-9999-99999");
      $("#RTN_CLIENTE").mask("9999-9999-999999");

  });
</script>



               
    <div class="mb-3">
      <label for="" class="form-label">Código de Cliente</label>
      <input id="COD_CLIENTE" name="COD_CLIENTE" type="text" class="form-control"  value="{{$cliente->cod_cliente}}" readonly>    
    </div>
 
    <div class="mb-3">
        <label for="" class="form-label">DNI</label>
        <input id="DNI_CLIENTE" name="DNI_CLIENTE" type="text" class="form-control"
        tabindex="1" onkeypress="return isNumberKey(event)"
        placeholder="Ingrese su ID sin espacios:0000000000000" minlength="13" maxlength="13"
        autofocus required value="{{$cliente->dni_cliente}}">    
      </div>

    <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="NOMBRE_CLIENTE" name="NOMBRE_CLIENTE" type="text" class="form-control"
    tabindex="1" autocomplete="off" autofocus="on"
    onkeyup="DobleEspacio(this, event);" onkeypress="return sololetras(event)"
    autofocus required  value="{{$cliente->nombre_cliente}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Apellidos</label>
    <input id="APELLIDOS_CLIENTE" name="APELLIDOS_CLIENTE" type="text"
    class="form-control" tabindex="1" autocomplete="off" autofocus="on"
    onkeyup="DobleEspacio(this, event);" onkeypress="return sololetras(event)"
    autofocus required  value="{{$cliente->apellidos_cliente}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Dirección</label>
    <input id="DIRECCION_CLIENTE" name="DIRECCION_CLIENTE" type="text"
    class="form-control" tabindex="1" autocomplete="off" autofocus="on"
    onkeyup="DobleEspacio(this, event);" onkeypress="return letrasynumeros(event)"  value="{{$cliente->direccion_cliente}}" autofocus required>    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">RTN</label>
    <input id="RTN_CLIENTE" name="RTN_CLIENTE" type="text" class="form-control"
    tabindex="1" onkeypress="return solonumeros(event)"
    onkeyup="DobleEspacio(this, event);" minlength="14" maxlength="14"  value="{{$cliente->rtn_cliente}}" autofocus required>    
  </div>
  
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="TELEFONO_CLIENTE" name="TELEFONO_CLIENTE" type="text" class="form-control"
    tabindex="1" onkeypress="return isNumberKey(event)" minlength="8" maxlength="8"
    autofocus required  value="{{$cliente->telefono_cliente}}">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Correo</label>
    <input id="CORREO_CLIENTE" name="CORREO_CLIENTE" type="email" class="form-control" onkeyup="Espacio(this, event);"  value="{{$cliente->correo_cliente}}" autofocus required>    
  </div>

  <label for="country">Tipo de CLiente</label>
    <select class="form-control" id="COD_TIPO_CLIENTE" name="COD_TIPO_CLIENTE" value="{{$cliente->cod_tipo_cliente}}" autofocus required>
      <option value="{{$cliente->cod_tipo_cliente}}" >Selecciona nuestros servicios</option>  
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
</div>

</form>
    
@stop