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
}