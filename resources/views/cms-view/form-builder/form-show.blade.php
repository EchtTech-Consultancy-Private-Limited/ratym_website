@extends('cms-view.layouts.main')
@section('title')
    {{__('Form Show')}}
@endsection
@section('pageTitle')
 {{ __('Form Show') }}
@endsection
@section('breadcrumbs')
 {{ __('Form Show') }}
@endsection
@push('post-scripts')
<script src="{{ asset('assets-cms/cms_js/form-builder/form-builder.min.js') }}"></script>
<script src="{{ asset('assets-cms/cms_js/form-builder/form-render.min.js') }}"></script>
<script src="{{ asset('public/form-js/form-builder-js.js') }}"></script>
@endpush
@section('content')
<input type="hidden" id="urlListData" data-info="{{ $crudUrlTemplate }}">
<div class="post d-flex flex-column-fluid" id="kt_post">
<!--begin::Container-->
<div id="kt_content_container" class="container-xxl">
   <!--begin::Layout-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <!--begin::Content-->
            <div class="tab-content">
                <!--begin::Card-->
                <div class="card card-flush pt-3 mb-5 mb-xl-10">
                    <!--begin::Card body-->
                    <div class="card-body pt-1">
                    <!--begin::Section-->
                    <h2>{{$title}}</h2>
                    <div class="mb-12">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap py-5">
                            <!--begin::Row-->
                            <div class="flex-equal me-5">
                            <form method="POST" action="{{ route('formbuilder-saveformData') }}" enctype="multipart/form-data">
                            @csrf   
                                <input type="text" id="form_id" name="form_design_id" hidden/>
                                <div id="fb-reader"></div>
                            </form>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Section-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content-->
        </div>
   <!--end::Layout-->
@endsection