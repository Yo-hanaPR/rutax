<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destinos extends Model
{
    use HasFactory;

    protected $table = 'destinos';

   protected $fillable  = ['nombre','direccion','url','detalles'];
}
