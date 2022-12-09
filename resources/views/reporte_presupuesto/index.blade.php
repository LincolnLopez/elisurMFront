<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Reporte Presupuesto</title>

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
        <h3>REPORTE GENERAL PRESUPUESTOS</h3>
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

            <caption>Lista de Cotizaciones Realizadas</caption>
            <thead>
                <tr>
                    <th>Solicitud</th>
                    <th>Fecha</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Correo Electronico</th>
                    <th>Tipo Solicitante</th>
                    <th>Telefono Opcional</th>
                    <th>Dirección</th>
                    <th>Nombre Empresa</th>
                    <th>RTN/DNI</th>
                    <th>Ciudad</th>
                    <th>Servicio</th>
                    <th>Descripción</th>
                    <th>Estado</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                $consulta= 
                 "SELECT s.COD_SOLICITUD, s.FECHA_SOLICITUD, s.NOMBRE, S.APELLIDO, s.TELEFONO, s.CORREO_ELECTRONICO, s.TIPO_SOLICITANTE, 
                  s.TELEFONO_OPCIONAL, s.DIRECCION_SOLICITANTE,S.NOMBRE_E_C, S.RTN_DNI   , s.CIUDAD, ss.nombre_servicio, s.DESCRIPCION_SOLICITUD,
                  e.nombre_estado FROM tbl_solicitudes s
                 INNER JOIN tbl_servicios ss on ss.cod_servicio = s.COD_SERVICIO
                 INNER JOIN tbl_estados e on e.cod_estado = s.COD_ESTADO";
                 $conexion = mysqli_connect("localhost","root","","elisur");
                 $resultado=mysqli_query($conexion,$consulta);
                 while($llamar=mysqli_fetch_assoc($resultado)){ ?>

                <tr>
                    <td><?php echo "$llamar[COD_SOLICITUD]"; ?></td>
                    <td><?php echo "$llamar[FECHA_SOLICITUD]"; ?></td>
                    <td><?php echo "$llamar[NOMBRE]"; ?></td>
                    <td><?php echo "$llamar[APELLIDO]"; ?></td>
                    <td><?php echo "$llamar[TELEFONO]"; ?></td>
                    <td><?php echo "$llamar[CORREO_ELECTRONICO]"; ?></td>
                    <td><?php echo "$llamar[TIPO_SOLICITANTE]"; ?></td>
                    <td><?php echo "$llamar[TELEFONO_OPCIONAL]"; ?></td>
                    <td><?php echo "$llamar[DIRECCION_SOLICITANTE]"; ?></td>
                    <td><?php echo "$llamar[NOMBRE_E_C]"; ?></td>
                    <td><?php echo "$llamar[RTN_DNI]"; ?></td>
                    <td><?php echo "$llamar[CIUDAD]"; ?></td>
                    <td><?php echo "$llamar[nombre_servicio]"; ?></td>
                    <td><?php echo "$llamar[DESCRIPCION_SOLICITUD]"; ?></td>
                    <td><?php echo "$llamar[nombre_estado]"; ?></td>
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
