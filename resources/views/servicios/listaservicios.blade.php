@extends('adminlte::page')

@section('content')

<h1>Servicios Disponibles</h1>
<a class="btn btn-success" href="{{url('Paradas')}}">Paradas</a>
<div class="container">
	<div class="row">
		<div class="col-md-7">
			<table class="table-striped" width="100%">
				<tr>
					<th>Nombre Servicio</th>
				</tr>
			@foreach($servicios as $servicio)
				<tr>
					<td>{{$servicio->servicio}}</td>
				</tr>
			@endforeach
			</table>
		</div>

		<div class="col-md-5" style="background-color:lightblue;padding:30px;">
			<h2>Agregar nuevo Servicio</h2>


			<form method="post" action="{{url('Servicios')}}" role="form">
			{{csrf_field()}}
				<div class="col-md-12">
					<label>Nombre Servicio</label>

					<input type="text" class="form-control" name="servicio">
				</div>
				<center><x-adminlte-button label="GUARDAR" theme="primary" icon="fas fa-key" type="submit" class="btn"/> </center>
			</form>

		</div>
	</div>
</div>

@endsection