@foreach($sicks as $sick)
    <h1>{{$sick->full_name}}</h1>
    <h3>{{$sick->age}}</h3>
    <h3>{{$sick->illness->name}}</h3>
    <a href="{{route('sick.show',$sick->id)}}">show</a>
    <a href="{{route('sick.edit',$sick->id)}}">edit</a>
    <form action="{{route('sick.destroy',$sick->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input class="delete-btn" type="submit" value="delete">
    </form>
@endforeach
