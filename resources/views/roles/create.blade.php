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
              </i>Nuevo Rol</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-sm-12">
  
                                <form>
                                  <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Rol</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Nombre del Rol">
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

@stop