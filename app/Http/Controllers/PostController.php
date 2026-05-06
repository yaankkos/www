<?php

namespace App\Http\Controllers;

use App\Models\Post2;

class PostController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function getOne($id)
    {
        $post = Post2::find($id); 
        return view('post.one', ['post' => $post]); 
    }
}

