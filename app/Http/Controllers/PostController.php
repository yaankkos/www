<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $user = DB::table('users')->whereIdOrAge(3, 20)->get();
        dump($user);
    }
    }
