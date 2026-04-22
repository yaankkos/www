<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
                DB::enableQueryLog();
        DB::table('posts')->where('id', '!=', 3)->get();
        $logs = DB::getQueryLog();
        $time = $logs[0]['time'];
        dump("Запрос выполнен за {$time} мс");


    }
}
