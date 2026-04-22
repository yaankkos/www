<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->whereNotBetween('age', [30, 40])->get();
        dump($users);
    }
}