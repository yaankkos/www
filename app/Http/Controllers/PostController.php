<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
       DB::table('users')->where('age', 30)->increment('salary', 100);
        return "Зарплата увеличена на 100 для пользователей с возрастом 30";
    }
}