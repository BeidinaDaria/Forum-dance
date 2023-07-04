@extends("app")
@section('title', __('News'))
@section('content')
    <section>
        <div class="text">
            <h2>{{$article->title}}</h2>
            <p>{{$article->text}}</p>
        </div>
    </section>
@endsection
