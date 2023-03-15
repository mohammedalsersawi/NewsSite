@isset($section_three_data)
<div class="row world-news" data-aos="fade-up">
    <div class="col-sm-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-title">{{ $section_three_data->last()->category->name }}</div>
                    </div>
                    <div class="row">

                        @foreach ($section_three_data as $iteam)
                        <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                            <div class="position-relative image-hover">
                                <a href="{{ route('main.page.newss' ,[$iteam->slug , $iteam->id]) }}"><img src="{{ asset('uploads/' .$iteam->images->full_small_path) }}" alt="thumb" class="img-fluid" /></a>
                                {{-- <span class="thumb-title">TRAVEL</span> --}}
                            </div>
                            <a href="{{ route('main.page.newss' ,[$iteam->slug , $iteam->id]) }}" class="text-dark"><h5 class="font-weight-bold mt-3">
                                <div style="direction: rtl">{{ shorten_text($iteam->title, 80) }}</div>
                            </h5></a>
                            <p class="fs-15 font-weight-normal">
                                <div style="direction: rtl">{{ shorten_text($iteam->content, 120) }}</div>
                            </p>
                            <a href="{{ route('main.page.newss' ,[$iteam->slug , $iteam->id]) }}" class="font-weight-bold text-dark pt-2">اقرأ المقال</a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endisset
