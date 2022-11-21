@extends('adminlte::page')

@section('title', 'Tickets')

@section('content_header')
<h1>Area de Ticket</h1>
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
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-12">

            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar Ticket..." title="Buscar"> <i class="fas fa-search"></i>

            <table id="myTable">
                <tr class="header">
                    <th onclick="sortTable(0)">Código</th>
                    <th onclick="sortTable(1)">Nombre</th>
                    <th onclick="sortTable(2)">Empresa</th>
                    <th onclick="sortTable(3)">Fecha</th>
                    <th onclick="sortTable(4)">Tipo</th>
                    <th onclick="sortTable(5)">Correo</th>
                    <th scope="col">telefono</th>
                    <th>Más Información</th>

                </tr>
                <tr>
                    <td>18946</td>
                    <td>Jose Alvarado</td>
                    <td>HSBC</td>
                    <td>17/08/2022</td>
                    <td>Sistema Seguridad</td>
                    <td>josealvarado@gmail.com</td>
                    <td>22351365</td>
                    <td>
                        <button type="button" class="btn btn-warning"><i class="fas fa-edit" data-toggle="modal" data-target="#asignarModal"></i> </button>
                        <button type="button" class="btn btn-info"><i class="fas fa-book" data-toggle="modal" data-target="#detalleModal"></i> </button>
                    </td>
                </tr>
                <tr>
                    <td>10665</td>
                    <td>Karen Zepeda</td>
                    <td>----------</td>
                    <td>15/09/2022</td>
                    <td>Aire Acondicionado</td>
                    <td>karenzeped@gmail.com</td>
                    <td>+50478201237</td>
                    <td>
                        <button type="button" class="btn btn-warning"><i class="fas fa-edit" data-toggle="modal" data-target="#asignarModal"></i> </button>
                        <button type="button" class="btn btn-info"><i class="fas fa-book" data-toggle="modal" data-target="#detalleModal"></i> </button>
                    </td>

                </tr>
                <tr>
                    <td>97034</td>
                    <td>Samira Castillo</td>
                    <td>Claro</td>
                    <td>5/10/2022</td>
                    <td>Camara Exterior</td>
                    <td>samiracas@gmail.com</td>
                    <td>22387132</td>
                    <td>
                        <button type="button" class="btn btn-warning"><i class="fas fa-edit" data-toggle="modal" data-target="#asignarModal"></i> </button>
                        <button type="button" class="btn btn-info"><i class="fas fa-book" data-toggle="modal" data-target="#detalleModal"></i> </button>
                    </td>
                </tr>
                <tr>
                    <td>13820</td>
                    <td>Daniel Fonseca</td>
                    <td>BAC</td>
                    <td>1/10/2022</td>
                    <td>Telefonía</td>
                    <td>danifonseca@gmail.com</td>
                    <td>22902453</td>
                    <td>
                        <button type="button" class="btn btn-warning"><i class="fas fa-edit" data-toggle="modal" data-target="#asignarModal"></i> </button>
                        <button type="button" class="btn btn-info"><i class="fas fa-book" data-toggle="modal" data-target="#detalleModal"></i> </button>
                    </td>
                </tr>
                <tr>
                    <td>17843</td>
                    <td>Fernando Rivera</td>
                    <td>----------</td>
                    <td>29/06/2022</td>
                    <td>Camara Exterior</td>
                    <td>riverafer@gmail.com</td>
                    <td>22839203</td>
                    <td>
                        <button type="button" class="btn btn-warning"><i class="fas fa-edit" data-toggle="modal" data-target="#asignarModal"></i> </button>
                        <button type="button" class="btn btn-info"><i class="fas fa-book" data-toggle="modal" data-target="#detalleModal"></i> </button>
                    </td>
                </tr>
                <tr>
                    <td>15856</td>
                    <td>Camila Vasquez</td>
                    <td>El Patio</td>
                    <td>4/06/2022</td>
                    <td>Aire Acondicionado</td>
                    <td>vasquezcamila@gmail.com</td>
                    <td>22389302</td>
                    <td>
                        <button type="button" class="btn btn-warning"><i class="fas fa-edit" data-toggle="modal" data-target="#asignarModal"></i> </button>
                        <button type="button" class="btn btn-info"><i class="fas fa-book" data-toggle="modal" data-target="#detalleModal"></i> </button>
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
            </script>
        </div>








    </div>





</div>


<!-- /.content -->


<!--Modal Detalles-->
<div class="modal fade" id="detalleModal" tabindex="-1" role="dialog" aria-labelledby="detalleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detalleModalLabel">+ Detalles</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Formulario del Modal-->
            <label for="basic-url" class="form-label">Descripción de la falla</label>
            <td>Tuve un problema, que me tira aire caliente despues de 5 minutos, y a los 10 min de encendido el aire acondicionado se apaga</td>
            <label for="basic-url" class="form-label">Información Extra</label>
            <h5>Ubicación</h5>
            <td>Blv Suyapa, frente al Hospital Escuela Universitario, contiguo a radio HN</td>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Aceptar</button>
            </div>
            <!--Fin del Modal-->
        </div>
    </div>
</div>

<!--Modal Asignar Empleado a Falla-->
<div class="modal fade" id="asignarModal" tabindex="-1" role="dialog" aria-labelledby="asignarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="asignarModalLabel">Asignar Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Formulario del Modal-->

            <div class="modal-body">



                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">AREA</th>
                            <th scope="col">ESTATUS</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Carlos</td>
                            <td>redes</td>
                            <td><button type="button" class="btn btn-success btn-sm">Disponible</button></td>
                            <td><button type="button" class="btn btn-primary btn-sm">APLICAR</button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Marcos</td>
                            <td>mantenimiento</td>
                            <td><button type="button" class="btn btn-danger btn-sm">No Disponible</button></td>
                            <td><button type="button" class="btn btn-primary btn-sm">APLICAR</button></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Marcos</td>
                            <td>redes</td>
                            <td><button type="button" class="btn btn-danger btn-sm">No Disponible</button></td>
                            <td><button type="button" class="btn btn-primary btn-sm">APLICAR</button></td>

                        </tr>
                    </tbody>
                </table>







                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Aceptar</button>
                </div>
                <!--Fin del Modal-->
            </div>
        </div>
    </div>



</div>


@endsection