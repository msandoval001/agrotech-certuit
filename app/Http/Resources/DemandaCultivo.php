<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Cultivo;
use App\User;

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
             'id_oferta' => url("api/v1/ofertas?id={$this->id_oferta}"),
         ];
    }
}
