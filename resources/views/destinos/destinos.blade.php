@extends('adminlte::page')

@section('content')

<h1>Lista de destinos registrados</h1>

<a class="btn btn-success" href="{{ url('/Destinos/create') }}">Registrar nuevo destino</a>

<div class="container">
	<div class="row justify-content-center">
			<table class="table-striped" width="1000">
				<tr>
					<th>Destino</th>
					<th>Ubicación</th>
					<th>Información</th>
					<th>Teléfono</th>
					<th>Acciones</th>
				</tr>
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
			</table>
	</div>
</div>
@endsection

