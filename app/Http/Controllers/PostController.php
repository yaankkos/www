<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    
    public function getAll()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    

    public function delPost($id)
    {
        $post = Post::findOrFail($id);
        $title = $post->title;
        $post->delete();
        
        return redirect()->route('posts.index')
                         ->with('success', "Статья '{$title}' успешно удалена");
    }
    

    public function getDeletedPost()
    {
        $deletedPosts = Post::onlyTrashed()->get();
        return view('posts.deleted', compact('deletedPosts'));
    }
    

    public function restorePost($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);
        $title = $post->title;
        $post->restore();
        
        return redirect()->route('posts.deleted')
                         ->with('success', "Статья '{$title}' успешно восстановлена");
    }
}