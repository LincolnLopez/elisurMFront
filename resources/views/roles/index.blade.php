@extends('adminlte::page')

@section('title', 'Usuarios')


@section('content_header')
@stop



@section('content')
<body oncopy="return false" onpaste="return false">
  </br>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-info">
          <div class="card-header">
            <h3><i class="fas fa-user-plus fa-1.4x">
              </i>Roles</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-sm-12">
                <div class="card card-info card-tabs">
                  

                  <div class="card-body">

                          <table class="table table-bordered table-striped dt-responsive tablas">

                            

                            <thead>

                              <tr>
                                <th>#</th>
                                <th>Rol</th>
                                <th>Descripción</th>
                                <th>Editar usuarios</th>
                                <th>Ver Inventario</th>
                                <th>Asignar trabajo</th>
                                <th>Cerrar actividad asignada</th>
                                <th>Solicitar presupuesto</th>
                                <th>Generar reportes</th>
                                <th>Reporte de fallas</th>
                              </tr>

                            </thead>

                            <tbody>


                              <!-- ADMINISTRADORES -->
                              <tr>
                                <td>1</td>
                                <td>Administrador</td>
                                <td>Accesos sin Limitaciones</td>
                                <td>

                                  <input type="checkbox" checked="checked">
                                  <span class="checkmark"></span>

                                </td>

                                <td>

                                  <input type="checkbox" checked="checked">
                                  <span class="checkmark"></span>

                                </td>

                                <td>

                                  <input type="checkbox" checked="checked">
                                  <span class="checkmark"></span>

                                </td>


                                <td>

                                  <input type="checkbox" checked="checked">
                                  <span class="checkmark"></span>

                                </td>

                                <td>

                                  <input type="checkbox" checked="checked">
                                  <span class="checkmark"></span>

                                </td>

                                <td>

                                  <input type="checkbox" checked="checked">
                                  <span class="checkmark"></span>

                                </td>

                                <td>

                                  <input type="checkbox" checked="checked">
                                  <span class="checkmark"></span>

                                </td>
                              </tr>


                              <!-- EMPLEADOS -->
                              <tr>
                                <td>2</td>
                                <td>Empleado</td>
                                <td>Accesos Limitados</td>
                                <td>

                                  <input type="checkbox">
                                  <span class="checkmark"></span>

                                </td>

                                <td>

                                  <input type="checkbox" checked="checked">
                                  <span class="checkmark"></span>

                                </td>

                                <td>

                                  <input type="checkbox">
                                  <span class="checkmark"></span>

                                </td>


                                <td>

                                  <input type="checkbox" checked="checked">
                                  <span class="checkmark"></span>

                                </td>

                                <td>

                                  <input type="checkbox">
                                  <span class="checkmark"></span>

                                </td>

                                <td>

                                  <input type="checkbox">
                                  <span class="checkmark"></span>

                                </td>

                                <td>

                                  <input type="checkbox">
                                  <span class="checkmark"></span>

                                </td>

                              </tr>


                              <!-- CLIENTES -->
                              <tr>
                                <td>3</td>
                                <td>Cliente</td>
                                <td>Accesos Limitados</td>

                                <td>

                                  <input type="checkbox">
                                  <span class="checkmark"></span>

                                </td>

                                <td>

                                  <input type="checkbox">
                                  <span class="checkmark"></span>

                                </td>

                                <td>

                                  <input type="checkbox">
                                  <span class="checkmark"></span>

                                </td>


                                <td>

                                  <input type="checkbox">
                                  <span class="checkmark"></span>

                                </td>

                                <td>

                                  <input type="checkbox" checked="checked">
                                  <span class="checkmark"></span>

                                </td>

                                <td>

                                  <input type="checkbox">
                                  <span class="checkmark"></span>

                                </td>

                                <td>

                                  <input type="checkbox" checked="checked">
                                  <span class="checkmark"></span>

                                </td>


                              </tr>

                            </tbody>

                          </table>

                          <h5></h5>

                          <button type="button" class="btn btn-primary">Guardar cambios</button>
                          <a href="{{ route('roles.create') }}" class="btn btn-primary">Nuevo Rol</a>

                        </div>
               
                  <div class="card-body">
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                       
                      <div class="tab-pane fade" id="custom-tabs-one-rol" role="tabpanel" aria-labelledby="custom-tabs-one-rol-tab">

                        

                       

                        <div class="modal" id="nuevoRol" tabindex="-1">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Nuevo Rol</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>
                                  <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Rol</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="nombre del rol">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Descripción</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
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


                      <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                        </br>
                        <table id="AdministradorTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead>
                            <th>Código</th>
                            <th>Nombres</th>
                            <th>Correo Electrónico</th>
                            <th>Rol</th>
                            <th>Estado</th>
                            <th>Acción</th>
                          </thead>
                          <tbody>


                            <tr>
                              <td class="inner-table"> </td>
                              <td class="inner-table"> </td>
                              <td class="inner-table"> </td>
                              <td class="inner-table"> </td>
                              <td class="inner-table"> </td>
                              <td style=text-align:center>
                                <button type="button" class="btn btn-warning" data-toggle="modal" title="Editar" data-target="#estados" data-backdrop="static" data-keyboard="true">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                  </svg>
                                </button>
                              </td>
                            </tr>



                          </tbody>
                        </table>
                      </div>

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

</html>
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