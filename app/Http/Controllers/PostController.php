<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
       DB::table('users')->delete();
        return "Все пользователи удалены";
    }
}