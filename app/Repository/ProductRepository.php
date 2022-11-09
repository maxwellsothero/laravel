<?php
declare(strict_types=1);

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class ProductRepository
{
    public static function findAll()
    {
        return DB::select('
            SELECT c.id as cat_id, c.nome as cat_nome,p.*
            FROM category c INNER JOIN product p 
            ON c.id = p.category_id;
        ');
    }

    public static function find($id)
    {
        return DB::select("SELECT * FROM product WHERE id={$id}");
    }

    public static function insert( string $nome, string $email, string $cpf, string $endereco)
    {
        DB::insert(
            "INSERT INTO product (nome, email, cpf, endereco) VALUES('{$nome}','{$email}','{$cpf}','{$endereco}')"
        );
    }

    public static function remove($id):void
    {
        DB::delete("DELETE FROM product WHERE id={$id}");
    }
    public static function update($id, string $nome, string $email, string $cpf, string $endereco):void
    {
        DB::update("UPDATE product SET 
        nome='{$nome}', 
        email='{$email}', 
        cpf='{$cpf}',
        endereco='{$endereco}' 
        WHERE id={$id}");
    }
}