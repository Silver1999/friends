<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function getProfile($username)
    {
        $user = User::where('username', $username)->first();
        if (!$user) {
            abort('404');
        }
        return view('page.profile', compact('user'));
    }

}
