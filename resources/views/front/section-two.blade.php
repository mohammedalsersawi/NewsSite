<div class="row" data-aos="fade-up">
    <div class="col-lg-3 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>التصنيفات</h2>
                <ul class="vertical-menu">
                    @foreach ($categories as $iteam)
                        <li><a href="{{ route('main.page.show' ,[$iteam->slug , $iteam->id]) }}">{{ $iteam->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @isset($section_two)
        <div class="col-lg-9 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">

                    @foreach ($section_two as $iteam)
                        <div class="row">
                            <div class="col-sm-4 grid-margin">
                                <div class="position-relative">
                                    <div class="rotate-img">
                                        <a href="{{ route('main.page.newss' ,[$iteam->slug , $iteam->id]) }}"><img src="{{ asset('uploads/' . $iteam->images->full_small_path) }}" alt="thumb"
                                            class="img-fluid" /></a>
                                    </div>
                                    <div class="badge-positioned">
                                        <span
                                            class="badge badge-danger font-weight-bold">{{ $iteam->category->name }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 grid-margin">
                                <h2 class="mb-2 font-weight-600">
                                    <a href="{{ route('main.page.newss' ,[$iteam->slug , $iteam->id]) }}" class="text-dark"><div style="direction: rtl">{{ shorten_text($iteam->title, 130) }}</div></a>
                                </h2>
                                <div class="fs-13 mb-2">
                                    <span class="mr-2">صورة
                                    </span>{{ \Carbon\Carbon::parse($iteam->published_at)->diffForHumans() }}
                                </div>
                                <p class="mb-0">
                                <div style="direction: rtl">{{ shorten_text($iteam->content, 220) }}</div>

                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endisset
</div>
