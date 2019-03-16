<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemandaCultivo extends Model
{
    protected $fillable = [
        'id_comprador','id_cultivo','cantidad',"id_oferta",
    ];

    protected $table = 'demanda_cultivos';
}
