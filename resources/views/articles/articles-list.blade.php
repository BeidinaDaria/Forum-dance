@extends("app")
@section('title','Новости')
@section('content')
    <h2>Новости</h2>
    <section>
        <div class="main_news">
            <h4>{{$article[0]->title}}</h4>
            <p>{{$article[0]->text}}</p>
        </div>
        <div class="news">
            @foreach($articles as $article)
            <div class="new">
                <h4>{{$article->title}}</h4>
                <p>{{$article->text}}</p>
            </div>
            @endforeach
        </div>
    </section>
@endsection
