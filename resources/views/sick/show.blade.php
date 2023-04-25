@extends('.layout')
@section('componemt')
    <section class="ftco-section">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 ftco-animate img about-image order-md-last" style="background-image: url(images/about.jpg);">
                </div>
                <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">الحالات</a>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">
                            <div class="tab-content ftco-animate" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                                    <div>
                                        <h2 class="mb-4">name: {{$index->full_name}}</h2>
                                        <p>age: {{$index->age}}</p>
                                        <p>illness: {{$index->illness->name}}</p>
                                        <p>doctor:{{$index->user->name}}</p>
                                        <h4>الحالات</h4>
                                        @foreach($previews as $preview)
                                            <p>id: {{$preview->id}}</p>
                                            <p>{{$preview->description}}</p>
                                            <p>{{$preview->sick->user->name}}</p>
                                            <p>{{$preview->created_at}}</p>
                                        @endforeach
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

