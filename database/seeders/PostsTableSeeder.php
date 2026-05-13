<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use App\Models\City;
use Illuminate\Support\Facades\Hash;

class TestDataSeeder extends Seeder
{
    public function run(): void
    {
        User::truncate();
        Profile::truncate();
        City::truncate();
        
        $cities = [
            ['name' => 'Москва'],
            ['name' => 'Санкт-Петербург'],
            ['name' => 'Новосибирск'],
            ['name' => 'Екатеринбург'],
            ['name' => 'Казань'],
            ['name' => 'Нижний Новгород'],
            ['name' => 'Челябинск'],
            ['name' => 'Омск'],
            ['name' => 'Самара'],
            ['name' => 'Ростов-на-Дону'],
        ];
        
        foreach ($cities as $cityData) {
            City::create($cityData);
        }
        
        $this->command->info('Создано городов: ' . City::count());
        
        $usersData = [
            [
                'name' => 'Иван Петров',
                'email' => 'ivan@example.com',
                'password' => 'password123',
                'age' => 25,
                'salary' => 50000,
                'city_id' => 1, 
                'profile' => [
                    'name' => 'Иван',
                    'surname' => 'Петров',
                    'email' => 'ivan.petrov@example.com'
                ]
            ],
            [
                'name' => 'Мария Сидорова',
                'email' => 'maria@example.com',
                'password' => 'password123',
                'age' => 30,
                'salary' => 60000,
                'city_id' => 2, 
                'profile' => [
                    'name' => 'Мария',
                    'surname' => 'Сидорова',
                    'email' => 'maria.sidorova@example.com'
                ]
            ],
            [
                'name' => 'Алексей Иванов',
                'email' => 'alexey@example.com',
                'password' => 'password123',
                'age' => 28,
                'salary' => 55000,
                'city_id' => 3,
                'profile' => [
                    'name' => 'Алексей',
                    'surname' => 'Иванов',
                    'email' => 'alexey.ivanov@example.com'
                ]
            ],
            [
                'name' => 'Елена Смирнова',
                'email' => 'elena@example.com',
                'password' => 'password123',
                'age' => 27,
                'salary' => 52000,
                'city_id' => 1, 
                'profile' => [
                    'name' => 'Елена',
                    'surname' => 'Смирнова',
                    'email' => 'elena.smirnova@example.com'
                ]
            ],
            [
                'name' => 'Дмитрий Козлов',
                'email' => 'dmitry@example.com',
                'password' => 'password123',
                'age' => 35,
                'salary' => 75000,
                'city_id' => 4, 
                'profile' => [
                    'name' => 'Дмитрий',
                    'surname' => 'Козлов',
                    'email' => 'dmitry.kozlov@example.com'
                ]
            ],
            [
                'name' => 'Анна Новикова',
                'email' => 'anna@example.com',
                'password' => 'password123',
                'age' => 24,
                'salary' => 48000,
                'city_id' => 5, 
                'profile' => [
                    'name' => 'Анна',
                    'surname' => 'Новикова',
                    'email' => 'anna.novikova@example.com'
                ]
            ],
            [
                'name' => 'Сергей Морозов',
                'email' => 'sergey@example.com',
                'password' => 'password123',
                'age' => 32,
                'salary' => 68000,
                'city_id' => 2, 
                'profile' => [
                    'name' => 'Сергей',
                    'surname' => 'Морозов',
                    'email' => 'sergey.morozov@example.com'
                ]
            ],
            [
                'name' => 'Татьяна Волкова',
                'email' => 'tatiana@example.com',
                'password' => 'password123',
                'age' => 29,
                'salary' => 58000,
                'city_id' => 6, 
                'profile' => [
                    'name' => 'Татьяна',
                    'surname' => 'Волкова',
                    'email' => 'tatiana.volkova@example.com'
                ]
            ],
            [
                'name' => 'Павел Соколов',
                'email' => 'pavel@example.com',
                'password' => 'password123',
                'age' => 31,
                'salary' => 62000,
                'city_id' => 7, 
                'profile' => [
                    'name' => 'Павел',
                    'surname' => 'Соколов',
                    'email' => 'pavel.sokolov@example.com'
                ]
            ],
            [
                'name' => 'Ольга Кузнецова',
                'email' => 'olga@example.com',
                'password' => 'password123',
                'age' => 26,
                'salary' => 51000,
                'city_id' => 8,
                'profile' => [
                    'name' => 'Ольга',
                    'surname' => 'Кузнецова',
                    'email' => 'olga.kuznetsova@example.com'
                ]
            ],
        ];
        
        foreach ($usersData as $userData) {
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => Hash::make($userData['password']),
                'age' => $userData['age'],
                'salary' => $userData['salary'],
                'city_id' => $userData['city_id']
            ]);
            
            if (isset($userData['profile'])) {
                $user->profile()->create($userData['profile']);
            }
        }
        
        $this->command->info('Создано пользователей: ' . User::count());
        $this->command->info('Создано профилей: ' . Profile::count());
        
        $this->command->newLine();
        $this->command->info('=== СТАТИСТИКА ===');
        $this->command->info('Города: ' . City::count());
        $this->command->info('Пользователи: ' . User::count());
        $this->command->info('Профили: ' . Profile::count());
        
        $this->command->newLine();
        $this->command->info('=== ПРИМЕРЫ СВЯЗЕЙ ===');
        
        $user = User::with(['city', 'profile'])->first();
        if ($user) {
            $this->command->info("Пользователь: {$user->name}");
            $this->command->info("Город: {$user->city->name}");
            $this->command->info("Профиль: {$user->profile->name} {$user->profile->surname}");
        }
    }
}