@extends('.layout')
@section('componemt')
{{--<form action="{{route('sick.aa')}}" method="HEAD">--}}
{{--    @csrf--}}
{{--    <select name="felter">--}}
{{--        <option value=1>--}}
{{--            all illnsess--}}
{{--        </option>--}}
{{--        @foreach($illnesses as $illness)--}}
{{--            <option value="{{$illness->id}}">--}}
{{--                {{$illness->name}}--}}
{{--            </option>--}}
{{--            @endforeach--}}
{{--            </select>--}}
{{--    <button type="submit">filter</button>--}}
{{--</form>--}}
<div class="row">

    @foreach($sicks as $sick)

  <div class="col-sm-3">
    <div class="card m-3">
      <div class="card-body">
      <h3 class="card-title">{{$sick->full_name}}</h3>
    <h5 class="card-title">{{$sick->age}}</h5>
    <p class="card-text">{{$sick->illness->name}}</p>
    <p class="card-text">{{$sick->user->name}}</p>
    <a class="btn btn-primary" href="{{route('sick.show',$sick->id)}}">show</a>
    <a class="btn btn-primary" href="{{route('sick.edit',$sick->id)}}">edit</a>
    <form action="{{route('sick.destroy',$sick->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input class="delete-btn" type="submit" value="delete">
    </form>
      </div>
    </div>
  </div>


@endforeach
</div>
@endsection

