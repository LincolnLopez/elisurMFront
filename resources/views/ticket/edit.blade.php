@extends('adminlte::page')

@section('title', 'Edición de Ticket')


@section('content_header')
@stop



@section('content')
<form action="/ticket/{{$ticket->cod_reporte_falla}}" method="POST">
  @csrf
  @method('PUT')

  <!---validació de solo Letras--->
  <script>
    function soloLetras(e) {
      key = e.keyCode || e.which;
      tecla = String.fromCharCode(key).toLowerCase();
      letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
      especiales = "8-37-39-46";

      tecla_especial = false
      for (var i in especiales) {
        if (key == especiales[i]) {
          tecla_especial = true;
          break;
        }
      }

      if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
      }
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
    function soloNums(e) {
      key != e.keyCode || e.which;
      tecla != String.fromCharCode(key).toLowerCase();
      letras != " áéíóúabcdefghijklmnñopqrstuvwxyz";
      especiales != "8-37-39-46";

      tecla_especial != false
      for (var i in especiales) {
        if (key == especiales[i]) {
          tecla_especial != true;
          break;
        }
      }

      if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
      }
    }






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
  </script>


  <script>
    function nospaces1() {
      orig = document.form.PASSWORD_USUARIO.value;
      nuev = orig.split(' ');
      nuev = nuev.join('');
      document.form.PASSWORD_USUARIO.value = nuev;
      if (nuev = orig.split(' ').length >= 2);
    }
  </script>

  <!---validació de numeros y 2 decimales--->
  <script>
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
    var validarNumero = function(e) {
      var valor = e.value;
      e.value = (valor.indexOf(".") >= 0) ? (valor.substr(0, valor.indexOf(".")) + valor.substr(valor.indexOf("."), 3)) : valor;
    }
  </script>



  <div class="mb-3">
    <label for="" class="form-label">COD_REPORTE_FALLA</label>
    <input id="COD_REPORTE_FALLA" name="COD_REPORTE_FALLA" type="text" class="form-control" value="{{$ticket->cod_reporte_falla}}" readonly>
  </div>

  <div>
    <label for="country">COD_SERVICIO</label>
    <select class="form-control" id="COD_SERVICIO" name="COD_SERVICIO" value="{{$ticket->cod_servicio}}">
      <option value="{{$ticket->cod_servicio}}">Selecciona nuestros servicios</option>
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
    <label for="" class="form-label">NOMBRE</label>
    <input id="NOMBRE" name="NOMBRE" type="text" class="form-control" value="{{$ticket->nombre}}" autocomplete="off" autofocus="on" autofocus required=""  pattern="[a-z A-Z ñÑ ÁÉÍÓÚáéíóú ]+"  onkeyup="DobleEspacio(this, event);" value="{{$ticket->ubicacion}}" required>
  </div> onkeypress="return sololetras(event)">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">TELEFONO</label>
    <input id="TELEFONO" name="TELEFONO" type="text" class="form-control" value="{{$ticket->telefono}}" minlength="8" maxlength="8" autocomplete="off" autofocus="on" onkeypress="return isNumberKey(event)" autofocus required="" pattern="[0-9]+">
  </div>


  <div class="mb-3">
    <label for="" class="form-label">CORREO_ELECTRONICO</label>
    <input id="CORREO_ELECTRONICO" name="CORREO_ELECTRONICO" type="email" class="form-control" value="{{$ticket->correo_electronico}}" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">TEMA</label>
    <input id="TEMA" name="TEMA" type="text" class="form-control" onkeyup="DobleEspacio(this, event);" value="{{$ticket->tema}}" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">DESCRIPCION</label>
    <input id="DESCRIPCION" name="DESCRIPCION" type="text" class="form-control" onkeyup="DobleEspacio(this, event);" value="{{$ticket->descripcion}}" required>
  </div>


  <div class="mb-3">
    <label for="" class="form-label">UBICACION</label>
    <input id="UBICACION" name="UBICACION" type="text" class="form-control" onkeyup="DobleEspacio(this, event);" value="{{$ticket->ubicacion}}" required>
  </div>

  <div>
    <label for="country">COD_ESTADO</label>
    <select class="form-control" id="COD_ESTADO" name="COD_ESTADO" value="{{$ticket->cod_estado}}">
      <option value="{{$ticket->cod_estado}}">Selecciona nuestros servicios</option>
      <option value="1">NUEVO</option>
      <option value="2">EN PROCESO</option>
      <option value="3">FINALIZADO</option>
      <option value="4">CANCELADO</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">nombre_empleado</label>
    <input id="NOMBRE_EMPLEADO" name="NOMBRE_EMPLEADO" type="text" class="form-control" value="{{$ticket->nombre_empleado}}" required>
  </div>

  <a href="/ticket" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@stop