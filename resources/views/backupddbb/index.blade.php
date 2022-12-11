

@extends('adminlte::page')

@section('title', 'Copia de seguridad')

@section('css')


@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"> 







   <script>
$(document).ready(function() { 
    $('#backup').DataTable({ 
        "order": [[0, "desc"]],
  responsive: true,
  autoWidth: true,
  pageLength : 5,
  lengthMenu: [[5], [5]],
  language: {
            url: 'https://cdn.datatables.net/plug-ins/1.11.4/i18n/es_es.json'
        },
        
    });
}); 
</script>

   @stop




   

@section('content')
@if(isset ($_GET['msj']) && $_GET['msj']==1)

<x-adminlte-alert theme="success" title="Creada" dismissable>
Copia de seguridad realizada con éxito
</x-adminlte-alert>
@else
@if(isset ($_GET['msj']) && $_GET['msj']==2)
<x-adminlte-alert theme="danger" title="Error" dismissable>
Ocurrio un error inesperado al crear la copia de seguridad
</x-adminlte-alert>
@else
@if(isset ($_GET['msj']) && $_GET['msj']==3)
<x-adminlte-alert theme="danger" title="Error" dismissable>
Ocurrio un error inesperado
</x-adminlte-alert>
@else
@if(isset ($_GET['msj']) && $_GET['msj']==4)
<x-adminlte-alert theme="success" title="Restaurado" dismissable>
Restauración completada con éxito
</x-adminlte-alert>
@else
@if(isset ($_GET['msj']) && $_GET['msj']==5)
<x-adminlte-alert theme="danger" title="Error" dismissable>
Ocurrio un error inesperado, no se pudo hacer la restauración completamente
</x-adminlte-alert>
@else
@if(isset ($_GET['msj']) && $_GET['msj']==6)
<x-adminlte-alert theme="success" title="Eliminado" dismissable>
Se ha elimando correctamente
</x-adminlte-alert>
@else
@if(isset ($_GET['msj']) && $_GET['msj']==7)
<x-adminlte-alert theme="danger" title="Error" dismissable>
No se puedo eliminar
</x-adminlte-alert>
@endif
@endif
@endif
@endif
@endif
@endif
@endif

<br>

      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
                 <h3> <i class="fas fa-user-plus fa-1.4x">
                 </i> Crear copia de seguridad</h3>
                 </div>
{{-- inicio del formulario de actualizar de pacientes --}}


<div class="card-body">

	
	<button onclick="window.location='./Backup.php'" class="btn btn-info" title="Crear copia de la base de datos">
		Realizar copia de seguridad
		<i class="fas fa-database"></i>
		</button>
	

<br><br>
	
		<label>Selecciona un punto de restauración</label><br>
		<table id="backup" class="table table-striped table-bordered" style="width:100%">
		<thead>
            <tr>
                <th>Fecha</th>
                <th>Acciones</th>               
            </tr>
        </thead>
		<tbody>

		<?php
				include_once './Connet.php';
				$ruta=BACKUP_PATH;
				if(is_dir($ruta)){
				    if($aux=opendir($ruta)){
				        while(($archivo = readdir($aux)) !== false){
				            if($archivo!="."&&$archivo!=".."){
				                $nombrearchivo=str_replace(".sql", "", $archivo);
				                $nombrearchivo=str_replace("-", ":", $nombrearchivo);
				                $ruta_completa=$ruta.$archivo;
						
				                if(is_dir($ruta_completa)){
				                }else{
								echo '<tr>';
									echo '<td><label>'.$nombrearchivo.'<label></td>';
				                 echo '<td><a class=></></a>';
									echo '&nbsp;&nbsp;<a class="btn btn-danger" href="./eliminar_backup.php?id='.$ruta_completa.'"><i class="fas fa-times"></i></a>';
									echo '</td>';
									echo '</td>';

									}
				            }
				        }
				        closedir($aux);
				    }
				}else{
				    echo $ruta." No es ruta válida";
				}
			?>


		</tbody>

</table>
	

	</div>
	</div>
	</div>
	</div>

@stop
