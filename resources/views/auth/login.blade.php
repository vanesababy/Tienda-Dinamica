{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tema['titulo'] }} - Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, 
                {{ $tema['estilo'] === 'anime' ? '#2a0845 0%, #6441A5 100%' : 
                   ($tema['estilo'] === 'mascotas' ? '#a8e6cf 0%, #dcedc1 100%' : 
                   ($tema['estilo'] === 'casual' ? '#cfd9df 0%, #e2ebf0 100%' :
                    '#ffffff 0%, #ffffff 100%')) }});
        }
        
        .contenedor-login {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.3);
            width: 100%;
            max-width: 400px;
        }
        
        .titulo-tema {
            color: {{ $tema['estilo'] === 'anime' ? '#6441A5' : 
                      ($tema['estilo'] === 'mascotas' ? '#4CAF50' : 
                      ($tema['estilo'] === 'casual' ? '#2c3e50' : '#000000')) }};
        }
        
        .btn-tema {
            background-color: {{ $tema['estilo'] === 'anime' ? '#6441A5' : 
                                 ($tema['estilo'] === 'mascotas' ? '#4CAF50' : 
                                 ($tema['estilo'] === 'casual' ? '#2c3e50' : '#000000')) }};
            color: white;
        } 
    </style>
</head>
<body>
    <div class="contenedor-login">
        <h2 class="text-center mb-4 titulo-tema">{{ $tema['titulo'] }}</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input class="form-control" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" >
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
         
                <input class="form-control" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" >
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <button type="submit" class="btn btn-tema w-100" >Iniciar Sesión</button>
            <div class="text-center mt-3">
                <a href="{{ url('/register/' . strtolower($tema['estilo'])) }}" class="link-tema">¿No tienes cuenta? Regístrate</a>
            </div>
        </form>
    </div>
</body>
</html>
