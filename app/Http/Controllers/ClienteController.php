<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repository\ClienteRepository;
use App\Repository\SmsApi;
use App\Repository\WhatsappApi;
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
             $conteudo = 'Cadastramos o Cliente com o Nome: 
                '.$nome.', CPF: 
                '.$cpf.' e Email: 
                '.$email.'<< Esperamos Ansiosos pelo lucro >>';
            
             WhatsappApi::msgtext($conteudo);
             SmsApi::envia(); 
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
        WhatsappApi::msgtext('Cliente Excluido Com Sucesso !!!');
        SmsApi::excluir(); 
        
        return redirect('/cliente')->with('sucesso', 'Pronto,Cliente Excluido');
        
    }

    public function update($id,Request $request)
    {    
        $nome = $request->input('nome');
            if($nome){                
                    $email = $request->input('email');
                    $cpf = $request->input('cpf');
                    $endereco = $request->input('endereco');                     
                    
                        ClienteRepository::update($id,$nome,$email,$cpf,$endereco);
                        WhatsappApi::msgtext('Cliente Atualizado Com Sucesso !!!');
                      
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