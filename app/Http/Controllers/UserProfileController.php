<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function createUserWithProfile()
    {
        try {
            
            $user = new User();
            $user->name = 'John Doe';
            $user->email = 'john@example.com';
            $user->password = bcrypt('secret123');
            $user->age = 30;
            $user->salary = 50000;
            $user->save();

            
            $profile = new Profile();
            $profile->name = 'John';
            $profile->surname = 'Doe';
            $profile->email = 'john@example.com';
            $profile->user_id = $user->id;
            $profile->save();

            return response()->json([
                'success' => true,
                'message' => 'Пользователь и профиль созданы',
                'user' => $user,
                'profile' => $profile
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }
}