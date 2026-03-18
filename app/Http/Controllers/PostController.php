<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', ['text' => 'нажми', 'href' => 'https://example.com']);
		}
	}

?>