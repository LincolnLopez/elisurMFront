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

            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar Ticket..." title="Buscar"> 

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
                    <a href="{{ route('ticket.create') }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
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
@endsection



                   