@extends('.layout')
@section('componemt')
<table class="table table-striped text-center">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">fall name</th>
        <th scope="col">age</th>
        <th scope="col">illness</th>
        <th scope="col">doctor</th>
        <th scope="col">phone</th>
        <th scope="col">control</th>
    </tr>
    </thead>
    <tbody>
    @foreach($sicks as $sick)
        <tr>
            <th scope="row">{{$sick->id}}</th>
            <td ><h5>{{$sick->full_name}}</h5></td>
            <td>{{$sick->age}}</td>
            <td>{{$sick->illness->name}}</td>
            <td>{{$sick->user->name}}</td>
            <td>{{$sick->phone_number}}</td>
            <td>
                <a class="btn btn-primary stretched-link" href="{{route('sick.show',$sick->id)}}">show</a>
                <a class="btn btn-primary stretched-link" href="{{route('sick.edit',$sick->id)}}">edit</a>
                <a class="btn btn-primary stretched-link">
                    <form action="{{route('sick.destroy',$sick->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="delete">
                    </form>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection

