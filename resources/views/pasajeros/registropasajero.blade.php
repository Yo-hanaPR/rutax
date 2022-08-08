
@extends('adminlte::page')

@section('content')

<h1>Nuevo pasajero</h1>
<form method="post" action="{{url('Pasajeros')}}" role="form">
	{{csrf_field()}}

	<div class="container">
	    <div class="row justify-content-rigth">
	        <div class="col-md-6" >
	        	<div >
	        		<label>NOMBRE</label>
	        		<x-adminlte-input type="text" class="form-control" name="nombre">
        			<x-slot name="prependSlot">
				        <div class="input-group-text">
				            <i class="fas fa-fire text-lightblue"></i>
				        </div>
				    </x-slot>
				</x-adminlte-input>
	        	</div>

	        	<div >
	        		<label>APELLIDO</label>
	        		<x-adminlte-input type="text" class="form-control" name="apellido">
	        		<x-slot name="prependSlot">
				        <div class="input-group-text">
				            <i class="fas fa-fire text-lightblue"></i>
				        </div>
				    </x-slot>
				</x-adminlte-input>
	        	</div>

	        	<div >
	        		<label>CEDULA</label>
	        		<x-adminlte-input type="text" class="form-control" name="cedula">
	        		<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-input>
	        	</div>

	        	<div >
	        		<label>DIRECCION</label>
	        		<x-adminlte-input type="text" class="form-control" name="direccion">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-input>
	        	</div>

	        	<div >
	        		<label>TELÉFONO</label>
	        		<x-adminlte-input type="text" class="form-control" name="telefono">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-input>
	        	</div>

	        	
	        </div>
	        <div class="justify-content-center col-md-6">
	        	<div>
	        	<div >
	        		<label>CORREO</label>
	        		<x-adminlte-input type="email" class="form-control" name="correo">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-input>
	        	</div>

	        	<div >
	        		<label>EDAD</label>
	        		<x-adminlte-input type="text" class="form-control" name="edad">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-input>
	        	</div>

	        	<div >
	        		<label>STATUS</label>
	        		<x-adminlte-input type="text" class="form-control" name="status">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-input>
	        	</div>

	        	<div >
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

	    <center><x-adminlte-button label="GUARDAR" theme="primary" icon="fas fa-key" type="submit" class="btn"/> </center>
	</div>
</form>
@endsection