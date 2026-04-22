<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->where('age', '!=', 30)->get();
        dump($users);

    }
}
