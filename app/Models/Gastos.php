<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gastos extends Model
{
    use HasFactory;


    protected $table = 'gastos';

   protected $fillable  = ['id_viaje','id_servicio','costo'];
   public function porConceptoDe(){
   	return $this->hasOne(servicios::class,'id','id_servicio');
   }
////
   public function ViajeAsociado(){
    return $this->hasOne(viaje::class,'id_viaje','id_viaje');
  }
}
