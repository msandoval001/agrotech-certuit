<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\User as UserResource;

class UserController extends Controller
{
    public function listarUsuarios()
    {
        $usuarios = User::all();
        if($usuarios->isEmpty()){
            return response()->json(['message' => 'Sin registros'],404);
        }

        $colleccionUsuarios = UserResource::collection($usuarios);

        return response()->json($colleccionUsuarios,200);
    }

    public function consultarUsuario($user){

        if(!User::find($user)){
            return response()->json(['message' => 'Sin registros'], 404);
        }

        return response()->json(new UserResource(User::find($user)),200);
    }

    public function register(Request $request)
    {
        $rules = array ([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'productor' => 'required',
            'comprador' => 'required',
            'distribuidor' => 'required'


        ]);

            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' =>  bcrypt($request['password']),
                'productor' => $request['productor'],
                'comprador' => $request['comprador'],
                'distribuidor' => $request['distribuidor']

            ]);
            return response()->json([
                'message' => 'Usuario registrado exitosamente',
                'link'=> url('/api/v1/users/'.$user->id),
            ]);
    }
}
