<?php
declare(strict_types=1);

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class LoginRepository
{
   

    public static function login(string $email)
    {
        return DB::select("SELECT * FROM cliente WHERE email={'$email'}");
    }

   

    
}