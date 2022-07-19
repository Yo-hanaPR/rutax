
@extends('layouts.app')

@section('content')

<h1>Nuevo pasajero</h1>
<form method="post" action="{{url('Pasajeros')}}" role="form">
	{{csrf_field()}}

	<div class="container">
	    <div class="row justify-content-rigth">
	        <div class="col-md-6" >
	        	<div class="col-md-6">
	        		<label>NOMBRE</label>
	        		<input type="text" class="form-control" name="nombre">
	        	</div>

	        	<div class="col-md-6">
	        		<label>APELLIDO</label>
	        		<input type="text" class="form-control" name="apellido">
	        	</div>

	        	<div class="col-md-6">
	        		<label>CEDULA</label>
	        		<input type="text" class="form-control" name="cedula">
	        	</div>

	        	<div class="col-md-6">
	        		<label>DIRECCION</label>
	        		<input type="text" class="form-control" name="direccion">
	        	</div>

	        	<div class="col-md-6">
	        		<label>TELÉFONO</label>
	        		<input type="text" class="form-control" name="telefono">
	        	</div>

	        	
	        </div>
	        <div class="justify-content-center col-md-6">
	        	<div>
	        	<div class="col-md-6">
	        		<label>CORREO</label>
	        		<input type="email" class="form-control" name="correo">
	        	</div>

	        	<div class="col-md-6">
	        		<label>EDAD</label>
	        		<input type="text" class="form-control" name="edad">
	        	</div>

	        	<div class="col-md-6">
	        		<label>STATUS</label>
	        		<input type="text" class="form-control" name="status">
	        	</div>

	        	<div class="col-md-6">
	        		<label>MÉTODO DE PAGO</label>
	        		<select class="form-control" name="id_metodo_pago">
	          			
		          			@foreach($metodos_pago as $metodo_pago)
								<option value="{{$metodo_pago->id_mp}}" name="id_pasajero"> 
									{{$metodo_pago->metodo}}
								</option>
		          			@endforeach
	          			
	          		</select>
	        	</div>
	        </div>
	        </div>
	    </div>

	    <input type="submit" class="btn btn-success" name="guardar" value="guardar">
	</div>
</form>
@endsection