
@extends('layouts.app')

@section('content')
<script type="text/javascript">
	
	function contactForm() {
        /**
			Dentro de ésta funcion puedo empezar a programar con alpine

        */
        return {
        formData: {
          nombre: '',
          direccion: '',
          url: '',
          detalles: ''
        },
        message:'',
         submitData() {
      fetch( '{{route("Destinos.store")}}'    , {
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

<!--input type="hidden" name="ruta" value="{{route('Destinos.store')}}" id="ruta"-->
<form role="form" x-data="contactForm()" @submit.prevent="submitData">
	@method("post")
	{{csrf_field()}}

	

	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8" >
	        	<div class="col-md-4">
	        		<label>Que lugar es?</label>
	        		<input type="text" class="form-control" name="nombre" x-model="FormData.nombre">
	        	</div>

	        	<div class="col-md-4">
	        		<label>Como llegar ahí?</label>
	        		<textarea name="direccion" class="form-control" x-model="FormData.direccion"></textarea>
	        	</div>


	        	<div class="col-md-4">
	        		<label>Documentación en la web</label>
	        		<input type="text" name="url" class="form-control" x-model="FormData.url">
	        	</div>


	        	<div class="col-md-4">
	        		<label>Detalles</label>
	        		<input type="text" name="detalles" class="form-control" x-model="FormData.detalles">
	        	</div>
	        </div>
	    </div>
	    	<button type="submit" class="btn btn-success">Guardar</button>
	</div>
	<h1 x-model="message"></h1>
</form>

@endsection


