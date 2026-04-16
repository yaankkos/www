<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
	{
		public function show()
		{
			$query = DB::table('posts')->where('id', '>', 5)->toSql();
			dump($query);
		}
	}


