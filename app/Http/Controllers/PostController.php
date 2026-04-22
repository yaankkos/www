<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
       $users = DB::table('users')
            ->leftJoin('cities', 'users.city_id', '=', 'cities.id')
            ->select('users.*', 'cities.name as city_name')
            ->get();
        
        foreach ($users as $user) {
            dump($user->name . ' живет в городе: ' . $user->city_name);
        }
        
        return $users;
    
    }
}