<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', ['numbers' => [14, 24, 43, 654, 53]]);
	}
	}

?>