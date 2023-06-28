@extends("app")
@section('title',__('List'))
@section('content')
    <h2>{{$title}}</h2>
    <section>
        @if (session('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
        @if ($users->count())
        <div class="news">
            @foreach($users as $user)
            <h1>{{$user->name}}</h1>
            <h4>{{__('Age')}}: {{$user->age}}</h4>
            <p>{{__('Class')}}: {{$user->class}}</p>
            <p>{{__('Role')}}: {{$user->roleid}}</p>
            <span>
                <a href="{{route("sportsmen.edit",$sportsman)}}"><button type="submit">Изменить</button></a>
                <form action="{{route("sportsmen.delete",$sportsman)}}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" onclick='event.preventDefault();if(confirm("Запись будет удалена. Продолжить?")){this.coldest("form").submit()'>Удалить</button>
                </form>
            </span>
            @endforeach
        </div>
        @endif
        <a href="{{route('sportsmen.create')}}">Добавить члена клуба</a>
    </section>
@endsection
