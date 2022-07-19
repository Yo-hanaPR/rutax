
@extends('layouts.app')

@section('content')

<h1>Gastos asociados a cada viaje</h1>

<div class="container">
	<div class="row">
		<div class="col-md-7">
				 
				 	@foreach($viajes as $viaje)
				 	<h2><b>Gastos del viaje {{$viaje->ViajeA->nombre}}

				 		</b></h2>
				 		@for($i=0; $i < count($viaje->GastosDelViaje); $i++)
				 			<h3>Gastos por concepto de {{$viaje->GastosDelViaje[$i]->porConceptoDe->servicio}}: {{$viaje->GastosDelViaje[$i]->costo}} </h3>

				 			
				 		@endfor
				 		<br><br>
				 		<h5><b>Gastos totales de éste viaje:</b> {{$viaje->GastosDelViaje->sum('costo')}} </h5> 
				 	@endforeach
				 	
		</div>
		<div class="col-md-5" style="background-color:lightblue;padding:30px;">
			
			<h1>Asociar gastos a Viaje</h1>
				<form method="post" action="{{url('Gastos')}}" role="form">
					{{csrf_field()}}
					<div class="container">
					    <div class="row justify-content-center">
					        <div class="col-md-8" >
					        	<div>
					        		<label>Para cual viaje tuviste éstos gastos?</label>
					        		<select class="form-control" name="id_viaje_asociado">
					        			
					        		@foreach($viajes as $viaje)
					        			<option value="{{$viaje->id_viaje}}">
					        				{{$viaje->ViajeA->nombre}}
					        			</option>
					        		@endforeach

					        		</select>
					        	</div>

					        	<div>

										@foreach($servicios as $servicio)
					        		

					        		<label>Gasto por concepto de {{$servicio->servicio}} para éste viaje</label> <input type="number" name="gasto_por_concepto_servicio[{{$servicio->id}}]">
					        			@endforeach

					        	</div>
					        </div>

					        <span style="color:#9f1818;"><i>*Si te equivocas introduciendo algún monto, puedes corregirlo, pero debes actualizar todos los valores.</i></span>
					    </div>
					    	<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</form>
		</div>
	</div>
</div>



@endsection