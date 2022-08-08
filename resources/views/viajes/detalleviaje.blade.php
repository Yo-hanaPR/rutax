@extends('adminlte::page')


@section('content')

<h1>Detalle del viaje</h1>

<table class="striped" width="1000">
@foreach($viaje as $detalle_viaje)
				<tr>
					<td>{{ $detalle_viaje->id_viaje}}</td>
					<td>{{ $detalle_viaje->ViajeA->nombre}}</td>
					<td>{{ $detalle_viaje->fecha_salida}}</td>
					
					<td>{{ $detalle_viaje->hora_salida}}</td>


					<td>{{ count($detalle_viaje->PasajerosqueViajan)}}</td>
					<td>
						{{ $detalle_viaje->Unidad->cant_puestos -  count($detalle_viaje->PasajerosqueViajan)}}
					</td>


					<td>{{ $detalle_viaje->Unidad->tipo}} {{ $detalle_viaje->Unidad->color}} - {{ $detalle_viaje->Unidad->cant_puestos}} Puestos</td>
					
					<td>{{ $detalle_viaje->precio_fijo}} $</td>
					<td>{{ $detalle_viaje->ganancia_total}} $</td>
					<td>
					</td>
				</tr>
				<tr>
					<td colspan="9">
						<form method="post" action="{{url('eliminareservas',['id'=>$detalle_viaje->id_viaje])}}" role="form" >
							@method("post")
							
							{{csrf_field()}}
							<button type="submit" class="btn btn-danger">ELIMINAR</button>
						<a href="{{ url('Viajes/' . $detalle_viaje->id_viaje) }} " class="btn btn-info">VER</a>
							
						</form>
					</td>
				</tr>
@endforeach
</table>


Si quieres eliminar el viaje debes eliminar las reservas asociadas primero.

Eliminar reservas de éste viaje
Actualizar información de éste viaje

@endsection