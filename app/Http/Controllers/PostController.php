<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			return view('test', ['var1'=>'www', 'var2'=>'eee', 'var3'=>'rrr']);
		}
	}

?>
