@extends('adminlte::page')

@section('content_header')
<h1>Area de Reportes</h1>
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
          <h3 class="card-title">Reportes</h3>

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
            <label> Fecha inicial:</label>
            <!--Codigo para la fecha-->
            <div class="row">

              <x-adminlte-input name="fecha" id="fecha" type="date" fgroup-class="col-md-12" disable-feedback />

            </div>

            <!-- /.input group -->
          </div>
          <!-- /.card -->

          <div class="form-group">
            <label> Fecha final:</label>

            <!--Codigo para la fecha-->
            <div class="row">

              <x-adminlte-input name="fecha" id="fecha" type="date" fgroup-class="col-md-12" disable-feedback />

            </div>
          </div>
          <!-- /.card -->
          <form>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Seleccionar reporte</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Compras</option>
                <option>Ventas</option>
                <option>Clientes nuevos</option>
                <option>Fallas</option>
                <option>Satisfaccion de servicios</option>
              </select>


          </form>

        </div>
        <!-- /.card-body -->
        <div class="btn-group">
          <a href="vendor/adminlte/dist/documentos/reportegeneradop.pdf" class="btn btn-info" download="Reporte.pdf">PDF</a>
          <a href="vendor/adminlte/dist/img/reportegenerado.xlsx" class="btn btn-info" download="Reporte.xlsx">Excel</a>

        </div>

      </div>



    </div>
  </div>
</div>
@endsection