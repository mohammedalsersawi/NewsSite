<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>World Time</title>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/dist/aos.css/aos.css') }}" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />

    <!-- swiper -->

    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/swiper/swiper-bundle.min.css') }}" />
    </head>

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    @yield('style')

    <!-- endinject -->
</head>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <!-- partial:partials/_navbar.html -->
            <header id="header">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="navbar-bottom pt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <a class="navbar-brand" href="#"><img src="assets/images/logo.svg"
                                            alt="" /></a>
                                </div>
                                <div>
                                    <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent"
                                        aria-controls="navbarSupportedContent" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="navbar-collapse justify-content-center collapse"
                                        id="navbarSupportedContent">
                                        <ul class="navbar-nav d-lg-flex justify-content-between align-items-center"
                                            id="navbarContent">
                                            <li>
                                                <button class="navbar-close">
                                                    <i class="mdi mdi-close"></i>
                                                </button>
                                            </li>
                                            <li class="nav-item active">
                                                <a class="nav-link" href="{{ route('main.page.index') }}">الرئيسية</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <ul class="social-media">
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
                        </div>
                    </nav>
                </div>

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
                @yield('content')
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
    <script src="{{ asset('assets/js/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper/custom.js') }}"></script>
    <!-- inject:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ asset('assets/vendors/aos/dist/aos.js/aos.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/js/demo.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easeScroll.js') }}"></script>
    @yield('script')
    <script>
        $(document).ready(function() {
            debugger;
            $.ajax({
                url: "{{ route('main.page.categories') }}",
                type: 'get',
                success: function(data) {
                    $.each(data, function(key, value) {
                        var listItem = $(
                            '<li class="nav-item active"><a class="nav-link" href="/category/' +
                            value.slug + '/' + value.id + '">' + value.name + '</a></li>');

                        $("#navbarContent").append(listItem);
                    });
                }

            });
        });
    </script>
    <!-- End custom js for this page-->
</body>

</html>
