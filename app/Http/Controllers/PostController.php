<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
       DB::table('users')->where('id', 5)->delete();
        return "Пользователь с id=5 удален";
    }
}