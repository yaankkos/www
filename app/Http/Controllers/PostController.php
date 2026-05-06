<?php

namespace App\Http\Controllers;

use App\Models\Post2;

class PostController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function getAll($order = 'date')
    {

        $allowedFields = ['id', 'title', 'date'];
        
        if (!in_array($order, $allowedFields)) {
            $order = 'date';
        }

        $posts = Post2::orderBy($order, 'desc')->get();
        
        return view('posts.all', [
            'posts' => $posts,
            'currentOrder' => $order
        ]);
    }
    
    public function getOne($id)
    {
        $post = Post2::find($id);
        return view('posts.one', ['post' => $post]);
    }

}

