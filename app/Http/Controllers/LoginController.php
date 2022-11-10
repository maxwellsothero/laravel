<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repository\ClienteRepository;
use App\Repository\LoginRepository;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login($id,Request $request)
    {   
        
        $nome = $request->input('uname');
        if($nome){                
                $email = $request->input('email');
                $cpf = $request->input('cpf');
                $endereco = $request->input('endereco');                     
                
                    ClienteRepository::update($id,$nome,$email,$cpf,$endereco);
                        return redirect('/cliente')->with('sucesso', 'Pronto,Cliente Editado');
    }else
    {           
                $cliente = ClienteRepository::find($id);
                    return view('cliente/edit',[
                        'cliente' => $cliente,
                    ]);
    }        
             
    }


}