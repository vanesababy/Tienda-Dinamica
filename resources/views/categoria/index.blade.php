{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tema['titulo'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="{{ $tema['color_fondo'] }}">
    <div class="container mt-5">
        <h1 class="text-center mb-4 {{ $tema['color_texto'] }}">{{ $tema['titulo'] }}</h1>
        <p class="text-center {{ $tema['color_texto'] }}">{{ $tema['descripcion'] }}</p>
        
        @dd($tema)
        <!-- Aquí irían los productos específicos de la categoría -->
        <div class="row">
            <!-- Ejemplo de productos -->
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('home') }}" class="btn btn-lg btn-outline-light">Volver al inicio</a>
            <a href="{{ route('registro') }}" class="btn btn-lg btn-primary">Regístrate ahora</a>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html> --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Anime - Speed Family Collection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #1a1a1a;
            color: white;
        }
        
        .speed-family-header {
            height: 50vh;
            background: url('/images/speed-family-banner.jpg') center/cover;
            position: relative;
            overflow: hidden;
        }
        
        .speed-family-character {
            position: absolute;
            bottom: 0;
            right: 10%;
            height: 90%;
            animation: characterEntrance 1.5s ease-out;
        }
        
        @keyframes characterEntrance {
            from {
                transform: translateX(100%);
            }
            to {
                transform: translateX(0);
            }
        }
        
        .product-card {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            transition: transform 0.3s;
        }
        
        .product-card:hover {
            transform: translateY(-10px);
        }
    </style>
</head>
<body>
    <header class="speed-family-header">
        <img src="/images/speed-family-char.png" alt="Speed Family Character" class="speed-family-character">
        <div class="container h-100 d-flex align-items-center">
            <h1 class="display-2">Speed Family Collection</h1>
        </div>
    </header>

    <main class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="product-card card">
                    <img src="/images/speed-family-product1.jpg" class="card-img-top" alt="Speed Family T-Shirt">
                    <div class="card-body">
                        <h5 class="card-title">Camiseta Speed Family</h5>
                        <p class="card-text">Edición limitada con diseño exclusivo.</p>
                        <button class="btn btn-primary">Añadir al carrito</button>
                    </div>
                </div>
            </div>
            <!-- Más productos... -->
        </div>
    </main>
</body>
</html>