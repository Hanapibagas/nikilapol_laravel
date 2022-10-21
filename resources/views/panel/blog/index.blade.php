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
                <h4 class="card-title mb-2">List Artikel</h4>
                <div class="d-flex flex-wrap mb-2">
                    <a href="{{ route('blog.create') }}" type="button" class="btn btn-success waves-effect btn-label waves-light mb-2"><i class="bx bx-add-to-queue label-icon"></i>Tambah Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">No</th>
                                <th class="align-middle">Gambar</th>
                                <th class="align-middle">Title</th>
                                <th class="align-middle">Kategori</th>
                                <th class="align-middle">Tag</th>
                                <th class="align-middle">Author</th>
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp 
                            @foreach($blog as $blog)
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">{{ $no++ }}</a> </td>
                                <td style="width: 100px;"><img src="/image/{{$blog->gambar}}" alt="" class="avatar-md h-auto d-block rounded"></td>
                                <td>
                                    <h5 class="font-size-13 text-truncate mb-1"><a href="javascript: void(0);" class="text-dark">{{ $blog->title }}</a></h5>
                                    <p class="text-muted mb-0">{{ $blog->created_at->format('d F Y') }}</p>
                                </td>
                                <td><button type="button" class="btn btn-outline-primary waves-effect btn-sm">{{ $blog->category }}</button></td>
                                <td><button type="button" class="btn btn-outline-dark waves-effect btn-sm">driver</button></td>
                                <td>{{ $blog->author }}</td>
                                <td>
                                    <form action="{{ route('blog.destroy',$blog->id) }}" method="POST">
                                        <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('blog.edit',$blog->id) }}"><i class="bx bx-edit  label-icon"></i>Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm"><i class="bx bxs-trash   label-icon"></i>Hapus</button>
                                    </form>
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