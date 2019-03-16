<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Cultivo;
use App\User;
use App\Oferta;

class DemandaCultivo extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [
             'id' => $this->id,
             'id_comprador' => User::find($this->id_comprador),
             'id_cultivo' => Cultivo::find($this->id_cultivo),
             'cantidad' => $this->cantidad,
             'id_oferta' => Oferta::find($this->id_oferta),
         ];
    }
}
