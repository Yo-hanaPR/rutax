@extends('adminlte::page')

@section('content')

<div class="row">
	
<div class="col-md-6">
	<h1>Itinerarios programados</h1>

	<table class="table-striped" width="1000">
		<tr>
			<th>Viaje</th>
			<th>Actividades a realizar</th>
			<th>Punto de salida</th>
			<th>Punto de regreso</th>
			<th>Paradas en</th>
			<th>Recorrido</th>
		</tr>
	@foreach($itinerarios as $itinerario)
		<tr>
			<td>{{$itinerario->ItinerarioDe->ViajeA->nombre}}</td>
			<td>{{$itinerario->actividades}}</td>
			<td>{{$itinerario->punto_salida}}</td>
			<td>{{$itinerario->punto_regreso}}</td>
			<td>{{$itinerario->ParadaEn}}</td>
			<td>{{$itinerario->ruta}}</td>
		</tr>
	@endforeach

	</table>
</div>



</div>

<div >
			
			
<form method="post" action="{{url('Itinerario')}}" role="form">
	{{csrf_field()}}


			<div class="col-md-5">

				<h1>Itinerario para el viaje a</h1>
				<select class="form-control" name="id_viaje_asociado">
					        			
        		@foreach($viajes as $viaje)
        			<option value="{{$viaje->id_viaje}}">
        				{{$viaje->ViajeA->nombre}}
        			</option>
        		@endforeach

        		</select>

				<label>Que actividades se realizarán?</label>
				<input type="text" name="actividades" class="form-control">

				<label>Que paradas crees que serán necesarias?</label>


				<select class="form-control" name="id_parada">
	          			
		          			@foreach($paradas as $parada)
								<option value="{{$parada->id}}" name="parada"> 
									{{$parada->lugar}}- 
									{{$parada->servicio}}
								</option>
		          			@endforeach
	          			
	          		</select>

			</div>
			<div class="col-md-5">
				<label>Punto de salida del viaje</label>
				<input type="text" name="punto_salida" class="form-control">


				<label>Punto de regreso del viaje</label>
				<input type="text" name="punto_regreso" class="form-control">
				
				<label>Como se desarrollará el viaje?</label>
				<textarea name="ruta" class="form-control" placeholder="Que harán primero? que harán despues... etc"></textarea>

			</div>

			<center><x-adminlte-button label="GUARDAR" theme="primary" icon="fas fa-key" type="submit" class="btn"/> </center>
		</form>
</div>
@endsection
