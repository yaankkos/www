<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
	{
		public function show()
		{
          $posts = DB::table('posts')
		->where('id', '=', 3)
		->orWhere(function($query) {
			$query
				->where('likes', '>', 10)
				->where('likes', '<', 50);
		})
	->get();

		}
	}
