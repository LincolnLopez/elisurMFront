@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
<h1>Inventario de Herramientas</h1>
@stop

@section('css')
<style>
    * {
        box-sizing: border-box;
    }

    #myInput {
        background-image: url('/css/searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 40%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
    }

    #myTable {

        width: 100%;
        border: 1px solid rgb(109, 109, 109);
        font-size: 16px;
    }

    #myTable th,
    #myTable td {
        text-align: left;
        padding: 12px;
    }

    #myTable tr {
        border-bottom: 1px solid #ddd;
    }

    #myTable tr.header,
    #myTable tr:hover {
        background-color: #76C1CB;
    }
</style>

<style>
    .btnInfo {
        background-color: #ddd;
        border: none;
        color: black;
        padding: 8px 15px;
        text-align: center;
        font-size: 16px;
        margin: 4px 2px;
        transition: 0.3s;
        border-radius: 5px;
    }

    .btnInfo:hover {
        background-color: #3e768e;
        color: rgb(252, 248, 248);
    }
</style>

<style>
    table {
        border-spacing: 0;
        width: 100%;
        border: 1px solid rgb(218, 218, 218);
    }

    th {
        cursor: pointer;
    }

    th,
    td {
        text-align: left;
        padding: 16px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }
</style>

<style>
    #myDIV {
        width: 100%;
        padding: 20px 0;
        text-align: center;
        background-color: rgb(245, 243, 243);
        margin-top: 20px;
    }
</style>

<!--Style del cuadro de entradas, salidas y movimientos-->
<style>
    body {
        font-family: Arial;
    }

    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid rgb(225, 225, 225);
        background-color: #d2afaf;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: rgb(228, 227, 227);
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
</style>

<style>
    /*Diseño para los números de paginación*/
    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
    }

    .pagination a.active {
        background-color: dodgerblue;
        color: white;
    }

    .pagination a:hover:not(.active) {
        background-color: #ddd;
    }
</style>

@endsection

@section('content')

<div class="d-grid gap-2 d-md-flex justify-content-md-end">

    <div class="btn-group">
        <a href="vendor/adminlte/dist/documentos/InventarioH.pdf" class="btn btn-outline-info" download="InventarioMP.pdf">PDF</a>
        <a href="vendor/adminlte/dist/documentos/InventarioH.xlsx" class="btn btn-outline-success" download="InventarioMP.xlsx">Excel</a>

        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#compraModal">
            Agregar Compra
        </button>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#nuevoModal">
            Nuevo Producto
        </button>
    </div>
</div>

<div class="container-fluid">
    <div class="row content">
        <div class="col">



            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar Producto..." title="Buscar">
        
           </br>
            <table id="AdministradorTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>COD_HERRAMIENTA</th>
                    <th>NOMBRE_HERRAMIENTA</th>
                    <th>DESCRIPCION_HERRAMIENTA</th>
                    <th>NUM_EXISTENCIA</th>
                    <th>FECHA_INGRESO</th>
                    <th>FECHA_MODIFICACION</th>
                    <th>NOMBRE_EMPLEADO</th>
                    <th>ESTADO</th>
                    
                  </tr>
               
                </thead>

            <tbody>
                @foreach($personas as $persona)
                <tr>
                    <td>{{$persona->COD_HERRAMIENTA}}</td>
                    <td>{{$persona->NOMBRE_HERRAMIENTA}}</td>
                    <td>{{$persona->DESCRIPCION_HERRAMIENTA}}</td>
                    <td>{{$persona->NUM_EXISTENCIA}}</td>
                    <td>{{$persona->FECHA_INGRESO}}</td>
                    <td>{{$persona->FECHA_MODIFICACION}}</td>
                    <td>{{$persona->NOMBRE_EMPLEADO}}</td>
                    <td>{{$persona->ESTADO}}</td>
                    <td>
                    <form  action="{{ route('inventarioH.destroy',$persona->COD_HERRAMIENTA) }}" method="POST">
                  <a href="/inventarioH/{{$persona->COD_HERRAMIENTA}}/edit" class="btn btn-info">Editar</a>         
                      @csrf
                      @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>          
                    </td>
                </tr>
                @endforeach
                </tbody>
              
               
            </table>

        </div>

            <a href="{{ route('inventarioH.create') }}" class="btn btn-success">Registrar</a>


            <script>
                function myFunction() {
                    var input, filter, table, tr, td, i, txtValue;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable");
                    tr = table.getElementsByTagName("tr");
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[1];
                        if (td) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }

                    }
                }

                function sortTable(n) {
                    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
                    table = document.getElementById("myTable");
                    switching = true;
                    //Set the sorting direction to ascending:
                    dir = "asc";
                    /*Make a loop that will continue until
                    no switching has been done:*/
                    while (switching) {
                        //start by saying: no switching is done:
                        switching = false;
                        rows = table.rows;
                        /*Loop through all table rows (except the
                        first, which contains table headers):*/
                        for (i = 1; i < (rows.length - 1); i++) {
                            //start by saying there should be no switching:
                            shouldSwitch = false;
                            /*Get the two elements you want to compare,
                            one from current row and one from the next:*/
                            x = rows[i].getElementsByTagName("TD")[n];
                            y = rows[i + 1].getElementsByTagName("TD")[n];
                            /*check if the two rows should switch place,
                            based on the direction, asc or desc:*/
                            if (dir == "asc") {
                                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                                    //if so, mark as a switch and break the loop:
                                    shouldSwitch = true;
                                    break;
                                }
                            } else if (dir == "desc") {
                                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                                    //if so, mark as a switch and break the loop:
                                    shouldSwitch = true;
                                    break;
                                }
                            }
                        }
                        if (shouldSwitch) {
                            /*If a switch has been marked, make the switch
                            and mark that a switch has been done:*/
                            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                            switching = true;
                            //Each time a switch is done, increase this count by 1:
                            switchcount++;
                        } else {
                            /*If no switching has been done AND the direction is "asc",
                            set the direction to "desc" and run the while loop again.*/
                            if (switchcount == 0 && dir == "asc") {
                                dir = "desc";
                                switching = true;
                            }
                        }
                    }
                }

                function myFunctions() {
                    var x = document.getElementById("myDIV");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                    }
                }



                function openCity(evt, cityName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(cityName).style.display = "block";
                    evt.currentTarget.className += " active";
                }
            </script>
        </div>


    </div>


    <div class="pagination d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="#">&laquo;</a>
        <a class="active" href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
    </div>

