 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/style.css">
    <link href = "https: //fonts.googleapis.com/css2؟ family = Josefin + Sans: wght @ 200؛ 300؛ 400؛ 500؛ 700 & display = swap "rel =" stylesheet ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="/img/icon.png">
    <title>عيادات الاسنان</title>
</head>

<body>
<section class="home" id="home">
        <figure class="card1">
            <figcaption>
                <nav>

                    <h2>
                    <a href="/"><img src="/img/icon.png"></a>
                    عيادات <span>اسنان</span></h2>


                    <a class="btn" href="{{ route('login') }}">Log in</a>

                </nav>

                <div class="content">
                    <div class="content-texts">
                        <h4>مرحبا بك في موقع حجز</h4>
                        <h1>عيادات <span>الاسنان</span></h1>
                        <h3>يمكنكم الحجز عن طريق النقر على الزر في الاسفل</h3>
                        <a class="btn" href="{{route('sick.create')}}" >حجز</a>

                        <div class="social">
                            <a href="#" target="_black"><img src="/img/facebook.png" alt=""></a>
                            <a href="#" target="_black"><img src="/img/instagram.png" alt=""></a>
                        </div>

                    </div>
                </div>
            </figcaption>
        </figure>
</section>
</body>
</html>
