<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', ['name' => 'Андрей', 'age' => '20', 'salary' => '80000 рублей']);
		}
	}

?>