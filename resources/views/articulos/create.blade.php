@extends('adminlte::page')

@section('title', 'Articulos')


@section('content_header')
@stop



@section('content')
<form action="/articulos" method="POST">
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



              <div class="mb-3">
                <label for="" class="form-label">NOMBRE DE ARTICULO</label>
                <input id="NOMBRE_ARTICULO" name="NOMBRE_ARTICULO" type="text" class="form-control" tabindex="1">    
              </div>


    <div class="mb-3">
    <label for="" class="form-label">DESCRIPCION ARTICULO</label>
    <input id="DESCRIPCION_ARTICULO" name="DESCRIPCION_ARTICULO" type="text" class="form-control" tabindex="1">    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">PRECIO ARTICULO</label>
    <input id="PRECIO_ARTICULO" name="PRECIO_ARTICULO" type="text" class="form-control" tabindex="1">    
  </div>


  <label for="country">CODIGO CATEGORIA</label>
    <select class="form-control" id="COD_CATEGORIA" name="COD_CATEGORIA">
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

</form>
    
@stop