@extends('.layout')
@section('componemt')
    <form action={{ route('illnesses.store')}} method="POST" >
        @csrf
        <input type="text" name="name"class="form-control"   >
        <input type="submit" value="submit"   >
    </form>
@endsection
