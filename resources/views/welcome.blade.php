<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema de Autenticación</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Inicio</a>
                        <a href="{{ route('register') }}">Registrarse</a>
                        <!--@if (Route::has('register'))
                            
                        @endif-->
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="{{asset('img/logo1.JPG')}}">
            </div>
            <div class="footer" >
                <p> &copy;2019 Desarrollo de Software II</p>
            </div>
        </div>
    </body>
</html>