</div>




<!-- Modal agregar compra -->
<div class="modal fade" id="compraModal" tabindex="-1" role="dialog" aria-labelledby="compraModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="compraModalLabel">Registro de Compra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Formulario del Modal-->
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Nombre de Usuario" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <!--Comando para fecha-->
                <!-- <div class="form-group">
           <div class="input-group date" id="reservationdate" data-target-input="nearest">
             <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
             <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
               <div class="input-group-text"><i class="fa fa-calendar"></i></div>
             </div>
           </div>
         </div> -->
                <!-- Date and time -->

                <label for="basic-url" class="form-label">Información de la Herramienta</label>


                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Código" aria-label="Username">
                    <span class="input-group-text">@</span>
                    <select class="form-control select2bs4 select2-hidden-accessible" style="width: 50%;" id="inputGroupSelect04" aria-label="Example select with button addon">
                        <option selected>Producto</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cantidad" aria-label="Username">
                    <span class="input-group-text">Lps.</span>
                    <input type="text" class="form-control" placeholder="Precio Compra" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>

                <label for="basic-url" class="form-label">Información Extra</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Proveedor" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group">
                    <span class="input-group-text">Detalles</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>

                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Subir</label>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Registrar</button>
            </div>

            <!--Fin del Modal-->
        </div>
    </div>
</div>


<!-- Modal Nuevo Producto -->
<div class="modal fade" id="nuevoModal" tabindex="-1" role="dialog" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoModalLabel">Nueva Herramienta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Nombre de Usuario" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <label for="basic-url" class="form-label">Información de la Herramienta</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Código" aria-label="Username">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Nombre Herramienta" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cantidad" aria-label="Username">
                    <span class="input-group-text">Lps.</span>
                    <input type="text" class="form-control" placeholder="Precio Compra" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>

                <label for="basic-url" class="form-label">Información Extra</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Proveedor" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group">
                    <span class="input-group-text">Detalles</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>

                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Subir</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Registrar</button>
            </div>
        </div>
    </div>
</div>


<!--Modal donde se encuentren los registros de entradas y salidas del inventario-->
<div class="modal fade" id="regishModal" tabindex="-1" role="dialog" aria-labelledby="regishModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="regishModalLabel">Registros de Entradas y Salidas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'Actividad')">Actividad</button>
                <button class="tablinks" onclick="openCity(event, 'Entradas')">Entradas</button>
                <button class="tablinks" onclick="openCity(event, 'Salida')">Salidas</button>
            </div>

            <div id="Actividad" class="tabcontent">
                <table class="table caption-top">
                    <thead>
                        <tr>
                            <th scope="col">Tipo</th>
                            <th scope="col">Cant.</th>
                            <th scope="col">Monto</th>
                            <th scope="col">Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Compra</td>
                            <td>2</td>
                            <td>3,630.00</td>
                            <td>17/04/2022</td>
                        </tr>
                        <tr>
                            <td>Dañado</td>
                            <td>1</td>
                            <td>---</td>
                            <td>15/04/2022</td>
                        </tr>
                        <tr>
                            <td>Compra</td>
                            <td>6</td>
                            <td>10,890.00</td>
                            <td>9/04/2022</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="Entradas" class="tabcontent">
                <table class="table caption-top">
                    <thead>
                        <tr>
                            <th scope="col">Tipo</th>
                            <th scope="col">Cant.</th>
                            <th scope="col">Monto</th>
                            <th scope="col">Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Compra</td>
                            <td>2</td>
                            <td>3,630.00</td>
                            <td>17/04/2022</td>
                        </tr>
                        <tr>
                            <td>Compra</td>
                            <td>6</td>
                            <td>10,890.00</td>
                            <td>9/04/2022</td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <div id="Salida" class="tabcontent">
                <table class="table caption-top">
                    <thead>
                        <tr>
                            <th scope="col">Tipo</th>
                            <th scope="col">Cant.</th>
                            <th scope="col">Problema</th>
                            <th scope="col">Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dañado</td>
                            <td>1</td>
                            <td>No enciende</td>
                            <td>15/04/2022</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>







@endsection