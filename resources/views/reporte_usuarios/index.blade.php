<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Reporte de usuarios Elisur</title>

    <style>
        table,
        th,
        td {
            border: 1px solid rgb(160, 160, 160);
            /*border-collapse: collapse;*/
        }

        table.center {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <style>
        .page-break {
            page-break-after: always;
        }
    </style>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0.5cm;
            left: 0cm;
            right: 0.5cm;
            height: 4cm;
            background-color: #ffffff;
            color: rgb(32, 28, 28);
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 1.5cm;
            background-color: #f4f1f1;
            color: rgb(15, 14, 14);
            text-align: center;
            line-height: 35px;
        }

        thead {
            background-color: #6ec3d2;
        }
    </style>

</head>

<body>
    <header>
        <H4></H4>
        <div style="align: center">
            <IMG SRC="vendor/adminlte/dist/img/logo.jpeg" style="float: right" width="15%" height="120">
            <h3>REPORTE GENERAL USUARIOS</h3>
            <h1>
                MULTISERVICIOS ELISUR
            </h1>
        </div>


    </header>

    <div class="container-sm">
        <div class="text-center">
            <h1>
                <b>.</b>
            </h1>
        </div>
        <table class="table table-striped ">

            <caption>Lista de Usuarios</caption>
          
            <thead style="background-color:#3f8cad">
                <th style="color:#fff;">ID</th>
                <th style="color:#fff;">Nombre</th>
                <th style="color:#fff;">E-mail</th>
                <th style="color:#fff;">Fecha Creación</th>
                <th style="color:#fff;">Fecha Modificación</th>
            </thead>
            <tbody>
                <?php 
                $consulta= "SELECT ID, NAME, EMAIL, CREATED_AT, UPDATED_AT FROM users;";
                 $conexion = mysqli_connect("localhost","root","","elisur");
                 $resultado=mysqli_query($conexion,$consulta);
                 while($llamar=mysqli_fetch_assoc($resultado)){ ?>

                <tr>
                    <td><?php echo "$llamar[ID]"; ?></td>
                    <td><?php echo "$llamar[NAME]"; ?></td>
                    <td><?php echo "$llamar[EMAIL]"; ?></td>                
                    <td><?php echo "$llamar[CREATED_AT]"; ?></td>
                    <td><?php echo "$llamar[UPDATED_AT]"; ?></td>
                   
                </tr>
                <?php } ?>


            </tbody>



        </table>


    </div>


    <script type="text/php" >
        if ( isset($pdf) ) {
            $pdf->page_script('
                $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                $pdf->text(1500, 1100, "Página $PAGE_NUM de $PAGE_COUNT", $font, 20);
            ');
        }
    </script>
    <footer>
        <h1>elisur.hn</h1>
    </footer>

</body>

</html>
