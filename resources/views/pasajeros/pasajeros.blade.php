@extends('adminlte::page')



@section('content')

<h1>Listado de pasajeros</h1>


<a class="btn btn-info" href="{{ url('/Pasajeros/create') }}">Nuevo pasajero</a>
<div class="container">

	<div class="col-md-6 offset-6">
			<input type="text" name="" class="form-control" placeholder="FILTRAR pasajeros" alt="Para saber quienes van a cual viaje">
		</div>


	<div class="row justify-content-center">
	{{-- Setup data for datatables --}}
	@php
	$heads = [
	    'ID',
	    'cédula',
	    'Nombre Completo',
	    'Dirección',
	    'Teléfono','Correo','Edad',
	    ['label' => 'Status de pago'],'Método de pago',
	    ['label' => 'Viajes comprados por éste pasajero', 'no-export' => true, 'width' => 5],'Acciones'
	];
	@endphp

	<x-adminlte-datatable id="table2" :heads="$heads" head-theme="dark"
	    striped hoverable bordered compressed>
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
					<td>{{ $pasajero->SuMetododePagoes->metodo}}
				</td>
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

