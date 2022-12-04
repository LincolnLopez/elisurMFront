@extends('adminlte::page')

@section('title', 'Tickets')


@section('content_header')
@stop



@section('content')
<form action="/ticket" method="POST" onsubmit="return validar();"  autocomplete="off">
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

document.getElementById('NOMBRE_ARTICULO')
  .reportValidity()
                </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<!---validació de solo Letras--->
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
  function soloNums(e){
     key != e.keyCode || e.which;
     tecla != String.fromCharCode(key).toLowerCase();
     letras != " áéíóúabcdefghijklmnñopqrstuvwxyz";
     especiales != "8-37-39-46";

     tecla_especial != false
     for(var i in especiales){
          if(key == especiales[i]){
              tecla_especial != true;
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

<!---validació de numeros y 2 decimales--->
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


<script>

var validarNumero= function(e) {
  var valor = e.value;
  e.value = (valor.indexOf(".") >= 0) ? (valor.substr(0, valor.indexOf(".")) + valor.substr(valor.indexOf("."), 3)) : valor;
}
</script>

                                                                                                         <!--campo requerido required    Que no se pueda pegar onPaste="return false;"-->   
              <div class="mb-3">
                <label>Servicio</label>
                                <select class="form-control" id="COD_SERVICIO" name="COD_SERVICIO" autofocus required>
                                   <option value="" disabled selected>Selecciona nuestros servicios</option>
                                   <option value="1">1.Aire Acondicionado</option>
                                   <option value="2">2.Construcción</option>
                                   <option value="3">3.Electricidad</option>
                                   <option value="4">4.Monitoreo CCTV</option>
                                   <option value="5">5.Pintura</option>
                                   <option value="6">6.Planta Telefonica</option>
                                   <option value="7">7.Sistema de Seguridad</option>
                                   <option value="8">8.Tabla Yeso</option>
                                </select>
                  </div>
                                                                        


    <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="NOMBRE" name="NOMBRE" type="text" class="form-control" tabindex="1"   autocomplete="off" autofocus="on" autofocus required="" pattern="[a-z A-Z ñÑ ÁÉÍÓÚáéíóú ]+">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="TELEFONO" name="TELEFONO" type="text" class="form-control" tabindex="1" minlength="8" maxlength="13" autocomplete="off" autofocus="on" onkeypress="return isNumberKey(event)" autofocus required="" pattern="[0-9]+">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Correo Electronico</label>
    <input id="CORREO_ELECTRONICO" name="CORREO_ELECTRONICO" type="email" class="form-control" tabindex="1"  autocomplete="off" autofocus="on" required>    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Tema</label>
    <input id="TEMA" name="TEMA" type="text" class="form-control" tabindex="1"  autocomplete="off" autofocus="on" required>    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="DESCRIPCION" name="DESCRIPCION" type="text" class="form-control" tabindex="1"  autocomplete="off" autofocus="on" required>    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Ubicación</label>
    <input id="UBICACION" name="UBICACION" type="text" class="form-control" tabindex="1"  autocomplete="off" autofocus="on" required>    
  </div>

  



 


  <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</div>

</div>



</div>
</div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="resources/js/sweetAlert.js"></script>
</form>
    
@stop