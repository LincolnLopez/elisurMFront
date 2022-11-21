@extends('adminlte::page')

@section('title', 'Usuarios')


@section('content_header')
@stop



@section('content')
<div class="row">
    <div class="col-12 col-sm-12">
      <div class="card card-info card-tabs">
        <div class="card-header p-0 pt-1">
          <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Nuevo Usuario</a>
            </li>
        <div class="card-body">
          <div class="tab-content" id="custom-tabs-one-tabContent">

            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
              </br>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label">Nombres:</label>
                    <input type="text" name="NAME" id="NAME" maxlength="50" class="form-control" onkeyup="DobleEspacio(this, event);" onkeypress="return sololetras(event)" placeholder="Ingrese nombre completo" value="{{old(' ')}}" />
                    @error('')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  </br>
                  <div class="form-group">
                    <label class="form-label">Correo Electrónico:</label>
                    <input type="email" name="EMAIL" id="EMAIL" maxlength="40" class="form-control" placeholder="Ejemplo@gmail.com" onkeyup="DobleEspacio(this, event);" value="{{old(' ')}}" />
                    @error('')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label">Contraseña:</label>
                    <input type="password" name="password" id="password" maxlength="40" class="form-control" placeholder="Ingrese Contraseña" value="{{old(' ')}}" />
                    @error('')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  </br>
                  <div class="form-group">
                    <label class="form-label">Rol:</label>
                    <select name="cars" class="form-control" name="Rol" id="Rol">
                      <option value="Administrador">Administrador</option>
                      <option value="Cliente">Cliente</option>
                      <option value="Empleado">Empleado</option>



                    </select>
                    @error('')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                </div>
              </div>
              </br>

              <input type="Hidden" class="form-control" name="ETO_USUARIO" id="ETO_USUARIO" value="1" readonly />
              <button type="submit" title="Registrar Usuario" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path>
                </svg>
                Registrar</button>
              </form>
            </div>
          </div>
        </div>
        @stop