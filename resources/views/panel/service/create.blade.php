@extends('layouts.master')

@section('title') @lang('translation.Create_New') @endsection

@section('css')
    <!-- bootstrap datepicker -->
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">

    <!-- dropzone css -->
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Konfigurasi @endslot
        @slot('title') Konfigurasi service @endslot
    @endcomponent
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Konfigurasi service</h4>
                    <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="title" class="col-form-label col-lg-2">Title</label>
                            <div class="col-lg-10">
                                <input id="title" name="title" type="text" class="form-control"
                                    placeholder="Enter Project Name...">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="description" class="col-form-label col-lg-2">Deskripsi</label>
                            <div class="col-lg-10">
                                <textarea id="description" name="description" type="text" class="form-control" style="height:100px;"
                                    placeholder="Enter Project Name..."></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="gambar" class="col-form-label col-lg-2">Gambar</label>
                            <div class="col-lg-5">
                                <label for="gambar" class="form-label">Upload gambar baru</label>
                                <input class="form-control" type="file" name="gambar" id="gambar">
                            </div>
                            <div class="col-md-5 text-center">
                            <img class="rounded me-2" alt="200x200" data-holder-rendered="true" width="200">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Update data</button>
                        </div>
                    </div>
                    </form>
                </div>
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
@endsection
