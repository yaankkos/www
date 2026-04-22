<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
          $users = DB::table('users')->latest('updated_at')->get();
        dump($users);
    }
    }
