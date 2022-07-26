<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itinerario extends Model
{
    use HasFactory;

    protected $table="Itinerarios";
    protected $fillable=['actividades','id_viaje','punto_salida','punto_regreso','id_parada','ruta'];

    public function ItinerarioDe(){
    return $this->hasOne(viaje::class,'id_viaje','id_viaje');
  }

  public function ParadaEn(){
    return $this->hasMany(paradas::class,'id','id_parada');
  }
}
