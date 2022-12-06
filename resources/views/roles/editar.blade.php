@extends('adminlte::page')

@section('title', 'Usuarios')


@section('content_header')
@stop

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"> 

@stop


@section('content')

<body >
  </br>
  <section class="content-12">
    <div class="row">
      <div class="col-md">
        <div class="card card-info">
          <div class="card-header">
            <h3><i class="fas fa-user-plus fa-1.4x">
              </i>Edición de Usuarios</h3>
          </div>
          <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif

                    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="">Nombre del Rol:</label>      
                                {!! Form::text('name', null, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="">Permisos para este Rol:</label>
                                <br/>
                                @foreach($permission as $value)
                                    <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                    {{ $value->name }}</label>
                                <br/>
                                @endforeach
                            </div>
                        </div>
                        <a href="/roles" class="btn btn-secondary" tabindex="5">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        
                    </div>
                    {!! Form::close() !!}

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
    
    
    
    @section('js')
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(function() {
          $('#AdministradorTable').DataTable({
            responsive: true,
            autoWidth: true,
            scrollX: true,
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