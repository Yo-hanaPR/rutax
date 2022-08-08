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
    .then((data) => this.message='Los datos se han guardado').catch((data)=> console.log('Error'));
    }





      }
}
</script>
<h1>Registrar nuevo destino</h1>

<form role="form" x-data="contactForm()" @submit.prevent="submitData">
	@method("post")
	{{csrf_field()}}


	<div class="container">
	    <div class="row justify-content-center">

	    	
	        <div class="col-md-5" >
	        	<h2>Ubicación</h2>

	        	<div >
	        		<label>Que lugar es?</label>

	        		<x-adminlte-input type="text" name="nombre" x-model="formData.nombre">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-input>

	        	</div>

	        	<div >

	        		<label>Como llegar ahí?</label>


	        		<x-adminlte-textarea type="text" name="direccion" x-model="formData.direccion">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-textarea>
	        	</div>

	        	<div >
	        		<label>Punto de referencia</label>

	        		<x-adminlte-input type="text" name="reference" x-model="formData.reference">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-input>
	        	</div>

	        	<div >
	        		<label>Cuanto tiempo toma llegar?</label>
	        		<x-adminlte-input type="text" name="distancia" x-model="formData.distancia">
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

	        		<x-adminlte-input type="text" name="url" x-model="formData.url">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-input>

	        	</div>

	        	<div >
	        		<label>Horario de trabajo</label>
	        		<x-adminlte-input type="text" name="business_hours" x-model="formData.business_hours">
	        			<x-slot name="prependSlot">
					        <div class="input-group-text">
					            <i class="fas fa-fire text-lightblue"></i>
					        </div>
					    </x-slot>
					</x-adminlte-input>
	        	</div>


	        	<div >
	        		<label>Teléfono</label>
	        		<x-adminlte-input type="number" name="phone" x-model="formData.phone">
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

	        		<x-adminlte-textarea name="detalles" label="Detalles" x-model="formData.detalles" rows=5 igroup-size="sm"
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

	        		<x-adminlte-textarea name="history" label="Historia" x-model="formData.Historia" rows=5 igroup-size="sm"
					    label-class="text-primary" placeholder="" disable-feedback>
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
	<h1 x-text="message"></h1>
</form>



@endsection
