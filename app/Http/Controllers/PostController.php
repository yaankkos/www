<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $email = DB::table('users')->where('id', 3)->value('email');
dump($email);
    }
}