<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
         DB::table('users')->where('id', 5)->update([
            'name' => 'Измененное имя',
            'email' => 'newemail@mail.com',
            'age' => 35,
            'salary' => 1500
        ]);
        return "Пользователь с id=5 обновлен";
    }
}