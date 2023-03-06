@extends('admin.layouts.app')
@section('styles')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#default'
        });
    </script>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">التصنيفات</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#}">التصنيفات</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <section id="section_content" style="display: block">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="head-label">
                                    <h4 class="card-title">التصنيفات</h4>

                                </div>
                                <div class="text-right">
                                    <div class="form-group">
                                        <button class="btn btn-outline-primary button_modal" type="button" id="add_post"
                                            data-target="#full-modal-stem"><span><i class="fa fa-plus"></i>اضافة
                                                تصنيف</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form id="search_form">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="status">@lang('status')</label>
                                                <select name="status" id="s_status" class="search_input form-control"
                                                    data-select2-id="select2-data-1-bgy2" tabindex="-1" aria-hidden="true">
                                                    <option selected disabled>اختار @lang('status')</option>
                                                    <option value="1">فعال</option>
                                                    <option value="0">فعال غير</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3" style="margin-top: 20px">
                                            <div class="form-group">
                                                <button id="search_btn" class="btn btn-outline-info" type="submit">
                                                    <span><i class="fa fa-search"></i> @lang('search')</span>
                                                </button>
                                                <button id="clear_btn" class="btn btn-outline-secondary" type="submit">
                                                    <span><i class="fa fa-undo"></i> @lang('reset')</span>
                                                </button>

                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive card-datatable" style="padding: 20px">
                                <table class="table" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم التصنيف</th>
                                            <th>الحالة</th>
                                            <th style="width: 225px;">الاجراء</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="form_add_section" style="display: none">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="head-label">
                                    <h4 class="card-title">التصنيفات</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('category.store') }}" method="POST" id="add-mode-form"
                                    class="form_submit" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="name">عنوان الخبر</label>
                                                    <textarea id="default">Hello, World!</textarea>
                                                    <div class="invalid-feedback"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="slug">رابط الخبر</label>
                                                <input type="text" class="form-control" placeholder="عنوان الرابط"
                                                    name="slug">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-6">
                                                <label for="slug">صورة للخبر</label>
                                                <input type="file" class="form-control" placeholder="عنوان الرابط"
                                                    name="slug">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="slug">صورة للخبر</label>
                                                <input type="file" class="form-control" placeholder="عنوان الرابط"
                                                    name="slug">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-8">
                                                <label for="slug">صورة للخبر</label>
                                                <input type="file" class="form-control" placeholder="عنوان الرابط"
                                                    name="slug">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="slug">صورة للخبر</label>
                                                <input type="file" class="form-control" placeholder="عنوان الرابط"
                                                    name="slug">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-8">
                                                <label for="slug">صورة للخبر</label>
                                                <input type="file" class="form-control" placeholder="عنوان الرابط"
                                                    name="slug">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="name">عنوان الخبر</label>
                                                    <textarea name="" id="mytextarea" class="form-control" cols="30" rows="10"></textarea>
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

        </div>
    </div>
    <div class="modal fade full-modal-stem" data-backdrop="static" id="full-modal-stem" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">اضافة منشور</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('category.store') }}" method="POST" id="add-mode-form" class="form_submit"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">عنوان الخبر</label>
                                    <textarea name="" id="mytextarea" class="form-control" cols="30" rows="2"></textarea>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="slug">رابط الخبر</label>
                                    <input type="text" class="form-control" placeholder="عنوان الرابط"
                                        name="slug">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="slug">صورة للخبر</label>
                                <input type="file" class="form-control" placeholder="عنوان الرابط" name="slug">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label for="slug"></label>
                                <input type="file" class="form-control" placeholder="عنوان الرابط" name="slug">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-8">
                                <label for="slug">صورة للخبر</label>
                                <input type="file" class="form-control" placeholder="عنوان الرابط" name="slug">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">@lang('close')</button>
                            <button class="btn btn-primary">@lang('add')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).on('click', '#add_post', function(e) {
            e.preventDefault();
            $("#section_content").css("display", "none");
            $("#form_add_section").css("display", "block");
        });
        $(document).on('click', '#close_card', function(e) {
            e.preventDefault();
            $("#section_content").css("display", "block");
            $("#form_add_section").css("display", "none");
        });
    </script>
@endsection
