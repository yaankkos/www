<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')
            ->where('age', '>', 30)
            ->oldest('updated_at')
            ->get();
        dump($users);
    }
    }
