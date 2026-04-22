<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
         $id = DB::table('users')->insertGetId([
            'name' => 'Пользователь с ID',
            'email' => 'id@mail.com',
            'age' => 28,
            'salary' => 1200
        ]);
        return "ID вставленного пользователя: " . $id;
    }
    }
