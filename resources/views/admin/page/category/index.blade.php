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
                        <h2 class="content-header-title float-left mb-0">@lang('sections')</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">@lang('home')</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('category.index') }}">@lang('sections')</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="head-label">
                                    <h4 class="card-title">التصنيفات</h4>

                                </div>
                                <div class="text-right">
                                    <div class="form-group">
                                        <button class="btn btn-outline-primary button_modal" type="button"
                                            data-toggle="modal" id="" data-target="#full-modal-stem"><span><i
                                                    class="fa fa-plus"></i>اضافة تصنيف</span>
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

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade full-modal-stem"data-backdrop="static"id="full-modal-stem" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">اضافة تصنيف</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('category.store') }}" method="POST" id="add-mode-form" class="form_submit"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">اسم التصنيف</label>
                                <input type="text" class="form-control" placeholder="اسم التصنيف" name="name">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label for="slug">رابط التصنيف</label>
                                <input type="text" class="form-control" placeholder="عنوان الرابط" name="slug">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <label for="status"> حالة التصنيف: </label>
                                    <input type="checkbox" checked data-toggle="toggle" data-on="نشط" name="status"
                                        data-off="مقيد" data-onstyle="success" data-offstyle="danger">
                                </div>
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

    <!-- Modal -->
    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">تعديل تصنيف</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('category.update') }}" method="POST" id="form_edit" class=""
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id" class="form-control" />
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">اسم التصنيف</label>
                                <input type="text" class="form-control" placeholder="اسم التصنيف" name="name"
                                    id="name">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label for="slug">رابط التصنيف</label>
                                <input type="text" class="form-control" placeholder="عنوان الرابط" name="slug"
                                    id="slug">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <label for="status"> حالة التصنيف: </label>
                                    <input type="checkbox" id="status" data-toggle="toggle" data-on="نشط"
                                        name="status" data-off="مقيد" data-onstyle="success" data-offstyle="danger">
                                </div>
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
                url: '{{ route('category.getData') }}',
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'status',
                    name: 'status'
                },

                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]

        });


        $(document).ready(function() {
            $(document).on('click', '.edit_btn', function(event) {
                event.preventDefault();
                $('input').removeClass('is-invalid');
                $('.invalid-feedback').text('');
                var button = $(this)
                var id = button.data('id');
                $('#id').val(id);
                $('#name').val(button.data('name'));
                $('#slug').val(button.data('slug'));
                var data = 1;
                if (button.data('status') == 1) {
                    $('#status').bootstrapToggle('on');
                } else {
                    $('#status').bootstrapToggle('off');
                }

            });
        });

        $(document).on("click", ".activate-category", function(event) {
            var id = $(this).attr("category_id");
            $.ajax({
                type: "put",
                url: "{{ route('category.activate', '') }}" + '/' + id,
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
@endsection
