@extends('adminlte::page')

@section('title', 'Tickets')

@section('content_header')
<h1>Area de Ticket Empleado</h1>
@stop

@section('css')
<style>
    * {
        box-sizing: border-box;
    }

    #myInput {
        background-image: url('searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 40%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 2px solid #ccc;
        border-radius: 4px;
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
    table {
        border-spacing: 10;
        width: 100%;
        border: 1px solid rgb(24, 118, 153);
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


@endsection

@section('content')


<!-- Main content -->
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm">


            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar Producto..." title="Buscar">

            <table id="myTable">


                <tr class="header">
                    <th onclick="sortTable(0)">CÓDIGO</th>
                    <th onclick="sortTable(1)">NOMBRE</th>
                    <th onclick="sortTable(2)">EMPRESA</th>
                    <th onclick="sortTable(3)">FECHA</th>
                    <th onclick="sortTable(4)">TIPO</th>
                    <th onclick="sortTable(5)">CATEGORÍA</th>
                    <th onclick="sortTable(5)">DESCRIPCIÓN</th>
                    <th></th>

                </tr>


                <tr>
                    <th scope="row">10235</th>
                    <td>Jose</td>
                    <td>anonimo</td>
                    <td>02-05-2022</td>
                    <td>sistema</td>
                    <td>Incidente</td>
                    <td>no inicia sistema</td>


                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#compraModal">
                                Proceso
                            </button>
                            <button type="button" class="btn btn-danger">Finalizado</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">95035</th>
                    <td>Carlos</td>
                    <td>anonimo</td>
                    <td>02-05-2022</td>
                    <td>Hadware</td>
                    <td>Solicitud</td>
                    <td>teclado y mouse</td>

                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#compraModal">
                                    Proceso
                                </button>
                                <button type="button" class="btn btn-danger">Finalizado</button>
                            </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">13820</th>
                    <td>maria</td>
                    <td>jos</td>
                    <td>02-05-2022</td>
                    <td>sistema</td>
                    <td>Incidente</td>
                    <td>usuario</td>

                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#compraModal">
                                Proceso
                            </button>
                            <button type="button" class="btn btn-danger">Finalizado</button>
                        </div>
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


</div>



<!-- Modal -->
<div class="modal fade" id="compraModal" tabindex="-1" role="dialog" aria-labelledby="compraModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="compraModalLabel">EDITAR </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Formulario del Modal-->
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"></span>
                    <input type="text" class="form-control" placeholder="Nombre " aria-label="Username" aria-describedby="basic-addon1">
                </div>


                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"></span>
                    <input type="text" class="form-control" placeholder="Empresa " aria-label="Username" aria-describedby="basic-addon1">
                </div>








                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder=" ">
                </div>









            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
            <!--Fin del Modal-->
        </div>
    </div>
</div>




<!-- ----------------------------------fin tablas ---------------------------- -->


<!-- /.content -->
</div>
<!-- /.content-wrapper -->



</div>
<!-- ./wrapper -->










@endsection