@extends('layouts.app')

@section('content')

<h1>Paradas registradas Disponibles</h1>

<div class="container">
	<div class="row">
		<div class="col-md-7">
			<table class="table-striped" width="100%">
				<tr>
					<th>Lugar</th>
					<th>Punto de referencia</th>
					<th>Horario</th>
					<th>Servicio</th>
					<th>Metodo de pago</th>
					<th>Acciones</th>
				</tr>
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
			</table>
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
				<button type="submit" class="btn btn-success">GUARDAR</button>
			</form>

		</div>
	</div>
</div>

@endsection