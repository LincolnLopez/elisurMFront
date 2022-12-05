<!DOCTYPE html>
<html lang="en">

<head>
    <title>Elisur</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: "Lato", sans-serif
        }

        .mySlides {
            display: none
        }
    </style>

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .hero-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("vendor/adminlte/dist/img/collage.jpeg");
            height: 80%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .hero-text button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 10px 25px;
            color: black;
            background-color: #ddd;
            text-align: center;
            cursor: pointer;
        }

        .hero-text button:hover {
            background-color: #555;
            color: white;
        }
    </style>

    <style>
        /* Style the tab content */
        .city {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
    </style>

</head>

<body>

    <!-- Navbar -->


    <div class="w3-top">
        @if (Route::has('login'))
            <div class="w3-bar w3-black w3-card">
                @auth
                    <a href="{{ url('/home') }}" class="w3-padding-large w3-hover-red w3-hide-small w3-right">Home</a>
                @else
                    <a href="{{ url('login') }}" class="w3-xlarge w3-right"><i class="fa fa-user">Inicia Sesion </i></a>
                @endauth
            </div>
        @endif
    </div>


    <!--Primera Imagen-->
    <div class="hero-image">
        <div class="hero-text">
            <h1 style="font-size:80px">Elisur</h1>
            <p>Servicios Múltiples</p>
        </div>
    </div>


    <!-- The Band Section -->
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
        <h2 class="w3-wide">Multiservicios Elisur</h2>
        <p class="w3-opacity"><i>Sobre Nosotros</i></p>
        <p class="w3-justify">Un equipo de profesionales con 10 años de experiencia en la dirección de algunas de las
            mayores compañías nacionales,
            dedicadas a la prestación de servicios para los edificios y las personas, como Atención al Público, Control
            de Accesos, Limpieza o
            Mantenimiento, así como en el área de Consultoría, decidimos ponernos al frente de este ilusionante proyecto
            al detectar un déficit de
            oferta de soluciones multiservicios profesionales y de calidad, orientadas a la Pequeña y Mediana Empresa
            (PYME), Administradores de
            Fincas y Comunidades de Propietarios.
            Ofrecemos nuestra capacidad de gestión, aplicando las mejoras tecnológicas de la gran empresa, junto al
            trato cercano, flexible y
            personalizado de las PYMES, y nuestra innata creatividad, para ofrecer servicios sostenibles, de calidad,
            que aporten valor y se
            ajusten a las necesidades de nuestros clientes.</p>

    </div>




    <!-- The Tour Section -->
    <div class="w3-black" id="tour">
        <div class="w3-container w3-content w3-padding-64" style="max-width:1000px">
            <h2 class="w3-wide w3-center">Nuestros Servicios</h2>
            <p class="w3-opacity w3-center"><i>Cotiza con nosotros</i></p><br>


            <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
                <div class="w3-quarter w3-margin-bottom">
                    <img src="https://www.tecnoseguro.com/media/k2/items/cache/210438cfc59c1719a9deba5dc66d5c69_XL.jpg"
                        alt="Camaras" width="100%" height="130" class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>Sistema de Seguridad</b></p>
                        <p>Elisur ofrece instalación de cámaras de seguridad.</p>
                        <button class="w3-button w3-black w3-margin-bottom"
                            onclick="document.getElementById('ticketModal').style.display='block'">Cotizar</button>
                    </div>
                </div>
                <div class="w3-quarter w3-margin-bottom">
                    <img src="https://morse-ti.net/wp-content/uploads/2019/11/morse-ti-monitoreo-img-01.jpg"
                        alt="CCTV" width="100%" height="130" class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>Monitoreo CCTV</b></p>
                        <p>Monitoreo de las cámaras de vigilancia 24/7.</p>
                        <button class="w3-button w3-black w3-margin-bottom"
                            onclick="document.getElementById('ticketModal').style.display='block'">Cotizar</button>
                    </div>
                </div>
                <div class="w3-quarter w3-margin-bottom">
                    <img src="https://fge.pe/wp-content/uploads/2020/07/servicios-de-construcci%C3%B3n-y-mantenimiento-en-lima-peru.jpg"
                        alt="Construccion" width="100%" height="130" style="width:100%" class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>Construcción</b></p>
                        <p>Realizamos trabajo de construcción y remodelación</p>
                        <button class="w3-button w3-black w3-margin-bottom"
                            onclick="document.getElementById('ticketModal').style.display='block'">Cotizar</button>
                    </div>
                </div>
                <div class="w3-quarter w3-margin-bottom">
                    <img src="https://distribuidoramariscal.com.gt/wp-content/uploads/2021/06/tablayeso-f.jpg"
                        alt="tablayeso" width="100%" height="130" class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>Tabla Yeso</b></p>
                        <p>Rediseña tu espacio de trabajo.</p>
                        <button class="w3-button w3-black w3-margin-bottom"
                            onclick="document.getElementById('ticketModal').style.display='block'">Cotizar</button>
                    </div>
                </div>
            </div>

            <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
                <div class="w3-quarter w3-margin-bottom">
                    <img src="https://homesolution.net/blog/wp-content/uploads/2019/02/carga-de-gas-para-split-aire-acondicionado-D_NQ_NP_916847-MLA26619046313_012018-F.jpeg"
                        alt="aire" width="100%" height="130" class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>Aire Acondicionado</b></p>
                        <p>Acondiciona tu espacio con productos de calidad.</p>
                        <button class="w3-button w3-black w3-margin-bottom"
                            onclick="document.getElementById('ticketModal').style.display='block'">Cotizar</button>
                    </div>
                </div>
                <div class="w3-quarter w3-margin-bottom">
                    <img src="https://www.asep.gob.pa/wp-content/uploads/2018/03/01-2-3300x2100_ELEC.jpg"
                        alt="electricidad" width="100%" height="130" class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>Electricidad</b></p>
                        <p>Mantenimiento Electrico y Diagnostico de falla.</p>
                        <button class="w3-button w3-black w3-margin-bottom"
                            onclick="document.getElementById('ticketModal').style.display='block'">Cotizar</button>
                    </div>
                </div>
                <div class="w3-quarter w3-margin-bottom">
                    <img src="https://www.reformadisimo.es/wp-content/uploads/2019/11/pintar-las-paredes-de-casa.jpg"
                        alt="pintura" width="100%" height="130" class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>Pintura</b></p>
                        <p>Nueva imagen a tu espacio con los mejores acabados.</p>
                        <button class="w3-button w3-black w3-margin-bottom"
                            onclick="document.getElementById('ticketModal').style.display='block'">Cotizar</button>
                    </div>
                </div>
                <div class="w3-quarter w3-margin-bottom">
                    <img src="https://www.fastnetworkhn.com/wp-content/uploads/PLANTA-TELEFONICA-IP-GRANDSTREAM-UCM6204.jpg"
                        alt="pintura" width="100%" height="130" class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>Planta Telefonica</b></p>
                        <p>La central telefónica que tu empresa necesita.</p>
                        <button class="w3-button w3-black w3-margin-bottom"
                            onclick="document.getElementById('ticketModal').style.display='block'">Cotizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ticket Modal -->
    <div id="ticketModal" class="w3-modal">
        <div class="w3-modal-content w3-animate-top w3-card-4">
            <header class="w3-container w3-center w3-padding-5">
                <span onclick="document.getElementById('ticketModal').style.display='none'"
                    class="w3-button w3-xlarge w3-display-topright">×</span>
                <h2 class="w3-wide"><i class="fa fa-dollar w3-margin-right"></i>COTIZACIÓN</h2>
            </header>
            <div class="w3-container">

                <form action="/cotizacion" name="form" method="POST" onsubmit="return validar();"
                    autocomplete="off" class="was-validated">
                    @csrf
                    <div class="w3-container">
                        <h2>MULTISERVICIOS ELISUR</h2>
                    </div>

                    <script>
                        function soloLetras(e) {
                            key = e.keyCode || e.which;
                            tecla = String.fromCharCode(key).toLowerCase();
                            letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
                            especiales = "8-37-39-46";

                            tecla_especial = false
                            for (var i in especiales) {
                                if (key == especiales[i]) {
                                    tecla_especial = true;
                                    break;
                                }
                            }

                            if (letras.indexOf(tecla) == -1 && !tecla_especial) {
                                return false;
                            }
                        }
                    </script>


                    <div class="w3-row-padding w3-padding-16" style="margin:0 -16px">
                        <div class="w3-half">
                            <label>Nombres</label>
                            <input id="NOMBRE" name="NOMBRE" type="text" class="w3-input w3-border"
                                tabindex="1" placeholder="Ingrese sus nombres" maxlength="20" name="txt_nom"
                                onkeyup="return unspaces()" onkeypress="return soloLetras(event)" autofocus required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <div class="w3-half">
                            <label>Apellidos</label>
                            <input id="APELLIDO" name="APELLIDO" type="text" class="w3-input w3-border"
                                type="text" placeholder="Ingrese sus Apellidos" maxlength="20"
                                onkeypress="return soloLetras(event)" autofocus required>
                        </div>
                    </div>

                    <div class="w3-row-padding w3-padding-16" style="margin:0 -16px">
                        <div class="w3-half">
                            <label>Telefono</label>
                            <input id="TELEFONO" name="TELEFONO" type="number" class="w3-input w3-border"
                                type="text" placeholder="9999-9999" minlength="8" maxlength="13" autocomplete="off" autofocus="on" onkeypress="return isNumberKey(event)" autofocus required="" pattern="[0-9]+">
                        </div>
                        <div class="w3-half">
                            <label>Telefono Opcional</label>
                            <input id="TELEFONO_OPCIONAL" name="TELEFONO_OPCIONAL" class="w3-input w3-border"
                                type="number" placeholder="9999-9999" minlength="8" maxlength="13" autocomplete="off" autofocus="on" onkeypress="return isNumberKey(event)" autofocus required="" pattern="[0-9]+">
                        </div>
                    </div>

                    <div class="w3-row-padding w3-padding-16" style="margin:0 -16px">
                        <div class="w3-half">
                            <label>Correo Electrónico</label>
                            <input id="CORREO_ELECTRONICO" name="CORREO_ELECTRONICO" type="text"
                                class="w3-input w3-border" type="email" placeholder="trf@gmail.com" required>

                        </div>
                        <div class="w3-half">
                            <label>Tipo Solicitante</label>
                            <select class="w3-select" id="TIPO_SOLICITANTE" name="TIPO_SOLICITANTE" required>
                                <option value="" disabled selected>Seleccione el tipo:</option>
                                <option value="1">EMPRESA</option>
                                <option value="2">CASA</option>
                            </select>
                        </div>
                    </div>

                    <div class="w3-row-padding w3-padding-16" style="margin:0 -16px">
                        <div class="w3-half">
                            <label>Número de identidad</label>
                            <input id="RTN_DNI" name="RTN_DNI" type="number" class="w3-input w3-border"
                                placeholder="RTN en caso de ser Empresa - Sin guiones" minlength="9" maxlength="14" autocomplete="off" autofocus="on" autofocus required>
                        </div>
                        <div class="w3-half">
                            <label>Nombre Empresa/Colonia</label>
                            <input id="NOMBRE_E_C" name="NOMBRE_E_C" type="text" class="w3-input w3-border"
                                placeholder="Ingrese Nombre" required>
                        </div>
                    </div>

                    <div class="w3-row-padding w3-padding-16" style="margin:0 -16px">
                        <div class="w3-half">
                            <label>Ciudad</label>
                            <select class="w3-select" id="CIUDAD" name="CIUDAD" required>
                                <option value="" disabled selected>Selecciona una Ciudad:</option>
                                <option value="Tegucigalpa">Tegucigalpa</option>
                                <option value="San Pedro Sula">San Pedro Sula</option>
                                <option value="Comayagua">Comayagua</option>
                            </select>
                        </div>
                        <div class="w3-half">
                            <label>Servicios</label>
                            <select class="w3-select" id="COD_SERVICIO" name="COD_SERVICIO" required>
                                <option value="" disabled selected>Selecciona nuestros servicios</option>
                                <option value="1">1.Aire Acondicionado</option>
                                <option value="2">2.Construcción</option>
                                <option value="3">3.Electricidad</option>
                                <option value="4">4.Monitoreo CCTV</option>
                                <option value="5">5.Pintura</option>
                                <option value="6">6.Planta Telefonica</option>
                                <option value="7">7.Sistema de Seguridad</option>
                                <option value="8">8.Tabla Yeso</option>
                            </select>
                        </div>
                    </div>


                    <div class="w3-row-padding w3-padding-16" style="margin:0 -16px">
                        <label>Dirección</label>
                        <input id="DIRECCION_SOLICITANTE" name="DIRECCION_SOLICITANTE" type="text"
                            class="w3-input w3-border" placeholder="Colonia, #Casa, etc." required>
                    </div>
                    <div class="w3-row-padding w3-padding-16" style="margin:0 -16px">

                        <label>Descripción de la Solicitud</label>
                        <input id="DESCRIPCION_SOLICITUD" name="DESCRIPCION_SOLICITUD" type="text"
                            class="w3-input w3-border" placeholder="Ingrese una descripción detallada de la solicitud"
                            required>
                    </div>

                    <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">Enviar<i
                            class="fa fa-check"></i></button>
                    <p class="w3-right">Necesitas <a href="#" class="w3-text-blue">Ayuda?</a></p>

                </form>

            </div>
        </div>
    </div>







    <!-- The Contact Section -->
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
        <h2 class="w3-wide w3-center">CONTACTO</h2>
        <div class="w3-row w3-padding-32">
            <div class="w3-col m6 w3-large w3-margin-bottom">
                <i class="fa fa-map-marker" style="width:30px"></i> Tegucigalpa, HN<br>
                <i class="fa fa-phone" style="width:30px"></i> Telefono: +22351515<br>
                <i class="fa fa-envelope" style="width:30px"> </i> Correo: elisur@gmail.com<br>
            </div>

        </div>
    </div>

    <!-- End Page Content -->
    </div>




    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-whatsapp w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </footer>

    <script>
        // When the user clicks anywhere outside of the modal, close it
        var modal = document.getElementById('ticketModal');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <script>
        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " w3-red";
        }
    </script>




</body>

</html>
