<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
         $names = DB::table('users')->pluck('name');
dump($names);
    }
}