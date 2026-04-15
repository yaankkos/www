<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Первый пост',
                'slug' => 'first-post',
                'likes' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Второй пост',
                'slug' => 'second-post',
                'likes' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Третий пост',
                'slug' => 'third-post',
                'likes' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
