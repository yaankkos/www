<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        
        DB::table('posts')
		->where('id', 1)
		->increment('likes', 5);




    }
}
