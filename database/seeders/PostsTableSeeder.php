<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'title' => 'Первая статья',
            'content' => 'Содержание первой статьи'
        ]);
        
        Post::create([
            'title' => 'Вторая статья',
            'content' => 'Содержание второй статьи'
        ]);
    }
}