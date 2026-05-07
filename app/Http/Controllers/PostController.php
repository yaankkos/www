<?php

namespace App\Http\Controllers;

use App\Models\Post2;
use Illuminate\Http\Request;

class PostController extends Controller
{
     /**
     * Создание новой статьи.
     */
    public function newPost(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('test.newPost');
        }

        $validated = $request->validate([
            'title' => 'required|max:255',
            'desc'  => 'required|max:500',
            'date'  => 'required|date',
            'text'  => 'required',
        ]);


        Post2::create($validated);


        return redirect()->route('posts.all')->with('success', 'Статья успешно создана!');
    }
}



