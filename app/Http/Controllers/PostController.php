<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', ['employees' => 
			['name' => 'user1', 
			'surname' => 'surname1', 
			'salary' => 1000], 
			['name' => 'user2',
			'surname' => 'surname2',
			'salary' => 2000,
		],
		[
			'name' => 'user3',
			'surname' => 'surname3',
			'salary' => 3000,
		],
]);
	}
	}

?>