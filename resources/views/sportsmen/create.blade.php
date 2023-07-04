@extends("app")
@section('title',__('Добавление профиля'))
@section('content')
    <h2>{{$title}}</h2>
    @if($errors->any())
    <ul style="color:rgba(248, 254, 251, 1);">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <div style="color:rgba(248, 254, 251, 1);">
        <form action="{{Route('sportsman.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">{{__('Your full name')}}</label>
                <input type="text" id="name" name="name" value="{{old("name")}}">
                @error('title')
                 <small>{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="age" class="form-label">{{__('Age')}}</label>
                <input type="integer" id="age" name="age" value="{{old("age")}}">
            </div>
            <div class="form-group">
                <label for="class" class="form-label">{{__('Class of masterpiece')}}</label>
                <input type="text" id="class" name="class" value="{{old("class")}}">
                @error('class')
                 <small>{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="category" class="form-label">{{__('Category')}}</label>
                <input type="text" id="category" name="category" value="{{old("category")}}">
                @error('category')
                 <small>{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="catexp" class="form-label">{{__('Date of expire')}}</label>
                <input type="integer" id="catexp" name="catexp" value="{{old("catexp")}}">
            </div>
            <div class="form-group">
                <label for="medexp" class="form-label">{{__('Expire date of medical')}}</label>
                <input type="integer" id="medexp" name="medexp" value="{{old("medexp")}}">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">{{__('Password')}}</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="password_confirmation" class="form-label">{{__('Please, repeat the password')}}</label>
                <input type="password" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit">Регистрация</button>
        </form>
    </div>
