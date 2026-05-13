<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{

    public function getAllUsersWithProfiles()
    {
        $users = User::with('profile')->get();
        return view('posts.index', compact('users'));
    }
}