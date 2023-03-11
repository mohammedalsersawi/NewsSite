<div class="row world-news" data-aos="fade-up">
    <div class="col-sm-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-title">World News</div>
                    </div>
                    <div class="row">

                        @foreach ($three_section as $iteam)
                        <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                            <div class="position-relative image-hover">
                                <img src="assets/images/dashboard/travel.jpg" class="img-fluid" alt="world-news" />
                                {{-- <span class="thumb-title">TRAVEL</span> --}}
                            </div>
                            <h5 class="font-weight-bold mt-3">
                                {{ $iteam->title }}
                            </h5>
                            <p class="fs-15 font-weight-normal">
                                {{ $iteam->title }}
                            </p>
                            <a href="#" class="font-weight-bold text-dark pt-2">اقرأ المقال</a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
