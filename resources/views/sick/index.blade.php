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
            <h4 style="text-align: center">اختر المرض </h4>
            <select name="filter" class="form-select " aria-label="Default select example">
                <option selected value=0 >عرض الكل</option>
                @foreach($illnesses as $disease )
                    <option value="{{$disease->id}}">
                        {{$disease->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="flex items-center justify-end mt-4">
            <input class="btn btn-primary" type="submit" value="submit" >
        </div>
    </form>
    @if(auth()->user()->is_admin)
    <form method="HEAD" action="{{route('sick.index')}}" >
        @csrf
        <div class="mt-4">
            <h4 style="text-align: center">اختر الطبيب </h4>
            <select name="filter_doctor" class="form-select" aria-label="Default select example">
                <option selected value=0 >عرض الكل</option>
                @foreach($doctors as $doctor )
                    <option value="{{$doctor->id}}">
                        {{$doctor->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="flex items-center justify-end mt-4">
            <input class="btn btn-primary" type="submit" value="submit" >
        </div>
    </form>
    @endif
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
{{--    @foreach($sicks as $sick)--}}
@for($i=count($sicks)-1;$i>0;$i--)
        @if($sicks[$i]->id)
            <tr>
                <th scope="row">{{$sicks[$i]->id}}</th>
                <td ><h5>{{$sicks[$i]->full_name}}</h5></td>
                <td>{{$sicks[$i]->age}}</td>
                <td>{{$sicks[$i]->illness->name}}</td>
                <td>{{$sicks[$i]->user->name}}</td>
                <td>{{$sicks[$i]->phone_number}}</td>
                <td>
                    <a class="btn btn-primary stretched-link" href="{{url('preview.edit',$sicks[$i]->id)}}">Add</a>
                    <a class="btn btn-primary stretched-link" href="{{route('sick.show',$sicks[$i]->id)}}">show</a>
                    <a class="btn btn-primary stretched-link" href="{{route('sick.edit',$sicks[$i]->id)}}">edit</a>
                    <a class=" btn btn-primary stretched-link">
                        <form action="{{route('sick.destroy',$sicks[$i]->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input style="background-color: #2f89fc ;color: white; border: none" class=" " type="submit" value="delete">
                        </form>
                    </a>
                </td>
            </tr>
        @else
            {{$i--}}
        @endif
{{--    @endforeach--}}
@endfor
    </tbody>
</table>
@endsection

