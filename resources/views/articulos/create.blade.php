@extends('adminlte::page')

@section('title', 'Articulos')


@section('content_header')
@stop



@section('content')
<form action="/articulos" method="POST" onsubmit="return validar();"  autocomplete="off">
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

              <div class="mb-3">
                <label for="" class="form-label">NOMBRE DE ARTICULO</label>      <!--NO autocompletacion autocomplete="off"--> <!--Que se ubique el cursos en el textbox autofocus="on"--> 
                <input id="NOMBRE_ARTICULO" name="NOMBRE_ARTICULO" type="text" class="form-control" tabindex="1"  autocomplete="off" autofocus="on" o onPaste="return false;" autofocus required>    
              </div>                                                                 <!--campo requerido required    Que no se pueda pegar onPaste="return false;"--> 


    <div class="mb-3">
    <label for="" class="form-label">DESCRIPCION ARTICULO</label>
    <input id="DESCRIPCION_ARTICULO" name="DESCRIPCION_ARTICULO" type="text" class="form-control" tabindex="1"  autocomplete="off" autofocus="on" required>    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">PRECIO ARTICULO</label>
    <input id="PRECIO_ARTICULO" name="PRECIO_ARTICULO" type="text" class="form-control" tabindex="1" autofocus required oninput="limitDecimalPlaces(event, 2)" onkeypress="return isNumberKey(event)" autofocus required>    
  </div>


  <label for="country">CODIGO CATEGORIA</label>
    <select class="form-control" id="COD_CATEGORIA" name="COD_CATEGORIA"  autofocus required>
      <option value="1">Tapiceria</option>
      <option value="21">Construcción</option>
    </select>


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