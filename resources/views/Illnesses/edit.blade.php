@extends('.layout')
@section('componemt')
    <form action={{route('illnesses.update',$illness->id ) }} method="POST"  >
        @csrf
        @method('PUT')
        <input type="text" name="name"class="form-control" value="{{$illness->name}}"  >
        <input type="submit" value="submit"   >
    </form>
@endsection
