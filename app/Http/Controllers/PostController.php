<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $randomUsers = DB::table('users')
            ->whereBetween('age', [20, 30])
            ->inRandomOrder()
            ->get();
        dump($randomUsers);
        
        $randomUser = DB::table('users')
            ->whereBetween('age', [20, 30])
            ->inRandomOrder()
            ->first();
        dump($randomUser);
    }
    }
