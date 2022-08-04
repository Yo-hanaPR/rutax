@extends('adminlte::page')



@section('content')

<h1>Listado de pasajeros</h1>

<a class="btn btn-success" href="{{ url('/Pasajeros/create') }}">Nuevo pasajero</a>
<div class="container">

	<div class="col-md-6 offset-6">
			<input type="text" name="" class="form-control" placeholder="FILTRAR pasajeros" alt="Para saber quienes van a cual viaje">
		</div>
	<div class="row justify-content-center">
		
			<table class="table-striped" width="1000">
				<tr>

					<th>N°</th>
					<th>Cédula</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Dirección</th>
					<th>Teléfono</th>
					<th>Correo</th>
					<th>Edad</th>
					<th>Status de pago</th>
					<th>Método de pago</th>
					<th>Viajes comprados por éste pasajero</th>
				</tr>
				@foreach($pasajeros as $pasajero)
				<tr>
					<td>{{ $pasajero->id}}</td>
					<td>{{ $pasajero->cedula}}</td>
					<td>{{ $pasajero->nombre}}</td>
					<td>{{ $pasajero->apellido}}</td>
					<td>{{ $pasajero->direccion}}</td>
					<td>{{ $pasajero->telefono}}</td>
					<td>{{ $pasajero->correo}}</td>
					<td>{{ $pasajero->edad}}</td>
					<td>{{ $pasajero->status}}</td>
					<td>{{ $pasajero->SuMetododePagoes->metodo}}</td>

					<td><b>{{count($pasajero->ViajesComprados)}} tickets:  </b>
						<br>
						@for($i=0 ; $i < count($pasajero->ViajesComprados) ;$i++)
							{{$pasajero->ViajesComprados[$i]->TicketconDestinoA->ViajeA->nombre}} |
						@endfor
					</td>
				</tr>
				@endforeach
			</table>
	</div>
</div>
@endsection

