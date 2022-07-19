

@extends('layouts.app')

@section('content')

<h1>Resumen de operaciones</h1>

<h1>Aquí voy a mostrar cuantos viajes he hecho, cuanto he ganado a punta de viajes, progreso de cuanto llevo de la meta total de ganancia (barrita de progreso)</h1>


<h2>FECHA ACTUAL: {{$date}} </h2>
<h4>Total de viajes programados: {{$cantviajes}}</h4>
<h4>Total de pasajeros: {{$cantpasajeros}}</h4>
<h4>Total de reservas: {{$reservas}}</h4>
<h4>Total de viajes concretados:</h4>	
	

necesito saber la fecha de un viaje y compararla con la fecha de hoy. Si hoy es esa fecha, entonces el viaje se concreto..

pero mañana no será esa fecha..
entonces necesito una funcion que SI HOY ES MAYOR QUE ESA FECHA.

un viaje se concretó si NO está anulado (suspendido) y la fecha de salida es igual o menor que la fecha de hoy.



En ese caso, si el viaje se concretó, entonces consulta la tabla de viaje_pasajero, vé cuales son las reservas para ese viaje, cuando pagó cada persona, y sumas esos montos para saber CUANTO DINERO EN TOTAL (en realidad) está dejando éste viaje. Lo puedes comparar con el de GANANCIA ESTIMADA o no..

SI se sacaron 300, a esos 300 se le resta lo que se gastó en servicios en ese viaje. Y lo que queda es la GANANCIA REAL DEL VIAJE:


informacion: 
GANANCIA NETA: ----
PAGO SERVICIOS EN VIAJE: ------
GANANCIA REAL DE LA EMPRESA: ______



OPCION ELIMINAR VIAJE Y SUS RESERVAS ASOCIADAS: 
	

	
	
<h1><b>Estadística de viajes y ganancia por viajes</b></h1>

Viaje: 
<select class="form-control" name="id_viaje">
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
 <div x-data>
        <button @click="alert('Alpine Js is working !')">Prueba ALPINE</button>
    </div>
@endsection