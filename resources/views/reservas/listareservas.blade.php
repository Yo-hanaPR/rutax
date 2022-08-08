@extends('adminlte::page')
{{-- Setup data for datatables --}}
@php
$heads = [
    'Número',
    'A nombre de',
    'Hacia el destino',
    'Fecha de salida (AAAA/MM/DD)',
    'Hora de salida','Pagó en Promoción?','Monto cancelado',
    ['label' => 'Monto Restante'],'Costo Total del FULLDAY',
    ['label' => 'Fecha de reservación', 'no-export' => true, 'width' => 5],'Acciones'
];
@endphp

@section('content')

<h1>Listado de reservas</h1>


<a class="btn btn-success" href="{{ url('/Reserva/create') }}">Nueva compra</a>
<div class="container">
	<div class="row justify-content-center">

		

			<x-adminlte-datatable id="table2" :heads="$heads" head-theme="dark"
	    striped hoverable bordered compressed>
				
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
			</x-adminlte-datatable>
	</div>
</div>
@endsection