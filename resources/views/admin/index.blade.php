@extends('adminlte::page', ['iFrameEnabled' => true])

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
     <link rel="icon" href="{{ asset('logo.png') }}"> 
<style type="text/css">
    
    .table-striped tr th,td{
    padding:30px;
    vertical-align: top;
    border:1px solid #d9e1dc;
}

.btn-success{
    background-color:#0c120e;
    border-color: #ffffff;
}

</style>
<link rel="shortcut icon" href="{{ asset('favicons/logo.png') }}" sizes="192x192"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript" src="{{asset('vue/vue.js')}}"></script> 
<script type="text/javascript" src="{{asset('vue/vue-resource.js')}}"></script> 
<script src="{{asset('bootstrap4.1-dist/js/bootstrap.min.js')}}"></script>
</head>



@section('content_header')
    <h1>RutasXVenezuela</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
 <div x-data>
        <button @click="alert('Alpine Js is working !')">Prueba ALPINE</button>
    </div>

@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="{{asset('js/alpine.js')}}"></script> 
@stop