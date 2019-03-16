<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DemandaCultivo;
use App\Http\Resources\DemandaCultivo as DemandaCultivoResource;

class DemandaCultivoController extends Controller
{
    public function listarCultivos(){
        $cultivos = DemandaCultivo::all();
        if($cultivos->isEmpty()){
            return response()->json(['message'=>'Sin registros'],404);
        }

        $coleccionCultivos = DemandaCultivoResource::collection($cultivos);

        return response()->json($coleccionCultivos,200);
    }

    public function consultarUsuario($user){
        if(!DemandaCultivo::find($user)){
            return response()->json(['message' => 'Sin registros'], 404);
        }
        return response()->json(new DemandaCultivoResource(DemandaCultivo::find($user)),200);
    }

    public function register(Request $request)
    {
        $rules = array ([
            'nombre' => 'required|max:255'
        ]);

        $user = DemandaCultivo::create([
            'nombre' => $request['nombre']
        ]);
        return response()->json([
            'message' => 'Demanda de cultivo registrada exitosamente',
            'link'=> url('/api/v1/demandas/'.$user->id),
        ]);
    }
}
