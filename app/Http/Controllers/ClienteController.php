<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repository\ClienteRepository;

class ClienteController extends Controller
{
    public function add()
    {
        return view('cliente/add');
    }

    public function list()
    {   
        $clientes = ClienteRepository::findAll();
        return view('cliente/list',[
            'clientes' => $clientes,
        ]);
    }
}