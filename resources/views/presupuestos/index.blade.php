@extends('adminlte::page')

@section('title', 'Presupuestos')

@section('content_top_nav_right')

@endsection

@section('content_header')
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
              </i>Presupuestos</h3>
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
                  <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Registro de presupuestos</a>
                      </li>
                    </ul>
                  </div>
                      
                  
                     
                        </br>
                        
            
                        <table id="AdministradorTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                         <thead>
                           <tr>
                             <th>Solicitud </th>
                             <th>Fecha</th>
                             <th>Nombre</th>
                             <th>Telefono</th>
                             <th>Electronico</th>
                             <th>Tipo Solicitante</th>
                             <th>Telefono Opcional</th>
                             <th>Dirección</th>
                             <th>Ciudad</th>
                             <th>Servicio</th>
                             <th>Descripción</th>
                             <th>Estado</th>
                           </tr>
                        
                         </thead>

                         <tbody>
                            @foreach($presupuestos as $presupuesto)
                            <tr>
                                <td>{{$presupuesto->COD_SOLICITUD}}</td>
                                <td>{{$presupuesto->FECHA_SOLICITUD}}</td>
                                <td>{{$presupuesto->NOMBRE_SOLICITANTE}}</td>
                                <td>{{$presupuesto->TELEFONO}}</td>
                                <td>{{$presupuesto->CORREO_ELECTRONICO}}</td>
                                <td>{{$presupuesto->TIPO_SOLICITANTE}}</td>
                                <td>{{$presupuesto->TELEFONO_OPCIONAL}}</td>
                                <td>{{$presupuesto->DIRECCION_SOLICITANTE}}</td>
                                <td>{{$presupuesto->CIUDAD}}</td>
                                <td>{{$presupuesto->nombre_servicio}}</td>
                                <td>{{$presupuesto->DESCRIPCION_SOLICITUD}}</td>
                                <td>{{$presupuesto->nombre_estado}}</td>
                                <td>
                                <form  action="{{ route('presupuestos.destroy',$presupuesto->COD_SOLICITUD) }}" method="POST">
                              <a href="/presupuestos/{{$presupuesto->COD_SOLICITUD}}/edit" class="btn btn-info">Editar</a>         
                                  @csrf
                                  @method('DELETE')
                              <button type="submit" class="btn btn-danger">Delete</button>

                              <td>
                                <button type="button" class="btn btn-info"><i class="fas fa-file-alt" data-toggle="modal" data-target="#detalleModal"></i> </button>
                                <button type="button" class="btn btn-warning"><i class="fas fa-check-circle" data-toggle="modal" data-target="#finalizadoModal"></i> </button>
                                <button type="button" class="btn btn-danger"><i class=" fas fa-trash-alt" data-toggle="modal" data-target="#eliminarModal"></i> </button>
                            </td>
                            </form>          
                                </td>
                            </tr>
                            @endforeach
                            </tbody>   <tr>
                               
                                
                              
         
                         
                                

                         
                        </table>

                      </div>

                      <a href="{{ route('cotizacion.index') }}" class="btn btn-success">Ingresar solicitud</a>

                      <div class="modal" id="estados" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Estados</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form>
                                <div class="form-group row">
                                  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">usuario:</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="@sdvallep">
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <!-- radio -->
                                  <div class="form-group">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio1">
                                      <label class="form-check-label">Activo</label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio1" checked="">
                                      <label class="form-check-label">Inactivo</label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio1" checked="">
                                      <label class="form-check-label">Bloqueado</label>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="button" class="btn btn-primary">Guardar cambios</button>
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
<script type="text/javascript" src="js/validacion_citas-doctores.js"></script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
<script>
  $(function() {
    $('#AdministradorTable').DataTable({
      responsive: true,
      autoWidth: true,
      language: {
        url: 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json'
      }
    });
  });
</script>

<script>
  $("#success-alert").fadeTo(2000, 500).slideUp(400, function() {
    $("#success-alert").slideUp(500);
  });
</script>
<script>
  $("#delete-alert").fadeTo(2000, 500).slideUp(400, function() {
    $("#delete-alert").slideUp(500);
  });
</script>
<script>
  $("#update-alert").fadeTo(2000, 500).slideUp(400, function() {
    $("#update-alert").slideUp(500);
  });
</script>

@stop