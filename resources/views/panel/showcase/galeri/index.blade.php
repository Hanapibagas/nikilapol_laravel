@extends('layouts.master')

@section('title') @lang('translation.Dashboards') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Konfigurasi @endslot
@slot('title') Header @endslot
@endcomponent

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-check-all me-2"></i>
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <h4 class="card-title mb-4">List Header</h4>
                <div class="d-flex flex-wrap mb-2">
                    <a href="{{ route('galery.create') }}" type="button" class="btn btn-success waves-effect btn-label waves-light mb-2"><i class="bx bx-add-to-queue label-icon"></i>Tambah Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">No</th>
                                <th class="align-middle">Brand</th>
                                <th class="align-middle">Gambar</th>
                                <th class="align-middle">View Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galeri as $galeri)
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">1</a> </td>
                                <td>{{ $galeri->showcase->title }}</td>
                                <td><img src="{{ Storage::url($galeri->gambar) }}" class="rounded me-2" data-holder-rendered="true" width="100"</td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <a href="{{ route('galery.edit', $galeri->id) }}" class="btn btn-primary waves-effect btn-label waves-light btn-sm"><i class="bx bx-edit label-icon"></i> Edit Header</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@endsection
@section('script')

@endsection
