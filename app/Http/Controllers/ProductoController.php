<?php

namespace App\Http\Controllers;

use App\Http\Resources\Cultivo;
use App\Http\Resources\ProductoWrapper;
use Illuminate\Http\Request;
use App\Producto;
use App\Http\Resources\Producto as ProductoResource;

class ProductoController extends Controller
{

    public function listarProductos(){
        $cultivos = Producto::all();
        if($cultivos->isEmpty()){
            return response()->json(['message'=>'Sin registros'],404);
        }

        $coleccionCultivos = ProductoResource::collection($cultivos);









        return response()->json($coleccionCultivos,200);
    }

    public function consultarUsuario($user){

        if(!Producto::find($user)){
            return response()->json(['message' => 'Sin registros'], 404);
        }




        return response()->json(Producto::find($user),200);
    }

    public function register(Request $request)
    {
        $user = Producto::create([
            'id_cultivo' => $request['id_cultivo'],
            'id_productor' => $request['id_productor'],
            'unidad' => $request['unidad'],
            'cantidad' => $request['cantidad'],
            'descripcion' => $request['descripcion'],
            'fecha_siembra' => $request['fecha_siembra'],
            'fecha_cosecha' => $request['fecha_cosecha'],
            'estatus' => $request['estatus'],
            'precio_unidad' => $request['precio_unidad']
        ]);
        return response()->json([
            'message' => 'Producto registrado exitosamente',
            'link'=> url('/api/v1/productos/'.$user->id),
        ]);
    }

}
