<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ asset("assets/css/style.css")}}">
</head>
<body>
    @include("layouts.header")
    @yield("content")
    @include("layouts.footer")
</body>
</html>
