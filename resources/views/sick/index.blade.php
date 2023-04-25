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
                    @if(session()->has('ok'))
                        <div  class="alert alert-primary" id="d1" style="text-align: center">
                            {{session()->get('ok')}}
                        </div>
                        <script>
                            function hidefiv(){
                                document.getElementById("d1").style="display:none";
                            }
                            setTimeout(hidefiv,4000);

                        </script>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <form method="HEAD" action="{{route('sick.index')}}" >
        @csrf
        <div class="mt-4">
            <h4 style="text-align: center">اختر المرض </h4>
            <select name="filter" class="filter_center" aria-label="Default select example">
                <option selected value=0 >عرض الكل</option>
                @foreach($illnesses as $disease )
                    <option value="{{$disease->id}}">
                        {{$disease->name}}
                    </option>
                @endforeach
            </select>
        </div>
        @if(auth()->user()->is_admin)
        <div class="mt-4">
            <h4 style="text-align: center">اختر الطبيب </h4>
            <select name="filter_doctor" class="filter_center" aria-label="Default select example">
                <option selected value=0 >عرض الكل</option>
                @foreach($doctors as $doctor )
                    <option value="{{$doctor->id}}">
                        {{$doctor->name}}
                    </option>
                @endforeach
            </select>
        </div>
    @endif
        <div class=" filter_center flex items-center justify-end mt-4">
            <button class="btn btn-primary " >submit</button>
        </div>

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
{{--    @foreach($sicks as $sick)--}}
@for($i=count($sicks)-1;$i>=0;$i--)
        @if(!count($sicks[$i]->preview))
            <tr>
                <th scope="row">{{$sicks[$i]->id}}</th>
                <td ><h5>{{$sicks[$i]->full_name}}</h5></td>
                <td>{{$sicks[$i]->age}}</td>
                <td>{{$sicks[$i]->illness->name}}</td>
                <td>{{$sicks[$i]->user->name}}</td>
                <td>{{$sicks[$i]->phone_number}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn btn-primary"><a style="color: white" href="{{url('preview.edit',$sicks[$i]->id)}}">Add</a></button>
                        <button type="button" class="btn btn-warning"><a style="color: white" href="{{route('sick.show',$sicks[$i]->id)}}">show</a></button>
                        <button type="button" class="btn btn-success"><a style="color: white" href="{{route('sick.edit',$sicks[$i]->id)}}">edit</a></button>
                        <button type="button" class="btn btn-danger">
                                <form action="{{route('sick.destroy',$sicks[$i]->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input  class="btnin" type="submit" value="delete">
                                </form>
                        </button>
                    </div>
                </td>
            </tr>
        @endif
@endfor
{{--    @endforeach--}}
    </tbody>
</table>
@endsection

