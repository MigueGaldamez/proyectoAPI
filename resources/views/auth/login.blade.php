<link href="{{ asset('css/login.css') }}" rel="stylesheet">

<x-guest-layout >
    <div class="fondo-login">
    <x-jet-authentication-card style="bg-transparent">
        @include('imagen-login')
        <x-slot name="logo" >
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Nombre Usuario') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('¿Olvido su contraseña?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Iniciar Sesión') }}
                </x-jet-button>
            </div>
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                {{ __('Registrarse') }}
            </a>
        </form>
    </x-jet-authentication-card>

    </div>
</x-guest-layout>
