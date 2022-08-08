

@extends('adminlte::page')

@section('content')

<h1>Resumen de operaciones</h1>
<div
    x-data="{
        posts: {},

        async retrievePosts() {
            this.posts = await (await fetch('https://jsonplaceholder.typicode.com/posts')).json();

<<<<<<< HEAD
            // log out all the posts to the console
            console.log(this.posts);
        }
    }"
    >
	<h1>Aquí voy a mostrar progreso de cuanto llevo de la meta total de ganancia (barrita de progreso)</h1>
	pero la barrita de progreso mejor ponla para cada viaje, en el detalle de cada viaje puede ser.. Será mas facil asi.

	<h4>Total de viajes programados: {{$cantviajes}}</h4>
	<h4>Total de pasajeros: {{$cantpasajeros}}</h4>
	<h4>Total de reservas: {{$reservas}}</h4>
	<h4>Total de viajes concretados:{{$viajesconcretados}}</h4>	
=======
<h4>Total de viajes por concretar: {{$viajesporconcretar}}</h4>
<h4>Total de pasajeros: {{$cantpasajeros}}</h4>
<h4>Total de reservas: {{$reservas}}</h4>
<h4>Total de viajes concretados:{{$viajesconcretados}}</h4>	
>>>>>>> nazareth
	

	<h4>ganancias NETAS en viajes concretados: {{$ganancias_totales_viajes}} $</h4>
	<h4>Gastos totales en viajes concretados: {{$gastos_totales}} $</h4>
	<h4>Ganancia real de la empresa: {{$ganancia_real}}$</h4>



	
	
	<h1><b>Estadística de viajes y ganancia por viajes</b></h1>

	Viaje: 
	<select class="form-control" name="id_viaje" @change="retrievePosts()">
		@foreach($viajes as $viaje)
			<option value="{{$viaje->id}}">{{$viaje->ViajeA->nombre}}</option>
		@endforeach	
	</select> 

	Circulito azul.. gráfico que se va a completar con la informacion de la tabla viaje_pasajero, con las reservas para el viaje elegido.

	Es decir, del viaje elegido, voy a elegir las reservas para ese viaje.
	De la tabla viaje_pasajero tambien me conecto a viaje, así que elegiré el precio_fijo para sacar el 100% de éste circulito.
	entonces con la informacion de la tabla viaje_pasajero voy a calcular el porcentaje que ya me han cancelado DE ESE VIAJE QUE SELECCIONE EN EL SELECT.

	Como calculo ese porcentaje?
	precio_fijo* sum(precios_cancelados) /100.
	Eso me va a dar el porcentaje que está cancelado de ESE viaje.

	Y con ese porcentaje se va llenando el circulito.



		<h1>Balance de Gastos y ganancias de la empresa</h1>

		Gastos totales en los últimos <select></select> meses: _____
		Ganancias totales en los últimos <select></select> meses: ______
	<div x-data="{open: false, content:'HOLA'}">
	        
	    <div
	    x-show="open"
	    x-transition:enter.duration.500ms
	    x-transition:leave.duration.1000ms
		>
			<h1 x-text="content"></h1>
		</div>

		<button @click="open = !open">TOGGLE</button>
	</div>


	<h1>PRACTICAS DE ALPINE</h1>




    <button >HAZ LA PETICION</button>
</div>

<div>
	
<!--button
    x-data="{ red: false }"
    x-bind:class="red ? 'red' : ''"
    @click="red = ! red">
    Toggle Red
</button-->



</div>

</div>

@endsection