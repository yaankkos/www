<?php

namespace App\Http\Controllers;

use App\Models\Post2;

class PostController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function getAll()
    {
         $posts = Post2::orderBy('date', 'desc')->get();
    
    return view('posts.all', ['posts' => $posts]);
    }

}

