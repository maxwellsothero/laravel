<?php
declare(strict_types=1);

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class ClienteRepository
{
    public static function findAll()
    {
        return DB::select('SELECT * FROM cliente');
    }

    public static function find($id)
    {
        return DB::select("SELECT * FROM cliente WHERE id={$id}");
    }

    public static function insert( string $nome, string $email, string $cpf, string $endereco)
    {
        DB::insert(
            "INSERT INTO cliente (nome, email, cpf, endereco) VALUES('{$nome}','{$email}','{$cpf}','{$endereco}')"
        );
        
    }

    public static function remove($id):void
    {
        DB::delete("DELETE FROM cliente WHERE id={$id}");
    }
    public static function update($id, string $nome, string $email, string $cpf, string $endereco):void
    {
        DB::update("UPDATE cliente SET 
        nome='{$nome}', 
        email='{$email}', 
        cpf='{$cpf}',
        endereco='{$endereco}' 
        WHERE id={$id}");
    }
}