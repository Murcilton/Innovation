<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Services\AuthService;

class RegisterController extends Controller
{
    public function __construct(private readonly AuthService $authService){}

    public function register(RegisterRequest $request)
    {
        $userData = $request->validated();
        $rememberMe = $request->has('remember_me');
        if($this->authService->register($userData, $rememberMe)){
            return redirect()->intended('/');
        }
        return back();
    }
}
