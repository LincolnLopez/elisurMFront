@extends('adminlte::page')

@section('title', 'Solicitudes de Clientes')

@section('content_top_nav_right')

@endsection

@section('content_header')
@stop

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">



@stop



@section('content')

<body oncopy="return true" onpaste="return true">
  </br>
  <section class="content">


    <div class="row">
      <div class="col-md-12">
        <div class="card card-info">
          <div class="card-header">
            <h3><i class="fas fa-user-plus fa-1.4x">
              </i>Solicitudes</h3>
          </div>
          <div class="card-body">
            @if(Session::has('success'))
            <div class="alert alert-success text-center alert-dismissible fade show" role="alert" id="success-alert">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
              </svg>
              <strong> {{Session::get('success')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            @if(Session::has('updates'))
            <div class="alert alert-warning text-center alert-dismissible fade show" role="alert" id="update-alert">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
              </svg>
              <strong> {{Session::get('updates')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

            <div class="row">
              <div class="col-12 col-sm-12">
                <div class="card card-info card-tabs">





                  <table id="myTable" class="table table-striped table-bordered" cellspacing="40%" width="100%">
                    <thead>
                      <tr>
                        <th>Solicitud</th>
                        <th>Fecha</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Correo Electronico</th>
                        <th>Tipo Solicitante</th>
                        <th>Telefono Opcional</th>
                        <th>Direcci??n</th>
                        <th>Nombre Empresa</th>
                        <th>RTN/DNI</th>
                        <th>Ciudad</th>
                        <th>Servicio</th>
                        <th>Descripci??n</th>
                        <th>Estado</th>


                      </tr>

                    </thead>

                    <tbody>
                      @foreach($solicitudes as $solicitud)
                      <tr>
                        <td>{{$solicitud->COD_SOLICITUD}}</td>
                        <td>{{$solicitud->FECHA_SOLICITUD}}</td>
                        <td>{{$solicitud->NOMBRE}}</td>
                        <td>{{$solicitud->APELLIDO}}</td>
                        <td>{{$solicitud->TELEFONO}}</td>
                        <td>{{$solicitud->CORREO_ELECTRONICO}}</td>
                        <td>{{$solicitud->TIPO_SOLICITANTE}}</td>
                        <td>{{$solicitud->TELEFONO_OPCIONAL}}</td>
                        <td>{{$solicitud->DIRECCION_SOLICITANTE}}</td>
                        <td>{{$solicitud->NOMBRE_E_C}}</td>
                        <td>{{$solicitud->RTN_DNI}}</td>
                        <td>{{$solicitud->CIUDAD}}</td>
                        <td>{{$solicitud->nombre_servicio}}</td>
                        <td>{{$solicitud->DESCRIPCION_SOLICITUD}}</td>
                        <td>{{$solicitud->nombre_estado}}</td>
                    
                      </tr>


                      @endforeach
                    </tbody>



                  </table>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>


  </section>


</body>

@stop

@section('footer')
<strong><a href="http://40.83.9.20/home">Elisur</a>.</strong>
Multi servicios.
<div class="float-right d-none d-sm-inline-block">
  <b>Version</b> 3.1.0
</div>
@stop

@section('js')


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>


<script>
  $(function() {
    $('#myTable').DataTable({
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