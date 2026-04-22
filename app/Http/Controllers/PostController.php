<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
       $users = DB::table('users')
            ->where('salary', 500)
            ->orWhere(function($query) {
                $query->whereBetween('age', [20, 30]);
            })
            ->get();
        dump($users);
    }
}
