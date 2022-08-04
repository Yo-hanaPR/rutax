@extends('adminlte::page')

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
	        		<x-adminlte-input type="text" name="nombre">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-input>
	        	</div>

	        	<div >

	        		<label>Como llegar ahí?</label>

	        		<x-adminlte-textarea type="text" name="direccion">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-textarea>
	        	</div>

	        	<div >
	        		<label>Punto de referencia</label>

	        		<x-adminlte-input type="text" name="reference">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-input>
	        	</div>

	        	<div >
	        		<label>Cuanto tiempo toma llegar?</label>
	        		<x-adminlte-input type="text" name="distancia">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-input>

	        	</div>


	        </div>

	        <div class="col-md-5">

	        <h2>Contactos</h2>

	        	<div >
	        		<label>Documentación en la web</label>
	        		<x-adminlte-input type="text" name="url">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-input>
	        	</div>

	        	<div >
	        		<label>Horario de trabajo</label>
	        		<x-adminlte-input type="text" name="business_hours">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-input>
	        	</div>

	        	<div >
	        		<label>Teléfono</label>
	        		<x-adminlte-input type="number" name="phone">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-input>
	        	</div>

	        </div>
	        
	        <div class="col-md-8">
	        	<h2>Sobre el sitio</h2>
	        	<div >

	        		<x-adminlte-textarea name="detalles" label="Detalles" rows=5 igroup-size="sm"
					    label-class="text-primary" placeholder="Dejan llevar comidas? Tiene piscina? Posada? Los comercios reciben BS? etc" disable-feedback>
					    <x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-lg fa-comment-dots text-primary"></i>
					        </div>
					    </x-slot>
					   	
					</x-adminlte-textarea>
	        	</div>

	        	<div class="col-md-8">

	        		<x-adminlte-textarea name="history" label="Historia" rows=5 igroup-size="sm"
					    label-class="text-primary" placeholder="Dejan llevar comidas? Tiene piscina? Posada? Los comercios reciben BS? etc" disable-feedback>
					    <x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-lg fa-comment-dots text-primary"></i>
					        </div>
					    </x-slot>
					    
					</x-adminlte-textarea>
	        	</div>
	        </div>
	    </div>
	    	<center><x-adminlte-button label="GUARDAR" theme="primary" icon="fas fa-key" type="submit" class="btn"/> </center>
	</div>
</form>


@endsection