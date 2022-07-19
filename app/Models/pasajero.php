<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasajero extends Model
{
    use HasFactory;

    protected $table = 'pasajero';

   protected $fillable  = ['nombre','apellido','cedula','direccion','telefono','correo','edad','id_metodo_pago'];
  

  public function SuMetododePagoes(){
    return $this->hasOne(metodo_pago::class,'id_mp','id_metodo_pago');
  }

 //////////////////
  public function ViajesComprados(){
  	return $this->hasMany(viaje_pasajero::class,'id_pasajero','id');
  }
  /*
	Para hacer la relacion en la tabla pasajero para poder ver a cual viaje es que iba a viajar cada pasajero, tuve que llegar desde la tabla pasajero hasta la tabla destino (porque mi intención fué ver el NOMBRE DEL DESTINO del viaje al que ESTE pasajero se registró.... y como los destinos están en una tabla diferente que no está relacionada por ningun lado con la tabla de pasajeros.....
	Me tocó entonces saltar de tabla en tabla...

	La tabla pasajero se conecta con viaje_pasajero
	la tabla viaje_pasajero se conecta con viaje
	y la tabla viaje si se conecta con destino.

	Entonces así pude llegar:
	
	Recuerda que entre dos entidades hay "dos relaciones" digamos.. dos direcciones mejor dicho... porque

	Cada pasajero puede comprar VARIOS TICKETS.
	Pero Cada ticket (de esos muchos ticket) le pertenece a un solo pasajero...

	Es decir, la relacion de PASAJERO A TICKET es Muchos a muchos, muchas personas pueden comprar muchos tickets.

	Pero la relacion de ticket a pasajero es de uno a uno.
	Porque cada ticket solo le pertenece al pasajero que lo compró.

	Entonces, en laravel ésto se representa (se programa) con las funciones en los modelos.. Funciones como ViajesComprados (que es ésta que está aquí arriba)... sabes? esas que usan hasMany, belongsTo....

	La relacion entre ambas tablas (a nivel de codigo) se relaciona con esa función en el modelo. Pero como dijimos que la relacion es BIDIRECCIONAL... (es decir, de pasajeros a ticket (M:M) y de ticket a pasajero (1:1) ) entonces en cada uno de los modelos (modelo viaje_pasajero y modelo pasajero) tiene que haber un metodo..

	busca el modelo viaje_pasajero para que veas que hay una funcion que se conecta con la tabla pasajero. Y fíjate en éste modelo (pasajero) que hay una funcion ViajesComprados que se conecta con el modelo viaje_pasajero.


	Entonces, ahí ya tengo mi primer "SALTO"
	Porque recuerda que para "saltar" a la tabla viaje_pasajero necesito ACCEDER A LA PROPIEDAD DINAMICA DE MI MODELO, en éste caso, la propiedad dinámica del modelo pasajero.
	y cual es la propiedad dinámica? 
	el nombre de la funcion...
	Recuerda que podemos llamar a la función commo si fuera una propiedad del objeto de datos. Esto se llaman PROPIEDADES DINAMICAS.
	éstas propiedades dinámicas deben retornar una instancia de relacion.. es decir, me va a retornar los datos de la Otra tabla a la que me estoy relacionando..
	es decir, en éste caso, por haber saltado a la tabla de viaje_pasajero (que es donde yo pongo los tickets), ésta funcion me va a estar trayendo los datos de la tabla viaje_pasajero..

	Vas bien? Continúo.

	Una vez que estoy en viaje_pasajero, tengo que dar el "segundo salto". Recuerda que me dirijo a la tabla de DESTINO.

	La tabla viaje_pasajero (donde estoy actualmente) se conecta con la tabla viaje (que a su vez se conecta con la tabla destino)

	Entonces al esas dos tablas estar relacionadas, de nuevo va a existir una funcion de relacion en cada modelo de esas tablas..

	Es decir, viaje_pasajero tendrá una función que se conecta a VIAJE, y la tabla VIAJE tiene una funcion que se conecta a la tabla viaje_pasajero.

	Busca en el modelo viaje_pasajero para que veas la funcion TicketconDestinoA que se conecta con la tabla VIAJE, y busca en el modelo VIAJE para que veas la función PasajerosqueViajan que se conecta con la tabla viaje_pasajero.

	Entonces, para saltar a la tabla viaje, necesito llamar a la propiedad dinámica del modelo DONDE ESTOY ACTUALMENTE, es decir, viaje_pasajero.

	Pero como la voy a llamar? donde la llamo? como la llamo?
	
	Así {{$pasajero->ViajesComprados[$i]->TicketconDestinoA

		ViajesComprados es mi primer SALTO, y de ese salto, "saltaré" de nuevo asi que directamente llamo a TicketconDestinoA (que es el "salto" hacia la tabla de viaje)


	Ok, llego a la tabla de viaje.. la tabla viaje se relaciona con destino. lo que me interesa en realidad es conocer el nombre del destino del viaje reservado por el pasajero...

	Entonces me toca saltar de nuevoo.. ésta vez desde viaje a destino.

	De nuevo, viaje y destino están relacionadas.
	Al estar relacionadas, ambas tienen una función de relación. Busca en el modelo viaje la función ViajeA para que veas, y busca en el modelo Destino la funcion ....... ah bueno, no definí función en el modelo Destino, pero igual, la tabla Destino es a donde quería llegar al final.. 
	Si tengo el salto hacia la tabla destino, entonces saltaré, y directamente ahí buscaré el atributo que me interesa..
	Como repreesento ésto con blade de laravel?

	así quedaron los "SALTOS" al final:

	{{$pasajero->ViajesComprados[$i]->TicketconDestinoA->ViajeA->nombre}}

	)

  */
/////////////////
}
