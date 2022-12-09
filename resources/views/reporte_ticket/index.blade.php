<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Reporte Ticket Fallas</title>

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
            right: 0cm;
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
            background-color: #e9e9e9;
            color: rgb(15, 14, 14);
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>

<body>
    <header>
        <H4></H4>
        <h3>REPORTE GENERAL TICKET DE FALLAS</h3>
        <h1>
            MULTISERVICIOS ELISUR
        </h1>

    </header>

    <div class="container-sm">
        <div class="text-center">
            <h1>
                <b>.</b>
            </h1>
        </div>
        <table class="table table-striped ">

            <caption>Lista de Ticket de Fallas Reportadas</caption>
            <thead>
                <tr>
                    <th>Reporte Falla</th>
                    <th>Servicio</th>
                    <th>Nombre Cliente</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Tema</th>
                    <th>Descripción</th>
                    <th>Ubicación</th>
                    <th>Fecha apertura</th>
                    <th>Fecha en Proceso</th>
                    <th>Estado</th>
                    <th>Nombre Empleado</th>
                   

                </tr>
            </thead>
            <tbody>
                <?php 
                $consulta= 
                 "SELECT f.COD_REPORTE_FALLA, s.nombre_servicio, f.NOMBRE, f.TELEFONO,
                 f.CORREO_ELECTRONICO, f.TEMA, f.DESCRIPCION, f.UBICACION, f.FECHA_CREACION, f.FECHA_MODIFICACION,
                 f.cod_estado,nombre_empleado FROM tbl_reporte_fallas f
                 INNER JOIN tbl_servicios s on s.cod_servicio = f.COD_SERVICIO";

                 
                 $conexion = mysqli_connect("localhost","root","","elisur");
                 $resultado=mysqli_query($conexion,$consulta);
                 while($llamar=mysqli_fetch_assoc($resultado)){ ?>

                <tr>
                    <td><?php echo "$llamar[COD_REPORTE_FALLA]"; ?></td>
                    <td><?php echo "$llamar[nombre_servicio]"; ?></td>
                    <td><?php echo "$llamar[NOMBRE]"; ?></td>
                    <td><?php echo "$llamar[TELEFONO]"; ?></td>
                    <td><?php echo "$llamar[CORREO_ELECTRONICO]"; ?></td>
                    <td><?php echo "$llamar[TEMA]"; ?></td>
                    <td><?php echo "$llamar[DESCRIPCION]"; ?></td>
                    <td><?php echo "$llamar[UBICACION]"; ?></td>
                    <td><?php echo "$llamar[FECHA_CREACION]"; ?></td>
                    <td><?php echo "$llamar[FECHA_MODIFICACION]"; ?></td>
                    <td><?php echo "$llamar[cod_estado]"; ?></td>
                    <td><?php echo "$llamar[nombre_empleado]"; ?></td>
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
