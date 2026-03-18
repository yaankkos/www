<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', ['num' => [3, 5, 6, 0, 2, 9]]);
	}
	}

?>