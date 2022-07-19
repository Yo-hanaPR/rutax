
@extends('layouts.app')

@section('content')

<h1>Registrar nuevo destino</h1>
<form method="post" action="{{url('Destinos')}}" role="form">
	{{csrf_field()}}
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8" >
	        	<div class="col-md-4">
	        		<label>Que lugar es?</label>
	        		<input type="text" class="form-control" name="nombre">
	        	</div>

	        	<div class="col-md-4">
	        		<label>Como llegar ahí?</label>
	        		<textarea name="direccion" class="form-control" ></textarea>
	        	</div>


	        	<div class="col-md-4">
	        		<label>Documentación en la web</label>
	        		<input type="text" name="url" class="form-control" >
	        	</div>


	        	<div class="col-md-4">
	        		<label>Detalles</label>
	        		<input type="text" name="detalles" class="form-control" >
	        	</div>
	        </div>
	    </div>
	    	<button type="submit" class="btn btn-success">Guardar</button>
	</div>
</form>
@endsection