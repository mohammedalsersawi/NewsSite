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

                            </div>
                            <div class="card-body">
                                <form id="search_form" action="{{ route('contents.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        @foreach ($data as $iteam)
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="{{ $iteam->key }}">
                                                        <h2>@lang($iteam->key)</h2>
                                                    </label>
                                                    {{-- <input type="text" name="{{ $iteam->key }}" value="{{ $iteam->id }}"> --}}
                                                    <select name="{{ $iteam->key }}" id="section_three"
                                                        class="search_input form-control"
                                                        data-select2-id="select2-data-1-bgy2" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option selected value="{{ $iteam->value }}">{{ $iteam->category->name }}
                                                        </option>
                                                        @foreach ($category as $i)
                                                            <option value="{{ $i->id }}">{{ $i->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="text-right">
                                        <div class="form-group">
                                            <button class="btn btn-outline-primary button_save"><span><i
                                                        class="fa fa-plus"></i>@lang('save')</span>
                                            </button>
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
        $('#search_form').submit(function(e) {
            e.preventDefault();
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
                success: function(response) {
                    if (response.success == 200) {
                        toastr.success('@lang('editd')', '', {});
                    }                },
                error: function(xhr, textStatus, errorThrown) {
                    console.log(xhr.responseText);
                }
            });
        });
    </script>
@endsection
