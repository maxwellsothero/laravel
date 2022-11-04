<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TesteController extends Controller
{
    public function login()    
    {
        $alunos = ['maxwell','cecilia','laerte','jaques'];  

        $categorias = DB::select('SELECT * FROM category');
        return view('teste/login',[
            'nome'=> 'Maxwell',
            'alunos'=> $alunos,
            'categorias'=> $categorias,
        ]);//função do laravel
        
    }
}