@extends('adminlte::page')

@section('title', 'Edición de Presupuesto')


@section('content_header')
@stop

 

@section('content')
<form action="/presupuesto/{{$presupuesto->cod_solicitud}}" method="POST">
    @csrf
    @method('PUT')

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
  function onPaste(event) {
console.log('Paste!! ', event);
event.preventDefault();
event.stopPropagation();
}
</script>

    <div class="row justify-content-center">
      <!-- Left col -->
      <div class="col-md-9">
        <!-- MAP & BOX PANE -->
        <div class="card card-info">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="form-group">

  
    <div class="mb-3">
      <label for="" class="form-label">Código de Solicitud</label>
      <input id="COD_SOLICITUD" name="COD_SOLICITUD" type="text" class="form-control"  value="{{$presupuesto->cod_solicitud}}" readonly>    
    </div>
 
 
    
    <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="NOMBRE" name="NOMBRE" type="text" class="form-control"
    tabindex="1" autocomplete="off" autofocus="on"
    onkeyup="DobleEspacio(this, event);" onpaste="onPaste(event)" maxlength="60" onkeypress="return sololetras(event)"
    autofocus required value="{{$presupuesto->nombre}}">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input id="APELLIDO" name="APELLIDO" type="text"
    class="form-control" tabindex="1" autocomplete="off" autofocus="on"
    onkeyup="DobleEspacio(this, event);" onpaste="onPaste(event)" maxlength="60" onkeypress="return sololetras(event)"
    autofocus required  value="{{$presupuesto->apellido}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="TELEFONO" name="TELEFONO" type="text" class="form-control"
    tabindex="1" onkeypress="return isNumberKey(event)"
    placeholder="Ingrese su Numero de telefono sin espacios:99999999" onpaste="onPaste(event)" minlength="8" maxlength="8"
    autofocus required value="{{$presupuesto->telefono}}" >    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Correo Electronico</label>
    <input id="CORREO_ELECTRONICO" name="CORREO_ELECTRONICO" type="email" onpaste="onPaste(event)" placeholder="Ingrese su correo electronico: aaa@gmail.com" class="form-control"
    tabindex="1" onkeyup="Espacio(this, event);" autofocus required value="{{$presupuesto->correo_electronico}}">    
  </div>

  

<div>
  <label for="country">Tipo Solicitante</label>
  <select class="form-control" id="TIPO_SOLICITANTE" name="TIPO_SOLICITANTE" value="{{$presupuesto->tipo_solicitante}}" onpaste="onPaste(event)" autocomplete="off" autofocus="on" autofocus required>
    <option value="{{$presupuesto->tipo_solicitante}}" >Selecciona nuestros servicios</option>
    <option value="1">EMPRESA</option>
    <option value="2">CASA</option>
  </select>
</div>

<div class="mb-3">
  <label for="" class="form-label">Telefono Opcional</label>
  <input id="TELEFONO_OPCIONAL" name="TELEFONO_OPCIONAL" type="text" class="form-control"
  tabindex="1" onkeypress="return isNumberKey(event)"
  placeholder="Ingrese su Numero de telefono sin espacios:99999999"  onpaste="onPaste(event)" minlength="8" maxlength="8"
  autofocus required value="{{$presupuesto->telefono_opcional}}">    
</div>


<div class="mb-3">
  <label for="" class="form-label">Dirección</label>
  <input id="DIRECCION_SOLICITANTE" name="DIRECCION_SOLICITANTE" type="text"
  class="form-control" tabindex="1" autocomplete="off" onpaste="onPaste(event)" autofocus="on" placeholder="Ingrese la dirección"
  onkeyup="DobleEspacio(this, event);" onkeypress="return letrasynumeros(event)"
  autofocus required value="{{$presupuesto->direccion_solicitante}}" maxlength="80">    
</div>

<div class="mb-3">
  <label for="" class="form-label">Nombre Empresa</label>
  <input id="NOMBRE_E_C" name="NOMBRE_E_C" type="text" class="form-control" tabindex="1"placeholder="Ingrese el nombre de la empresa" onkeyup="DobleEspacio(this, event);" onkeypress="return letrasynumeros(event)"
  autofocus required autofocus required onpaste="onPaste(event)" value="{{$presupuesto->nombre_e_c}}" maxlength="70">    
</div>

<div class="mb-3">
  <label for="" class="form-label">No. Identidad / RTN</label>
  <input id="RTN_DNI" name="RTN_DNI" type="text" class="form-control"
  tabindex="1" onpaste="onPaste(event)" onkeypress="return solonumeros(event)"
  placeholder="En caso de aplicar Ingrese su RTN sin espacios:0000000000000"
  onkeyup="DobleEspacio(this, event);" minlength="14" maxlength="14" autofocus required  value="{{$presupuesto->rtn_dni}}">    
</div>

<div>
  <label for="country">Ciudad</label>
  <select class="form-control" id="CIUDAD" name="CIUDAD" value="{{$presupuesto->ciudad}}" autofocus required>
    <option value="{{$presupuesto->ciudad}}">Selecciona una Ciudad:</option>
    <option value="Tegucigalpa">Tegucigalpa</option>
    <option value="San Pedro Sula">San Pedro Sula</option>
    <option value="Comayagua">Comayagua</option>
 </select>
</div>

<div>
  <label for="country">Servicio</label>
  <select class="form-control" id="COD_SERVICIO" name="COD_SERVICIO" value="{{$presupuesto->cod_servicio}}" autofocus required>
    <option value="{{$presupuesto->cod_servicio}}" >Selecciona nuestros servicios</option>
    <option value="1">Aire Acondicionado</option>
    <option value="2">Construcción</option>
    <option value="3">Electricidad</option>
    <option value="4">Monitoreo CCTV</option>
    <option value="5">Pintura</option>
    <option value="6">Planta Telefonica</option>
    <option value="7">Sistema de Seguridad</option>
    <option value="8">Tabla Yeso</option> 
  </select>
</div>

<div class="mb-3">
  <label for="" class="form-label">Descripció de solicitud</label>
  <input id="DESCRIPCION_SOLICITUD" name="DESCRIPCION_SOLICITUD" type="text"
  class="form-control" tabindex="1" onpaste="onPaste(event)" autocomplete="off" autofocus="on" placeholder="Describa la solicitud"
  onkeyup="DobleEspacio(this, event);" onkeypress="return letrasynumeros(event)"
  autofocus required  value="{{$presupuesto->descripcion_solicitud}}" maxlength="100">    
</div>


<div>
  <label for="country">Estado</label>
  <select class="form-control" id="COD_ESTADO" name="COD_ESTADO" value="{{$presupuesto->cod_estado}}" autofocus required>
    <option value="{{$presupuesto->cod_estado}}" >Selecciona nuestros servicios</option>
  <option value="1">NUEVO</option>
   <option value="2">EN PROCESO</option>
   <option value="3">FINALIZADO</option>
   <option value="4">CANCELADO</option>
  </select>
</div>


  
  

  <a href="/presupuesto" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</div>
</div>
</div>
</div>
</div>
</div>

</form>
    
@stop