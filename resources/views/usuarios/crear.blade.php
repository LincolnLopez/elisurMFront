@extends('adminlte::page')

@section('title', 'Crear Usuarios')


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
              </i>Creación de Usuarios</h3>
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

                        {!! Form::open(array('route' => 'usuarios.store','method'=>'POST')) !!}
                        
                               

                                    <div class="mb-3">
                                      <label for="" class="form-label">Nombre de Usuario</label>
                            
                                      <input id="name" type="text" name="name" class="form-control" onpaste="onPaste(event)" placeholder="Nombre de Usuario" aria-label="primer nombre" onkeyup="mayus(this);" minlength="3" maxlength="20" onkeypress="return soloLetras(event);"  required onblur="quitarespacios(this);" onkeydown="sinespacio(this);" required="">
                                  </div>  


                            <div class="mb-3">
                              <label for="" class="form-label">Correo Electronico</label>
                              <input  pattern=".{6,}" id="email" type="email" name="email" onpaste="onPaste(event)"  class="form-control" tabindex="1" required onblur="quitarespacios(this);" onkeydown="sinespacio(this);" required="">
                          </div>  


                            




                          <div class="col">
                            <div class="input-group mb-4" id="grupo__clave_nueva">
                                <span  class="input-group-text" id="password"><i class="fas fa-lock"></i></span> 
                                <input type="password" class="form-control" placeholder="Ingresa tu contrase&ntilde;a: Debe tener mayusculas,minisculas y caracteres especiales"  id="password" name="password" required onblur="quitarespacios(this);"  onkeyup="sinespacio(this);" required="" minlength="8" maxlength="" required="">
                                
                            </div>
                            </div>
          
                            <div class="col">
                            <div class="input-group mb-4" id="grupo__confirmar_clave">
                                <span    class="input-group-text" id="confirm-password"><i class="fas fa-lock"></i></span> 
                                <input name = "confirm-password" type="password" class="form-control" placeholder="Confirma tu contrase&ntilde;a: La contraseña tiene que coincidir con la contraseña anterior"  id="confirm-password" name="confirm-password" required onblur="quitarespacios(this);"  onkeyup="sinespacio(this);" required="" minlength="8" maxlength="" required="">
                            </div>

















                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Roles</label>
                                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
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
    
    <script>
      function mayus(e) {
          e.value = e.value.toUpperCase();
      }
      
      </script>
      
      <script>
      
      function aMayusculas(obj,id){
          obj = obj.toUpperCase();
          document.getElementById(id).value = obj;
      }
      </script>


      
    
    
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


<script> 
  function soloLetras(e){
   key = e.keyCode || e.which;
   tecla = String.fromCharCode(key).toLowerCase();
   letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
   especiales = ["8-37-39-46"];

   tecla_especial = false
   for(var i in especiales){
    if(key == especiales[i]){
      tecla_especial = true;
      break;
    }
  }

  if(letras.indexOf(tecla)==-1 && !tecla_especial){
    return false;
  }
}
</script>

<script type="text/javascript">
function mayus(e) {
e.value = e.value.toUpperCase();
}
</script>

<script type="text/javascript">

function sinespacio(e) {

var cadena =  e.value;
var limpia = "";
var parts = cadena.split(" ");
var length = parts.length;

for (var i = 0; i < length; i++) {
nuevacadena = parts[i];
subcadena = nuevacadena.trim();

if(subcadena != "") {
  limpia += subcadena + " ";
}
}
limpia = limpia.trim();
e.value = limpia;

};
</script>

<script type="text/javascript">
function quitarespacios(e) {

var cadena =  e.value;
cadena = cadena.trim();

e.value = cadena;

};
</script>

<script type="text/javascript"> function solonumero(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;
    else if (tecla==0||tecla==9)  return true;
   // patron =/[0-9\s]/;// -> solo letras
    patron =/[0-9\s]/;// -> solo numeros
    te = String.fromCharCode(tecla);
    return patron.test(te);
}
</script>

<script>
  function onPaste(event) {
console.log('Paste!! ', event);
event.preventDefault();
event.stopPropagation();
}
</script>
    
    @stop