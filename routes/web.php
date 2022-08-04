<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});*/


Route::get('home', 'App\Http\Controllers\AdminController@home')->name('home');
Route::resources([
	'Destinos'=>'App\Http\Controllers\DestinosController',
	'Pasajeros'=>'App\Http\Controllers\PasajerosController',
	'Viajes'=>'App\Http\Controllers\ViajesController',
	'Reserva'=>'App\Http\Controllers\ReservaController',
	'Unidades'=>'App\Http\Controllers\UnidadesController',
	'Metodos_de_pago'=>'App\Http\Controllers\metodoPagoController',
	'Servicios'=>'App\Http\Controllers\ServiciosController',
	'Gastos'=>'App\Http\Controllers\GastosController',
	'Paradas'=>'App\Http\Controllers\ParadasController',
	'Itinerario'=>'App\Http\Controllers\ItinerarioController'
]);
Route::post('eliminareservas/{id}','App\Http\Controllers\ReservaController@eliminareservas')->name('eliminareservas');
/*
	Esta última ruta no me funcionaba.´Me salieron varios errores..
	Uno decía que la ruta App\Http\Controllers\ReservaController@eliminareservas')->name('eliminareservas'); no existía.

	Era porque realmente no existía en el archivo de routes.. Yo estaba definiendo mal el formulario que enviaba la peticion porque estaba enviandolo a un action ... (route, o url... usé los tres métodos y ninguno funcionó)... el action enviaba a controlador@eliminar reservas, y aunque SI existía el metodo eliminarreservas en el controlador ReservasController, NO HABIA COLOCADO LA RUTA EN EL ARCHIVO WEB.PHP

	Por eso decia que no existía.. Lo que pasa es que laravel no especifica. xD

	Despues que agregué ésta ruta, el problema era porque no encontraba la ruta si le pasaba un parametro.. Yo estaba loca buscando informacion de "porque laravel no reconoce mi ruta con parametro?"... porque si NO pasaba parametro, SI se encontraba la ruta... 
	Yo estaba trabajando con una prueba automatizada. Busqué los ejemplos más basicos de la documentacion de laravel para pasar parametros a las rutas. Copié la ruta en éste archivo, hice en la prueba una peticion GET a esa ruta SIN parametro, y si la encontraba.

	Pero cuando le ponia un parametro NO la encontraba..
	Y yo pensando que sería.. Al final encontré que PARA LAS PRUEBAS DE LAS RUTAS CON PARAMETRO, LA FORMA DE ESCRIBIR LA RUTA PARA HACER LA PETICION ES UN POCO "DIFERENTE" que la ruta que se pone un formulario...
	Porque mientras en la ruta tienes que pasarle el parametro en la URL y tambien en el segundo argumento de la funcion, asi....:


	$response = $this->post('eliminareservas/1',["id"=>'1']);

	(fíjate en el /1)

	... en el formulario tienes que escribir la ruta así: 

	<form method="post" action="{{url('eliminareservas',['id'=>$detalle_viaje->id_viaje])}}" role="form" >
	si el /1

	Entonces resumo:

	El problema empezó porque no definí la ruta en el archivo web.php

	Y despues la prueba no encontraba la ruta con el parametro, lo cual se arregló colocando /1

	Despues el problema fuer el metodo del formulario, el cual debe ser POST.

*/





/*
	Otro dato..
	Recuerda que el metodo ->get() te va a devolver una coleccion y las colecciones se acceden es con un bucle.. asi tipo [1], [2]...

	Si quieres recibir una INSTANCIA DEL MODELO para accederlo con las flechitas asi:
	$modelo->nombre
	Entonces debes usar el metodo first()

	Por ejemplo mira:

	$viaje1= viaje::where('id_viaje','2')->get();  
	eso me devuelve una coleccion, asi que cuando yo intente averiguar una de los datos del registro asi:
	$viaje1->fecha_salida;
	Me va a dar un error... Porque el metodo get me devuelve una coleccion..
	Especificamente lo que va a decir es algo como esto:

	Exception with message 'Property [fecha_salida] does not exist on this collection instance.'




	Lo que debes hacer en vez de usar ->get() es usar ->first(), así:
	$viaje1= viaje::where('id_viaje','2')->first();

	Aquí si devuelve una INSTANCIA DEL MODELO. y si la puedes acceder con las flechitas.
*/