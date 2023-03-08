<section id="form_edit_section" style="display: none">
    <div class="">
        <div class="card">
            <form action="{{ route('post.update') }}" method="POST" id="edit_form_post" class="form_edit_post"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label for="name">عنوان الخبر</label>
                                <textarea class="form-control" id="edit_title" name="title" placeholder="لا يزيد عن 150 حرفا عنوان الخبر"></textarea>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="slug">رابط الخبر</label>
                                <input type="text" class="form-control" name="slug" id="edit_slug"
                                    placeholder="عنوان الرابط">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="slug">تصنيف الخبر</label>
                                <select name="category_id" id="edit_category_id" class="form-control"
                                    data-select2-id="select2-data-1-bgy2" tabindex="-1" aria-hidden="true">
                                    <option selected disabled>Select @lang('category')</option>
                                    @if (@isset($category))
                                        @foreach ($category as $iteam)
                                            <option value="{{ $iteam->id }}"> {{ $iteam->name }}
                                        @endforeach
                                    @endif

                                </select>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="slug">صورة للخبر</label>
                                <input type="file" class="form-control news-image" name="image" id="">
                                <div class="invalid-feedback"></div>
                                <div class="progress">
                                    <div class="progress-bar news-bar-image" id="" role="progressbar"
                                        style="width:" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="view_main"
                                        id="edit_view_main">
                                    <label class="custom-control-label" for="edit_view_main">تفعيل في الرئسية</label>

                                </div>
                            </div>
                        </div>


                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6" id="">
                            <div class="form-group">
                                <label for="albom">@lang('edit_video')</label>
                                <input type="file" class="form-control news-video" name="video" id="">
                                <div class="progress">
                                    <div class="progress">
                                        <div class="progress-bar news-bar-video" id="" role="progressbar"
                                            style="width:" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-6" id="">
                            <div class="form-group">
                                <label for="albom">@lang('edit_albom')</label>
                                <input type="file" class="form-control news-news-image" name="albom"
                                    id="">
                                <div class="progress">
                                    <div class="progress-bar news-bar-albom" id="" role="progressbar"
                                        style="width:" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">عنوان الخبر</label>
                                <textarea name="content" id="edit_content" class="form-control" cols="30" rows="10"></textarea>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary">@lang('add')</button>
                        <button type="button" class="btn btn-secondary close_card" id="">@lang('close')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
