<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', ['val1' => '"value1', 'val2' => 'value2', 'val3' => '$value3']);
		}
	}

?>