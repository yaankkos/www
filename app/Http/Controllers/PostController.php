<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
               $users = DB::table('users')->select('name', 'email')->get();
        dump($users);


    }
}
