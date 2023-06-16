@extends("app")
@section('title','Вход')
@section('content')
    <h2>Вход</h2>
    @if (session('success_register'))
        <div>
            {{session('success')}}
        </div>
    @endif
    @if($errors->any())
    <ul style="color:rgba(248, 254, 251, 1);">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <div style="color:rgba(248, 254, 251, 1);">
        <form action="{{Route('auth.login')}}" method="POST" enctype="multipart/form-data>
            @csrf
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" value="{{old("email")}}">
                @error('title')
                 <small>{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit">Вход</button>
        </form>
        <a href="{{route("auth.register")}}">Нет личного кабинета? Зарегистрируйтесь!</a>
    </div>
@endsection
