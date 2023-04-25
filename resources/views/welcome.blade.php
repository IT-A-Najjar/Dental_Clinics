<!DOCTYPE html>
<html lang="en">
<head>
    <title>العيادات السنية</title>
    <link rel="icon" href="/img/icon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <img src="img/icon.png" style="width: 75px">
        <h3><a class="navbar-brand" href="#">العيادات <span>السنية</span></a></h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span>قائمة
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item cta"><a href="about" class="nav-link"  ><span>About Us</span></a></li>
                <li class="nav-item cta"><a href="{{ route('login') }}" class="nav-link"  ><span>log in</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('images/bg_4.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">
                <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">موقع حجز المرضى في العيادات السنية</h1>
                    <p class="mb-4">دليلك لتلقي العلاج المجاني في العيادات السنية باشراف نخبة من الاطباء المختصين</p>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="{{route('sick.create')}}" class="btn btn-primary px-4 py-3">حجز الان</a></p>
                    <div class="staff1">
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
                        <div class="info text-center">
                            <div class="text">
                                <ul class="ftco-social">
                                    <li ><a href="https://www.facebook.com/dentalclinicssy"><img src="img/facebook.png"></a></li>
                                    <li><a href="https://www.instagram.com/dental_clinics_2022/"><img src="img/instagram.png"></a></li>
                                    <li><a href="https://t.me/dentalclincs2022"><img src="img/telegram.png"></a></li>
                                    <li><a href="https://api.whatsapp.com/send/?phone=306993165467&text&type=phone_number&app_absent=0"><img src="img/whatsapp.png"></a></li>
                                </ul>
                                <ul class="ftco-social">
                                    <li><a href="#serv"><img src="img/arrow.png">تعرف اكثر</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="slider-item" style="background-image: url('images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">
                <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">موقع حجز المرضى في العيادات السنية</h1>
                    <p class="mb-4">دليلك لتلقي العلاج المجاني في العيادات السنية باشراف نخبة من الاطباء المختصين</p>
                    <p><a href="{{route('sick.create')}}" class="btn btn-primary px-4 py-3">حجز الان</a></p>
                    <div class="staff1">
                        <div class="info text-center">
                            <div class="text">
                                <ul class="ftco-social">
                                    <li ><a href="https://www.facebook.com/dentalclinicssy"><img src="img/facebook.png"></a></li>
                                    <li><a href="https://www.instagram.com/dental_clinics_2022/"><img src="img/instagram.png"></a></li>
                                    <li><a href="https://t.me/dentalclincs2022"><img src="img/telegram.png"></a></li>
                                    <li><a href="https://api.whatsapp.com/send/?phone=306993165467&text&type=phone_number&app_absent=0"><img src="img/whatsapp.png"></a></li>
                                </ul>
                                </ul>
                                <ul class="ftco-social">
                                    <li><a href="#serv"><img src="img/arrow.png">تعرف اكثر</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item" style="background-image: url('images/bg_5.png');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">
                <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">موقع حجز المرضى في العيادات السنية</h1>
                    <p class="mb-4">دليلك لتلقي العلاج المجاني في العيادات السنية باشراف نخبة من الاطباء المختصين</p>
                    <p><a href="{{route('sick.create')}}" class="btn btn-primary px-4 py-3">حجز الان</a></p>
                    <div class="staff1">
                        <div class="info text-center">
                            <div class="text">
                                <ul class="ftco-social">
                                    <li ><a href="https://www.facebook.com/dentalclinicssy"><img src="img/facebook.png"></a></li>
                                    <li><a href="https://www.instagram.com/dental_clinics_2022/"><img src="img/instagram.png"></a></li>
                                    <li><a href="https://t.me/dentalclincs2022"><img src="img/telegram.png"></a></li>
                                    <li><a href="https://api.whatsapp.com/send/?phone=306993165467&text&type=phone_number&app_absent=0"><img src="img/whatsapp.png"></a></li>
                                </ul>
                                </ul>
                                <ul class="ftco-social">
                                    <li><a href="#serv"><img src="img/arrow.png">تعرف اكثر</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item" style="background-image: url('images/bg_6.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">
                <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">موقع حجز المرضى في العيادات السنية</h1>
                    <p class="mb-4">دليلك لتلقي العلاج المجاني في العيادات السنية باشراف نخبة من الاطباء المختصين</p>
                    <p><a href="{{route('sick.create')}}" class="btn btn-primary px-4 py-3">حجز الان</a></p>
                    <div class="staff1">
                        <div class="info text-center">
                            <div class="text">
                                <ul class="ftco-social">
                                    <li ><a href="https://www.facebook.com/dentalclinicssy"><img src="img/facebook.png"></a></li>
                                    <li><a href="https://www.instagram.com/dental_clinics_2022/"><img src="img/instagram.png"></a></li>
                                    <li><a href="https://t.me/dentalclincs2022"><img src="img/telegram.png"></a></li>
                                    <li><a href="https://api.whatsapp.com/send/?phone=306993165467&text&type=phone_number&app_absent=0"><img src="img/whatsapp.png"></a></li>
                                </ul>
                                </ul>
                                <ul class="ftco-social">
                                    <li><a href="#serv"><img src="img/arrow.png">تعرف اكثر</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-services" id="serv">

    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-2">خدماتنا تبقيك مبتسماً</h2>
                <p>جميع الخدمات التي يقدمها طلاب كلية طب الفم والأسنان في جامعة حلب في المناطق المحررة</p>
            </div>
        </div>
        <div class="container-wrap mt-5">

        </div>
        <div class="row py-2">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span><img width="70px" src="images/Untitled-5.png"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">تعويضات متحركة</h3>
                        <p>Restoration of the dental structure through partial or complete acrylic molding</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span><img width="70px" src="images/Untitled-2.png"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">تعويضات ثابتة</h3>
                        <p>Replacement of dental crowns and fixed dental bridges</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span><img width="70px" src="images/Untitled-6.png"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">الترميمات الضوئية والمعدنية</h3>
                        <p>Reshaping the tooth with restorative fillings, composite and amalgam</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-dentist"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">فحص وتشخيص</h3>
                        <p>Evaluate dental functions and determine the nature or condition of a disease.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-anesthesia"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">تخدير وقلع</h3>
                        <p>Anesthesia and extraction of all teeth that need it with the least possible pain and without any complications.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span><img width="70px" src="images/Untitled-4.png"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">معالجة اللثة</h3>
                        <p>Assessment of the physiological condition of the gums and the supporting tissues and treatment of their diseases</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span><img width="70px" src="images/Untitled-1.png"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">معالجة اطفال</h3>
                        <p>Caries removal of temporary teeth and tooth extraction that obstructs the eruption process</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span><img width="70px" src="images/Untitled-3.png"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">معالجة لبية</h3>
                        <p>Treating teeth with caries reaching the pulp and removing the nerve</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/Artboard_31.png);" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-3 aside-stretch py-5">
                <div class=" heading-section heading-section-white ftco-animate pr-md-4">
                    <h2 class="mb-3">الاحصائيات</h2>
                    <p>احصائيات المرضى الذين تم العمل عليهم</p>
                </div>
            </div>
            <div class="col-md-9 py-5 pl-md-5">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="{{count($preview)}}">0</strong>
                                <span>حالات المعالجة</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="{{count($sick)}}">0</strong>
                                <span>عدد المرضى</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="{{count($doctor)}}">0</strong>
                                <span>عدد الأطباء</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-3">الاطباء المشرفون</h2>
                <p>نخبة من الأطباء المختصين في علوم الأسنان في المناطق المحررة</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="img mb-4" style="background-image: url(img/doctor.png);"></div>
                    <div class="info text-center">
                        <span class="position">الطبيب</span>
                        <h3><a href="#">محمد خطاب</a></h3>
                        <div class="text">
                            <p>عميد كلية طب الاسنان</p>
                            <p>ماجستير في امراض اللثة وجراحتها</p>
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
            <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="img mb-4" style="background-image: url(img/doctor.png);"></div>
                    <div class="info text-center">
                        <span class="position">الطبيب</span>
                        <h3><a href="#">محمد مجبل</a></h3>
                        <div class="text">
                            <p>دكتوراه في جراحة الوجه والفكين</p>
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
            <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="img mb-4" style="background-image: url(img/doctor.png);"></div>
                    <div class="info text-center">
                        <span class="position">الطبيب</span>
                        <h3><a href="#">جهاد خميس</a></h3>
                        <div class="text">
                            <p>دكتوراه في زراعة الاسنان</p>
                            <p>ماجستير في أمراض اللثة وجراحتها</p>
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
            <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="img mb-4" style="background-image: url(img/doctorf.png);"></div>
                    <div class="info text-center">
                        <span class="position">الطبيبة</span>
                        <h3><a href="#">حلا العثمان</a></h3>
                        <div class="text">
                            <p>دكتوراه في تقويم الاسنان</p>
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
            <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="img mb-4" style="background-image: url(img/doctor.png);"></div>
                    <div class="info text-center">
                        <span class="position">الطبيب</span>
                        <h3><a href="#">مروان الموسى</a></h3>
                        <div class="text">
                            <p>ماجستير طب الاسنان للاطفال</p>
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
            <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="img mb-4" style="background-image: url(img/doctor.png);"></div>
                    <div class="info text-center">
                        <span class="position">الطبيب</span>
                        <h3><a href="#">ايمن حاج محمد</a></h3>
                        <div class="text">
                            <p>دكتوراه في التعويضات المتحركة</p>
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
            <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="img mb-4" style="background-image: url(img/doctor.png);"></div>
                    <div class="info text-center">
                        <span class="position">الطبيب</span>
                        <h3><a href="#">نصر مدلج</a></h3>
                        <div class="text">
                            <p>ماجستير مداواة لبية</p>
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
            <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="img mb-4" style="background-image: url(img/doctor.png);"></div>
                    <div class="info text-center">
                        <span class="position">الطبيب</span>
                        <h3><a href="#">مصطفى قاق</a></h3>
                        <div class="text">
                            <p>بكلوريوس في طب الاسنان</p>
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

        </div>
    </div>
</section>


<footer class="ftco-footer ftco-section" style="background-color: #195B71">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i style="font-family: 'Varela Round', Helvetica, Arial, sans-serif" aria-hidden="true">Ahmad Alnajjar/ Abdullah Najjar/ Khattab Khattab</i>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><img class="circular" width="80px" height="80px" src="img/icon.png"></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
<!-- JavaScript Bundle with Popper -->

</body>
</html>
