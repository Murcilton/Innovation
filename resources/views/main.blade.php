@extends('layout.app')
@section('gsap')
    @extends('layout.section.gsap')
@endsection

@section('header')
    @include('layout.section.header')
@endsection

@section('content')
    <div class="the-laptop">
        <img class="card-img" src="{{asset('images/LAPTOP.png')}}" alt="">
        <!-- Текстовые полосы внутри монитора -->
        <div class="text-track text-track-1" id="animated-text-strip-1">
            <span class="marquee">ПРОЕКТ ПРОЕКТ ПРОЕКТ ПРОЕКТ </span>
            <span class="marquee">ПРОЕКТ ПРОЕКТ ПРОЕКТ ПРОЕКТ </span>
            <span class="marquee">ПРОЕКТ ПРОЕКТ ПРОЕКТ ПРОЕКТ </span>
        </div>
        <div class="text-track text-track-2" id="animated-text-strip-2">
            <span class="marquee">ИННОВАЦИИ ИННОВАЦИИ ИННОВАЦИИ </span>
            <span class="marquee">ИННОВАЦИИ ИННОВАЦИИ ИННОВАЦИИ </span>
            <span class="marquee">ИННОВАЦИИ ИННОВАЦИИ ИННОВАЦИИ </span>
        </div>
        <div class="text-track text-track-3" id="animated-text-strip-3">
            <span class="marquee">ИНВЕСТИЦИИ ИНВЕСТИЦИИ ИНВЕСТИЦИИ </span>
            <span class="marquee">ИНВЕСТИЦИИ ИНВЕСТИЦИИ ИНВЕСТИЦИИ </span>
            <span class="marquee">ИНВЕСТИЦИИ ИНВЕСТИЦИИ ИНВЕСТИЦИИ </span>
        </div>
    </div>
    <!-- Основная текстовая полоса -->
    <div class="laptop-line" id="animated-text-strip-main">
        <span class="marquee">ИДЕЯ ИДЕЯ ИДЕЯ ИДЕЯ ИДЕЯ </span>
        <span class="marquee">ИДЕЯ ИДЕЯ ИДЕЯ ИДЕЯ ИДЕЯ </span>
        <span class="marquee">ИДЕЯ ИДЕЯ ИДЕЯ ИДЕЯ ИДЕЯ </span>
    </div>
    </div>
@endsection

@section('footer')
    @include('layout.section.footer')
@endsection
