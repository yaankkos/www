<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->whereIn('id', [1, 2, 3, 5])->get();
        dump($users);
    }
}