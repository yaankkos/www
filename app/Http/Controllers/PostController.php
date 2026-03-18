<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', ['num' => [1, 2, 3, 4, 5, 6, 7, 8, 9]]);
	}
	}

?>