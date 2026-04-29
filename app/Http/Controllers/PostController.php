<?php

namespace App\Http\Controllers;

use App\Models\Post2;

class PostController extends Controller
{
    /**
     * Получение списка всех статей
     * Доступен по адресу /post/all/
     *
     * @return \Illuminate\View\View
     */
    public function getAll()
    {
        $posts = Post2::all();
        
        return view('post.all', ['posts' => $posts]);
    }
}