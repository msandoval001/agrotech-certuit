<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Cultivo;
use App\User;

class Producto extends JsonResource
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
            'cultivo' => Cultivo::find($this->id_cultivo),
            'productor' => User::find($this->id_productor),
            'unidad' => $this->unidad, //1- Toneladas, 0- Cajas
            'cantidad' => $this->cantidad,
            'descripcion' => $this->descripcion,
            'fecha_siembra' => $this->fecha_siembra,
            'fecha_cosecha' => $this->fecha_cosecha,
            'estatus' => $this->estatus,
            'precio_unidad' => $this->precio_unidad
        ];    }
}
