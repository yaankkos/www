<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        DB::table('users')->insert([
            [
                'name' => 'Массовый 1',
                'email' => 'mass1@mail.com',
                'age' => 22,
                'salary' => 800
            ],
            [
                'name' => 'Массовый 2',
                'email' => 'mass2@mail.com',
                'age' => 24,
                'salary' => 900
            ],
            [
                'name' => 'Массовый 3',
                'email' => 'mass3@mail.com',
                'age' => 26,
                'salary' => 1000
            ]
        ]);
        return "Добавлено 3 пользователя";
    }
    }
