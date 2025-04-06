@extends('layout.app')
@include('layout.section.header')

@section('content')
    <div class="profile">

        <div class="profile-person">
            <img src="{{asset('images/avatar.png')}}" alt="avatar">
            <div class="name"><p>Влад Савельев</p>
                <p>themail@mail.ru</p>
                <p>8 (934) 567 07 48</p>
            </div>
        </div>

        <form class="profile-form" action="{{route('profile')}}" method="post">
            @csrf
            <h1>Личный кабинет</h1>
            <input class="info1" type="text" name="" placeholder="">
            <input class="info2" type="text" name="" placeholder="">
            <input class="info2" type="text" name="" placeholder="">
            <input class="info3" type="text" name="" placeholder="">
            <button type="submit">Сохранить</button>
        </form>
    </div>
@endsection
