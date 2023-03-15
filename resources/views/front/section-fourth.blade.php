<div class="row editors-news" data-aos="fade-up">
    <div class="col-sm-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-title">{{ $laste_secFourth->category->name }}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-5 mb-sm-2">
                            <div class="position-relative image-hover">
                                <a href=""><img src="{{ asset('uploads/' . $laste_secFourth->images->full_small_path) }}"
                                    alt="thumb" class="img-fluid" /></a>
                                <span class="thumb-title">{{ $laste_secFourth->id }}</span>
                            </div>
                            <h1 class="font-weight-600 mt-3">
                               <a href="" class="text-dark">{{ shorten_text($laste_secFourth->title, 120) }}</a>

                            </h1>

                            <div style="direction: rtl">
                                <p class="fs-15 font-weight-normal">{{ shorten_text($laste_secFourth->content, 550) }}
                                </p>
                            </div>


                        </div>


                        <div class="col-lg-6 mb-5 mb-sm-2">
                            @foreach ($section_fourth_data->chunk(2) as $sectionChunk)
                                <div class="row">
                                    @foreach ($sectionChunk as $sectionItem)
                                        <div class="col-sm-6 mb-5 mb-sm-2">
                                            <div class="position-relative image-hover">
                                                <a href="{{ route('main.page.newss' ,[$sectionItem->slug , $sectionItem->id]) }}"><img src="{{ asset('uploads/' . $sectionItem->images->full_small_path) }}"
                                                    class="img-fluid" alt="world-news" /></a>
                                                <span class="thumb-title">{{ $sectionItem->id }}</span>
                                            </div>
                                            <a href="{{ route('main.page.newss' ,[$sectionItem->slug , $sectionItem->id]) }}" class="text-dark"><h5 class="font-weight-600 mt-3">{{ shorten_text($laste_secFourth->title, 80) }}</h5></a>
                                            <div style="direction: rtl">
                                                <p class="fs-15 font-weight-normal">
                                                    {{ shorten_text($sectionItem->content, 100) }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
