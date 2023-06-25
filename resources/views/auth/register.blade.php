@extends("app")
@section('title',__('Profile'))
@section('content')
    <h2>Регистрация</h2>
    @if($errors->any())
    <ul style="color:rgba(248, 254, 251, 1);">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <div style="color:rgba(248, 254, 251, 1);">
        <form action="{{Route('auth.store-user')}}" method="POST" enctype="multipart/form-data>
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Логин</label>
                <input type="text" id="title" name="name" value="{{old("name")}}">
                @error('title')
                 <small>{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="text" name="email" value="{{old("email")}}">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="password_confirmation" class="form-label">Повторите ароль</label>
                <input type="password" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit">Регистрация</button>
        </form>
    </div>
@endsection
