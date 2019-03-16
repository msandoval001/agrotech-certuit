<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cultivo extends Model
{
    protected $fillable = [
        'nombre',
    ];

    protected $table = 'cultivos';

}
