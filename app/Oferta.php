<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable = [
    'id' ,
    'id_vendedor' ,
    'id_comprador' ,
    'id_producto'
    ];

    protected $table = 'ofertas';
}
