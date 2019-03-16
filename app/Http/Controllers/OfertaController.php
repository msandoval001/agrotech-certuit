<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;
use App\Http\Resources\Oferta as OfertaResource;

class OfertaController extends Controller
{
    public function listarCultivos()
    {
        $cultivos = Oferta::all();
        if ($cultivos->isEmpty()) {
            return response()->json(['message' => 'Sin registros'], 404);
        }

        $coleccionCultivos = OfertaResource::collection($cultivos);

        return response()->json($coleccionCultivos, 200);
    }

    public function consultarUsuario($user)
    {

        if (!Oferta::find($user)) {
            return response()->json(['message' => 'Sin registros'], 404);
        }

        return response()->json(new OfertaResource(Oferta::find($user)), 200);
    }

    public function register(Request $request)
    {
        $rules = array([
            'nombre' => 'required|max:255'
        ]);

        $user = Oferta::create([
            'id_vendedor' => $request['id_vendedor'],
            'id_comprador' => $request["id_comprador"],
            'id_producto' => $request["id_producto"],
        ]);
        return response()->json([
            'message' => 'Oferta registrada exitosamente',
            'link' => url('/api/v1/oferta/' . $user->id),
        ]);
    }
}