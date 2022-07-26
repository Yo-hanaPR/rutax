<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paradas extends Model
{
    use HasFactory;
    protected $table="paradas";
    protected $fillable=['lugar','pto_referencia','horario','servicio','metodo_pago'];

    public function ParadaProgramadaPara(){
    return $this->hasOne(itinerario::class,'id_parada','id');
  }
}
