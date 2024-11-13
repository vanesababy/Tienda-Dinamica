<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuTienda - Estilo para Todos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        /* Estilos generales */
        .seccion-bienvenida {
            height: 95vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('/images/fondo-bienvenida.jpg');
            background-size: cover;
            color: white;
        }

        .seccion {
            padding: 80px 0;
        }
        .carrusel-productos .tarjeta-producto {
            margin: 5px;
            border: none;
            transition: all 0.5s ease; 
            overflow: hidden;
            width: 200px;
        }
        .contenedor-imagen-producto {
            padding-top: 0%;
            width: 100%;
        }

        .imagen-producto {
            transition: transform 0.3s ease;
        }

        .tarjeta-producto:hover .imagen-producto {
            transform: scale(1.05);
        }


        /* Estilos específicos por tema */
        .seccion-anime {
            background: linear-gradient(135deg, #2a0845 0%, #6441A5 100%);
            color: white;
        }

        .seccion-mascotas {
            background: linear-gradient(135deg, #a8e6cf 0%, #dcedc1 100%);
        }

        .seccion-casual {
            background: linear-gradient(135deg, #141e30 0%, #243b55 100%);
            color: white;
        }
        .ensayis{
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('/images/fondo-bienvenida.jpg');
        }
    </style>
</head>
<body>
    <div class="ensayis">
        <div class="d-flex justify-content-end">
            <div class="me-2">
                <a href="{{ url('/login/TuTienda') }}" class="btn btn-outline-light btn-lg">Login</a>
            </div>
            <div>
                <a href="{{ url('/login/anime') }}" class="btn btn-outline-light btn-lg">Register</a>
            </div>
        </div>
    </div>
    
    <section class="seccion-bienvenida">
        
        <div class="container">
            <h1 class="display-2 mb-4">Bienvenido a TuTienda</h1>
            <p class="lead mb-4">Descubre tu estilo en nuestras colecciones únicas</p>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <a href="#seccion-anime" class="btn btn-outline-light btn-lg w-100">Explorar Anime</a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="#seccion-mascotas" class="btn btn-outline-light btn-lg w-100">Accesorios para Mascotas</a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="#seccion-casual" class="btn btn-outline-light btn-lg w-100">Estilo Casual</a>
                </div>
            </div>
        </div>
    </section>

    <section id="seccion-anime" class="seccion seccion-anime">
        <div class="container">
            <h2 class="display-4 mb-4">{{ $temas['anime']['titulo'] }}</h2>
            <p class="lead mb-5">{{ $temas['anime']['descripcion'] }}</p>
            <div class="owl-carousel carrusel-productos">
                @for ($i = 1; $i <= 6; $i++)
                <div class="tarjeta-producto card">
                    <div class="contenedor-imagen-producto">
                        <img src="{{asset('img/prueba.jpg') }}" class="imagen-producto" alt="Producto Anime {{ $i }}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Producto Anime {{ $i }}</h5>
                        <p class="card-text">$29.99</p>
                        <button class="btn btn-light" onclick="redirigirALogin('anime')">Ver más</button>
                    </div>
                </div>
                @endfor
            </div>
            <div class="text-center mt-5">
                <a href="{{ url('/login/anime') }}" class="btn btn-outline-light btn-lg">Ver toda la colección Anime</a>
            </div>
        </div>
    </section>

    <section id="seccion-mascotas" class="seccion seccion-mascotas">
        <div class="container">
            <h2 class="display-4 mb-4">{{ $temas['mascotas']['titulo'] }}</h2>
            <p class="lead mb-5">{{ $temas['mascotas']['descripcion'] }}</p>
            <div class="owl-carousel carrusel-productos">
                @for ($i = 1; $i <= 6; $i++)
                <div class="tarjeta-producto card">
                    <div class="contenedor-imagen-producto">
                        <img src="{{ asset('img/gato.png') }}" class="imagen-producto" alt="Producto Mascota {{ $i }}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Accesorio Mascota {{ $i }}</h5>
                        <p class="card-text">$19.99</p>
                        <button class="btn btn-primary" onclick="redirigirALogin('mascotas')">Ver más</button>
                    </div>
                </div>
                @endfor
            </div>
            <div class="text-center mt-5">
                <a href="{{ url('/login/mascotas') }}" class="btn btn-outline-dark btn-lg">Ver todos los accesorios</a>
            </div>
        </div>
    </section>

    <section id="seccion-casual" class="seccion seccion-casual">
        <div class="container">
            <h2 class="display-4 mb-4">{{ $temas['casual']['titulo'] }}</h2>
            <p class="lead mb-5">{{ $temas['casual']['descripcion'] }}</p>
            <div class="owl-carousel carrusel-productos">
                @for ($i = 1; $i <= 6; $i++)
                <div class="tarjeta-producto card">
                    <div class="contenedor-imagen-producto">
                        <img src="{{ asset('img/blusa.jpg') }}" class="imagen-producto" alt="Producto Casual {{ $i }}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Prenda Casual {{ $i }}</h5>
                        <p class="card-text">$39.99</p>
                        <button class="btn btn-light" onclick="redirigirALogin('casual')">Ver más</button>
                    </div>
                </div>
                @endfor
            </div>
            <div class="text-center mt-5">
                <a href="{{ url('/login/casual') }}" class="btn btn-outline-light btn-lg">Ver toda la colección Casual</a>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.carrusel-productos').owlCarousel({
                loop: true,
                margin: 1, 
                nav: true,
                autoplay: true,
                autoplayHoverPause: true,
                autoplayTimeout: 2000, 
                smartSpeed: 800, 
                responsive:{
                    0:{
                        items:1
                    },
                    460:{
                        items:2
                    },
                    600:{
                        items:2
                    },
                    800:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            });
        });

        function redirigirALogin(tema) {
            window.location.href = `/login/${tema}`;
        }
    </script>
</body>
</html>




