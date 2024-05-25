<!doctype html>
<html lang="en" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"
          integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">

    <!--google fonts css-->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">

    <!--font awesome css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="icon" href="{{asset('site/imgs/Icon.png')}}">

    <!--owl-carousel css-->
    <link rel="stylesheet" href="{{asset('site/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/owl.theme.default.min.css')}}">

    <!--style css-->
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">

    <title>Blood Bank</title>
</head>
<body>
<!--upper-bar-->
<div class="upper-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="language">
                    <a href="{{route('site.index')}}" class="ar active">عربى</a>
                    <a href="index-ltr.blade.php" class="en inactive">EN</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="social">
                    <div class="icons">
                        <a href="{{Settings::get('facebook')}}" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{Settings::get('instagram')}}" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="{{Settings::get('twitter')}}" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="{{Settings::get('phone')}}" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <!-- not a member-->
            <div class="col-lg-4">
                <div class="info" dir="ltr">
                    <div class="phone">
                        <i class="fas fa-phone-alt"></i>
                        <p>{{Settings::get('phone')}}</p>
                    </div>
                    <div class="e-mail">
                        <i class="far fa-envelope"></i>
                        <p>{{Settings::get('email')}}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!--nav-->
<div class="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('site/imgs/logo.png')}}" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('site.index')}}">الرئيسية <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">عن بنك الدم</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">المقالات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="donation-requests.blade.php">طلبات التبرع</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="who-are-us.blade.php">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.blade.php">اتصل بنا</a>
                    </li>
                </ul>

                <!--not a member-->
                <div class="accounts">
                    <a href="create-account.blade.php" class="create">إنشاء حساب جديد</a>
                    <a href="signin-account.blade.php" class="signin">الدخول</a>
                </div>

                <!--I'm a member

                <a href="#" class="donate">
                    <img src="imgs/transfusion.svg">
                    <p>طلب تبرع</p>
                </a>

                -->

            </div>
        </div>
    </nav>
</div>
{{--start content--}}

@yield('content')

{{--end content--}}


<!--footer-->
<div class="footer">
    <div class="inside-footer">
        <div class="container">
            <div class="row">
                <div class="details col-md-4">
                    <img src="{{asset('site/imgs/logo.png')}}">
                    <h4>بنك الدم</h4>
                    <p>
                        {{Settings::get('about_us')}}                            </p>
                </div>
                <div class="pages col-md-4">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" href="index.html"
                           role="tab" aria-controls="home">الرئيسية</a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" href="#" role="tab"
                           aria-controls="profile">عن بنك الدم</a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" href="#" role="tab"
                           aria-controls="messages">المقالات</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list"
                           href="donation-requests.blade.php" role="tab" aria-controls="settings">طلبات التبرع</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list"
                           href="who-are-us.blade.php" role="tab" aria-controls="settings">من نحن</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list"
                           href="contact-us.blade.php" role="tab" aria-controls="settings">اتصل بنا</a>
                    </div>
                </div>
                <div class="stores col-md-4">
                    <div class="availabe">
                        <p>متوفر على</p>
                        <a href="#">
                            <img src="{{asset('site/imgs/google1.png')}}">
                        </a>
                        <a href="#">
                            <img src="{{asset('site/imgs/ios1.png')}}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="other">
        <div class="container">
            <div class="row">
                <div class="social col-md-4">
                    <div class="icons">
                        <a href="{{\Settings::get('facebook')}}" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{\Settings::get('instagram')}}" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="{{\Settings::get('twitter')}}" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="{{\Settings::get('phone')}}" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="rights col-md-8">
                    <p>جميع الحقوق محفوظة لـ <span>بنك الدم</span> &copy; 2019</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

<script src="{{asset('site/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('site/js/bootstrap.bundle.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>

<script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"
        integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k"
        crossorigin="anonymous"></script>

<script src="{{asset('site/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('site/js/main.js')}}"></script>
</body>
</html>
