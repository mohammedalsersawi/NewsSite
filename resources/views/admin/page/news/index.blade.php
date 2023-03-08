@extends('admin.layouts.app')
@section('styles')
    <style>
        input[type="checkbox"] {
            transform: scale(2.1);
        }
    </style>
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
                                <li class="breadcrumb-item"><a href="#">التصنيفات</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-3 col-12 mb-2">
                <div class="btn-group float-md-right">
                    <button class="btn btn-outline-primary button_forms" style="display: none">العودة للخلف</button>
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
                                            <th>عنوان الخبر</th>
                                            <th>التصنيف</th>
                                            <th>الحالة</th>
                                            <th>اظهار في الرئسية</th>
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

            @include('admin.page.news.edit-news')

            @include('admin.page.news.add-news')
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).on('click', '#add_post', function(e) {
            e.preventDefault();
            $("#section_content").css("display", "none");
            $("#form_add_section").css("display", "block");
            $(".button_forms").css("display", "block");
        });
        $(document).on('click', '.button_forms', function(e) {
            e.preventDefault();
            $("#section_content").css("display", "block");
            $("#form_add_section").css("display", "none");
            $("#form_edit_section").css("display", "none");
            $(".button_forms").css("display", "none");
        });
        $(document).on('click', '.close_card', function(e) {
            e.preventDefault();
            $("#section_content").css("display", "block");
            $("#form_add_section").css("display", "none");
            $("#form_edit_section").css("display", "none");
        });
        $(document).on('change', '#switch1', function(e) {
            e.preventDefault();
            var isChecked = $(this).prop('checked');
            if (isChecked == true) {
                $("#container_video").css("display", "block");
            } else {
                $("#container_video").css("display", "none");
            }
        });
        $(document).on('change', '#switch2', function(e) {
            e.preventDefault();
            var isChecked = $(this).prop('checked');
            if (isChecked == true) {
                $("#container_albom").css("display", "block");
            } else {
                $("#container_albom").css("display", "none");
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.news-image').on('change', function() {
                progress('.news-bar-image', '.news-image');
            });
        });
        $(document).ready(function() {
            $('.news-video').on('change', function() {
                progress('.news-bar-video', '.news-video');
            });
        });
        $(document).ready(function() {
            $('.news-albom').on('change', function() {
                progress('.news-bar-albom', '.news-albom');
            });
        });


        function progress($class_progress, $id_file) {
            var formData = new FormData();
            formData.append('image', $($id_file)[0].files[0]);
            $($class_progress).css('width', '0%');
            $($class_progress).text('0%');
            var xhr = new XMLHttpRequest();
            xhr.upload.addEventListener('progress', function(event) {
                if (event.lengthComputable) {
                    var percent = (event.loaded / event.total) * 100;
                    $($class_progress).css('width', percent + '%');
                    $($class_progress).text(percent.toFixed(2) + '%');
                }
            });
            xhr.addEventListener('load', function(event) {});
            xhr.addEventListener('error', function(event) {
                // Handle error
            });
            xhr.open('POST', '/upload-image');
            xhr.send(formData);
        }
    </script>


    <script>
        $('.form_submit_post').on('submit', function(event) {
            // $('.search_input').val("").trigger("change";
            $('input, select, textarea').removeClass('is-invalid');
            $('.invalid-feedback').text('');
            event.preventDefault();
            var data = new FormData(this);
            let url = $(this).attr('action');
            var method = $(this).attr('method');
            $.ajax({
                type: method,
                cache: false,
                contentType: false,
                processData: false,
                url: url,
                data: data,
                beforeSend: function() {},
                success: function(result) {
                    $('.invalid-feedback').text('');
                    $('input, select, textarea').removeClass('is-invalid');
                    $('#full-modal-stem').modal('hide');
                    $('.form_submit_post').trigger("reset");
                    toastr.success('@lang('done_successfully')');
                    $("#section_content").css("display", "block");
                    $("#form_add_section").css("display", "none");
                    $(".container-file-opt").css("display", "none");
                    $(".button_forms").css("display", "none");
                    $(".progress-bar").css('width', '0%');
                    $(".progress-bar").text('0%');
                    table.draw();
                },
                error: function(data) {
                    if (data.status === 422) {
                        var response = data.responseJSON;
                        $.each(response.errors, function(key, value) {
                            toastr.error(value);
                            var str = (key.split("."));
                            if (str[1] === '0') {
                                key = str[0] + '[]';
                            }
                            $('[name="' + key + '"], [name="' + key + '[]"]').addClass(
                                'is-invalid');
                            $('[name="' + key + '"], [name="' + key + '[]"]').closest(
                                '.form-group').find('.invalid-feedback').html(value[0]);
                        });
                    } else {
                        toastr.error('@lang('something_wrong')', '', {});
                    }
                }
            });
        });
    </script>


    <script>
        var table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            "oLanguage": {
                @if (app()->isLocale('ar'))
                    "sEmptyTable": "ليست هناك بيانات متاحة في الجدول",
                    "sLoadingRecords": "جارٍ التحميل...",
                    "sProcessing": "جارٍ التحميل...",
                    "sLengthMenu": "أظهر _MENU_ مدخلات",
                    "sZeroRecords": "لم يعثر على أية سجلات",
                    "sInfo": "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
                    "sInfoEmpty": "يعرض 0 إلى 0 من أصل 0 سجل",
                    "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
                    "sInfoPostFix": "",
                    "sSearch": "ابحث:",
                    "oAria": {
                        "sSortAscending": ": تفعيل لترتيب العمود تصاعدياً",
                        "sSortDescending": ": تفعيل لترتيب العمود تنازلياً"
                    },
                @endif // "oPaginate": {"sPrevious": '<-', "sNext": '->'},
                "oPaginate": {
                    // remove previous & next text from pagination
                    "sPrevious": '&nbsp;',
                    "sNext": '&nbsp;'
                }
            },
            ajax: {
                url: '{{ route('post.getData') }}',
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'name_category',
                    name: 'name_category'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'view_main',
                    name: 'view_main'
                },

                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]

        });

        $(document).on("click", ".activate-news", function(event) {
            var id = $(this).attr("news-id");
            $.ajax({
                type: "put",
                url: "{{ route('post.activate', '') }}" + '/' + id,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                contentType: "application/json",
                success: function(data) {
                    if (data.success == 200) {
                        table.draw();
                        toastr.success('@lang('editd')', '', {});
                    }
                },
                error: function(data) {
                    toastr.error(data.message);
                },
            });
        });
        $(document).on("click", ".activatenewsMain", function(event) {
            var id = $(this).attr("news-id");
            $.ajax({
                type: "put",
                url: "{{ route('post.activate.main', '') }}" + '/' + id,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                contentType: "application/json",
                success: function(data) {
                    if (data.success == 200) {
                        table.draw();
                        toastr.success('@lang('editd')', '', {});
                    }
                },
                error: function(data) {
                    toastr.error(data.message);
                },
            });
        });
    </script>


    <script>
        $(document).on('click', '.edit_btn_news', function(e) {
            $('input, select, textarea').removeClass('is-invalid');
            $('.invalid-feedback').text('');
            $(".button_forms").css("display", "block");
            $("#section_content").css("display", "none");
            $("#form_edit_section").css("display", "block");
            var button = $(this)
            var id = button.data('id');
            $('#id').val(id);
            $('#edit_title').val(button.data('title'));
            $('#edit_slug').val(button.data('slug'));
            $('#edit_content').val(button.data('content'));
            // alert(button.data('view_main'));
            if (button.data('view_main') == 1) {
                $('#edit_view_main').prop('checked', true);
            } else {
                $('#edit_view_main').prop('checked', false);
            }
            $('#edit_category_id').val(button.data('category_id')).trigger('change');

        });

        $('#edit_form_post').on('submit', function(event) {
            // $('.search_input').val("").trigger("change")
            event.preventDefault();
            var data = new FormData(this);
            let url = $(this).attr('action');
            let method = $(this).attr('method');
            $.ajax({
                type: method,
                cache: false,
                contentType: false,
                processData: false,
                url: url,
                data: data,
                beforeSend: function() {
                    $('input').removeClass('is-invalid');
                    $('.text-danger').text('');
                    $('.btn-file').addClass('');
                },
                success: function(result) {
                    $('#edit_modal').modal('hide');
                    $('.form_edit_post').trigger("reset");
                    $("#form_edit_section").css("display", "none");
                    $("#section_content").css("display", "block");
                    $(".container-form_edit_section-opt").css("display", "none");
                    $(".progress-bar").css('width', '0%');
                    $(".progress-bar").text('0%');
                    $(".button_forms").css("display", "none");
                    table.draw();
                    toastr.success('@lang('done_successfully')', '', {});
                },
                error: function(data) {

                    if (data.status === 422) {

                        var response = data.responseJSON;
                        $.each(response.errors, function(key, value) {
                            toastr.error(value);
                            var str = (key.split("."));
                            if (str[1] === '0') {
                                key = str[0] + '[]';
                            }
                            $('[name="' + key + '"], [name="' + key + '[]"]').addClass(
                                'is-invalid');
                            $('[name="' + key + '"], [name="' + key + '[]"]').closest(
                                '.form-group').find('.invalid-feedback').html(value[0]);
                        });
                    } else {
                        toastr.error('@lang('something_wrong')', '', {});
                    }
                }
            });
        })
    </script>
@endsection
