@extends('layouts.app')

@section('content')

<h1>Resumen de operaciones</h1>

<h1>Aquí voy a mostrar cuantos viajes he hecho, cuanto he ganado a punta de viajes, progreso de cuanto llevo de la meta total de ganancia (barrita de progreso)</h1>


	Total de viajes programados:
	Total de viajes concretados:


	Total de pasajeros:

	Total de reservas:
	
<h2>Estadística de viajes y ganancia por viajes</h2>

Viaje: <select></select> 

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

@endsection
