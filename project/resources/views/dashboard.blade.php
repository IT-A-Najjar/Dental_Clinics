@extends('layout')
@section('title')
    البروفايل
@endsection
@section('componemt')
    <section class="ftco-section">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 ftco-animate img about-image order-md-last " style="background-image: url({{asset('img/'.auth()->user()->photo)}})"></div>
                <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">Dr. {{auth()->user()->name}}</a>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">

                            <div class="tab-content ftco-animate" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                                    <div>
                                        <h2 class="mb-4">الملف الشخصي</h2>
                                        <p><span>gmail: </span>{{auth()->user()->email}}</p>
                                        @if(auth()->user()->is_admin)
                                            <p><span>State: </span>Admin</p>
                                        @else
                                            <p><span>State: </span>User</p>
                                        @endif
                                        <p><span>year: </span>.........</p>
                                        <p><span>about: </span>........</p>
                                        @if(auth()->user()->is_admin)
                                         <a class="btn btn-primary stretched-link" href={{route('users.edit',auth()->user()->id)}}>edit</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
