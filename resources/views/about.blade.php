<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
@include('master.meta')  
@include('master.head-css')
<link rel="stylesheet" href="/home/css/layanan.css">
@include('master.root')
<style>
/* Banner CTA */

/* End Banner CTA */
</style>   
</head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
    </div>
    <div class="page">

      <!-- Header -->
      @include('master.navbar')
      <!-- End Header -->

    

 


  <!-- Banner CTA -->
  @include('master.cta')
  <!-- End Banner CTA -->

        <!-- Footer -->
        @include('master.footer')
        <!-- Akhir Footer -->
    <div class="snackbars" id="form-output-global"></div>
    @include('master.scripts')
    <script src="/home/js/layanan.js"></script>
    <script src="/home/js/script-layanan.js"></script>
  </body>
</html>