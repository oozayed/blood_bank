<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

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

        <!--override on style css-->
        <link rel="stylesheet" href="assets/css/style-ltr.css">

        <title>Blood Bank</title>
    </head>
    <body class="article-details">
        <!--upper-bar-->
        <div class="upper-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="language">
                            <a href="article-details-ltr.html" class="en active">EN</a>
                            <a href="article-details.blade.php" class="ar inactive">عربى</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="social">
                            <div class="icons">
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- not a member-->
                    <div class="col-lg-4">
                        <div class="accounts">
                            <a href="create-account.blade.php" class="create-new">create new account</a>
                            <a href="signin-account.blade.php" class="signin">Sign in</a>
                        </div>

                        <!--I'm a member

                        <div class="member">
                            <p class="welcome">مرحباً بك</p>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    احمد محمد
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="index-1.html">
                                        <i class="fas fa-home"></i>
                                        الرئيسية
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="far fa-user"></i>
                                        معلوماتى
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="far fa-bell"></i>
                                        اعدادات الاشعارات
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="far fa-heart"></i>
                                        المفضلة
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="far fa-comments"></i>
                                        ابلاغ
                                    </a>
                                    <a class="dropdown-item" href="contact-us.blade.php">
                                        <i class="fas fa-phone-alt"></i>
                                        تواصل معنا
                                    </a>
                                    <a class="dropdown-item" href="index.blade.php">
                                        <i class="fas fa-sign-out-alt"></i>
                                        تسجيل الخروج
                                    </a>
                                </div>
                            </div>
                        </div>

                        -->

                    </div>
                </div>
            </div>
        </div>


        <!--nav-->
        <div class="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="imgs/logo-ltr.png" class="d-inline-block align-top" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index-ltr.blade.php">home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">about us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">articles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="donation-requests-ltr.blade.php">donation requests</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="who-are-us-ltr.blade.php">who are us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact-us-ltr.blade.php">contact us</a>
                            </li>
                        </ul>
                        <a href="#" class="donate">
                            <img src="imgs/transfusion.svg">
                            <p>Ask donation</p>
                        </a>
                    </div>
                </div>
            </nav>
        </div>

        <!--inside-article-->
        <div class="inside-article">
            <div class="container">
                <div class="path">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-ltr.blade.php">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="#">Articles</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Disease prevention</li>
                        </ol>
                    </nav>
                </div>
                <div class="article-image">
                    <img src="imgs/p1.jpg">
                </div>
                <div class="article-title col-12">
                    <div class="h-text col-6">
                        <h4>Method of disease prevention</h4>
                    </div>
                    <div class="icon col-6">
                        <button type="button"><i class="far fa-heart"></i></button>
                    </div>
                </div>

                <!--text-->
                <div class="text">
                    <p>
                        This text is an example of text that can be replaced in the same space, this text has been generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters that the application generates. If you need a larger number of paragraphs, the Arabic text generator allows you to increase the number of paragraphs as you want, the text will not appear divided and does not contain linguistic errors, the Arabic text generator is useful for web designers in particular, as the client often needs to see a real picture For website design. Hence, the designer must put temporary texts on the design to show the customer the complete form, the role of the Arabic text generator is to spare the designer the trouble of searching for an alternative text that has nothing to do with the topic the design is talking about.
                    </p> <br>
                    <p>
                        This text is an example of text that can be replaced in the same space, this text has been generated from the Arabic text generator, where you can generate such text or many other texts in addition to increasing the number of characters that the application generates. If you need a larger number of paragraphs, the Arabic text generator allows you to increase the number of paragraphs as you want, the text will not appear divided and does not contain linguistic errors, the Arabic text generator is useful for web designers in particular, as the client often needs to see a real picture For website design. Hence, the designer must put temporary texts on the design to show the customer the complete form, the role of the Arabic text generator is to spare the designer the trouble of searching for an alternative text that has nothing to do with the topic the design is talking about.
                    </p>
                </div>

                <!--articles-->
                <div class="articles">
                    <div class="title">
                        <div class="head-text">
                            <h2>Related articles</h2>
                        </div>
                    </div>
                    <div class="view">
                        <div class="row">
                            <!-- Set up your HTML -->
                            <div class="owl-carousel articles-carousel">
                                <div class="card">
                                    <div class="photo">
                                        <img src="imgs/p2.jpg" class="card-img-top" alt="...">
                                        <a href="article-details.blade.php" class="click">more</a>
                                    </div>
                                    <a href="#" class="favourite">
                                        <i class="far fa-heart"></i>
                                    </a>

                                    <div class="card-body">
                                        <h5 class="card-title">Method of disease prevention</h5>
                                        <p class="card-text">
                                            This text is an example of text that can be replaced in the same space. This text was generated.
                                        </p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="photo">
                                        <img src="imgs/p2.jpg" class="card-img-top" alt="...">
                                        <a href="article-details.blade.php" class="click">more</a>
                                    </div>
                                    <a href="#" class="favourite">
                                        <i class="far fa-heart"></i>
                                    </a>

                                    <div class="card-body">
                                        <h5 class="card-title">Method of disease prevention</h5>
                                        <p class="card-text">
                                            This text is an example of text that can be replaced in the same space. This text was generated.
                                        </p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="photo">
                                        <img src="imgs/p2.jpg" class="card-img-top" alt="...">
                                        <a href="article-details.blade.php" class="click">more</a>
                                    </div>
                                    <a href="#" class="favourite">
                                        <i class="far fa-heart"></i>
                                    </a>

                                    <div class="card-body">
                                        <h5 class="card-title">Method of disease prevention</h5>
                                        <p class="card-text">
                                            This text is an example of text that can be replaced in the same space. This text was generated.
                                        </p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="photo">
                                        <img src="imgs/p2.jpg" class="card-img-top" alt="...">
                                        <a href="article-details.blade.php" class="click">more</a>
                                    </div>
                                    <a href="#" class="favourite">
                                        <i class="far fa-heart"></i>
                                    </a>

                                    <div class="card-body">
                                        <h5 class="card-title">Method of disease prevention</h5>
                                        <p class="card-text">
                                            This text is an example of text that can be replaced in the same space. This text was generated.
                                        </p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="photo">
                                        <img src="imgs/p2.jpg" class="card-img-top" alt="...">
                                        <a href="article-details.blade.php" class="click">more</a>
                                    </div>
                                    <a href="#" class="favourite">
                                        <i class="far fa-heart"></i>
                                    </a>

                                    <div class="card-body">
                                        <h5 class="card-title">Method of disease prevention</h5>
                                        <p class="card-text">
                                            This text is an example of text that can be replaced in the same space. This text was generated.
                                        </p>
                                    </div>
                                </div>
                            </div>
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
                            <img src="imgs/logo-ltr.png">
                            <h4>Blood Bank</h4>
                            <p>
                                This text is an example of text that can be replaced in the same space, this text has been generated from the Arabic text generator, where you can generate such text or many other.
                            </p>
                        </div>
                        <div class="pages col-md-4">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action" id="list-home-list" href="index-ltr.blade.php" role="tab" aria-controls="home">Home</a>
                                <a class="list-group-item list-group-item-action" id="list-profile-list" href="#" role="tab" aria-controls="profile">About us</a>
                                <a class="list-group-item list-group-item-action" id="list-messages-list" href="#" role="tab" aria-controls="messages">Articles</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list" href="donation-requests-ltr.blade.php" role="tab" aria-controls="settings">Donation requests</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list" href="who-are-us-ltr.blade.php" role="tab" aria-controls="settings">Who are us</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list" href="contact-us-ltr.blade.php" role="tab" aria-controls="settings">Contact us</a>
                            </div>
                        </div>
                        <div class="stores col-md-4">
                            <div class="availabe">
                                <p>Available on</p>
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
                            <p>All rights reserved to <span>Blood Bank</span> &copy; 2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

        <script src="assets/js/bootstrap.bundle.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <script src="assets/js/owl.carousel.min.js"></script>

        <script src="assets/js/main-ltr.js"></script>
    </body>
</html>
