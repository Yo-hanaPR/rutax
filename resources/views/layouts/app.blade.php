<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'rutasxvenezuela') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{asset('js/jquery.min.js')}}"></script> 
    <script type="text/javascript" src="{{asset('js/jquery-validate.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

<script type="text/javascript" src="{{asset('vue/vue.js')}}"></script> 
<script type="text/javascript" src="{{asset('vue/vue-resource.js')}}"></script> 
<script src="{{asset('bootstrap4.1-dist/js/bootstrap.min.js')}}"></script>
</head>
<body>
    <div id="app">
        <div class="container-fluid" style="background-color:#0e0e0e;">
            <div class="row">
                <div class="col-md-4">
                    <a href="{{url('home')}}">
                    <img src="{{asset('axie.png')}}" width="80" height="60"></a>
                </div>
                <div class="col-md-7 offset-1">
                    
                    <nav>
                        <a value="Nueva_inversion" class=" btn btn-success" href="{{url('Destinos')}}">Destinos</a>

                        <a class="btn btn-success" value="Nueva_ganancia"  href="{{url('Pasajeros')}}">Pasajeros</a>
                        <a class="btn btn-success" value="Nueva_cuenta" href="{{url('Reserva')}}">Reserva</a>

                        <a class="btn btn-success" value="Nueva_cuenta" href="{{url('Viajes')}}">Viajes</a>


                        <a class="btn btn-success" value="Nueva_cuenta" href="{{url('Unidades')}}">Unidades</a>

                        <a class="btn btn-success" value="Nueva_cuenta" href="{{url('Servicios')}}">Servicios</a>


                        <a class="btn btn-success" href="{{url('Metodos_de_pago')}}">Métodos de pago</a>

                        <a class="btn btn-success" href="{{url('Gastos')}}">Gastos</a>
                    </nav>
                </div>
            </div>
        </div>
        
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-1 offset-11">
                        <a href="{{ url()->previous() }} " class="btn btn-success">Volver</a>

                        <button @click="alert('Alpine Js is working !')">Click</button>
                        </div>
                        @yield('content')

                    </div>
                </div>
            </div>
        </main>
    </div>

</body>


<script src="{{asset('js/alpine.js')}}"></script> 
</html>
