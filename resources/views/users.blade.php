@extends('layout')
@section('componemt')
{{--    @foreach($users as $user)--}}
{{--    <h1>{{$user->name}}</h1>--}}
{{--@endforeach--}}
    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span> <span>Services</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Well Experienced Doctors</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <div class="img mb-4" style="background-image: url(images/person_5.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="#">{{$user->name}}</a></h3>
                            <span class="position">Dentist</span>
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
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
