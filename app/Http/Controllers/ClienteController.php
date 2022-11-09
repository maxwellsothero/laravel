<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repository\ClienteRepository;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function add(Request $request)
    {
           //dd($request);
        $nome = $request->input('nome');
        if($nome){
             $email = $request->input('email');
             $cpf = $request->input('cpf');
             $endereco = $request->input('endereco');
             
             ClienteRepository::insert(
                $nome,
                $email,
                $cpf,
                $endereco
             );
             return redirect('/cliente');
        }

        return view('cliente/add');
    }

    public function list()
    {   
        $clientes = ClienteRepository::findAll();
        return view('cliente/list',[
            'clientes' => $clientes,
        ]);
    }

    public function remove(string $id)
    {
        ClienteRepository::remove($id);
        return redirect('/cliente')->with('sucesso', 'Pronto,Cliente Excluido');
    }
}