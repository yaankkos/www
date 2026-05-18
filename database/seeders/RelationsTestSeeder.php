<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;
use App\Models\Role;
use App\Models\Account;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RelationsTestSeeder extends Seeder
{
    public function run()
    {
        // Проверка наличия таблиц
        if (!Schema::hasTable('users')) {
            throw new \Exception('Таблицы не созданы! Выполните: php artisan migrate');
        }
        
        // Очистка таблиц
        try {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            if (Schema::hasTable('comments')) Comment::truncate();
            if (Schema::hasTable('posts')) Post::truncate();
            if (Schema::hasTable('users')) User::truncate();
            if (Schema::hasTable('roles')) Role::truncate();
            if (Schema::hasTable('accounts')) Account::truncate();
            if (Schema::hasTable('role_user')) DB::table('role_user')->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        } catch (\Exception $e) {
            // Пропускаем ошибки очистки
        }
        
        // Создание данных
        $post1 = Post::create(['title' => 'Пост 1', 'body' => 'Тело поста 1']);
        $post2 = Post::create(['title' => 'Пост 2', 'body' => 'Тело поста 2']);
        
        $user1 = User::create([
            'name' => 'Иван', 
            'email' => 'ivan@test.ru', 
            'password' => bcrypt('password')
        ]);
        
        $user2 = User::create([
            'name' => 'Мария', 
            'email' => 'maria@test.ru', 
            'password' => bcrypt('password')
        ]);
        
        $roleAdmin = Role::create(['name' => 'Админ']);
        $roleEditor = Role::create(['name' => 'Редактор']);
        $roleUser = Role::create(['name' => 'Пользователь']);
        
        $account1 = Account::create(['title' => 'Аккаунт Ивана']);
        
        // 1. save()
        $comment1 = new Comment(['message' => 'Первый комментарий через save()']);
        $post1->comments()->save($comment1);
        
        // 2. saveMany()
        $post1->comments()->saveMany([
            new Comment(['message' => 'Второй комментарий через saveMany()']),
            new Comment(['message' => 'Третий комментарий через saveMany()']),
        ]);
        
        // 3. create()
        $post2->comments()->create(['message' => 'Комментарий через create()']);
        
        // 4. associate()
        $user1->account()->associate($account1);
        $user1->save();
        
        // 5. dissociate()
        $user1->account()->dissociate();
        $user1->save();
        
        // 6. attach()
        $user1->roles()->attach($roleAdmin->id);
        $user1->roles()->attach($roleEditor->id, ['expires' => '2025-12-31']);
        
        // 7. detach()
        $user1->roles()->detach($roleAdmin->id);
        
        // 8. sync()
        $user1->roles()->sync([$roleEditor->id, $roleUser->id]);
        
        // 9. toggle()
        $user1->roles()->toggle([$roleUser->id]);
        $user1->roles()->toggle([$roleUser->id]);
        
        // 10. updateExistingPivot()
        $user1->roles()->updateExistingPivot($roleEditor->id, ['expires' => '2027-12-31']);
        
        // 11. save с доп. данными
        $newRole = Role::create(['name' => 'Гость']);
        $user1->roles()->save($newRole, ['expires' => '2024-12-31']);
        
        return "✅ Все методы успешно выполнены!";
    }
}
