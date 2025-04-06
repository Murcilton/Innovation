@extends('layout.app')


@section('content')
    <div class="register">

        <div class="register-person">
            <img src="{{asset('images/logo_lamp.png')}}" alt="Логотип">
            <img src="{{asset('images/auth.png')}}" alt="Авторизация">
        </div>

        <form class="register-form" action="{{route('register')}}" method="post">
            @csrf
            <h1>Регистрация</h1>
            <input class="name" type="text" name="last_name" placeholder="Фамилия">
            <input class="name" type="text" name="first_name" placeholder="Имя">
            <input class="name" type="text" name="patronymic" placeholder="Отчество">
            <input class="data" type="email" name="email" placeholder="Электронная почта">
            <input class="data" type="password" name="phone" placeholder="Пароль">
            <input class="data" type="text" name="phone" placeholder="Телефон">
            <button type="submit">Зарегистрироваться</button>
            <a href="{{route('login.index')}}">У меня есть аккаунт</a>
        </form>

    </div>
@endsection
