<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config("app.name")}}</title>
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
            <a href="{{route("app.main")}}">О танцах</a>
            <a href="{{route("articles.list")}}">Новости</a>
            <a href="cup.html">Forum Cup</a>
            <a href="schedule.html">Расписание занятий</a>
            <a href="#">Галерея</a>
            <a href="{{route("auth.login-page")}}">Личный кабинет</a>
            <a href="{{route("articles.create")}}">Консоль администратора</a>
        </nav>
        @if (auth()->user())
        <form action="{{route('auth.logout')}}" method="POST">
            @csrf
            <button type="submit">Выйти</button>
        </form>
        @endif
    </header>
</body>
</html>
