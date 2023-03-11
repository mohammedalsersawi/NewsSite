<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>World Time</title>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/aos/dist/aos.css/aos.css" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />

    <!-- swiper -->

    <head>
        <link rel="stylesheet" href="assets/css/swiper/swiper-bundle.min.css" />
    </head>

    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- endinject -->
</head>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <!-- partial:partials/_navbar.html -->
            <header id="header">
                @include('front.header')
            </header>

            <!-- partial -->
            <div class="flash-news-banner">
                <div class="container">
                    <div class="d-lg-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">
                                Lorem Ipsum has been the industry's standard dummy text ever
                                since the 1500s.
                            </p>
                        </div>
                        <div class="d-flex">
                            <span class="mr-3" onclick="removeBanner()">&times;</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="container">

                    @include('front.section-one')
                    @include('front.section-two')
                    @include('front.section-three')
                    @include('front.section-fourth')







                    <!-- ******************************************************* -->
                    <div class="row" data-aos="fade-up">
                        <div class="col-sm-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="card-title">Video</div>
                                            <div class="row">
                                                <div class="col-sm-6 grid-margin">
                                                    <div class="position-relative">
                                                        <div class="rotate-img">
                                                            <img src="assets/images/dashboard/home_7.jpg" alt="thumb"
                                                                class="img-fluid" />
                                                        </div>
                                                        <div class="badge-positioned w-90">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <span
                                                                    class="badge badge-danger font-weight-bold">Lifestyle</span>
                                                                <div class="video-icon">
                                                                    <i class="mdi mdi-play"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 grid-margin">
                                                    <div class="position-relative">
                                                        <div class="rotate-img">
                                                            <img src="assets/images/dashboard/home_8.jpg"
                                                                alt="thumb" class="img-fluid" />
                                                        </div>
                                                        <div class="badge-positioned w-90">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <span
                                                                    class="badge badge-danger font-weight-bold">National
                                                                    News</span>
                                                                <div class="video-icon">
                                                                    <i class="mdi mdi-play"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 grid-margin">
                                                    <div class="position-relative">
                                                        <div class="rotate-img">
                                                            <img src="assets/images/dashboard/home_9.jpg"
                                                                alt="thumb" class="img-fluid" />
                                                        </div>
                                                        <div class="badge-positioned w-90">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <span
                                                                    class="badge badge-danger font-weight-bold">Lifestyle</span>
                                                                <div class="video-icon">
                                                                    <i class="mdi mdi-play"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 grid-margin">
                                                    <div class="position-relative">
                                                        <div class="rotate-img">
                                                            <img src="assets/images/dashboard/home_10.jpg"
                                                                alt="thumb" class="img-fluid" />
                                                        </div>
                                                        <div class="badge-positioned w-90">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <span
                                                                    class="badge badge-danger font-weight-bold">National
                                                                    News</span>
                                                                <div class="video-icon">
                                                                    <i class="mdi mdi-play"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="card-title">Latest Video</div>
                                                <p class="mb-3">See all</p>
                                            </div>
                                            <div
                                                class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                                <div class="div-w-80 mr-3">
                                                    <div class="rotate-img">
                                                        <img src="assets/images/dashboard/home_11.jpg" alt="thumb"
                                                            class="img-fluid" />
                                                    </div>
                                                </div>
                                                <h3 class="font-weight-600 mb-0">
                                                    Apple Introduces Apple Watch
                                                </h3>
                                            </div>
                                            <div
                                                class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                                                <div class="div-w-80 mr-3">
                                                    <div class="rotate-img">
                                                        <img src="assets/images/dashboard/home_12.jpg" alt="thumb"
                                                            class="img-fluid" />
                                                    </div>
                                                </div>
                                                <h3 class="font-weight-600 mb-0">
                                                    SEO Strategy & Google Search
                                                </h3>
                                            </div>
                                            <div
                                                class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                                                <div class="div-w-80 mr-3">
                                                    <div class="rotate-img">
                                                        <img src="assets/images/dashboard/home_13.jpg" alt="thumb"
                                                            class="img-fluid" />
                                                    </div>
                                                </div>
                                                <h3 class="font-weight-600 mb-0">
                                                    Cycling benefit & disadvantag
                                                </h3>
                                            </div>
                                            <div
                                                class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                                                <div class="div-w-80 mr-3">
                                                    <div class="rotate-img">
                                                        <img src="assets/images/dashboard/home_14.jpg" alt="thumb"
                                                            class="img-fluid" />
                                                    </div>
                                                </div>
                                                <h3 class="font-weight-600">
                                                    The Major Health Benefits of
                                                </h3>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center pt-3">
                                                <div class="div-w-80 mr-3">
                                                    <div class="rotate-img">
                                                        <img src="assets/images/dashboard/home_15.jpg" alt="thumb"
                                                            class="img-fluid" />
                                                    </div>
                                                </div>
                                                <h3 class="font-weight-600 mb-0">
                                                    Powerful Moments of Peace
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card-title">Sport light</div>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-8 col-sm-6">
                                                    <div class="rotate-img">
                                                        <img src="assets/images/dashboard/home_16.jpg" alt="thumb"
                                                            class="img-fluid" />
                                                    </div>
                                                    <h2 class="mt-3 text-primary mb-2">
                                                        Newsrooms exercise..
                                                    </h2>
                                                    <p class="fs-13 mb-1 text-muted">
                                                        <span class="mr-2">Photo </span>10 Minutes ago
                                                    </p>
                                                    <p class="my-3 fs-15">
                                                        Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer
                                                        took
                                                    </p>
                                                    <a href="#" class="font-weight-600 fs-16 text-dark">Read
                                                        more</a>
                                                </div>
                                                <div class="col-xl-6 col-lg-4 col-sm-6">
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <h3 class="font-weight-600 mb-0">
                                                            Social distancing is ..
                                                        </h3>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                        <p class="mb-0">
                                                            Lorem Ipsum has been the industry's
                                                        </p>
                                                    </div>
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <h3 class="font-weight-600 mb-0">
                                                            Panic buying is forcing..
                                                        </h3>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                        <p class="mb-0">
                                                            Lorem Ipsum has been the industry's
                                                        </p>
                                                    </div>
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <h3 class="font-weight-600 mb-0">
                                                            Businesses ask hundreds..
                                                        </h3>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                        <p class="mb-0">
                                                            Lorem Ipsum has been the industry's
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <h3 class="font-weight-600 mb-0">
                                                            Tesla's California factory..
                                                        </h3>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                        <p class="mb-0">
                                                            Lorem Ipsum has been the industry's
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="card-title">Sport light</div>
                                                    <div class="border-bottom pb-3">
                                                        <div class="rotate-img">
                                                            <img src="assets/images/dashboard/home_17.jpg"
                                                                alt="thumb" class="img-fluid" />
                                                        </div>
                                                        <p class="fs-16 font-weight-600 mb-0 mt-3">
                                                            Kaine: Trump Jr. may have
                                                        </p>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                    </div>
                                                    <div class="pt-3 pb-3">
                                                        <div class="rotate-img">
                                                            <img src="assets/images/dashboard/home_18.jpg"
                                                                alt="thumb" class="img-fluid" />
                                                        </div>
                                                        <p class="fs-16 font-weight-600 mb-0 mt-3">
                                                            Kaine: Trump Jr. may have
                                                        </p>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="card-title">Celebrity news</div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="border-bottom pb-3">
                                                                <div class="row">
                                                                    <div class="col-sm-5 pr-2">
                                                                        <div class="rotate-img">
                                                                            <img src="assets/images/dashboard/home_19.jpg"
                                                                                alt="thumb"
                                                                                class="img-fluid w-100" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7 pl-2">
                                                                        <p class="fs-16 font-weight-600 mb-0">
                                                                            Online shopping ..
                                                                        </p>
                                                                        <p class="fs-13 text-muted mb-0">
                                                                            <span class="mr-2">Photo </span>10
                                                                            Minutes ago
                                                                        </p>
                                                                        <p class="mb-0 fs-13">
                                                                            Lorem Ipsum has been
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="border-bottom pb-3 pt-3">
                                                                <div class="row">
                                                                    <div class="col-sm-5 pr-2">
                                                                        <div class="rotate-img">
                                                                            <img src="assets/images/dashboard/home_20.jpg"
                                                                                alt="thumb"
                                                                                class="img-fluid w-100" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7 pl-2">
                                                                        <p class="fs-16 font-weight-600 mb-0">
                                                                            Online shopping ..
                                                                        </p>
                                                                        <p class="fs-13 text-muted mb-0">
                                                                            <span class="mr-2">Photo </span>10
                                                                            Minutes ago
                                                                        </p>
                                                                        <p class="mb-0 fs-13">
                                                                            Lorem Ipsum has been
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="border-bottom pb-3 pt-3">
                                                                <div class="row">
                                                                    <div class="col-sm-5 pr-2">
                                                                        <div class="rotate-img">
                                                                            <img src="assets/images/dashboard/home_21.jpg"
                                                                                alt="thumb"
                                                                                class="img-fluid w-100" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7 pl-2">
                                                                        <p class="fs-16 font-weight-600 mb-0">
                                                                            Online shopping ..
                                                                        </p>
                                                                        <p class="fs-13 text-muted mb-0">
                                                                            <span class="mr-2">Photo </span>10
                                                                            Minutes ago
                                                                        </p>
                                                                        <p class="mb-0 fs-13">
                                                                            Lorem Ipsum has been
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="pt-3">
                                                                <div class="row">
                                                                    <div class="col-sm-5 pr-2">
                                                                        <div class="rotate-img">
                                                                            <img src="assets/images/dashboard/home_22.jpg"
                                                                                alt="thumb"
                                                                                class="img-fluid w-100" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7 pl-2">
                                                                        <p class="fs-16 font-weight-600 mb-0">
                                                                            Online shopping ..
                                                                        </p>
                                                                        <p class="fs-13 text-muted mb-0">
                                                                            <span class="mr-2">Photo </span>10
                                                                            Minutes ago
                                                                        </p>
                                                                        <p class="mb-0 fs-13">
                                                                            Lorem Ipsum has been
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
            <!-- container-scroller ends -->

            <!-- partial:partials/_footer.html -->
            <footer>
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="assets/images/logo.svg" class="footer-logo" alt="" />
                                <h5 class="font-weight-normal mt-4 mb-5">
                                    Newspaper is your news, entertainment, music fashion
                                    website. We provide you with the latest breaking news and
                                    videos straight from the entertainment industry.
                                </h5>
                                <ul class="social-media mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <h3 class="font-weight-bold mb-3">RECENT POSTS</h3>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="footer-border-bottom pb-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="assets/images/dashboard/home_1.jpg" alt="thumb"
                                                        class="img-fluid" />
                                                </div>
                                                <div class="col-9">
                                                    <h5 class="font-weight-600">
                                                        Cotton import from USA to soar was American
                                                        traders predict
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="footer-border-bottom pb-2 pt-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="assets/images/dashboard/home_2.jpg" alt="thumb"
                                                        class="img-fluid" />
                                                </div>
                                                <div class="col-9">
                                                    <h5 class="font-weight-600">
                                                        Cotton import from USA to soar was American
                                                        traders predict
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="assets/images/dashboard/home_3.jpg" alt="thumb"
                                                        class="img-fluid" />
                                                </div>
                                                <div class="col-9">
                                                    <h5 class="font-weight-600 mb-3">
                                                        Cotton import from USA to soar was American
                                                        traders predict
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <h3 class="font-weight-bold mb-3">CATEGORIES</h3>
                                <div class="footer-border-bottom pb-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 font-weight-600">Magazine</h5>
                                        <div class="count">1</div>
                                    </div>
                                </div>
                                <div class="footer-border-bottom pb-2 pt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 font-weight-600">Business</h5>
                                        <div class="count">1</div>
                                    </div>
                                </div>
                                <div class="footer-border-bottom pb-2 pt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 font-weight-600">Sports</h5>
                                        <div class="count">1</div>
                                    </div>
                                </div>
                                <div class="footer-border-bottom pb-2 pt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 font-weight-600">Arts</h5>
                                        <div class="count">1</div>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 font-weight-600">Politics</h5>
                                        <div class="count">1</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <div class="fs-14 font-weight-600">
                                        © 2020 @
                                        <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">
                                            BootstrapDash</a>. All rights reserved.
                                    </div>
                                    <div class="fs-14 font-weight-600">
                                        Handcrafted by
                                        <a href="https://www.bootstrapdash.com/" target="_blank"
                                            class="text-white">BootstrapDash</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- partial -->
        </div>
    </div>
    <!-- swiper.js -->
    <script src="assets/js/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper/custom.js"></script>
    <!-- inject:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="./assets/js/demo.js"></script>
    <script src="./assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
