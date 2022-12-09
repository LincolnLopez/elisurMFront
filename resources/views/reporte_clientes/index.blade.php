<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Reporte de Clientes Elisur</title>

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
        thead {
            background-color: #6ec3d2;
        }
    </style>

</head>

<body>
    <header>
        <H4></H4>
        <IMG SRC="vendor/adminlte/dist/img/logo.jpeg" style="float: right" width="15%" height="120">

        <div style="align: center">

            <h3>REPORTE GENERAL CLIENTES</h3>
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

            <caption>Lista de Clientes</caption>
            <thead>
                <tr>

                    <th>COD CLIENTE</th>
                    <th>DNI CLIENTE</th>
                    <th>NOMBRE</th>
                    <th>APELLIDOS</th>
                    <th>DIRECCION</th>
                    <th>RTN</th>
                    <th>TELEFONO</th>
                    <th>CORREO</th>
                    <th>FECHA REGISTRO</th>
                    <th>ESTADO CLIENTE</th>
                    <th>TIPO DE CLIENTE</th>


                </tr>
            </thead>
            <tbody>
                <?php 
                $consulta= "SELECT tc.COD_CLIENTE, tc.DNI_CLIENTE, tc.NOMBRE_CLIENTE,tc.APELLIDOS_CLIENTE,tc.DIRECCION_CLIENTE,
                tc.RTN_CLIENTE,tc.TELEFONO_CLIENTE,tc.CORREO_CLIENTE, tc.FECHA_REGISTRO,tc.ESTADO_CLIENTE,t.NOMBRE_TIPO_CLIENTE from tbl_clientes as tc
                 join tbl_tipos_clientes as T on T.cod_tipo_cliente = tc.cod_tipo_cliente";
                 $conexion = mysqli_connect("localhost","root","","elisur");
                 $resultado=mysqli_query($conexion,$consulta);
                 while($llamar=mysqli_fetch_assoc($resultado)){ ?>

                <tr>
                    <td><?php echo "$llamar[COD_CLIENTE]"; ?></td>
                    <td><?php echo "$llamar[DNI_CLIENTE]"; ?></td>
                    <td><?php echo "$llamar[NOMBRE_CLIENTE]"; ?></td>
                    <td><?php echo "$llamar[APELLIDOS_CLIENTE]"; ?></td>
                    <td><?php echo "$llamar[DIRECCION_CLIENTE]"; ?></td>
                    <td><?php echo "$llamar[RTN_CLIENTE]"; ?></td>
                    <td><?php echo "$llamar[TELEFONO_CLIENTE]"; ?></td>
                    <td><?php echo "$llamar[CORREO_CLIENTE]"; ?></td>
                    <td><?php echo "$llamar[FECHA_REGISTRO]"; ?></td>
                    <td><?php echo "$llamar[ESTADO_CLIENTE]"; ?></td>
                    <td><?php echo "$llamar[NOMBRE_TIPO_CLIENTE]"; ?></td>

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
