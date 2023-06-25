@extends("app")
@section('title',__('Группы'))
@section('content')
    <h2>{{title}}</h2>
    <section>
        @if (session('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
        @if ($groups->count())
        <div class="news">
            @foreach($groups as $group)
            <a href="{{route("groups.show",$group->slug)}}"></a>
            <span>
                <a href="{{route("groups.edit",$group)}}"><button type="submit">Изменить</button></a>
                <form action="{{route("groups.delete",$group)}}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" onclick='event.preventDefault();
                    if(confirm("Запись будет удалена. Продолжить?")){this.coldest("form").submit()'>Удалить</button>
                </form>
            </span>
            @endforeach
        </div>
        @else
        <p>Нет групп</p>
        @endif
        <a href="{{route('groups.create')}}">Добавить группу</a>
    </section>
@endsection
