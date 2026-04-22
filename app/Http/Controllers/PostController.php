<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
      $users = DB::table('users')
            ->where(function($query) {
                $query->whereBetween('age', [20, 30]);
            })
            ->orWhere(function($query) {
                $query->whereBetween('salary', [400, 800]);
            })
            ->get();
        dump($users);
    }
}
