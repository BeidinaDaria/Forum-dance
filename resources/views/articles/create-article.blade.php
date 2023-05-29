@extends("app")
@section('title','Создать новость')
@section('content')
    <h2>Добавление новости</h2>
    <div>
        <form action="{{route("articles.store")}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="" class="form-label">Заголовок</label>
                <input type="text" id="title" name="title">
            </div>
            <button type="submit">Создать</button>
        </form>
    </div>
@endsection
