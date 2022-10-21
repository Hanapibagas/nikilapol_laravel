@extends('layouts.master')

@section('title') @lang('translation.Profile') @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Contacts @endslot
@slot('title') Profile @endslot
@endcomponent

<div class="row">
    <div class="col-xl-4">
        <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p>Awali hari dengan bismillah</p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="avatar-md profile-user-wid mb-4">
                            <img src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}" alt="" class="img-thumbnail rounded-circle">
                        </div>
                        <h5 class="font-size-15 text-truncate">{{ Auth::user()->name }}</h5>
                        <p class="text-muted mb-0 text-truncate">UI/UX Designer</p>
                    </div>

                    <div class="col-sm-8">
                        <div class="pt-4">

                            <div class="row">
                                <div class="col-6">
                                    <h5 class="font-size-15">125</h5>
                                    <p class="text-muted mb-0">Artikel</p>
                                </div>
                                <div class="col-6">
                                    <h5 class="font-size-15">323</h5>
                                    <p class="text-muted mb-0">FAQs</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="/panel/" class="btn btn-primary waves-effect waves-light btn-sm">Dashboard <i class="mdi mdi-arrow-right ms-1"></i></a>

                                <a href="" class="btn btn-primary waves-effect waves-light btn-sm" data-bs-toggle="modal" data-bs-target=".update-profile">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card -->

        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Personal Information</h4>
                <div class="table-responsive">
                    <table class="table table-nowrap mb-0">
                        <tbody>
                            <tr>
                                <th scope="row">Full Name :</th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Birthdate :</th>
                                <td>{{ date('d-m-Y', strtotime(Auth::user()->dob)) }}</td>
                            </tr>
                            <tr>
                                <th scope="row">E-mail :</th>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Location :</th>
                                <td>Lamongan, Indonesia</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>

    <div class="col-xl-8">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Artikel Saya</h4>
                <div class="table-responsive">
                    <table class="table table-nowrap table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Publish</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Skote admin UI</td>
                                <td>Tutorial</td>
                                <td>20 Oct, 2019</td>
                            </tr>

                            <tr>
                                <th scope="row">2</th>
                                <td>Skote admin Logo</td>
                                <td>Tutorial</td>
                                <td>2 Sep, 2019</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Redesign - Landing page</td>
                                <td>Tutorial</td>
                                <td>29 Sep, 2019</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>App Landing UI</td>
                                <td>Tutorial</td>
                                <td>04 Oct, 2019</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Blog Template</td>
                                <td>Tutorial</td>
                                <td>16 Oct, 2019</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Redesign - Multipurpose Landing</td>
                                <td>Tutorial</td>
                                <td>05 Nov, 2019</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Logo Branding</td>
                                <td>Tutorial</td>
                                <td>05 Nov, 2019</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<!--  Update Profile example -->
<div class="modal fade update-profile" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data" id="update-profile">
                    @csrf
                    <input type="hidden" value="{{ Auth::user()->id }}" id="data_id">
                    <div class="mb-3">
                        <label for="useremail" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="useremail" value="{{ Auth::user()->email }}" name="email" placeholder="Enter email" autofocus>
                        <div class="text-danger" id="emailError" data-ajax-feedback="email"></div>
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ Auth::user()->name }}" id="username" name="name" autofocus placeholder="Enter username">
                        <div class="text-danger" id="nameError" data-ajax-feedback="name"></div>
                    </div>

                    <div class="mb-3">
                        <label for="userdob">Date of Birth</label>
                        <div class="input-group" id="datepicker1">
                            <input type="text" class="form-control @error('dob') is-invalid @enderror" placeholder="dd-mm-yyyy" data-date-format="dd-mm-yyyy" data-date-container='#datepicker1' data-date-end-date="0d" value="{{ date('d-m-Y', strtotime(Auth::user()->dob)) }}" data-provide="datepicker" name="dob" autofocus id="dob">
                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                        </div>
                        <div class="text-danger" id="dobError" data-ajax-feedback="dob"></div>
                    </div>

                    <div class="mb-3">
                        <label for="avatar">Profile Picture</label>
                        <div class="input-group">
                            <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="avatar" name="avatar" autofocus>
                            <label class="input-group-text" for="avatar">Upload</label>
                        </div>
                        <div class="text-start mt-2">
                            <img src="{{ asset(Auth::user()->avatar) }}" alt="" class="rounded-circle avatar-lg">
                        </div>
                        <div class="text-danger" role="alert" id="avatarError" data-ajax-feedback="avatar"></div>
                    </div>

                    <div class="mt-3 d-grid">
                        <button class="btn btn-primary waves-effect waves-light UpdateProfile" data-id="{{ Auth::user()->id }}" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
@section('script')

<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>


<script>
    $('#update-profile').on('submit', function(event) {
        event.preventDefault();
        var Id = $('#data_id').val();
        let formData = new FormData(this);
        $('#emailError').text('');
        $('#nameError').text('');
        $('#dobError').text('');
        $('#avatarError').text('');
        $.ajax({
            url: "{{ url('update-profile') }}" + "/" + Id,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#emailError').text('');
                $('#nameError').text('');
                $('#dobError').text('');
                $('#avatarError').text('');
                if (response.isSuccess == false) {
                    alert(response.Message);
                } else if (response.isSuccess == true) {
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                }
            },
            error: function(response) {
                $('#emailError').text(response.responseJSON.errors.email);
                $('#nameError').text(response.responseJSON.errors.name);
                $('#dobError').text(response.responseJSON.errors.dob);
                $('#avatarError').text(response.responseJSON.errors.avatar);
            }
        });
    });
</script>

@endsection