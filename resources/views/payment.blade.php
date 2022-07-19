@extends('layouts.app')

@section('content')

<h1>Nuevo método de pago</h1>
<form method="post" action="{{url('newPayment')}}" role="form">
	{{csrf_field()}}

	<div class="container">
<div class="row">
	<div class="col-md-8">
		<label>Paypal </label>
			<input type="checkbox"   width="5" name="metodo[0]" id="Paypal">

		<label>Binance </label><input type="checkbox"  width="5" name="metodo[0]" id="Paypal" value="Binance">

		<label>Bolívares </label><input type="checkbox"  width="5" name="metodo[1]" id="Paypal" value="Bolivares">

		<label>Divisas </label><input type="checkbox"  width="5" name="metodo[2]" id="Paypal" value="divisas">

		<label>Reserve </label><input type="checkbox"  width="5" name="metodo[3]" id="Paypal" value="reserve">

	</div>

</div>
	<button type="submit" class="btn btn-success">GUARDAR</button>
</div>
</form>
@endsection