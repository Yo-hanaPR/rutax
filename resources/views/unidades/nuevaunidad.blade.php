@extends('adminlte::page')


@section('content')

<h1>Nueva unidad</h1>
<form method="post" action="{{url('Unidades')}}" role="form">
	{{csrf_field()}}

	<div class="container">
	    <div class="row justify-content-rigth">
	        <div class="col-md-6" >
	        	<label>Tipo</label>
	        	<input type="text" class="form-control" name="tipo">
	        </div>

	        <div class="col-md-6" >
	        	<label>Placa</label>
	        	<input type="text" class="form-control" name="placa">
	        </div>

	        <div class="col-md-6" >
	        	<label>Color</label>
	        	<input type="text" class="form-control" name="color">
	        </div>

	        <div class="col-md-6" >
	        	<label>Cantidad de puestos</label>
	        	<input type="text" class="form-control" name="cant_puestos">
	        </div>
	    </div>
	</div>

	<center><x-adminlte-button label="GUARDAR" theme="primary" icon="fas fa-key" type="submit" class="btn"/> </center>
</form>

@endsection