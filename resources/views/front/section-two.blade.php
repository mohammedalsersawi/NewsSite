<div class="row" data-aos="fade-up">
    <div class="col-lg-3 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>Category</h2>
                <ul class="vertical-menu">
                    @foreach ($categories as $iteam)
                        <li><a href="#">{{ $iteam->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-9 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">

                @foreach ($two_section as $iteam)

                <div class="row">
                    <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                            <div class="rotate-img">
                                <img src="assets/images/dashboard/home_5.jpg" alt="thumb" class="img-fluid" />
                            </div>
                            <div class="badge-positioned">
                                <span class="badge badge-danger font-weight-bold">{{ $iteam->category->name }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 grid-margin">
                        <h2 class="mb-2 font-weight-600">
                            {{ $iteam->title }}
                        </h2>
                        <div class="fs-13 mb-2">
                            <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                        <p class="mb-0">
                            {{ $iteam->title }}

                        </p>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
</div>
