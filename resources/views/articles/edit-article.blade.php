@extends("app")
@section('title',__('News'))
@section('content')
    <h2>Редактировать статью</h2>
    <div>
        <form action="{{route("articles.update",$article)}}" method="POST" enctype="multitype/form-data">
            @csrf @method("PUT")
            <div class="form-group">
                <label for="title" class="form-label">Заголовок</label>
                <input type="text" id="title" name="title" value="{{old('title',$article->title)}}">
                @error('title')
                 <small>{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="text" class="form-label">Текст</label>
                <textarea id="textarea" name="text" value="{{old('text',$article->text)}}">
            </div>
            <div class="form-group">
                <label for="image" class="form-label">Изображение</label>
                <input type="file" id="image" name="image" value="{{old("")}}">
                @if ($article->image)
                    <div>
                        <img src="{{$article->getImage()}}" alt="">
                    </div>
                    <a href="{{route("articles.remove-image",$article->id)}}">
                @endif
            </div>
            <div class="form-group">
                <label for="is-published" class="form-label">Опубликовать</label>
                <input type="checkbox" id="is-published" name="is-published" @if (old('is_published',$article->is_published)==1) checked @endif>
            </div>
            <button type="submit">Сохранить</button>
        </form>
    </div>
@endsection
