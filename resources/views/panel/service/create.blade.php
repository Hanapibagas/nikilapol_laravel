@extends('layouts.master')

@section('title') @lang('translation.Add_Product') @endsection

@section('css')
<!-- select2 css -->
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

<!-- dropzone css -->
<link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Konfigurasi @endslot
@slot('title') Konfigurasi Header @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Edit Informasi Header</h4>
                <p class="card-title-desc">Silahkan edit informasi dibawah</p>

                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="title_header">Judul</label>
                                <input id="title_header" name="title_header" type="text" class="form-control" placeholder="Judul Header">
                            </div>
                            <div class="mb-3">
                                <label for="desc_header">Link Download</label>
                                <input id="desc_header" name="desc_header" type="text" class="form-control" placeholder="Deskripsi Header">
                            </div>
                            <div class="mb-3">
                                <label for="metadescription">Description</label>
                                <textarea class="form-control" id="metadescription" rows="5" placeholder="Meta Description"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="metatitle">Meta title</label>
                                <input id="metatitle" name="title_header" type="text" class="form-control" placeholder="Metatitle">
                            </div>
                            <div class="mb-3">
                                <label for="metakeywords">Meta Keywords</label>
                                <input id="metakeywords" name="desc_header" type="text" class="form-control" placeholder="Meta Keywords">
                            </div>
                            <div class="mb-3">
                                <label for="metadescription">Meta Description</label>
                                <textarea class="form-control" id="metadescription" rows="5" placeholder="Meta Description"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                        <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                    </div>
                </form>

            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-3">Gambar Header</h4>
                <div class="row">
                    <div class="col-6">
                        <label for="metatitle">Ganti Cover</label>
                        <form action="/" method="post" class="dropzone">
                            <div class="fallback">
                            <input name="file" type="file" multiple />
                            </div>

                        <div class="dz-message needsclick">
                        <div class="mb-3">
                            <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                        </div>

                        <h4>Drop files here or click to upload.</h4>
                        </div>
                        </form>
                    </div>
                    <div class="col-6">
                        <label for="metatitle">Ganti Aplikasi</label>
                        <form action="/" method="post" class="dropzone">
                            <div class="fallback">
                            <input name="file" type="file" multiple />
                            </div>

                        <div class="dz-message needsclick">
                        <div class="mb-3">
                            <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                        </div>

                        <h4>Drop files here or click to upload.</h4>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div> 
        <!-- end card-->
    </div>
</div>
<!-- end row -->

@endsection
@section('script')
<!-- select 2 plugin -->
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

<!-- dropzone plugin -->
<script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>

<!-- init js -->
<script src="{{ URL::asset('/assets/js/pages/ecommerce-select2.init.js') }}"></script>
@endsection