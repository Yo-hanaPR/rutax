@extends('layouts.app')

@section('content')

<h1>Listado de unidades</h1>

<a class="btn btn-success" href="{{ url('/Unidades/create') }}">Nueva unidad</a>
<div class="container">
	<div class="row justify-content-center">
		<table class="table-striped" width="1000">
			<tr>
				<th>Número</th>
				<th>Tipo</th>
				<th>Placa</th>
				<th>Cantidad de puestos</th>
			</tr>
			@foreach($unidades as $unidad)
			<tr>
				<td>{{$unidad->id}}</td>
				<td>{{$unidad->tipo}} {{$unidad->negro}} </td>

				<td>{{$unidad->placa}}</td>
				<td>{{$unidad->cant_puestos}}</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>
		@endsection