<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'pZRLTZ0mWX',
            'email' => 'ITBQX0Kr4d@gmail.com',
            'password' => '$2y$12$/U7YCvuesubfxyF.pYsxxONvnlZLsOxuzKXQXdGSpkFtcT4jCQvYa',
            'surname' => 'Default Surname',
            'birth_date' => '2000-01-01',
            'age' => 25,  // Добавьте это поле
            'user_created_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
