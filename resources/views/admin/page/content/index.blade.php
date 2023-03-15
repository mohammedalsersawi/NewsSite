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
                        <h2 class="content-header-title float-left mb-0">@lang('contents')</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">@lang('home')</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('contents.index') }}">@lang('contents')</a>
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
                                                <label for="status">
                                                    <h2>@lang('section_3')</h2>
                                                </label>
                                                <select name="status" id="section_three" class="search_input form-control"
                                                    data-select2-id="select2-data-1-bgy2" tabindex="-1" aria-hidden="true">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="status">
                                                    <h2>@lang('section_4')</h2>
                                                </label>
                                                <select name="status" id="section_fourth" class="search_input form-control"
                                                    data-select2-id="select2-data-1-bgy2" tabindex="-1" aria-hidden="true">
                                                </select>
                                            </div>
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
@endsection
@section('scripts')
    <script>

    </script>
@endsection
