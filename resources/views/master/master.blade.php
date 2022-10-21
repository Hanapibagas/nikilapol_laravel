<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>

    @include('master.meta')
    @foreach ( $whitelabel as $favicon)   
    <link rel="icon" href="/image/{{ $favicon->favicon }}" type="image/x-icon">
    @endforeach
    @include('master.head-css')    
</head>

@section('body')
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
    </div>
    <div class="page">
@show

    </div>

  @include('master.navbar')

</div>

    @include('master.footer')
    <div class="snackbars" id="form-output-global"></div>
    @include('master.scripts')
  </body>
</html>