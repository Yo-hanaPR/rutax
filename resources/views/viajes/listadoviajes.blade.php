@extends('layouts.app')

@section('content')

<h1>Lista de Viajes programados</h1>

<a class="btn btn-success" href="{{ url('/Viajes/create') }}">PROGRAMAR NUEVO VIAJE</a>
<div class="container">
	<div class="row justify-content-center">

		
			<table class="table-striped" width="1000">
				<tr>
					<th>Número</th>
					<th>Viaje Hacia</th>
					<th>Salida el día</th>

					<th>A las</th>
					<th>Cantidad de Pasajeros</th>
					<th>Cuantos faltan</th>
					<th>Nos iremos en una unidad</th>
					<th>Costo del full day por puesto</th>
					<th>Ganancia total estimada del viaje</th>
				</tr>
				@foreach($viajes as $viaje)
				<tr>
					<td>{{ $viaje->id_viaje}}</td>
					<td>{{ $viaje->ViajeA->nombre}}</td>
					<td>{{ $viaje->fecha_salida}}</td>
					
					<td>{{ $viaje->hora_salida}}</td>


					<td>{{ count($viaje->PasajerosqueViajan)}}</td>
					<td>
						{{ $viaje->Unidad->cant_puestos -  count($viaje->PasajerosqueViajan)}}
					</td>


					<td>{{ $viaje->Unidad->tipo}} {{ $viaje->Unidad->color}} - {{ $viaje->Unidad->cant_puestos}} Puestos</td>
					
					<td>{{ $viaje->precio_fijo}} $</td>
					<td>{{ $viaje->ganancia_total}} $</td>
				</tr>
				@endforeach
			</table>
	</div>
</div>
@endsection

