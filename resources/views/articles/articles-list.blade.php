@extends("app")
@section('title','Новости')
@section('content')
    <h2>Новости</h2>
    <section>
        @if (session('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
        @if ($articles->count())
        <div class="main_news">
            <h4>{{$article[0]->title}}</h4>
            <p>{{$article[0]->text}}</p>
        </div>
        <div class="news">
            @foreach($articles as $article)
            <a href="{{route("articles.show",$article->slug)}}"></a>
            <img src="{{$article->getImage()}}" alt="">
            <span>
                <a href="{{route("articles.editArticle",$article)}}"><button type="submit">Изменить</button></a>
                <form action="{{route("articles.delete",$article)}}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" onclick='event.preventDefault();if(confirm("Запись будет удалена. Продолжить?")){this.coldest("form").submit()'>Удалить</button>
                </form>
            </span>
            @endforeach
        </div>
        @else
        <p>Нет новостей</p>
        @endif
        <a href="{{route('articles.create')}}">Добавить статью</a>
    </section>
@endsection
