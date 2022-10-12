@extends('.layout')
@section('title')
    عرض المرضى
@endsection
@section('componemt')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3">قائمة بجميع المرضى</h2>
                    <p>يمكنك الاطلاع على المرضى الخاصين بك ويمكنك التعديل عليهم او ارسالهم لطبيب اخر وفي حال العمل مريض ما يمكنك وضع شرح مفصل لحالة المريض</p>
                </div>
            </div>
        </div>
    </section>

    <form method="HEAD" action="{{route('sick.index')}}" >
        @csrf
        <div class="mt-4">
            <h4>اختر المرض </h4>
            <select name="filter" class="form-select" aria-label="Default select example">
                <option selected value=0 >عرض الكل</option>
                @foreach($illnesses as $disease )
                    <option value="{{$disease->id}}">
                        {{$disease->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="submit" class="ptn ptn-primary">
    </form>
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
                <a class="btn btn-primary stretched-link" href="{{url('preview.edit',$sick->id)}}">Add</a>
                <a class="btn btn-primary stretched-link" href="{{route('sick.show',$sick->id)}}">show</a>
                <a class="btn btn-primary stretched-link" href="{{route('sick.edit',$sick->id)}}">edit</a>
                <a class=" btn btn-primary stretched-link">
                    <form action="{{route('sick.destroy',$sick->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input style="background-color: #2f89fc ;color: white; border: none" class=" " type="submit" value="delete">
                    </form>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection

