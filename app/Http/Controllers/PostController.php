<?php

namespace App\Http\Controllers;

use App\Models\Post2;

class PostController extends Controller
{
    public function show()
    {
        $posts = Post2::all();
        $post = Post2::find(1);
        $recent = Post2::orderBy('date', 'desc')->get();
        
        $newPost = Post2::create([
            'title' => 'Новая статья',
            'descc' => 'Краткое описание',
            'text' => 'Полный текст...',
            'date' => now()
        ]);
        
        return response()->json([
            'posts' => $posts,
            'post' => $post,
            'recent' => $recent,
            'new_post' => $newPost
        ]);
    }
}