
@extends('layouts.app')

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
	        <div class="col-md-8" >
	        	<div class="col-md-4">
	        		<label>Que lugar es?</label>
	        		<input type="text" class="form-control" name="nombre" x-model="formData.nombre">
	        	</div>

	        	<div class="col-md-4">
	        		<label>Como llegar ahí?</label>
	        		<textarea name="direccion" class="form-control" x-model="formData.direccion"></textarea>
	        	</div>


	        	<div class="col-md-4">
	        		<label>Documentación en la web</label>
	        		<input type="text" name="url" class="form-control" x-model="formData.url">
	        	</div>


	        	<div class="col-md-4">
	        		<label>Detalles</label>
	        		<input type="text" name="detalles" class="form-control" x-model="formData.detalles">
	        	</div>
	        </div>
	    </div>
	    	<button type="submit" class="btn btn-success">Guardar</button>
	</div>
	<h1 x-model="message"></h1>
</form>

@endsection


