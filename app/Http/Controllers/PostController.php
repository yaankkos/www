<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', ['animals' => 'кот, собака, хомяк, лошадь, крокодил']);
		}
	}

?>