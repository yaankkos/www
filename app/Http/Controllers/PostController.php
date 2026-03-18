<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', ['year' => '2026', 'month' => '', 'day' => '18']);
	}
	}

?>