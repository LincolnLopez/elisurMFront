@extends('adminlte::page')

@section('title', 'Articulos')


@section('content_header')
@stop

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">



@stop


@section('content')

<body>
  </br>
  <section class="content">
    <div class="row">
      <div class="col-md">
        <div class="card card-info">
          <div class="card-header">
            <h3><i class="fas fa-user-plus fa-1.4x">
              </i>Articulos</h3>
          </div>
          <div class="card-body">
            @if(Session::has('success'))
            <div class="alert alert-success text-center alert-dismissible fade show" role="alert" id="success-alert">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path
                  d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
              </svg>
              <strong> {{Session::get('success')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            @if(Session::has('updates'))
            <div class="alert alert-warning text-center alert-dismissible fade show" role="alert" id="update-alert">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil"
                viewBox="0 0 16 16">
                <path
                  d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
              </svg>
              <strong> {{Session::get('updates')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

            <div class="row">
              <div class="col-12 col-sm-12">
                </br>
                <table id="AdministradorTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Código Articulo</th>
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>Precio</th>
                      <th>Código Categoria</th>
                      <th>Nombre Categoria</th>
                      <th>Estado de Articulo</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($articulos as $articulo)
                    <tr>
                      <td>{{$articulo->COD_ARTICULO}}</td>
                      <td>{{$articulo->NOMBRE_ARTICULO}}</td>
                      <td>{{$articulo->DESCRIPCION_ARTICULO}}</td>
                      <td>{{$articulo->PRECIO_ARTICULO}}</td>
                      <td>{{$articulo->COD_CATEGORIA}}</td>
                      <td>{{$articulo->NOMBRE_CATEGORIA}}</td>
                      <td>{{$articulo->ESTADO_ARTICULO}}</td>
                      <td>
                        <form action="{{ route('articulos.destroy',$articulo->COD_ARTICULO) }}" method="POST">
                          <a href="/articulos/{{$articulo->COD_ARTICULO}}/edit" class="btn btn-info">Editar</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>

                </table>



                <a href="{{ route('articulos.create') }}" class="btn btn-success">Registrar</a>

              </div>
            </div>

          </div>

        </div>

      </div>

    </div>


  </section>


</body>

@stop



@section('js')


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>


<script>
  $(function () {
    $('#AdministradorTable').DataTable({
      responsive: true,
      scrollX: true,
      autoWidth: true,
      language: {
        url: 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json'
      }
    });
  });
</script>

@stop