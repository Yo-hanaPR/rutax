@extends('adminlte::page')
{{-- Setup data for datatables --}}
@php
$heads = [
    'Número',
    'Tipo',
    'Placa',
    'Cantidad de puestos','Acciones'
];
@endphp

@section('content')

<h1>Listado de unidades</h1>

<a class="btn btn-success" href="{{ url('/Unidades/create') }}">Nueva unidad</a>
<div class="container">
	<div class="row justify-content-center">
		<x-adminlte-datatable id="table2" :heads="$heads" head-theme="dark"
	    striped hoverable bordered compressed>
			<tr>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			@foreach($unidades as $unidad)
			<tr>
				<td>{{$unidad->id}}</td>
				<td>{{$unidad->tipo}} {{$unidad->negro}} </td>

				<td>{{$unidad->placa}}</td>
				<td>{{$unidad->cant_puestos}}</td>
				<td> <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit" ><i class="fa fa-lg fa-fw fa-pen"></i></button>
					<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete"><i class="fa fa-lg fa-fw fa-trash"></i></button>

					<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
	                   <i class="fa fa-lg fa-fw fa-eye"></i>
	               </button>


				</td>
			</tr>
			@endforeach
	</x-adminlte-datatable>
	</div>
</div>
		@endsection