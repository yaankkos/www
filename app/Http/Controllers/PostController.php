<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', ['numbers' => ['apple' => 'яблоко', 'banana' => 'банан', 'orange' => 'апельси']]);
	}
	}

?>