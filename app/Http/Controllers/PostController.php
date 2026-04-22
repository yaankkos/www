<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
       $user = DB::table('users')->whereId(3)->get();
        dump($user);
    }
}