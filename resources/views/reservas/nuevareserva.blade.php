
@extends('layouts.app')

@section('content')

<h1>Registrar Nueva Compra</h1>
<form method="post" action="{{url('Reserva')}}" role="form">
	{{csrf_field()}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" >
        	<div class="col-md-4">
        		<label>Para quien es la reserva?</label>
        		<select class="form-control" name="pasajero">
	          			
		          			@foreach($pasajeros as $pasajero)
								<option value="{{$pasajero->id}}" name="id_pasajero"> 
									{{$pasajero->nombre}} {{$pasajero->apellido}}
								</option>
		          			@endforeach
	          			
	          		</select>
        	</div>
			
					
	        <div>
	        	<label>Para cual viaje es la compra?</label>
	        	<select class="form-control" name="viaje">
	        		@foreach($viajes as $viaje)
						<option value="{{$viaje->id_viaje}}" name="id_viaje"> 
							{{$viaje->ViajeA->nombre}} - {{$viaje->fecha_salida}}
						</option>
          			@endforeach
          			</select>
	        </div>

		    <div>
		    	<label>Ticket en promoción?</label>
		    	<input type="checkbox" name="promocion">
		    </div>

		    <div>
		    	<label>Abono</label> <i>(Máximo 3 dígitos)</i>
		    	<input type="number" name="pago" style="width:50px;" maxlength="3" oninput="if(this.value.length>this.maxLength) this.value = this.value.slice(0,this.maxLength);">
		    </div>
		</div>

	</div>

	<button type="submit" class="btn btn-success btn-lg btn-block">Guardar</button>

</div>


</form>
@endsection