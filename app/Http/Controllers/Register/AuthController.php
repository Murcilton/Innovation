<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function __construct(private readonly AuthService $authService){}

    public function login(AuthRequest $request)
    {
        $userData = $request->validated();
        $rememberMe = $request->has('remember_me');


        if ($this->authService->login($userData, $rememberMe)) {
            session()->regenerate();
            return redirect()->intended('/');
        } else {
            return back()->withErrors([
                    'email' => 'Неверный email',
                    'password' => 'Неверный пароль'
            ]);
        }
    }

}
