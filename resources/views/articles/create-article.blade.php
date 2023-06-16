@extends("app")
@section('title','Создать новость')
@section('content')
    <h2>Добавление новости</h2>
    @if($errors->any())
    <ul style="color:rgba(248, 254, 251, 1);">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <div style="color:rgba(248, 254, 251, 1);">
        <form action="{{route("articles.store")}}" method="POST" enctype="multipart/form-data>
            @csrf
            <div class="form-group">
                <label for="title" class="form-label">Заголовок</label>
                <input type="text" id="title" name="title" value="{{old("")}}">
                @error('title')
                 <small>{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="text" class="form-label">Текст</label>
                <input type="text" id="text" name="text" value="{{old("")}}">
            </div>
            <div class="form-group">
                <label for="image" class="form-label">Изображение</label>
                <input type="file" id="image" name="image" value="{{old("")}}">
            </div>
            <div class="form-group">
                <label for="is-published" class="form-label">Опубликовать</label>
                <input type="checkbox" id="is-published" name="is-published" checked>
            </div>
            <button type="submit">Создать</button>
        </form>
    </div>
@endsection
