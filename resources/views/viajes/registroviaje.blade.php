@extends('layouts.app')

@section('content')

<h1>Registrar Nueva Excursión</h1>
<form method="post" action="{{url('Viajes')}}" role="form">
				{{csrf_field()}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" >
        	<div class="col-md-4">
        		<label>Hacia donde vamos ésta vez?</label>
        		<select class="form-control" name="destino">
	          			
		          			@foreach($destinos as $destino)
								<option value="{{$destino->id}}" name="id_destino"> 
									{{$destino->nombre}}
								</option>
		          			@endforeach
	          			
	          		</select>
        	</div>
			
					
	        <div>
	        	<label>Cuando nos vamos?</label>
	        	<input type="date" name="fecha_salida">

	        	<label>A que hora salimos?</label>
	        	<input type="time" name="hora_salida">
	        </div>

		    <div>
		    	<label>Cuanto valdrá el full day?</label>
		    	<input type="text" name="precio_fijo">
		    	
		    </div>

		    <div>
		    	<label>En cuál carro nos vamos?</label>
		    	<select class="form-control" name="id_unidad">
	          			
		          			@foreach($unidades as $unidad)
								<option value="{{$unidad->id}}" name="unidad"> 
									{{$unidad->tipo}} 
									{{$unidad->color}}- 
									{{$unidad->cant_puestos}}
								</option>
		          			@endforeach
	          			
	          		</select>
		    </div>
		</div>

	</div>

	<button type="submit" class="btn btn-success">Guardar</button>

</div>


</form>
@endsection