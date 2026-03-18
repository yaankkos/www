<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', ['num' => [10, 20, 30, 40, 50]]);
	}
	}

?>