
@extends('adminlte::page')
@section('Elisur', 'INICIO')

@section('plugins.Sweetalert2',true)




@section('js')

<script>
Swal.fire(
  'Inicio Sesion Correctamente!',
  'Bienvenido a Multiservicios Elisur',
  'success'
)

</script>
@stop


@section('content')

<div class="image-container">
  <div class="text">ELISUR</div>
</div>

<div>
  <h1>  </h1>
</div>

<div class="row">
  <div class="column">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3>11+</h3>
      <p>Clientes Nuevos</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-check"></i></p>
      <h3>55+</h3>
      <p>Proyectos</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-grin-beam"></i></p>
      <h3>100+</h3>
      <p>Clientes Contentos</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-coffee"></i></p>
      <h3>100+</h3>
      <p>Vistas</p>
    </div>
  </div>
</div>




@stop

@section('css')
<style>
  * {
    box-sizing: border-box;
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  /* Float four columns side by side */
  .column {
    float: left;
    width: 25%;
    padding: 0 5px;
  }

  .row {
    margin: 0 -5px;
  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Responsive columns */
  @media screen and (max-width: 600px) {
    .column {
      width: 100%;
      display: block;
      margin-bottom: 10px;
    }
  }

  /* Style the counter cards */
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 12px;
    text-align: center;
    background-color: #3088A4;
    color: white;
  }

  .fa {
    font-size: 50px;
  }
</style>

<style>
  .checked {
    color: orange;
  }
</style>

<style>
  body {font-family: Arial, Helvetica, sans-serif;}
  
  .image-container {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://media.istockphoto.com/photos/collage-of-construction-tools-house-renovation-background-picture-id915165442?s=612x612");
    background-size: cover;
    position: relative;
    height: 400px;
  }
  
  .text {
    background-color: white;
    color: black;
    font-size: 10vw; 
    font-weight: bold;
    margin: 0 auto;
    padding: -30px;
    width: 50%;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    mix-blend-mode: screen;
  }
  </style>

@stop

