<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Reporte Resultado Encuestas</title>

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
 
        .titulo {
            font-size: 20pt;
            font-family: "Times New Roman", Times, serif;
            font-weight: bold;
            text-align: center;
            margin-left: 14%;
        }

        .titulo2 {
            font-size: 13pt;
            font-family: "Times New Roman", Times, serif;
            font-weight: bold;
            text-align: left;
            color: rgb(32, 28, 28);
        }

       

        .titulo3 {
            font-size: 13pt;
            font-family: "Times New Roman", Times, serif;
            font-weight: bold;
            text-align: left;
            margin-left: 3.4%;
            color: rgb(32, 28, 28);
        }

        th {
            font-size: 14pt;
            font-family: "Times New Roman", Times, serif;
            font-weight: bold;
            text-align: center;
            background-color: #6ec3d2;
        }

        td {
            font-size: 12pt;
            font-family: "Times New Roman", Times, serif;
            text-align: center;
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
    <?php 
date_default_timezone_set('America/Tegucigalpa'); // establecer el huso horario a Honduras
$fecha_actual = date('d-m-Y H:i:s');
?>

<header>
    <H4></H4>
    <IMG SRC="vendor/adminlte/dist/img/logo.jpeg" style="float: right" width="15%" height="120">
        

    <div style="align: center">
        <h3 class="titulo">Reporte General Encuesta</h3>
        <h1 class="titulo">MULTISERVICIOS ELISUR</h1>
      <caption class="titulo3">  <p>Fecha: <?php echo $fecha_actual ?></p> </caption>
    </div>
    
</header>
<br>

<div class="container-sm">
    <div class="text-center">
        <h1>
            <b></b>
        </h1>
    </div>
    <table class="table table-striped center">
        <caption class="titulo2">Lista de Encuestas</caption>
            <thead>
                <tr>

                    <th>COD PREGUNTA</th>
                    <th>Pregunta 1</th>
                    <th>Pregunta 2</th>
                    <th>Pregunta 3</th>
                    <th>Pregunta 4</th>
                    <th>Pregunta 5</th>
                    <th>Pregunta 6</th>
                    <th>Pregunta 7</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php 
                $consulta= "SELECT cod_pregunta, P1,P2,P3,P4,P5,P6,P7 FROM tbl_encuesta";
                 $conexion = mysqli_connect("localhost","root","","elisur");
                 $resultado=mysqli_query($conexion,$consulta);
                 while($llamar=mysqli_fetch_assoc($resultado)){ ?>

                <tr>
                    <td><?php echo "$llamar[cod_pregunta]"; ?></td>
                    <td><?php echo "$llamar[P1]"; ?></td>
                    <td><?php echo "$llamar[P2]"; ?></td>
                    <td><?php echo "$llamar[P3]"; ?></td>
                    <td><?php echo "$llamar[P4]"; ?></td>
                    <td><?php echo "$llamar[P5]"; ?></td>
                    <td><?php echo "$llamar[P6]"; ?></td>
                    <td><?php echo "$llamar[P7]"; ?></td>   
            
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
