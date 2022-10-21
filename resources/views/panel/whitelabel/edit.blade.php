@extends('layouts.master')

@section('title') @lang('translation.FAQs') @endsection

@section('css')
<!-- dropzone css -->
<link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') Whitelabel @endslot
@endcomponent

<div class="checkout-tabs">
    <div class="row">
        <div class="col-lg-2">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-gen-ques-tab" data-bs-toggle="pill" href="#v-pills-gen-ques" role="tab" aria-controls="v-pills-gen-ques" aria-selected="true">
                    <i class="bx bx-food-menu  d-block check-nav-icon mt-4 mb-2"></i>
                    <p class="fw-bold mb-4">Konfigurasi Dasar</p>
                </a>
                <a class="nav-link" id="v-pills-privacy-tab" data-bs-toggle="pill" href="#v-pills-privacy" role="tab" aria-controls="v-pills-privacy" aria-selected="false">
                    <i class="bx bx-image-alt  d-block check-nav-icon mt-4 mb-2"></i>
                    <p class="fw-bold mb-4">Assets/ Gambar</p>
                </a>
                <a class="nav-link" id="v-pills-support-tab" data-bs-toggle="pill" href="#v-pills-support" role="tab" aria-controls="v-pills-support" aria-selected="false">
                    <i class="bx bx-sort-a-z  d-block check-nav-icon mt-4 mb-2"></i>
                    <p class="fw-bold mb-4">Informasi Website</p>
                </a>
            </div>
        </div>
        <div class="col-lg-10">
            <form action="{{ route('whitelabel.update', $whitelabel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-gen-ques" role="tabpanel" aria-labelledby="v-pills-gen-ques-tab">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row mb-4">
                                            <label for="title" class="col-form-label col-lg-2">Title</label>
                                            <div class="col-lg-10">
                                                <input id="title" name="title" type="text" class="form-control" placeholder="Enter Project Name..." value="{{ $whitelabel->title }}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="font" class="col-form-label col-lg-2">Font</label>
                                            <div class="col-lg-10">
                                                <input id="font" name="font" type="text" class="form-control" placeholder="Enter Project Name..." value="{{ $whitelabel->font }}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="color" class="col-form-label col-lg-2">Warna Utama</label>
                                            <div class="col-lg-10">
                                                <input id="color" name="color" type="text" class="form-control" placeholder="Enter Project Name..." value="{{ $whitelabel->color }}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="hover" class="col-form-label col-lg-2">Warna Kedua</label>
                                            <div class="col-lg-10">
                                                <input id="hover" name="hover" type="text" class="form-control" placeholder="Enter Project Name..." value="{{ $whitelabel->hover }}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="active" class="col-form-label col-lg-2">Warna Ketiga</label>
                                            <div class="col-lg-10">
                                                <input id="active" name="active" type="text" class="form-control" placeholder="Enter Project Name..." value="{{ $whitelabel->active }}">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-lg-10">
                                                <button type="submit" class="btn btn-primary waves-effect btn-label waves-light"><i class="bx bxs-duplicate label-icon"></i>Update Data</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-privacy" role="tabpanel" aria-labelledby="v-pills-privacy-tab">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="row mb-4">
                                            <label for="favicon" class="col-form-label col-lg-2">Favicon</label>
                                            <div class="col-lg-5">
                                                <label for="favicon" class="form-label">Upload favicon baru</label>
                                                <input class="form-control" type="file" name="favicon" id="gambar">
                                            </div>
                                            <div class="col-md-5 text-center">
                                                <img class="rounded me-2" alt="favicon" src="/image/{{$whitelabel->favicon}}" data-holder-rendered="true" height="100">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="logo" class="col-form-label col-lg-2">Logo</label>
                                            <div class="col-lg-5">
                                                <label for="logo" class="form-label">Upload logo baru</label>
                                                <input class="form-control" type="file" name="logo" id="gambar">
                                            </div>
                                            <div class="col-md-5 text-center">
                                                <img class="rounded me-2" alt="Logo" src="/image/{{$whitelabel->logo}}" data-holder-rendered="true" height="100">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="logo" class="col-form-label col-lg-2">Gambar FAQ</label>
                                            <div class="col-lg-5">
                                                <label for="bantuan" class="form-label">Upload gambar faq</label>
                                                <input class="form-control" type="file" name="bantuan" id="bantuan">
                                            </div>
                                            <div class="col-md-5 text-center">
                                                <img class="rounded me-2" alt="bantuan" src="/image/{{$whitelabel->bantuan}}" data-holder-rendered="true" height="100">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="logo" class="col-form-label col-lg-2">Call to Action</label>
                                            <div class="col-lg-5">
                                                <label for="cta" class="form-label">Upload gambar Call to Action</label>
                                                <input class="form-control" type="file" name="cta" id="cta">
                                            </div>
                                            <div class="col-md-5 text-center">
                                                <img class="rounded me-2" alt="cta" src="/image/{{$whitelabel->cta}}" data-holder-rendered="true" height="100">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-lg-10">
                                                <button type="submit" class="btn btn-primary waves-effect btn-label waves-light"><i class="bx bxs-duplicate label-icon"></i>Update Data</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-support" role="tabpanel" aria-labelledby="v-pills-support-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <label for="alamat" class="col-form-label col-lg-2">Alamat</label>
                                            <div class="col-lg-10">
                                                <input id="alamat" name="alamat" type="text" class="form-control" placeholder="Enter Project Name..." value="{{ $whitelabel->alamat }}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="sosial media" class="col-form-label col-lg-2">Sosial Media</label>
                                            <div class="col-lg-2">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bx bx-envelope"></i></div>
                                                    <input type="text" name="email" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username" value="{{ $whitelabel->email }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bx bxl-instagram "></i></div>
                                                    <input type="text" name="instagram" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username" value="{{ $whitelabel->instagram }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class=" bx bxl-twitter "></i></div>
                                                    <input type="text" name="twitter" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username" value="{{ $whitelabel->twitter }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class=" bx bxl-facebook "></i></div>
                                                    <input type="text" name="facebook" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username" value="{{ $whitelabel->facebook }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bx bxl-youtube "></i></div>
                                                    <input type="text" name="youtube" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username" value="{{ $whitelabel->youtube }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="maps" class="col-form-label col-lg-2">Footer</label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control" name="footer" id="metadescription" rows="5" placeholder="Meta Description">{{ $whitelabel->footer }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="maps" class="col-form-label col-lg-2">Maps</label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control" name="maps" id="metadescription" rows="5" placeholder="Meta Description">{{ $whitelabel->maps }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-lg-10">
                                                <button type="submit" class="btn btn-primary waves-effect btn-label waves-light"><i class="bx bxs-duplicate label-icon"></i>Update Data</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end row -->

@endsection
@section('script')
<!-- bootstrap datepicker -->
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<!-- dropzone plugin -->
<script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>

<!-- form advanced init -->
<script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
@endsection