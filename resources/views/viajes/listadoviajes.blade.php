@extends('adminlte::page')


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
					<th>Acciones</th>
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
					<td>
						
						<form method="post" action="{{route('Viajes.destroy',['Viaje'=>$viaje->id_viaje])}}" role="form" >
							@method("delete")
							
							{{csrf_field()}}
							<button type="submit" class="btn btn-danger">ELIMINAR</button>

							*solo podrás eliminar si no hay reservas asociadas.
							Para eliminar las reservas asociadas entra a la página de detalles del viaje para eliminarlas de forma masiva.
							Una vez hecho ésto podrás utilizar éste botón para eliminar el viaje.
							Como poner una pantalla de error personalizada si el usuario le da click a éste botón no salga el error de laravel?
						<a href="{{ url('Viajes/' . $viaje->id_viaje) }} " class="btn btn-info">VER</a>
							
						</form>
					</td>
				</tr>
				@endforeach
			</table>
	</div>
</div>
@endsection

