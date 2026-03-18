<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', ['fruits' => ['apple' => 'яблоко', 'banana' => 'банан', 'orange' => 'апельси']]);
	}
	}

?>