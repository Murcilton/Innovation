<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthService
{
    public function login(array $userData, bool $rememberMe): bool
    {
        if (Auth::attempt(['email' => $userData['email'], 'password' => $userData['password']], $rememberMe)) {
            $user = Auth::user();
            $user->token= substr(sha1($user->email), 0, 16);
            return true;
        }
        return false;
    }

    public function register(array $userData, bool $rememberMe): bool
    {
        $userData['password'] = bcrypt($userData['password']);
        if(User::create($userData)) {
        $this->login($userData, $rememberMe);
        return true;
        }
        return false;
    }
}
