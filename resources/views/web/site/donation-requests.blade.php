<!doctype html>
<html lang="en" dir="rtl">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">

        <!--google fonts css-->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">

        <!--font awesome css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <link rel="icon" href="imgs/Icon.png">

        <!--owl-carousel css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

        <!--style css-->
        <link rel="stylesheet" href="assets/css/style.css">

        <title>Blood Bank</title>
    </head>
    <body class="donation-requests">
        <!--upper-bar-->
        <div class="upper-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="language">
                            <a href="donation-requests.html" class="ar active">عربى</a>
                            <a href="donation-requests-ltr.blade.php" class="en inactive">EN</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="social">
                            <div class="icons">
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="accounts" dir="ltr">
                                <a href="signin-account.blade.php" class="signin">الدخول</a>
                                <a href="create-account.blade.php" class="create-new">إنشاء حساب جديد</a>
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
                        <img src="imgs/logo.png" class="d-inline-block align-top" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.blade.php">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">عن بنك الدم</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">المقالات</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="donation-requests.html">طلبات التبرع</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="who-are-us.blade.php">من نحن</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact-us.blade.php">اتصل بنا</a>
                            </li>
                        </ul>
                        <a href="#" class="donate">
                            <img src="imgs/transfusion.svg">
                            <p>طلب تبرع</p>
                        </a>
                    </div>
                </div>
            </nav>
        </div>

        <!--inside-article-->
        <div class="all-requests">
            <div class="container">
                <div class="path">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.blade.php">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">طلبات التبرع</li>
                        </ol>
                    </nav>
                </div>

                <!--requests-->
                <div class="requests">
                    <div class="head-text">
                        <h2>طلبات التبرع</h2>
                    </div>
                    <div class="content">
                        <form class="row filter">
                            <div class="col-md-5 blood">
                                <div class="form-group">
                                    <div class="inside-select">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option selected disabled>اختر فصيلة الدم</option>
                                            <option>+A</option>
                                            <option>+B</option>
                                            <option>+AB</option>
                                            <option>-O</option>
                                        </select>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 city">
                                <div class="form-group">
                                    <div class="inside-select">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option selected disabled>اختر المدينة</option>
                                            <option>المنصورة</option>
                                            <option>القاهرة</option>
                                            <option>الإسكندرية</option>
                                            <option>سوهاج</option>
                                        </select>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                        <div class="patients">
                            <div class="details">
                                <div class="blood-type">
                                    <h2 dir="ltr">B+</h2>
                                </div>
                                <ul>
                                    <li><span>اسم الحالة:</span> احمد محمد احمد</li>
                                    <li><span>مستشفى:</span> القصر العينى</li>
                                    <li><span>المدينة:</span> المنصورة</li>
                                </ul>
                                <a href="#">التفاصيل</a>
                            </div>
                            <div class="details">
                                <div class="blood-type">
                                    <h2 dir="ltr">A+</h2>
                                </div>
                                <ul>
                                    <li><span>اسم الحالة:</span> احمد محمد احمد</li>
                                    <li><span>مستشفى:</span> القصر العينى</li>
                                    <li><span>المدينة:</span> المنصورة</li>
                                </ul>
                                <a href="#">التفاصيل</a>
                            </div>
                            <div class="details">
                                <div class="blood-type">
                                    <h2 dir="ltr">AB+</h2>
                                </div>
                                <ul>
                                    <li><span>اسم الحالة:</span> احمد محمد احمد</li>
                                    <li><span>مستشفى:</span> القصر العينى</li>
                                    <li><span>المدينة:</span> المنصورة</li>
                                </ul>
                                <a href="#">التفاصيل</a>
                            </div>
                            <div class="details">
                                <div class="blood-type">
                                    <h2 dir="ltr">O-</h2>
                                </div>
                                <ul>
                                    <li><span>اسم الحالة:</span> احمد محمد احمد</li>
                                    <li><span>مستشفى:</span> القصر العينى</li>
                                    <li><span>المدينة:</span> المنصورة</li>
                                </ul>
                                <a href="#">التفاصيل</a>
                            </div>
                            <div class="details">
                                <div class="blood-type">
                                    <h2 dir="ltr">B+</h2>
                                </div>
                                <ul>
                                    <li><span>اسم الحالة:</span> احمد محمد احمد</li>
                                    <li><span>مستشفى:</span> القصر العينى</li>
                                    <li><span>المدينة:</span> المنصورة</li>
                                </ul>
                                <a href="#">التفاصيل</a>
                            </div>
                            <div class="details">
                                <div class="blood-type">
                                    <h2 dir="ltr">A+</h2>
                                </div>
                                <ul>
                                    <li><span>اسم الحالة:</span> احمد محمد احمد</li>
                                    <li><span>مستشفى:</span> القصر العينى</li>
                                    <li><span>المدينة:</span> المنصورة</li>
                                </ul>
                                <a href="#">التفاصيل</a>
                            </div>
                            <div class="details">
                                <div class="blood-type">
                                    <h2 dir="ltr">AB+</h2>
                                </div>
                                <ul>
                                    <li><span>اسم الحالة:</span> احمد محمد احمد</li>
                                    <li><span>مستشفى:</span> القصر العينى</li>
                                    <li><span>المدينة:</span> المنصورة</li>
                                </ul>
                                <a href="#">التفاصيل</a>
                            </div>
                            <div class="details">
                                <div class="blood-type">
                                    <h2 dir="ltr">O-</h2>
                                </div>
                                <ul>
                                    <li><span>اسم الحالة:</span> احمد محمد احمد</li>
                                    <li><span>مستشفى:</span> القصر العينى</li>
                                    <li><span>المدينة:</span> المنصورة</li>
                                </ul>
                                <a href="#">التفاصيل</a>
                            </div>
                        </div>
                        <div class="pages">
                            <nav aria-label="Page navigation example" dir="ltr">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--footer-->
        <div class="footer">
            <div class="inside-footer">
                <div class="container">
                    <div class="row">
                        <div class="details col-md-4">
                            <img src="imgs/logo.png">
                            <h4>بنك الدم</h4>
                            <p>
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها.
                            </p>
                        </div>
                        <div class="pages col-md-4">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action" id="list-home-list" href="index.blade.php" role="tab" aria-controls="home">الرئيسية</a>
                                <a class="list-group-item list-group-item-action" id="list-profile-list" href="#" role="tab" aria-controls="profile">عن بنك الدم</a>
                                <a class="list-group-item list-group-item-action" id="list-messages-list" href="#" role="tab" aria-controls="messages">المقالات</a>
                                <a class="list-group-item list-group-item-action active" id="list-settings-list" href="donation-requests.html" role="tab" aria-controls="settings">طلبات التبرع</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list" href="who-are-us.blade.php" role="tab" aria-controls="settings">من نحن</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list" href="contact-us.blade.php" role="tab" aria-controls="settings">اتصل بنا</a>
                            </div>
                        </div>
                        <div class="stores col-md-4">
                            <div class="availabe">
                                <p>متوفر على</p>
                                <a href="#">
                                    <img src="imgs/google1.png">
                                </a>
                                <a href="#">
                                    <img src="imgs/ios1.png">
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
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script src="assets/js/bootstrap.bundle.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

        <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js" integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k" crossorigin="anonymous"></script>

        <script src="assets/js/owl.carousel.min.js"></script>

        <script src="assets/js/main.js"></script>
    </body>
</html>
