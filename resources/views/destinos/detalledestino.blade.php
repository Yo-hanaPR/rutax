@extends('adminlte::page')

@section('content')

<h1>Detalle del destino</h1>
<div class="container">
	<div class="row justify-content-center">
			<table class="table-striped" width="1000">
				<tr>
					<th>Destino</th>
					<th>Ubicación</th>
					<th>Punto de referencia</th>
					<th>Tiempo de viaje</th>
					<th>Información</th>
					<th>Horario de trabajo</th>
					<th>Contacto</th>
				</tr>
				@foreach($destino as $info)
				<tr>
					<td>{{ $info->nombre}}</td>
					<td>{{ $info->direccion}}</td>
					<td>{{ $info->reference}}</td>
					<td>{{ $info->distancia}}</td>
					<td>{{ $info->url}}</td>
					<td>{{ $info->business_hours}}</td>
					<td><b>{{$info->phone}}</b></td>
				</tr>

				<tr>
					<td colspan="3">
					<center>{{ $info->detalles}} -
					

					<h1>Historia</h1>
					<b>{{$info->history}}</b>
						</center>
					</td>
				</tr>
				@endforeach
			</table>
	</div>

	Como información adicional puedo mostrar un iframe con información de las paginas del sitio.. No sé.. 
o quizas la información que averigüe con la gente del destino... que si una cabaña cuesta 40$, que el fin de semana esta disponible esto, lo otro...
Sería buena idea poner un textarea para comentarios en el formulario de "actualizar" el destino. o el de crear.. 
Voy a crear el destino cuando ya haya averiguado cosas con los dueños, y ya sepa que para allá tengo las cosas controladas.. Si es bueno mostrar las observaciones en la pagina.
</div>
@endsection

