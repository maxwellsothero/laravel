<?php
declare(strict_types=1);

namespace   App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repository\ClienteRepository;
use App\Repository\ProductRepository;
use Illuminate\Http\Request;

Class ProductApiController extends Controller
{
    public function getList()
    {   
        $produtos = ProductRepository::findAll();
        return response()->json($produtos);
    }

    public function getOne($id)
    {
        $produto = ProductRepository::find($id);
        return response()->json($produto);
    }

    public function create(Request $resquest)
    {
        ClienteRepository::insert(
            $resquest->nome,
            $resquest->email,
            $resquest->cpf,
            $resquest->endereco
        );
        return response()->json([],201);
    }

    public function remove($id)
    {
        ClienteRepository::remove($id);
        return response()->json(null,204);
    }

    public function update($id, Request $request)
    {
        ClienteRepository::update(
            $id,
            $request->nome,
            $request->email,
            $request->cpf,
            $request->endereco
        );

    }
}