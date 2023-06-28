@extends("app")
@section('title',__('Profile'))
@section('content')
    <h2>{{$title}}</h2>
    <div>
        <form action="{{route("sportsmen.update",$sportsmen)}}" method="POST" enctype="multitype/form-data">
            @csrf @method("PUT")
            <div class="form-group">
                <label for="name" class="form-label">{{__('Name')}}</label>
                <input type="text" id="name" name="name" value="{{old('name',$sportsmen->name)}}">
                @error('title')
                 <small>{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="age" class="form-label">{{__('Age')}}</label>
                <input id="age" name="age" value="{{old('age',$sportsmen->age)}}">
            </div>
            <div class="form-group">
                <label for="class" class="form-label">{{__('Class of masterpiece')}}</label>
                <input id="class" name="class" value="{{old('class',$sportsmen->class)}}">
            </div>
            <div class="form-group">
                <label for="category" class="form-label">{{__('Category')}}</label>
                <input id="category" name="category" value="{{old('category',$sportsmen->category)}}">
            </div>
            <div class="form-group">
                <label for="catexp" class="form-label">{{__('Date of expire')}}</label>
                <input id="catexp" name="catexp" value="{{old('catexp',$sportsmen->catexp)}}">
            </div>
            <div class="form-group">
                <label for="medexp" class="form-label">{{__('Expire date of medical')}}</label>
                <input id="medexp" name="medexp" value="{{old('medexp',$sportsmen->medexp)}}">
            </div>
            <div class="form-group">
                <label for="image" class="form-label">{{__('image')}}</label>
                <input type="file" id="image" name="image" value="{{old("")}}">
                @if ($article->image)
                    <div>
                        <img src="{{$asportsmen->getImage()}}" alt="">
                    </div>
                    <a href="{{route("sportsmen.remove-image",$sportsmen->id)}}">
                @endif
            </div>
            <div class="form-group">
                <label for="group" class="form-label">{{__('Group')}}:</label>
                <input type="checkbox" id="sport" name="sport">
                <label for="sport" class="form-label">{{__('sport')}}</label>
                <input type="checkbox" id="solo" name="solo">
                <label for="solo" class="form-label">{{__('solo')}}</label>
                <input type="checkbox" id="middle-sport" name="middle-sport">
                <label for="middle-sport" class="form-label">{{__('middle-sport')}}</label>
                <input type="checkbox" id="middle" name="middle">
                <label for="middle" class="form-label">{{__('middle')}}</label>
                <input type="checkbox" id="baby" name="baby">
                <label for="baby" class="form-label">{{__('baby')}}</label>
            </div>
            <div class="form-group">
                <label for="role" class="form-label">{{__('Role')}}:</label>
                <input type="checkbox" id="sportsman" name="sportsman">
                <label for="sportsman" class="form-label">{{__('sportsman')}}</label>
                <input type="checkbox" id="admin" name="admin">
                <label for="admin" class="form-label">{{__('admin')}}</label>
                <input type="checkbox" id="super-admin" name="super-admin">
                <label for="super-admin" class="form-label">{{__('super-admin')}}</label>
            </div>
            <button type="submit">Сохранить</button>
        </form>
    </div>
@endsection
