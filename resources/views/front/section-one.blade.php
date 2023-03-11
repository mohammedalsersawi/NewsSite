<div class="row" data-aos="fade-up">
    <div class="col-xl-8 stretch-card grid-margin">
        <div id="slider-container" style="width: 100%; overflow: hidden; direction: ltr">
            <div class="swiper-wrapper">
                @foreach ($newss as $iteam)
                    <div class="swiper-slide">
                        <div class="position-relative">
                            <img src="assets/images/dashboard/banner.jpg" alt="banner" class="img-fluid" />
                            <div class="banner-content">
                                <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                                    {{ $iteam->category->name }}
                                </div>
                                <h1 class="mb-0">{{ $iteam->title }}</h1>
                                <h1 class="mb-2">
                                    {{ $iteam->content }}
                                </h1>
                                <div class="fs-12">
                                    <span class="mr-2">Photo </span>10 Minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="col-xl-4 stretch-card grid-margin">
        <div class="card bg-dark text-white">
            <div class="card-body card-rtl">
                <h2>@lang('Latest_news')</h2>

                @foreach ($latest_news as $iteam)
                    <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-end">
                        <div class="pl-3">
                            <h5>{{ $iteam->title }}</h5>
                            <div class="fs-12">
                                {{-- <span class="mr-2">Photo </span>10 Minutes ago --}}
                            </div>
                        </div>
                        <div class="rotate-img">
                            <img src="assets/images/dashboard/home_1.jpg" alt="thumb" class="img-fluid img-lg" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
