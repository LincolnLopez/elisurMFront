@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
<h1>Inventario de Materia Prima</h1>
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

<style>
    body {
        font-family: Arial;
    }

    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid rgb(225, 225, 225);
        background-color: #76C1CB;
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
    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
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
<!------------------------------------------------------------------------------------------------------------------------------------------->

<!--INICIO DEL CODIGO-->

<!-- Content Wrapper. Contains page content -->

<div class="d-grid gap-2 d-md-flex justify-content-md-end">

    <div class="btn-group">
        <a href="vendor/adminlte/dist/documentos/InventarioMP.pdf" class="btn btn-outline-info" download="InventarioMP.pdf">PDF</a>
        <a href="vendor/adminlte/dist/documentos/InventarioMP.xlsx" class="btn btn-outline-success" download="InventarioMP.xlsx">Excel</a>

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

           
            <table id="AdministradorTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <th onclick="sortTable(0)">Código</th>
                    <th onclick="sortTable(1)">Producto</th>
                    <th onclick="sortTable(2)">Área</th>
                    <th onclick="sortTable(3)">Existencia</th>
                  <th>Sexo</th>
                  <th>direccion</th>
                  <th>Estado Civil</th>
                  <th>Fecha Nacimiento</th>
                  <th>Creado por</th>
                  <th>Fecha creacion</th>
                  <th>estado</th>
                </thead>
               


                  <tr>
                    <td class="inner-table"> </td>
                    <td class="inner-table"> </td>
                    <td class="inner-table"> </td>
                    <td class="inner-table"> </td>
                    <td class="inner-table"> </td>
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




            <table id="myTable">

                <tr class="header">
                    <th onclick="sortTable(0)">Código</th>
                    <th onclick="sortTable(1)">Producto</th>
                    <th onclick="sortTable(2)">Área</th>
                    <th onclick="sortTable(3)">Existencia</th>
                    <th scope="col">Estado</th>
                    <th>Más Información</th>

                </tr>
                
                <tr>
                    <td>15856</td>
                    <td>Cable THHN 10</td>
                    <td>Electricidad</td>
                    <td>0</td>
                    <td><button type="button" class="btn btn-danger btn-sm">Agotado</button></td>
                    <td>
                        <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i> </button>
                        <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
                        <button class="btnInfo" data-toggle="modal" data-target="#regisModal">Detalles</button>
                    </td>
                </tr>


            </table>


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









<!--Modal -->
<div class="modal fade" id="compraModal" tabindex="-1" role="dialog" aria-labelledby="compraModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="compraModalLabel">Registro de Compra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Formulario del Modal-->
            <div class="modal-body">
               
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


                <label for="basic-url" class="form-label">Información del Producto</label>

                <div class="input-group mb-3">
                    <select class="form-select form-select-lg mb-3" style="width: 75%;" id="inputGroupSelect04" placeholder="Área del Producto" aria-label="Example select with button addon">
                    <option selected>Seleccione Área del Producto</option>
                        <option value="1">Aire Acondicionado</option>
                        <option value="2">Linea Telefonica</option>
                        <option value="3">Sistema de Seguridad</option>
                        <option value="4">Electricidad</option>
                    </select>
                </div>

                <label for="country">Country</label>
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Código" aria-label="Username">
                    <span class="input-group-text">@</span>
                    <select class="form-select form-select-lg mb-3" style="width: 65%;" id="inputGroupSelect04" placeholder="Área del Producto" aria-label="Example select with button addon">
                    <option selected>Producto</option>
                        <option value="1">Camara exterior</option>
                        <option value="2">Linea Telefonica</option>
                        <option value="3">Sistema de Seguridad</option>
                        <option value="4">Electricidad</option>
                    </select>
                </div>

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
                    <input type="text" class="form-control" placeholder="Precio Venta" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>

                <div class="input-group">
                    <span class="input-group-text">Detalles</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>

                <label for="basic-url" class="form-label">Información Extra</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Proveedor" aria-label="Username" aria-describedby="basic-addon1">

                    <span class="input-group-text">Lps.</span>
                    <input type="text" class="form-control" placeholder="Precio Compra" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
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
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoModalLabel">Nuevo Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="basic-url" class="form-label">Información del Producto</label>
                <div class="input-group mb-3">
                    <select class="form-select form-select-lg mb-3" style="width: 75%;" id="inputGroupSelect04" placeholder="Área del Producto" aria-label="Example select with button addon">
                    <option selected>Asignar Área del Producto</option>
                        <option value="1">Aire Acondicionado</option>
                        <option value="2">Linea Telefonica</option>
                        <option value="3">Sistema de Seguridad</option>
                        <option value="4">Electricidad</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Código" aria-label="Username">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Nombre Producto" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cantidad" aria-label="Username">
                    <span class="input-group-text">Lps.</span>
                    <input type="text" class="form-control" placeholder="Precio Venta" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>

                <div class="input-group">
                    <span class="input-group-text">Detalles</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>

                <label for="basic-url" class="form-label">Información Extra</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Proveedor" aria-label="Username" aria-describedby="basic-addon1">

                    <span class="input-group-text">Lps.</span>
                    <input type="text" class="form-control" placeholder="Precio Compra" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
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
<div class="modal fade" id="regisModal" tabindex="-1" role="dialog" aria-labelledby="regisModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="regisModalLabel">Registros de Entradas y Salidas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'Actividad')">Actividad</button>
                <button class="tablinks" onclick="openCity(event, 'Entradas')">Entradas</button>
                <button class="tablinks" onclick="openCity(event, 'Salidas')">Salidas</button>
            </div>
            <div class="col-sm sidenav">
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
                                <td>400.00</td>
                                <td>17/04/2022</td>
                            </tr>
                            <tr>
                                <td>Venta</td>
                                <td>7</td>
                                <td>1300.00</td>
                                <td>15/04/2022</td>
                            </tr>
                            <tr>
                                <td>Compra</td>
                                <td>20</td>
                                <td>4500.00</td>
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
                                <td>400.00</td>
                                <td>17/04/2022</td>
                            </tr>
                            <tr>
                                <td>Compra</td>
                                <td>20</td>
                                <td>4500.00</td>
                                <td>9/04/2022</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div id="Salidas" class="tabcontent">
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
                                <td>Venta</td>
                                <td>7</td>
                                <td>1300.00</td>
                                <td>15/04/2022</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>



@endsection