
@extends('layouts.app')

@section('content')

<h1>Registrar nuevo destino</h1>
<form method="post" action="{{url('Destinos')}}" role="form">
	{{csrf_field()}}
	<div class="container">
	    <div class="row justify-content-center">

	    	
	        <div class="col-md-5" >
	        	<h2>Ubicación</h2>

	        	<div >
	        		<label>Que lugar es?</label>
	        		<input type="text" class="form-control" name="nombre">
	        	</div>

	        	<div >
	        		<label>Como llegar ahí?</label>
	        		<textarea name="direccion" class="form-control" ></textarea>
	        	</div>

	        	<div >
	        		<label>Punto de referencia</label>
	        		<input name="reference" class="form-control" ></input>
	        	</div>

	        	<div >
	        		<label>Cuanto tiempo toma llegar?</label>
	        		<input name="distancia" class="form-control" ></input>
	        	</div>


	        </div>

	        <div class="col-md-5">

	        <h2>Contactos</h2>

	        	<div >
	        		<label>Documentación en la web</label>
	        		<input type="text" name="url" class="form-control" >
	        	</div>

	        	<div >
	        		<label>Horario de trabajo</label>
	        		<input type="text" name="business_hours" class="form-control" >
	        	</div>

	        	<div >
	        		<label>Teléfono</label>
	        		<input type="text" name="phone" class="form-control" >
	        	</div>

	        </div>
	        
	        <div class="col-md-8">
	        	<h2>Sobre el sitio</h2>
	        	<div >
	        		<label>Detalles</label>
	        		<input type="text" name="detalles" class="form-control" placeholder="Dejan llevar comidas? Tiene piscina? etc">
	        	</div>

	        	<div class="col-md-8">
	        		<label>Historia</label>
	        		<textarea name="history" class="form-control" ></textarea>
	        	</div>
	        </div>
	    </div>
	    	<button type="submit" class="btn btn-success btn-lg btn-block">Guardar</button>
	</div>
</form>
@endsection