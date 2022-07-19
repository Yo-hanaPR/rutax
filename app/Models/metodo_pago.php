<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metodo_pago extends Model
{
    use HasFactory;

 protected $table = 'metodo_pago';

   protected $fillable  = ['metodo','direccion','observaciones'];

   /*public function (){
    return $this->belongsTo(usuarios::class,'id_usuario','id');
  }*/
}
