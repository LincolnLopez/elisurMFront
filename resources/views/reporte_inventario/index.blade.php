<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Reporte de Inventario de Materia Prima</title>

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
            height: 3cm;
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
        <h1> MULTISERVICIOS ELISUR </h1>
        <h3>Reporte General Inventario Materia Prima</h3>
        

    </header>

    <div class="container-sm">
        <div class="text-center">
            <h1>
                <b></b>
            </h1>
        </div>
        <table class="table table-striped ">

            <caption>Lista de Inventario Materia Prima</caption>
            <thead>
                <tr>
                    <th>Código Inventario</th>
                    <th>Código Articulo</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Fecha Ingreso</th>
                    <th>Fecha Modificación</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php 
                $consulta= "SELECT ti.COD_INVENTARIO, a.COD_ARTICULO, a.NOMBRE_ARTICULO, ti.CANTIDAD_ARTICULO, ti.FECHA_REGISTRO,
                ti.FECHA_MODIFICACION from tbl_inventarios as ti
                 join tbl_articulos as a on a.COD_ARTICULO = Ti.COD_ARTICULO";
                 $conexion = mysqli_connect("localhost","root","","elisur");
                 $resultado=mysqli_query($conexion,$consulta);
                 while($llamar=mysqli_fetch_assoc($resultado)){ ?>

                <tr>
                    <td><?php echo "$llamar[COD_INVENTARIO]"; ?></td>
                    <td><?php echo "$llamar[COD_ARTICULO]"; ?></td>
                    <td><?php echo "$llamar[NOMBRE_ARTICULO]"; ?></td>
                    <td><?php echo "$llamar[CANTIDAD_ARTICULO]"; ?></td>
                    <td><?php echo "$llamar[FECHA_REGISTRO]"; ?></td>
                    <td><?php echo "$llamar[FECHA_MODIFICACION]"; ?></td>
                 
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
