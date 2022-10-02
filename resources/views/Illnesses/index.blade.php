@extends('.layout')
@section('componemt')
<section class="home-slider owl-carousel">
    <div class="slider-item bread-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
            <div class="row slider-text align-items-end">
                <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                    <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">صفحة الامراض</h1>
                </div>
            </div>
        </div>
    </div>
</section>

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
                                <li class="ftco-animate"><a href="{{route('illnesses.edit',$a->id)}}">edit</a></li>
                                <li class="ftco-animate">
                                    <form action="{{route('illnesses.destroy',$a->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input class="delete-btn" type="submit" value="delete">
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

