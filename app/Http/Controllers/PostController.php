<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $post = DB::table('posts')
            ->whereSlug('my-page')
            ->get();

        dump($post);

    }
}
