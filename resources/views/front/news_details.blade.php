@extends('front.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                @foreach ($data as $iteam)
                    <div class="col-lg-8 col-md-12 mb-4">
                        <div class="card" data-aos="fade-up">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 grid-margin">
                                                <div class="rotate-img">
                                                    <img src="{{ asset('uploads/' . $iteam->images->full_small_path) }}"
                                                        alt="banner" class="img-fluid w-100" />
                                                </div>
                                            </div>
                                            <div class="col-sm-12 grid-margin">
                                                <h1 class="font-weight-600 mb-0">
                                                    {{ $iteam->title }}
                                                </h1>
                                                <div class="d-flex justify-content-between mt-2 mb-2">
                                                    <p class="fs-13 text-muted mb-0 ml-2 position-relative p-details-data">
                                                        {{ \Carbon\Carbon::parse($iteam->published_at)->locale('ar')->isoFormat('Do MMMM YYYY') }}
                                                    </p>
                                                    <ul class="social-media pl-0">
                                                        <li>
                                                            <a href="#">
                                                                <i class="mdi mdi-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="mdi mdi-twitter"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="font-weight-400 fs-17 mb-0">
                                                    {{ $iteam->content }} </p>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



                <div class="col-lg-4 col-md-12 stretch-card grid-margin h-fit-content">
                    <div class="card" data-aos="fade-up">
                        <div class="card-body card-rtl">
                            <h2>Latest news</h2>
                            @foreach ($latest_news as $iteam)
                                <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-end">
                                    <div class="pl-3">
                                        <a href="{{ route('main.page.newss', [$iteam->slug, $iteam->id]) }}"
                                            class="text-dark">
                                            <div style="direction: rtl">
                                                <h5>{{ shorten_text($iteam->title, 80) }}</h5>
                                            </div>
                                        </a>

                                        <div class="fs-12">
                                            <span class="mr-2">صورة
                                            </span>{{ \Carbon\Carbon::parse($iteam->published_at)->diffForHumans() }}
                                        </div>
                                    </div>
                                    <div class="rotate-img">
                                        <img src="{{ asset('uploads/' . $iteam->images->full_small_path) }}" alt="thumb"
                                            class="img-fluid img-lg" />
                                    </div>
                                </div>
                            @endforeach



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
