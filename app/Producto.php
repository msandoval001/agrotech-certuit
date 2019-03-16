<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'id_cultivo',
        'id_productor',
        'unidad',
        'cantidad',
        'descripcion',
        'fecha_siembra',
        'fecha_cosecha',
        'estatus',
        'precio_unidad'
    ];

    protected $table = 'productos';

}
