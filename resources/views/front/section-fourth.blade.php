<div class="row editors-news" data-aos="fade-up">
    <div class="col-sm-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-title">Popular News</div>
                    </div>
                    <div class="row">
                        @php
                            $lastItem = $fourth_section->last();
                        @endphp

                        <div class="col-lg-6 mb-5 mb-sm-2">
                            <div class="position-relative image-hover">
                                <img src="assets/images/dashboard/glob.jpg" class="img-fluid" alt="world-news" />
                                <span class="thumb-title">{{ $lastItem->id }}</span>
                            </div>
                            <h1 class="font-weight-600 mt-3">
                                Melania Trump speaks about courage at State
                                Department
                            </h1>
                            <p class="fs-15 font-weight-normal">
                                Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer
                                took a galley of type and
                            </p>
                        </div>


                        <div class="col-lg-6 mb-5 mb-sm-2">
                            @foreach ($section->chunk(2) as $sectionChunk)
                                <div class="row">
                                    @foreach ($sectionChunk as $sectionItem)
                                        <div class="col-sm-6 mb-5 mb-sm-2">
                                            <div class="position-relative image-hover">
                                                <img src="assets/images/dashboard/star-magazine-5.jpg" class="img-fluid"
                                                    alt="world-news" />
                                                <span class="thumb-title">{{ $sectionItem->id }}</span>
                                            </div>
                                            <h5 class="font-weight-600 mt-3">
                                                A look at California's eerie plane graveyards
                                            </h5>
                                            <p class="fs-15 font-weight-normal">
                                                Lorem Ipsum has been the industry's standard
                                                dummy text
                                            </p>
                                        </div>
                                    @endforeach

                                </div>
                            @endforeach

                            {{-- <div class="row mt-3">
                                <div class="col-sm-6 mb-5 mb-sm-2">
                                    <div class="position-relative image-hover">
                                        <img src="assets/images/dashboard/star-magazine-7.jpg" class="img-fluid"
                                            alt="world-news" />
                                        <span class="thumb-title">33333</span>
                                    </div>
                                    <h5 class="font-weight-600 mt-3">
                                        Japan cancels cherry blossom festivals over
                                        virus fears
                                    </h5>
                                    <p class="fs-15 font-weight-normal">
                                        Lorem Ipsum has been the industry's standard
                                        dummy text
                                    </p>
                                </div>
                            </div> --}}


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
