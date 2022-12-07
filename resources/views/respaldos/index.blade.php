@extends('adminlte::page')

@section('content_header')
<h1>Respaldos</h1>
@stop

@section('css')
@stop


@section('content')
<div class="container-fluid">

  <!-- Main row -->
  <div class="row justify-content-center">
    <!-- Left col -->
    <div class="col-md-9">
      <!-- MAP & BOX PANE -->
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Respaldo</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="form-group">
            <label> Servidor Local:</label>
            <!--Codigo para la fecha-->
            <div class="row">

              <div class="form-group col-md-4">
                <input type="text" class="form-control" id="inputZip">
              </div>

            </div>
          </div>
          <form>
            <div class="form-group">
              <label for="exampleFormControlSelect1"> Servidor Local:</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>McLovin</option>
                <option>Ventas</option>
                <option>Clientes nuevos</option>
                <option>Fallas</option>
                <option>Satisfaccion de servicios</option>
              </select>
          <div class="form-group">
            <label> Base de datos:</label>
            <!--Codigo para la fecha-->
            <div class="row">

              <div class="form-group col-md-4">
                <input type="text" class="form-control" id="inputZip">
              </div>

            </div>
          </div>
          <form>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Base de datos:</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Elisur</option>
                <option>Ventas</option>
                <option>Clientes nuevos</option>
                <option>Fallas</option>
                <option>Satisfaccion de servicios</option>
              </select>
          <!-- /.card -->
          <div class="form-group">
            <label> Directorio:</label>
            <!--Codigo para la fecha-->
            <div class="row">

              <div class="form-group col-md-4">
                <input type="text" class="form-control" id="inputZip">
              </div>

            </div>
            <button type="button" class="btn btn-primary btn-lg">Examinar</button>
          </div>

         


          </form>

        </div>
        <!-- /.card-body -->
        <div class>
        <button type="button" class="btn btn-primary btn-lg">Restaurar</button>
        <button type="button" class="btn btn-primary btn-lg">Salir</button>
        </div>

      </div>



    </div>
  </div>
</div>
@endsection