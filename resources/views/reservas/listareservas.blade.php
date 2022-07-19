@extends('layouts.app')

@section('content')

<h1>Listado de reservas</h1>


<a class="btn btn-success" href="{{ url('/Reserva/create') }}">Nueva compra</a>
<div class="container">
	<div class="row justify-content-center">

		

			<table class="table-striped" width="100">
				<tr>
					<th>Número</th>
					<th>A nombre de</th>
					<th>Hacia el destino</th>
					<th>Fecha de salida (AAAA/MM/DD)</th>
					<th>Hora de salida </th>
					<th>Pagó en Promoción?</th>
					<th>Monto cancelado</th>
					<th>Monto Restante</th>
					<th>Costo Total del FULLDAY</th>
					<th>Fecha de reservación</th>
					<th>Acciones</th>
				</tr>
				@foreach($reservas as $reserva)
					<tr></td>
						<td> {{$reserva->id}}</td>

						<td>{{$reserva->Duenoticket->nombre}}</td>
						<td>{{$reserva->TicketconDestinoA->ViajeA->nombre}}</td>
						<td>{{$reserva->TicketconDestinoA->fecha_salida}}</td>

						<td>{{$reserva->TicketconDestinoA->hora_salida}}</td>
						<td> @if ($reserva->promo == 1) SI 
						@else
						NO
						@endif</td>
						<td> {{$reserva->pago}} $</td>
						<td> {{$reserva->TicketconDestinoA->precio_fijo - $reserva->pago}} $</td>
						<td> {{$reserva->TicketconDestinoA->precio_fijo}} $</td>
						<td> {{$reserva->created_at}}</td>
						<td>
							
							<form method="post" action="{{route('Reserva.destroy',['Reserva'=>$reserva->id])}}" role="form" >
							@method("delete")
							
							{{csrf_field()}}
							<button type="submit" class="btn btn-danger">ELIMINAR</button>

						</td>
					</tr>
				@endforeach
			</table>
	</div>
</div>
@endsection