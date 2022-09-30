@extends('.layout')
@section('componemt')
<a href="{{route('illnesses.create')}}">add</a>
@foreach($illness as $a)

    <h1>
        {{$a->name}}
    </h1>
    <a href="{{route('illnesses.edit',$a->id)}}">edite</a>
    <form action="{{route('illnesses.destroy',$a->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input class="delete-btn" type="submit" value="delete">
    </form>

@endforeach
@endsection

