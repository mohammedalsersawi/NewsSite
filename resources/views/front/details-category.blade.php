@extends('front.layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-12">
            <div class="card" data-aos="fade-up">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="font-weight-600 mb-4 category_iteam"
                                data-id="{{ $latest_news->last()->category->id }}">{{ $latest_news->last()->category->name }}
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8" id="shownewss">

                        </div>
                        <div class="col-lg-4 card-rtl">
                            <h2 class="mb-4 text-primary font-weight-600">اخر الأخبار</h2>


                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="pt-4">
                                        @foreach ($latest_news as $iteam)
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <h5 class="font-weight-600 mb-1">
                                                        <div style="direction: rtl">
                                                        <a href="{{ route('main.page.newss', [$iteam->slug, $iteam->id]) }}" class="text-dark">{{ shorten_text($iteam->title, 50) }}</a></div>
                                                    </h5>
                                                    <p class="fs-13 text-muted mb-0">
                                                        <span class="mr-2">صورة
                                                        </span>{{ \Carbon\Carbon::parse($iteam->published_at)->diffForHumans() }}
                                                    </p>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="rotate-img">
                                                        <img src="{{ asset('uploads/' . $iteam->images->full_small_path) }}"
                                                            alt="banner" class="img-fluid" />
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>



                            <div class="trending">
                                <h2 class="mb-4 text-primary font-weight-600">
                                    الاخبار الشائعة
                                </h2>
                                @foreach ($trending_news as $iteam)
                                    <div class="mb-4">
                                        <div class="rotate-img">
                                            <img src="{{ asset('uploads/' . $iteam->images->full_small_path) }}"
                                                alt="banner" class="img-fluid" />
                                        </div>
                                        <h3 class="mt-3 font-weight-600">
                                            <div style="direction: rtl">
                                            <a href="{{ route('main.page.newss', [$iteam->slug, $iteam->id]) }}" class="text-dark">{{ shorten_text($iteam->title, 50) }}</a></div>
                                        </h3>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">صورة
                                            </span>{{ \Carbon\Carbon::parse($iteam->published_at)->diffForHumans() }}
                                        </p>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            loadnewss(1);

            $(document).on("click", ".pagination a", function(e) {
                e.preventDefault();
                var url = $(this).attr('href');
                var page = $(this).attr('href').split('page=')[1];
                loadnewss(page);
            });

        });

        function loadnewss(page) {
            var id = $(".category_iteam").attr("data-id");
            var url = "{{ route('main.page.loadnewss', ['id' => ':id']) }}" + "/?page=" + page,
                url = url.replace(':id', id);
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'html',
                success: function(response) {
                    console.log(response);
                    $("#shownewss").html(response);
                },
                error: function(error) {
                }
            });
        }
    </script>
@endsection
