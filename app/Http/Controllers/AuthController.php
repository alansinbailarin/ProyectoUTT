<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        return $request->user();
    }

    public function register(Request $request)
    {
        $request->validate([
            'matricula' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $result = User::create([
            'matricula' => $request['matricula'],
            'name' => $request['name'],
            'email' => $request['email'],
            'password' =>Hash::make($request['password'])
        ]);

        return $result;
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);

        if ( !Auth::attempt($credentials)) {
            return response()->json([
                'mensaje' => 'Las credenciales proporcionadas no coinciden con nuestros registros.'
            ], 401);
        }
        /* @var \App\Models\MyUserModel $user */
        $user = Auth::user();
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'token'=>$token
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['mensaje'=>'éxito']);
    }
}