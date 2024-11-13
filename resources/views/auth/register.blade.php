{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
{{-- @dd($tema); --}}

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

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input class="form-control" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" >
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input class="form-control" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username"  >
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input class="form-control" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" >
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Contraseña</label>
                <input class="form-control" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" >
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <button type="submit" class="btn btn-tema w-100" >Registrarse</button>
            <div class="text-center mt-3">
                <a href="{{ url('/login/' . strtolower($tema['estilo'])) }}" class="link-tema">¿Ya tienes cuenta? Inicia session</a>
            </div>
        </form>
    </div>
</body>
</html>
