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
    <body class="donation-requests">
        <!--upper-bar-->
        <div class="upper-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="language">
                            <a href="donation-requests-ltr.html" class="en active">EN</a>
                            <a href="donation-requests.blade.php" class="ar inactive">عربى</a>
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

                    <!-- not a member-->
                    <div class="col-md-4">
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
                            <li class="nav-item active">
                                <a class="nav-link" href="donation-requests-ltr.html">donation requests</a>
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
        <div class="all-requests">
            <div class="container">
                <div class="path">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-ltr.blade.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Donation requests</li>
                        </ol>
                    </nav>
                </div>

                <!--requests-->
                <div class="requests">
                    <div class="head-text">
                        <h2>Donation requests</h2>
                    </div>
                    <div class="content">
                        <form class="row filter">
                            <div class="col-md-5 blood">
                                <div class="form-group">
                                    <div class="inside-select">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option selected disabled>Choose blood type</option>
                                            <option>A+</option>
                                            <option>B+</option>
                                            <option>AB+</option>
                                            <option>O-</option>
                                        </select>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 city">
                                <div class="form-group">
                                    <div class="inside-select">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option selected disabled>Choose city</option>
                                            <option>Mansoura</option>
                                            <option>Cairo</option>
                                            <option>Alexandria</option>
                                            <option>Sohag</option>
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
                                    <h2>B+</h2>
                                </div>
                                <ul>
                                    <li><span>Patoent name:</span> Ahmed Mohamed Ahmed</li>
                                    <li><span>Hospital:</span> Al Qasr Al Ainy</li>
                                    <li><span>City:</span> Mansour</li>
                                </ul>
                                <a href="inside-request-ltr.blade.php">Details</a>
                            </div>
                            <div class="details">
                                <div class="blood-type">
                                    <h2>A+</h2>
                                </div>
                                <ul>
                                    <li><span>Patoent name:</span> Ahmed Mohamed Ahmed</li>
                                    <li><span>Hospital:</span> Al Qasr Al Ainy</li>
                                    <li><span>City:</span> Mansour</li>
                                </ul>
                                <a href="inside-request-ltr.blade.php">Details</a>
                            </div>
                            <div class="details">
                                <div class="blood-type">
                                    <h2>AB+</h2>
                                </div>
                                <ul>
                                    <li><span>Patoent name:</span> Ahmed Mohamed Ahmed</li>
                                    <li><span>Hospital:</span> Al Qasr Al Ainy</li>
                                    <li><span>City:</span> Mansour</li>
                                </ul>
                                <a href="inside-request-ltr.blade.php">Details</a>
                            </div>
                            <div class="details">
                                <div class="blood-type">
                                    <h2>O-</h2>
                                </div>
                                <ul>
                                    <li><span>Patoent name:</span> Ahmed Mohamed Ahmed</li>
                                    <li><span>Hospital:</span> Al Qasr Al Ainy</li>
                                    <li><span>City:</span> Mansour</li>
                                </ul>
                                <a href="inside-request-ltr.blade.php">Details</a>
                            </div>
                            <div class="details">
                                <div class="blood-type">
                                    <h2>B+</h2>
                                </div>
                                <ul>
                                    <li><span>Patoent name:</span> Ahmed Mohamed Ahmed</li>
                                    <li><span>Hospital:</span> Al Qasr Al Ainy</li>
                                    <li><span>City:</span> Mansour</li>
                                </ul>
                                <a href="#">More</a>
                            </div>
                            <div class="details">
                                <div class="blood-type">
                                    <h2>A+</h2>
                                </div>
                                <ul>
                                    <li><span>Patoent name:</span> Ahmed Mohamed Ahmed</li>
                                    <li><span>Hospital:</span> Al Qasr Al Ainy</li>
                                    <li><span>City:</span> Mansour</li>
                                </ul>
                                <a href="inside-request-ltr.blade.php">Details</a>
                            </div>
                            <div class="details">
                                <div class="blood-type">
                                    <h2>AB+</h2>
                                </div>
                                <ul>
                                    <li><span>Patoent name:</span> Ahmed Mohamed Ahmed</li>
                                    <li><span>Hospital:</span> Al Qasr Al Ainy</li>
                                    <li><span>City:</span> Mansour</li>
                                </ul>
                                <a href="inside-request-ltr.blade.php">Details</a>
                            </div>
                            <div class="details">
                                <div class="blood-type">
                                    <h2>O-</h2>
                                </div>
                                <ul>
                                    <li><span>Patoent name:</span> Ahmed Mohamed Ahmed</li>
                                    <li><span>Hospital:</span> Al Qasr Al Ainy</li>
                                    <li><span>City:</span> Mansour</li>
                                </ul>
                                <a href="inside-request-ltr.blade.php">Details</a>
                            </div>
                        </div>
                        <div class="pages">
                            <nav aria-label="Page navigation example">
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
                                <a class="list-group-item list-group-item-action active" id="list-settings-list" href="donation-requests-ltr.html" role="tab" aria-controls="settings">Donation requests</a>
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
