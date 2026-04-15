<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            'title' => Str::random(10),
            'slug'  => Str::random(10),
            'text'  => Str::random(50),
        ]);
    }
}
