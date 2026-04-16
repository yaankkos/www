<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $posts = DB::table('posts')
            ->whereNotIn('id', [1, 2, 3])
            ->get();

        dump($posts);


    }
}
