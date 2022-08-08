@extends('adminlte::page')

@section('content')

{{-- Setup data for datatables --}}
	@php
	$heads = [
	    'Destino',
	    'Ubicación',
	    'Información',
	    'Teléfono',
	    'Acciones'
	];
	@endphp
<h1>Lista de destinos registrados</h1>

<a class="btn btn-success" href="{{ url('/Destinos/create') }}">Registrar nuevo destino</a>

<div class="container">
	<div class="row justify-content-center">
			<x-adminlte-datatable id="table2" :heads="$heads" head-theme="dark"
	    striped hoverable bordered compressed>
				
				@foreach($destinos as $destino)
				<tr>
					<td>{{ $destino->nombre}}</td>
					<td>{{ $destino->direccion}}</td>
					<td>{{ $destino->url}}</td>
					<td>{{ $destino->phone}}</td>

					<td>
						
						<form method="post" action="{{route('Destinos.destroy',['Destino'=>$destino->id])}}" role="form" >
							@method("delete")
							
							{{csrf_field()}}
							<button type="submit" class="btn btn-danger">ELIMINAR</button>
						<a href="{{ url('Destinos/' . $destino->id) }} " class="btn btn-info">VER</a>
							
						</form>

					</td>
				</tr>
				@endforeach
			</x-adminlte-datatable>
	</div>
</div>
@endsection

