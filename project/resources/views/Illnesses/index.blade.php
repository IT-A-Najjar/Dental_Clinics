@extends('layout')
@section('title')
    الامراض
@endsection
@section('componemt')
<section class="ftco-section">
    <div class="container">

        <div class="row">
            @foreach($illness as $a)
                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(images/illness.png);"></div>
                        <div class="info text-center">
                            <h3>{{$a->name}}</h3>
                            <div class="text">
                                <p>التعديل على المرض</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a class="btn btn-primary stretched-link" href="{{route('illnesses.edit',$a->id)}}">edit</a></li>
                                    <li class="ftco-animate">
                                        <form action="{{route('illnesses.destroy',$a->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-primary stretched-link" type="submit" value="delete">
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
