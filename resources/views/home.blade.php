@extends('adminlte::page')
@section('Elisur', 'INICIO')

@section('plugins.Sweetalert2', true)




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
        <h1> </h1>
    </div>

    <div class="slideshow-container">
      
        <div class="mySlides">
            <q>Esfuércese por la perfección en todo lo que hace. Toma lo mejor que existe y hazlo mejor. Cuando no exista,
                diséñelo.</q>
            <p class="author">- Sir Henry Royce</p>
        </div>

        <div class="mySlides">
            <q>La construcción es un 90% de transpiración y un 10% de inspiración. </q>
            <p class="author">- Thomas A. Edison</p>
        </div>

        <div class="mySlides">
            <q>Calidad significa hacerlo bien cuando nadie está mirando.</q>
            <p class="author">- Henry Ford</p>
        </div>





        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>

    <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>





@stop

@section('css')


    <style>
        .checked {
            color: orange;
        }
    </style>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .image-container {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://media.sciencephoto.com/image/f0195109/800wm/F0195109-Illustration_of_construction_collage.jpg");
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

    <!--Estilo del segundo diseño-->
    <style>
        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
        }


        /* Slideshow container */
        .slideshow-container {
            position: relative;
            background: #f3fcfdf1;
        }

        /* Slides */
        .mySlides {
            display: none;
            padding: 80px;
            text-align: center;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -30px;
            padding: 16px;
            color: rgb(82, 139, 139);
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            position: absolute;
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
        }

        /* The dot/bullet/indicator container */
        .dot-container {
            text-align: center;
            padding: 20px;
            background: #ddd;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        /* Add a background color to the active dot/circle */
        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Add an italic font style to all quotes */
        q {
            font-style: italic;
        }

        /* Add a blue color to the author */
        .author {
            color: cornflowerblue;
        }
    </style>

@stop
