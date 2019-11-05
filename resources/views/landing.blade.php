<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>KaitoHealth - Sail Safely over an Ocean of Health Data</title>

        <meta name="description" content="Safe and secure Electronic Health Records. Access securely your health record anyplace, anytime. Share it safely with the right person of your choice - doctors, hospitals, clinics, diagnostic centers.">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">

        <!-- Styles -->
        {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div id="app">
                <app></app>
            </div>
        </div>
    </body>
</html>
