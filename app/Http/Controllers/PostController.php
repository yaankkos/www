<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', [
				'' => [1, 2, 3]
	]);
		}
	}

?>
