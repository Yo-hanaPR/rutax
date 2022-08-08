@extends('adminlte::page')

@section('content')
<script type="text/javascript">
	
	function contactForm() {
       
        return {
        formData: {
          nombre: '',
          direccion: '',
          url: '',
          detalles: '',
          distancia:'2 horas',
          phone:'123123',
          reference:'al lado de carenero',
          business_hours:'Aboerto de 8 a 9',
          history:'Es un pueblo lindo'
        },
        message:'',
         submitData() {
      fetch( '{{route("Destinos.store")}}', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      },
      body: JSON.stringify(this.formData)
    })
    .then((data) => console.log(data)).catch((data)=> console.log('Error'));
    }





      }
}
</script>
<h1>Registrar nuevo destino</h1>

<form role="form" x-data="contactForm()" @submit.prevent="submitData">
	@method("post")
	{{csrf_field()}}

	<h1 x-text="formData.nombre"></h1>

	<div class="container">
	    <div class="row justify-content-center">

	    	
	        <div class="col-md-5" >
	        	<h2>Ubicación</h2>

	        	<div >
	        		<label>Que lugar es?</label>
<<<<<<< HEAD
	        		<input type="text" class="form-control" name="nombre" x-model="formData.nombre">
=======
	        		<x-adminlte-input type="text" name="nombre">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-input>
>>>>>>> nazareth
	        	</div>

	        	<div >

	        		<label>Como llegar ahí?</label>
<<<<<<< HEAD
	        		<textarea name="direccion" class="form-control" x-model="formData.direccion"></textarea>
=======

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

>>>>>>> nazareth
	        	</div>


	        </div>

	        <div class="col-md-5">

	        <h2>Contactos</h2>

	        	<div >
	        		<label>Documentación en la web</label>
<<<<<<< HEAD
	        		<input type="text" name="url" class="form-control" x-model="formData.url">
=======
	        		<x-adminlte-input type="text" name="url">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-input>
>>>>>>> nazareth
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

<<<<<<< HEAD
	        	<div class="col-md-4">
	        		<label>Detalles</label>
	        		<input type="text" name="detalles" class="form-control" x-model="formData.detalles">
=======
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
					    label-class="text-primary" placeholder="
					    Dejan llevar comidas? 
					    Tiene piscina? 
					    Posada? 
					    Los comercios reciben BS? 
					    Cual es la temperatura del agua?
					   	Es de fuerte oleaje?
					   	Tiene sanitarios? Duchas? Estacionamiento?
					   	Tiene Piedras? Tiene erizos?
					   	Es grande la playa?
					   	Se puede hacer buceo? Snorkling? Surfing?" disable-feedback>
					    <x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-lg fa-comment-dots text-primary"></i>
					        </div>
					    </x-slot>
					   	
					</x-adminlte-textarea>
	        	</div>

	        	<div class="col-md-8">

	        		<x-adminlte-textarea name="history" label="Historia" rows=5 igroup-size="sm"
					    label-class="text-primary" placeholder="" disable-feedback>
					    <x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-lg fa-comment-dots text-primary"></i>
					        </div>
					    </x-slot>
					    
					</x-adminlte-textarea>
>>>>>>> nazareth
	        	</div>
	        </div>
	    </div>
	    	<center><x-adminlte-button label="GUARDAR" theme="primary" icon="fas fa-key" type="submit" class="btn"/> </center>
	</div>
	<h1 x-model="message"></h1>
</form>

<<<<<<< HEAD
@endsection


=======

@endsection
>>>>>>> nazareth
