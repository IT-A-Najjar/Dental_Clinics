@extends('.layout')
@section('componemt')
    <form action={{ route('preview.store')}} method="POST" >
        @csrf
        <h3>sick</h3>
        <select name="sick_id">
            @foreach($data as $data )
                <option value="{{$data->id}}">
                    {{$data->full_name}}
                </option>
            @endforeach
        </select>
        <br>
        <textarea name="description"></textarea>
        <br>
        <input type="submit" value="submit"   >
    </form>
@endsection

