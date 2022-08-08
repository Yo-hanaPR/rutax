@extends('adminlte::page')
{{-- Setup data for datatables --}}
@php
$heads = [
    'Número',
    'Viaje Hacia',
    'Salida el día',
    'A las',
    'Cantidad de Pasajeros','Cuantos faltan','Nos iremos en una unidad',
    ['label' => 'Costo del full day por puesto'],'Ganancia total estimada del viaje','Acciones'
];
@endphp

@section('content')

<h1>Lista de Viajes programados</h1>

<a class="btn btn-success" href="{{ url('/Viajes/create') }}">PROGRAMAR NUEVO VIAJE</a>
<div class="container">
	<div class="row justify-content-center">

		
			<x-adminlte-datatable id="table2" :heads="$heads" head-theme="dark"
	    striped hoverable bordered compressed>
				
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
					<td>
						
						<form method="post" action="{{route('Viajes.destroy',['Viaje'=>$viaje->id_viaje])}}" role="form" >
							@method("delete")
							
							{{csrf_field()}}
							<button type="submit" class="btn btn-danger">ELIMINAR</button>

							*solo podrás eliminar si no hay reservas asociadas.
							Para eliminar las reservas asociadas entra a la página de detalles del viaje para eliminarlas de forma masiva.
							Una vez hecho ésto podrás utilizar éste botón para eliminar el viaje.
							Como poner una pantalla de error personalizada si el usuario le da click a éste botón no salga el error de laravel?
							El viaje tampoco puede tener Gastos asociados ni itinerarios asociados xD
							Como incluir ésta información aquí en el front?
							Bueno, jala los datos de las tablas de gastos, itinerario, y reserva
						<a href="{{ url('Viajes/' . $viaje->id_viaje) }} " class="btn btn-info">VER</a>
							
						</form>
					</td>
				</tr>
				@endforeach
	</x-adminlte-datatable>
	</div>
</div>
@endsection

