<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function getUserWithProfile($id)
{
    $user = User::with('profile')->find($id);
    
    if (!$user) {
        return response()->json(['error' => 'Пользователь не найден'], 404);
    }
    
    return response()->json([
        'id' => $user->id,
        'name' => $user->name,
        'email' => $user->email,
        'age' => $user->age,
        'salary' => $user->salary,
        'profile' => [
            'name' => $user->profile->name,
            'surname' => $user->profile->surname,
            'email' => $user->profile->email
        ]
    ]);
}
}