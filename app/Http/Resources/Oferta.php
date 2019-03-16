<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Producto;
use App\User;


class Oferta extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'vendedor' => User::find($this->id_vendedor),
            'comprador' => User::find($this->id_comprador),
            'producto' =>  Producto::find($this->id_producto),
        ];
    }
}
