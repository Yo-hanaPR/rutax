@extends('layouts.app')

@section('content')

<h1>Métodos de pago disponibles</h1>

<div class="container">
	<div class="row">
		<div class="col-md-7">
			<table class="table-striped" width="100%">
				<tr>
					<th>Nombre método</th>
					<th>Número de cuenta</th>
					<th>Observaciones</th>
				</tr>
			@foreach($metodosdepago as $metodo)
				<tr>
					<td>{{$metodo->metodo}}</td>
					<td>{{$metodo->direccion}}</td>
					<td>{{$metodo->observaciones}}</td></a>
				</tr>
			@endforeach
			</table>
		</div>

		<div class="col-md-5" style="background-color:lightblue;padding:30px;">
			<h2>Agregar nuevo método de pago</h2>


			<form method="post" action="{{url('Metodos_de_pago')}}" role="form">
			{{csrf_field()}}
				<div class="col-md-12">
					<label>Método de pago</label>

					<input type="text" class="form-control" name="metodo">

					<label>Número de cuenta</label>
					<input type="text" name="direccion" class="form-control">


					<label>Observaciones</label>
					<textarea name="observaciones" class="form-control" width="100%"></textarea>
				</div>
				<button type="submit" class="btn btn-success btn-lg btn-block">GUARDAR</button>
			</form>

		</div>
	</div>
</div>

@endsection