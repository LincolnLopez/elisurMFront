@extends('adminlte::page')

@section('title', 'Reportes Venta')


@section('content_header')
<h1>Reportes de Venta</h1>
@stop


@section('content')

<body >
  </br>
  <section class="content">
    <div class="row">
      <div class="col-md">
        
          <div class="card-body">
           
            
            <div class="row">
              <div class="col-12 col-sm-12">
                
                        </br>
                      
                        <table ALIGN="center" id="AdministradorTable" class="table table-striped table-bordered" cellspacing="0"  width="100%">
                          <thead>
                            <tr> 
                          
                              <td><div align="center"><strong>CODIGO REPORTE DE VENTA</strong></div></td>
                              <td><div align="center"><strong>CODIGO VENTA</strong></div></td>
                           
                              
                              </div>  
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($reporte_ventas as $reporte_ventas)
                            <tr>
                                <td><center>{{$reporte_ventas->COD_REPORTE_VENTA}}</center></td>
                                <td><center>{{$reporte_ventas->COD_VENTA}}</center></td>
                      
                            </tr>
                            @endforeach

                          </tbody>
                         
                         
                        </table>

                      </div>

                    </div>
                
                </div>
              
            </div>
          
        
      
    </div>


  </section>


</body>

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


@stop