@extends('layouts.master')

@section('title') @lang('translation.Dashboards') @endsection
@section('css')
<!-- Sweet Alert-->
<link href="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

@component('components.breadcrumb')
@slot('li_1') Konfigurasi @endslot
@slot('title') merctutor @endslot
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
                <h4 class="card-title mb-2">List merctutor</h4>
                <div class="d-flex flex-wrap mb-2">
                    <a href="{{ route('merctutor.create') }}" type="button" class="btn btn-success waves-effect btn-label waves-light mb-2"><i class="bx bx-add-to-queue label-icon"></i>Tambah Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">No</th>
                                <th class="align-middle">Title</th>
                                <th class="align-middle">Gambar</th>
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach($merctutor as $merctutor )
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">{{ $no++ }}</a> </td>
                                <td>{{ $merctutor->title }}</td>
                                <td><img src="/image/{{$merctutor->gambar}}" class="rounded me-2" data-holder-rendered="true" width="50"></td>
                                <td>
                                    <form action="{{ route('merctutor.destroy',$merctutor->id) }}" method="POST">
                                        <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('merctutor.edit',$merctutor->id) }}"><i class="bx bx-edit  label-icon"></i>Edit</a>
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

<script type="text/javascript">

     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#34c38f",
        cancelButtonColor: "#f46a6a",
        confirmButtonText: "Yes, delete it!"
      })
          .then((result) => {
            if (result.isConfirmed) {
              form.submit();
            }
          });
      });

</script>

<!-- Sweet Alerts js -->
<script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<script src="{{ URL::asset('/assets/js/pages/sweet-alerts.init.js') }}"></script>
@endsection