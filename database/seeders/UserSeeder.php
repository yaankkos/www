<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Иван Петров',
                'email' => 'ivan@example.com',
                'age' => 25,
                'salary' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Мария Сидорова',
                'email' => 'maria@example.com',
                'age' => 30,
                'salary' => 65000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Алексей Иванов',
                'email' => 'alexey@example.com',
                'age' => 28,
                'salary' => 55000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
