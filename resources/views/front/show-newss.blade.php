@foreach ($newss as $iteam)
    <div class="row">
        <div class="col-sm-4 grid-margin">
            <div class="rotate-img">
                <a href="{{ route('main.page.newss', [$iteam->slug, $iteam->id]) }}">
                    <img src="{{ asset('uploads/' . $iteam->images->full_small_path) }}" alt="banner" class="img-fluid" />
                </a>

            </div>
        </div>
        <div class="col-sm-8 grid-margin">
            <h2 class="font-weight-600 mb-2">
                <a href="{{ route('main.page.newss', [$iteam->slug, $iteam->id]) }}" class="text-dark">{{ shorten_text($iteam->title, 50) }}</a>
            </h2>
            <p class="fs-13 text-muted mb-0">
                <span class="mr-2">صورة
                </span>{{ \Carbon\Carbon::parse($iteam->published_at)->diffForHumans() }}
            </p>
            <p class="fs-15">
                {{ shorten_text($iteam->content, 200) }}
            </p>
        </div>
    </div>
@endforeach
<div class="">
    {{ $newss->links('pagination::bootstrap-4') }}
</div>
