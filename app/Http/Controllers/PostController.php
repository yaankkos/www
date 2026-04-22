<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
         $users = DB::table('users')
            ->where('age', 30)
            ->skip(2)
            ->take(10)
            ->get();
        dump($users);
    }
    }
