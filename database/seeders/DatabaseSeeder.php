<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'title 1',
                'slug'  => 'post-1',
                'text'  => 'text text text 1',
            ],
            [
                'title' => 'title 2',
                'slug'  => 'post-2',
                'text'  => 'text text text 2',
            ],
            [
                'title' => 'title 3',
                'slug'  => 'post-3',
                'text'  => 'text text text 3',
            ],
        ]);
    }
}
