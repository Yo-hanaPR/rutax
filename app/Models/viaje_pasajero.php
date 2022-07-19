<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viaje_pasajero extends Model
{
    use HasFactory;

    protected $table = 'viaje_pasajero';


   protected $fillable  = ['id_viaje','id_pasajero','promo','pago'];

   public function Duenoticket(){
    return $this->hasOne(pasajero::class,'id','id_pasajero');
  }

  public function TicketconDestinoA(){
   
     return $this->hasOne(viaje::class,'id_viaje','id_viaje');

     /*

     Como hice la relacion del ticket del viaje con la tabla de destinos si teníamos "por el medio" a la tabla VIAJES?

		Para poder mostrar el destino del viaje reservado en éste ticket se hicieron dos relaciones..
		Es decir, una tabla a otra tabla y esa otra tabla a otra tabla..

		Es decir, la tabla viaje_pasajero que es donde se almacenan las reservas, consultó a la tabla VIAJES mediante este métdo (TicketConDestinoA)..
		(como ves, aqui hace la relacion con la tabla VIAJE)

		Entonces en el modelo de la tabla VIAJE hay otra relacion que conecta a la tabla VIAJE con la tabla DESTINO.
		Esa funcion se llama ViajeA() (viaje.php 18)

		El punto es, que desde éste modelo tuve que llegar al modelo de destinos, porque mi intención es conocer el destino a donde irá el viaje que está reservado en éste ticket.

		Entonces, en éste modelo solo se definió LA RELACION entre la tabla de reservas con la tabla de viajes.. (Bueno, tambien se puso una relacion con la tabla de pasajeros pero ese es otro tema.. esa relacion fue mas sencilla)

		La tabla de viajes se encarga de la relacion con la tabla de destinos..

		En el modelo de VIAJES (viajes.php 18) verás la funcion ViajeA relacionada con el modelo de destinos.

		El punto es que para mostrar el resultado de éste recorrido (el nombre del destino, que es lo que me interesa en realidad), el dato en el front debe quedar asi:

		{{$reserva->TicketconDestinoA->ViajeA->nombre}}

		Siendo $reserva el registro de la base de datos que se envia desde el controlador, ya sabes.

		Como sabes, si defines una funcion en un modelo puedes ponerle una relacion, y acceder a dicha funcion como si fuera una propiedad del modelo.
		Esto se llaman PROPIEDADES DINÁMICAS de laravel.

		Entonces como ves $reserva "llama" a TicketconDestinoA que es ésta funcion.. (la relación, aqui mismo donde éstoy escribiendo ésta documentación). 
		Pero como en éste punto del recorrido ESTAMOS EN LA TABLA DE VIAJES ...(porque se supone que ESTA funcion está relacionando a ESTE modelo viaje_pasajero con la tabla de VIAJES) ... entonces ésta propiedad dinámica me devolverá un objeto (con más propiedades) que va a pertenecer a la tabla VIAJES. Es decir, un registro de la tabla VIAJES (relacionado por el ID, como indiqué en ésta funcion)

		Pero ahora, como lo que yo deseo es conocer el destino al que irá ESE viaje, entonces tengo que acceder a otra propiedad dinámica, en ésta ocasión, una propiedad dinámica del modelo de la tabla VIAJES.

		Y como recordarás, el modelo viajes (viajes.php) define una relacion con la tabla de destinos en la funcion ViajeA, por lo tanto, la función VIAJEA es la propiedad dinámica de la tabla de Viajes.


		Así que hasta éste punto ... $reserva->TicketconDestinoA->ViajeA  .... ésto me devuelve un objeto de la tabla de destino..
		Este objeto tiene propiedades, ya sabes.. Solo nos quedará acceder a la propiedad que queremos visualizar y ya...
		Al final quedó así:

		{{$reserva->TicketconDestinoA->ViajeA->nombre}}

     */

	
  }
}
