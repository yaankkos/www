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
            ->whereIdOrSlug(1, 'my-page')
            ->first();

        dump($post);



    }
}
