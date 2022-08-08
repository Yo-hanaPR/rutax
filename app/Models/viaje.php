<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viaje extends Model
{
    use HasFactory;

    protected $table = 'viaje';
    protected $primaryKey= 'id_viaje';


   protected $fillable  = ['id_destino','precio_fijo','fecha_salida','hora_salida','id_unidad','ganancia_total'];

   public function ViajeA(){
    return $this->hasOne(destinos::class,'id','id_destino');
  }
  public function Unidad(){
    return $this->hasOne(Unidades::class,'id','id_unidad');
  }
  public function PasajerosqueViajan(){
    return $this->hasMany(viaje_pasajero::class,'id_viaje','id_viaje');
  }
  public function ItinerarioViaje(){
    return $this->hasOne(Itinerario::class,'id_viaje','id_viaje');
  }
  ////

  public function GastosDelViaje(){
    return $this->hasMany(gastos::class,'id_viaje','id_viaje'); //hasMany devuelve una coleccion..
    /*
    LO QUE DEVUELVE HASMANY NO SE PUEDE ACCEDER ASI:
    $viaje->GastosDelViaje->id_viaje
    porque hasMany devuelve una coleccion, que es como un array, y en los arrays se accede por [0], [1]...
    */
  }

  
}
