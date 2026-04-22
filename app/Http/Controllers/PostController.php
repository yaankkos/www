<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $randomUser = DB::table('users')->inRandomOrder()->first();
        dump($randomUser);
    }
    }
