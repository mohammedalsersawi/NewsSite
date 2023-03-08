<section id="form_edit_section" style="display: none">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="head-label">
                        <h4 class="card-title">التصنيفات</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('post.update') }}" method="POST" id="edit_form_post" class="form_edit_post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
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
                                        <input type="file" class="form-control" name="image" id="image">
                                        <div class="invalid-feedback"></div>
                                        <div class="progress">
                                            <div class="progress-bar" id="progress-bar-image" role="progressbar"
                                                style="width:" aria-valuenow="100" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-switch">
                                            <br>
                                            <input type="checkbox" name="view_main" checked class="custom-control-input"
                                                id="switch_main">
                                            <label class="custom-control-label" for="switch_main">اظهار الخبر
                                                في
                                                الصفحة الرئسية</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-switch">
                                            <br>
                                            <input type="checkbox" name="videoSwitch" class="custom-control-input"
                                                id="switch1">
                                            <label class="custom-control-label" for="switch1">هل يوجد للخبر
                                                فيديو</label>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-switch">
                                            <br>
                                            <input type="checkbox" class="custom-control-input" name="albomSwitch"
                                                id="switch2">
                                            <label class="custom-control-label" for="switch2">هل يوجد للخبر
                                                البوم</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 container-file-opt" id="container_video" style="display: none">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="video" id="video">
                                        <div class="progress">
                                            <div class="progress-bar" id="progress-bar-video" role="progressbar"
                                                style="width:" aria-valuenow="100" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12 container-file-opt" id="container_albom" style="display: none">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="albom" id="albom">
                                        <div class="progress">
                                            <div class="progress-bar" id="progress-bar-albom" role="progressbar"
                                                style="width:" aria-valuenow="100" aria-valuemin="0"
                                                aria-valuemax="100"></div>
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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" id="close_card"
                                    data-dismiss="modal">@lang('close')</button>
                                <button class="btn btn-primary">@lang('add')</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
