<?php
declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthApiController extends Controller
{
    public function cadastro(Request $request)
    {   
        $request->validate([
            'name'=> 'required|string',
            'email'=> 'required|string|unique:users',
            'password'=> 'required|string'
        ]);

        $user =new User([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> password_hash($request->password, PASSWORD_ARGON2I),
        ]);

            $user->save();//criando o cliente "insert into ..."

        return response()->json($user,201);
    }

    public function login(Request $request)
    {   
        $request->validate([
            'email'=> 'required|string',
            'password'=> 'required|string'
        ]);
        $credenciais = request(['email','password']);
        //magica
        if(false === Auth::attempt($credenciais)){
            return response()->json('Email ou senha Invalidos');
        }
            //aqui o laravel entende que vc esta fazendo login e vai buscar o usuario no banco com a s credenciais
        $user = $request->user();
        $token = $user->createToken('Personal Acess Token');

        //salvar o token no banco para futuras comparaçoes
        $token->accessToken->save();

        return response()->json([
            'name'=> $user->name,
            'token'=> $token->plainTextToken,//pegar o token como string
           // 'expiracao'=> $token->

        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAcessToken()->delete();
        return response()->json('Desconectado com Sucesso');
    }
}

