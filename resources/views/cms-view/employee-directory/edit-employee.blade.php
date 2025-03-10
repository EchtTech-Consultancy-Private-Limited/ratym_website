@extends('cms-view.layouts.main')
@section('title')
    {{__('Employee Directory Edit')}}
@endsection
@section('pageTitle')
 {{ __('Employee Directory') }}
@endsection
@section('breadcrumbs')
 {{ __('Employee Directory Edit') }}
@endsection
@push('post-scripts')
<script src="{{ asset('public/form-js/employee-directory-edit.js') }}"></script>
@endpush
@section('content')
<input type="hidden" id="urlListData" data-info="{{ $crudUrlTemplate }}">
<div class="post d-flex flex-column-fluid" id="kt_post">
<div id="kt_content_container" class="container-xxl">
<div class="card card-flush">
   <!--begin::Card body-->
   <div class="card-body">
      <!--begin::Form-->
      <form id="kt_EmployeeDirectory_edit_form" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
         <!--begin::Main column-->
         <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <!--end:::Tabs-->
            <!--begin::Tab content-->
            <div class="tab-content">
               <!--begin::Tab pane-->
               <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                  <div class="d-flex flex-column gap-7 gap-lg-10">
                     <!--begin::General options-->
                     <div class="card card-flush py-4">
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                        <div class="fv-row mb-10">
                           </div>
                           <div class="fv-row mb-10">
                                <div class="row g-9 mb-7">
                                    <!--begin::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold mb-2">Select Department</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-control mb-2 deprt_id" name="deprt_id" id="deprt_id" data-control="select2" data-placeholder="Select an option">
                                            <option></option>
                                            @foreach($department as $departments)
                                            @if($departments->uid == $data->department_id)
                                                <option value="{{ $departments->uid }}" selected>{{ $departments->name_en  }}</option>
                                            @else
                                                <option value="{{ $departments->uid }}">{{ $departments->name_en  }}</option>
                                            @endif
                                            @endforeach
                                        </select><!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold mb-2">Select Designation</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-control mb-2 designation_id" name="designation_id" id="designation_id" data-control="select2" data-placeholder="Select an option">
                                            <option></option>
                                            @foreach($designation as $designations)
                                            @if($designations->uid == $data->designation_id)
                                                <option value="{{ $designations->uid }}" selected>{{ $designations->name_en  }}</option>
                                            @else
                                                <option value="{{ $designations->uid }}">{{ $designations->name_en  }}</option>
                                            @endif
                                            @endforeach
                                        </select><!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class=" fs-6 fw-semibold mb-2">Designation (English)</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 designation_en_extra" type="text" placeholder="Enter The Designation Name" name="designation_en_extra" value="{{ $data->designation_en_extra }}" />
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class=" fs-6 fw-semibold mb-2">पद का नाम (हिन्दी)</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 designation_hi_extra" type="text" placeholder="Enter The पद का नाम Name" name="designation_hi_extra" value="{{ $data->designation_hi_extra }}" />
                                        <!--end::Input-->
                                    </div>
                                    
                                </div>
                                <div class="row g-9 mb-7">
                                    <!--begin::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold mb-2">First Name (English)</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 fename" type="text" placeholder="Enter The First Name" name="fename" value="{{ $data->fname_en }}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold mb-2">Middle Name (English)</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 mename" type="text" placeholder="Enter Middle Name" name="mename" value="{{ $data->mname_en }}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold mb-2">Last Name (English)</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 lename" type="text" placeholder="Enter the last name" name="lename" value="{{ $data->lname_en }}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold mb-2">प्रथम नाम (हिन्दी)</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 fhname" type="text" placeholder="" name="fhname" value="{{ $data->fname_hi }}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold mb-2">मध्य नाम (हिन्दी)</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 mhname" type="text" placeholder="" name="mhname" value="{{ $data->mname_hi }}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold mb-2">अंतिम नाम (हिन्दी)</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 lhname" type="text" placeholder="" name="lhname" value="{{ $data->lname_hi }}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold mb-2">Mobile Number</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 mobileno" type="text" placeholder="" name="mobileno" value="{{ $data->mobile }}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Landline Number (Optional)</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 landlineNo" type="text" placeholder="" name="landlineNo" value="{{ $data->landline_number }}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="row g-9 mb-7">
                                    <!--begin::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Extention Number (Optional)</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 extentionNo" type="text" placeholder="" name="extentionNo" value="{{ $data->extention_number }}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold mb-2">Email</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 email" type="text" placeholder="" name="email" value="{{ $data->email  }}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Date of Birth</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 short_order" type="date" placeholder="Number..." name="dob" value="{{ $data->date_of_birth }}" />
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Date of Death</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 short_order" type="date" placeholder="Number..." name="dod" value="{{ $data->date_of_death }}" />
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Sort Order</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 short_order" type="number" placeholder="Number..." name="short_order" value="{{ $data->short_order }}" />
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold mb-2">Description (English)</label>
                                        <!--end::Label-->
                                        <div class="min-h-200px mb-2 summernote kt_summernote_en" id="kt_summernote_en">{!! $data->description_en !!}</div>
                                        <!--begin::Input-->
                                        <!-- <textarea class="form-control mb-2 description_e" type="text" placeholder="" name="description_e">{!! $data->description_en !!}</textarea> -->
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold mb-2">विवरण (हिन्दी)</label>
                                        <!--end::Label-->
                                        <div class="min-h-200px mb-2 summernote kt_summernote_hi" id="kt_summernote_hi">{!! $data->description_hi !!}</div>
                                        <!--begin::Input-->
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="row g-9 mb-7">
                                    <!--begin::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Linked In</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 linkedin" type="url" placeholder="https?://.*" pattern="https?://.*" name="linkedin" value="{{ $data->linked_in }}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Facebook</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 facebook" type="url" placeholder="https?://.*" pattern="https?://.*" name="facebook" value="{{ $data->facebook }}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Twitter</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 twitter" type="url" placeholder="https?://.*" pattern="https?://.*" name="twitter" value="{{ $data->twitter }}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Instagram</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 instagram" type="url" placeholder="https?://.*" pattern="https?://.*" name="instagram" value="{{ $data->instagram }}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--begin::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">ORCID</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 orcid" type="url" placeholder="https?://.*" pattern="https?://.*" name="orcid" value="{{ $data->orcid }}" />
                                        <!--end::Input-->
                                    </div>
                                     <!--begin::Col-->
                                     <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Web of science</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 webofscience" type="url" placeholder="https?://.*" pattern="https?://.*" name="webofscience" value="{{ $data->webofscience }}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--begin::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Scop us</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 scopus" type="url" placeholder="https?://.*" pattern="https?://.*" name="scopus" value="{{ $data->scopus }}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--begin::Col-->
                                    <div class="col-md-3 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Scholar</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 scholar" type="url" placeholder="https?://.*" pattern="https?://.*" name="scholar" value="{{ $data->scholar }}" />
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-md-12 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Address/Place</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control mb-2 short_order" type="text" placeholder="address..." name="address" value="{{ $data->address }}" />
                                        <!--end::Input-->
                                    </div>
                                    
                                    <div class="col-md-3 fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="d-block fw-semibold fs-6 mb-5">Old Profile</label>
                                        <!--end::Label-->
                                        <!--begin::Image placeholder-->
                                        <style>
                                            .image-input-placeholder {
                                            background-image: url('{{ asset("assets-cms/media/svg/files/blank-image.svg") }}');
                                            }
                                            [data-bs-theme="dark"] .image-input-placeholder {
                                            background-image: url('{{ asset("assets-cms/media/svg/files/blank-image-dark.svg") }}');
                                            }               
                                        </style>
                                        <!--end::Image placeholder-->
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset('resources/uploads/empDirectory/') }}/<?php echo $data->public_url ?>);"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <!-- <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar"> -->
                                            <!-- <i class="ki-outline ki-pencil fs-7"></i> -->
                                            <!--begin::Inputs-->
                                            <!-- <input type="file" name="avatar" accept=".png, .jpg, .jpeg" /> -->
                                            <input type="hidden" name="avatar_remove" />
                                            <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Cancel-->
                                            <!-- <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar"> -->
                                            <!-- <i class="ki-outline ki-cross fs-2"></i>  -->
                                            </span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <!-- <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar"> -->
                                            <!-- <i class="ki-outline ki-cross fs-2"></i>                                 -->
                                            </span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->
                                        <!--begin::Hint-->
                                        <!-- <div class="form-text">Allowed file types: png, jpg, jpeg.</div> -->
                                        <!--end::Hint-->
                                    </div>
                                    <div class="col-md-3 fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="d-block fw-semibold fs-6 mb-5">New Profile</label>
                                        <!--end::Label-->
                                        <!--begin::Image placeholder-->
                                        <style>
                                            .image-input-placeholder {
                                            background-image: url('{{ asset("assets-cms/media/svg/files/blank-image.svg") }}');
                                            }
                                            [data-bs-theme="dark"] .image-input-placeholder {
                                            background-image: url('{{ asset("assets-cms/media/svg/files/blank-image-dark.svg") }}');
                                            }               
                                        </style>
                                        <!--end::Image placeholder-->
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset('assets-cms/media/avatars/300-6.jpg') }});"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                            <i class="ki-outline ki-pencil fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="avatar_remove" />
                                            <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Cancel-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                            <i class="ki-outline ki-cross fs-2"></i> 
                                            </span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                            <i class="ki-outline ki-cross fs-2"></i>                                
                                            </span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->
                                        <!--begin::Hint-->
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                            </div>
                        </div>
                        <!--end::Card header-->
                     </div>
                     <!--end::General options-->
                  </div>
               </div>
               <!--end::Tab pane-->
            </div>
            <!--end::Tab content-->
            <div class="d-flex justify-content-end">
               <!--begin::Button-->
               <a id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">
               {{config('FormField.cancel_button')}}
               </a>
               <!--end::Button-->
               <!--begin::Button-->
               <button type="submit" id="kt_edit_EmployeeDirectory_submit" class="btn btn-primary submit-EmployeeDirectoryedit-btn">
               <span class="indicator-label">
               {{config('FormField.save_button')}}
               </span>
               <span class="indicator-progress">
               Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
               </span>
               </button>
               <!--end::Button-->
            </div>
         </div>
         <!--end::Main column-->
      </form>
      <!--end::Form-->
   </div>
</div>
@endsection