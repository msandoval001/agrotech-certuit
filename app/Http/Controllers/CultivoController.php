<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cultivo;
use App\Http\Resources\Cultivo as CultivoResource;

class CultivoController extends Controller
{
    public function listarCultivos(){
        $cultivos = Cultivo::all();
        if($cultivos->isEmpty()){
            return response()->json(['message'=>'Sin registros'],404);
        }

        $coleccionCultivos = CultivoResource::collection($cultivos);

        return response()->json($coleccionCultivos,200);
    }

    public function consultarUsuario($user){

        if(!Cultivo::find($user)){
            return response()->json(['message' => 'Sin registros'], 404);
        }

        return response()->json(new CultivoResource(Cultivo::find($user)),200);
    }

    public function register(Request $request)
    {
        $rules = array ([
            'nombre' => 'required|max:255'
        ]);

        $user = Cultivo::create([
            'nombre' => $request['nombre']
        ]);
        return response()->json([
            'message' => 'Cultivo registrado exitosamente',
            'link'=> url('/api/v1/cultivos/'.$user->id),
        ]);
    }
}
