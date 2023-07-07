<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{,__('Profile')</title>
    <link rel="stylesheet" href="{{ asset("assets/css/style.css")}}">
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset("assets/images/Logo.png")}}" alt="Forum">
            <div class="contact">
                <h2>8 (958) 222-55-11</h2>
                <h2>8 (918) 94-20-800</h2>
            </div>
        </div>
        <nav>
            <a href="{{route("app.main")}}">{{__("app.menu.home")}}</a>
            <a href="{{route("articles.list")}}">{{__("app.menu.news")}}</a>
            <a href="cup.html">{{__("app.menu.news")}}</a>
            <a href="{{route("sportsmen.get-sportsmen-by-group",$group->slug)}}">{{__("app.menu.group")}}</a>
            <a href="#">{{__("app.menu.gallery")}}</a>
            <a href="{{route("auth.login-page")}}">{{__("app.menu.profile")}}</a>
            <a href="{{route("articles.create")}}">{{__("app.menu.dashboard")}}</a>
        </nav>
        <ul>
            <li>
                <a href="{{route('app.chage-language','en')}}">English</a>
            </li>
            <li>
                <a href="{{route('app.chage-language','ru')}}">Русский</a>
            </li>
        </ul>
        @if (auth()->user())
        <form action="{{route('auth.logout')}}" method="POST">
            @csrf
            <button type="submit">Выйти</button>
        </form>
        @endif
    </header>
