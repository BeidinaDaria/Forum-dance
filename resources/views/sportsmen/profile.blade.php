@extends("app")
@section('title',__('Profile'))
@section('sportsman')
    <h2>{{title}}</h2>
    <section>
        @if (session('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
        <div class="news">
            <a href="{{route("sportsmen.show",$sportsman->slug)}}"></a>
            <h1>{{$sportsman->name}}</h1>
            <h4>{{__('Age')}}: {{$sportsman->age}}</h4>
            <p>{{__('Class')}}: {{$sportsman->class}}</p>
            <p>{{__('Category')}}: {{$sportsman->category}}</p>
            <p>{{__('Category date of expire')}}: {{$sportsman->catexp}}</p>
            <p>{{__('Medical date of expire')}}: {{$sportsman->medexp}}</p>
            <img src="{{$sportsman->image}}" alt="">
            <span>
                <a href="{{route("sportsmen.edit",$sportsman)}}"><button type="submit">Изменить</button></a>
            </span>
        </div>
    </section>
@endsection
