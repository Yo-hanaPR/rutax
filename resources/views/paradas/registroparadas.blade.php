@extends('adminlte::page')

{{-- Setup data for datatables --}}
@php
$heads = [
    'Lugar',
    'Punto de referencia',
    'Horario',
    'Servicio','Metodo de pago','Acciones'
];
@endphp
@section('content')

<h1>Paradas registradas Disponibles</h1>

<div class="container">
	<div class="row">
		<div class="col-md-7">
			<x-adminlte-datatable id="table2" :heads="$heads" head-theme="dark"
	    striped hoverable bordered compressed>
				
			@foreach($paradas as $parada)
				<tr>
					<td>{{$parada->lugar}}</td>
					<td>{{$parada->pto_referencia}}</td>
					<td>{{$parada->horario}}</td>
					<td>{{$parada->servicio}}</td>
					<td>{{$parada->metodo_pago}}</td>
					<td>
						<form method="post" action="{{route('Paradas.destroy',['Parada'=>$parada->id])}}" role="form" >
							@method("delete")
							
							{{csrf_field()}}
							<button type="submit" class="btn btn-danger">ELIMINAR</button>
						<a href="{{ url('Paradas/' . $parada->id) }} " class="btn btn-info">VER</a>
							
						</form>
					</td>
				</tr>
			@endforeach
	</x-adminlte-datatable>
		</div>

		<div class="col-md-5" style="background-color:lightblue;padding:30px;">
			<h2>Agregar nueva parada</h2>


			<form method="post" action="{{url('Paradas')}}" role="form">
			{{csrf_field()}}
				<div class="col-md-12">
						
						<div class="col-md-6">
							<label>Lugar de la parada</label>

							<input type="text" class="form-control" name="lugar">

						</div>
						<div class="col-md-6">
							<label>Punto de referencia</label>

							<input type="text" class="form-control" name="pto_referencia">

						</div>



						<div class="col-md-6">
							<label>Servicios</label>

							<input type="text" class="form-control" name="servicio">

						</div>

						<div class="col-md-6">
							<label>Horario de servicios</label>

							<input type="text" class="form-control" name="horario">

						</div>


						<div class="col-md-6">
							<label>Método de pago</label>

							<input type="text" class="form-control" name="metodo_pago" placeholder="con que metodos de pago cuentan?">

						</div>
				</div>
				<center><x-adminlte-button label="GUARDAR" theme="primary" icon="fas fa-key" type="submit" class="btn"/> </center>
			</form>

		</div>
	</div>
</div>

@endsection