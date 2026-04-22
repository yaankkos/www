<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
         DB::table('users')->insert([
            'name' => 'Новый пользователь',
            'email' => 'new@mail.com',
            'age' => 25,
            'salary' => 1000
        ]);
        return "Пользователь добавлен";
    }
    }
