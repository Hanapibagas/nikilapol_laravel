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
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">No</th>
                                <th class="align-middle">Gambar</th>
                                <th class="align-middle">Title Header</th>
                                <th class="align-middle">Deskripsi</th>
                                <th class="align-middle">Link</th>
                                <th class="align-middle">View Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($header as $header)
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">1</a> </td>
                                <td style="width: 100px;"><img src="/image/{{ $header->cover }}" alt="" class="avatar-md h-auto d-block rounded"></td>
                                <td>{{ $header->title }}</td>
                                <td>
                                {{ $header->description }}
                                </td>
                                <td>
                                <a href="/public/image/{{$header->cover}}" target="_blank">{{ $header->link }}</a>
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <a href="{{ route('header.edit', $header->id) }}" class="btn btn-primary waves-effect btn-label waves-light btn-sm"><i class="bx bx-edit label-icon"></i> Edit Header</a>
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