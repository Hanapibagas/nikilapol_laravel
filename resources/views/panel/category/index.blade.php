@extends('layouts.master')

@section('title') @lang('translation.Dashboards') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Konfigurasi @endslot
@slot('title') Layanan @endslot
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
                <h4 class="card-title mb-2">List Kategori</h4>
                <div class="d-flex flex-wrap mb-2">
                    <a href="{{ route('category.create') }}" type="button" class="btn btn-success waves-effect btn-label waves-light mb-2"><i class="bx bx-add-to-queue label-icon"></i>Tambah Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">No</th>
                                <th class="align-middle">Title</th>
                                <th class="align-middle">Description</th>
                                <th class="align-middle">Link</th>
                                <th class="align-middle">Gambar</th>
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($category as $category)
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">{{ $loop->iteration }}</a></td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->description }}</td>
                                <td>{{ $category->link }}</td>
                                <td><img src="/image/{{$category->gambar}}" alt="" class="avatar-sm"></td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <a href="{{ route('category.edit', $category->id) }}" type="button" class="btn btn-primary waves-effect btn-label waves-light btn-sm"><i class="bx bx-edit  label-icon"></i> Edit</a>
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

@endsection
@section('script')
@endsection