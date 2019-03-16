<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromesaCompra extends Model
{
    protected $fillable = [
        'nombre',
    ];

    protected $table = 'cultivos';
}
