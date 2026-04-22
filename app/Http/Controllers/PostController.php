<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')
            ->whereBetween('age', [20, 30])
            ->get();
        dump($users);

    }
}
