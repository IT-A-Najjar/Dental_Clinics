@extends('layout')
@section('title')
    الاطباء
@endsection
@section('componemt')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3">Meet Our Experience Dentist</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences</p>
                </div>
            </div>
            <div class="row">
                @foreach($users as $user)
                    <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                            <div class="staff">
                                <div class="img mb-4" style="background-image: url({{asset('img/'.$user->photo)}});"></div>
                                {{--                        <img class="img mb-4" src="{{asset('img/'.$user->photo)}}">--}}
                                <div class="info text-center">
                                    <h3><a>{{$user->name}}</a></h3>
                                    <span class="position">Dentist</span>
                                    <div class="text">
                                        <p>The distinguished doctor <span>{{$user->name}}</span> is sufficiently experienced, highly skilled and has a good heart</p>
                                        <p>A student from Aleppo Free University, Faculty of Dentistry</p>
                                        <ul class="ftco-social">
                                            {{--                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>--}}
                                            <li class="ftco-animate"><a class="btn btn-primary stretched-link" href="{{route('users.edit',$user->id)}}">edit</a></li>
                                            <li class="ftco-animate">
                                                <a>
                                                    <form  action="{{route('users.destroy',$user->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input class="btn btn-primary stretched-link" type="submit" value="delete">
                                                    </form>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--            </div>--}}

{{--                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">--}}
{{--                    <div class="staff">--}}
{{--                        <div class="img mb-4" style="background-image: url({{asset('img/'.$user->photo)}});"></div>--}}
{{--                        <img class="img mb-4" src="{{asset('img/'.$user->photo)}}">--}}
{{--                        <div class="info text-center">--}}
{{--                            <h3><a>{{$user->name}}</a></h3>--}}
{{--                            <span class="position">Dentist</span>--}}
{{--                            <div class="text">--}}
{{--                                <p>The distinguished doctor <span>{{$user->name}}</span> is sufficiently experienced, highly skilled and has a good heart</p>--}}
{{--                                <p>A student from Aleppo Free University, Faculty of Dentistry</p>--}}
{{--                                <ul class="ftco-social">--}}
{{--                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>--}}
{{--                                    <li class="ftco-animate"><a class="btn btn-primary stretched-link" href="{{route('users.edit',$user->id)}}">edit</a></li>--}}
{{--                                    <li class="ftco-animate">--}}
{{--                                        <a>--}}
{{--                                            <form  action="{{route('users.destroy',$user->id)}}" method="post">--}}
{{--                                                @csrf--}}
{{--                                                @method('DELETE')--}}
{{--                                                <input class="btn btn-primary stretched-link" type="submit" value="delete">--}}
{{--                                            </form>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                @endforeach
            </div>
        </div>
    </section>

@endsection
