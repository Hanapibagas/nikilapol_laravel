@extends('layouts.master')

@section('title') @lang('translation.Dashboards') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Konfigurasi @endslot
@slot('title') Keuntungan @endslot
@endcomponent

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">List Keuntungan</h4>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">No</th>
                                <th class="align-middle">Title</th>
                                <th class="align-middle">Deskripsi</th>
                                <th class="align-middle">Gambar</th>
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($profit as $profit)
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">1</a> </td>
                                <td>{{ $profit->title }}</td>
                                <td><div style="width: 442px; word-wrap: break-word; overflow: hidden; text-overflow: ellipsis;">{{ $profit->description }}</div></td>
                                <td><img class="rounded me-2" alt="200x200" src="/image/{{$profit->gambar}}" data-holder-rendered="true" width="100"></td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <a href="{{ route('profit.edit', $profit->id) }}" type="button" class="btn btn-primary waves-effect btn-label waves-light btn-sm"><i class="bx bx-edit  label-icon"></i> Edit</a>
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
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection