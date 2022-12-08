@extends('adminlte::page')

@section('title', 'Ticket')


@section('content_header')
@stop



@section('content')
<form action="/ticket/{{$ticket->cod_reporte_falla}}" method="POST">
    @csrf
    @method('PUT')

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
    <label for="" class="form-label">Código Reporte Falla</label>
    <input id="COD_REPORTE_FALLA" name="COD_REPORTE_FALLA" type="text" class="form-control"  value="{{$ticket->cod_reporte_falla}}" readonly>    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Código Servicio</label>
    <input id="COD_SERVICIO" name="COD_SERVICIO" type="text" class="form-control"  value="{{$ticket->cod_servicio}}" readonly>    
  </div>
    

  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="NOMBRE" name="NOMBRE" type="text" class="form-control"  value="{{$ticket->nombre}}"  autocomplete="off" autofocus="on" autofocus required="" pattern="[a-z A-Z ñÑ ÁÉÍÓÚáéíóú ]+"readonly>    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="TELEFONO" name="TELEFONO" type="text" class="form-control"  value="{{$ticket->telefono}}" minlength="8" maxlength="13" autocomplete="off" autofocus="on" onkeypress="return isNumberKey(event)" autofocus required="" pattern="[0-9]+"readonly>    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Correo Electronico</label>
    <input id="CORREO_ELECTRONICO" name="CORREO_ELECTRONICO" type="email" class="form-control"  value="{{$ticket->correo_electronico}}"  readonly>    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Tema</label>
    <input id="TEMA" name="TEMA" type="text" class="form-control"  value="{{$ticket->tema}}" required readonly>    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="DESCRIPCION" name="DESCRIPCION" type="text" class="form-control"  value="{{$ticket->descripcion}}" required readonly>    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Ubicación</label>
    <input id="UBICACION" name="UBICACION" type="text" class="form-control"  value="{{$ticket->ubicacion}}" required readonly>    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Estado</label>
    <input id="COD_ESTADO" name="COD_ESTADO" type="text" class="form-control"  value="{{$ticket->cod_estado}}" required readonly>    
  </div>

 
  <div class="mb-3">
    <label for="" class="form-label">nombre empleado</label>
    <input id="NOMBRE_EMPLEADO" name="NOMBRE_EMPLEADO" type="text" class="form-control"  value="{{$ticket->nombre_empleado}}" required >    
  </div>

  <a href="/ticket" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
    
@stop