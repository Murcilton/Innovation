@extends('layout.app')


@section('content')
    <div class="login">

        <div class="login-person">
            <img src="{{asset('images/Logo Auth.png')}}" alt="Логотип">
        </div>
        <form class="login-form" action="{{route('login')}}" method="post">
            @csrf
            <h1>Авторизация пользователя</h1>
            <input class="name" type="text" name="email" placeholder="Электронная почта">
            <input class="name" type="password" name="password" placeholder="Пароль">

            <button type="submit">Войти</button>
            <a href="{{route('register.index')}}">У меня нет аккаунта</a>
        </form>

    </div>
@endsection
