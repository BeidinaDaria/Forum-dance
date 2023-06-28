@extends("app")
@section('title',__('Добавление новости'))
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
        <form action="{{route("groups.store")}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="group" class="form-label">Группа</label>
                <input type="text" id="group" name="group" value="{{old("")}}">
                @error('group')
                 <small>{{$message}}</small>
                @enderror
            </div>
            <button type="submit">{{__('create')}}</button>
        </form>
    </div>
