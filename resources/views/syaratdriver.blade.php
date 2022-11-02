<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
      <title>Syarat Driver</title>
  @include('master.meta')
  @include('master.head-css')
  <link rel="stylesheet" href="/home/css/syaratdriver.css">
  @include('master.root')
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
        <!-- Navbar -->
        @include('master.navbar')
      <!-- End Navbar -->
      
        <!-- Hero -->
        @foreach ($driveheader as $driveheader )        
        <section class="hero-bg" style=" background-image: url(/image/{{$driveheader->gambar}});
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        position: relative;
        z-index: 1;">
               <div class="container ">
                   <div class="hero row ">
                       <div class="text-hero">
                           <h1>{{ $driveheader->title }}</h1>
                           <p>{{ $driveheader->description }}</p>
                       </div>
                       <div class="btns row">
                        <a href="#" class="button button-secondary button-nuka">Daftar Sekarang</a>
                    </div>
                   </div>
               </div>
           </section>
        @endforeach
           <!-- End Hero -->

                      <!-- Persyaratan -->
           <section class="section section-lg bungkus-fitur bg-gray-100">
            <div class="container text-center text-lg-left">
              <h2><span class="text-bold text-white wow fadeInUp" style="font-family: var(--font-dasar);">Persyaratan Jadi Mitra Driver</h2>
              <div class="row mt-5 justify-content-center flex-wrap row-30 number-counter-2   wow fadeInUp">
              @foreach ($driversyarat as $driversyarat)  
              <div class="col-md-4">
                  <div class="box-numbered-left unit">
                    <div class="unit-body">
                      <img src="image/{{ $driversyarat->gambar }}" alt="{{ $driversyarat->title }}" width="100px">                             
                      <h4 style="color: var(--warna-putih1); margin-top: 20px; font-family: var(--font-dasar);">{{ $driversyarat->title }}</h4>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </section>

             
    <!-- Kenapa Kami-->
    <section class="section section-md bg-default">
         <div class="text-center wow fadeInUp pb-5">
              <h2 style="font-family: var(--font-dasar);">Reward Gabung Untuk 100 Driver Pertama !!</h2>
            </div>
        <div class="why-driver wow fadeInUp">
        @foreach ($syaratreward as $syaratreward)
        <a href="#" class="card education">
  <div class="overlay"></div>
  <div class="circle">
      <img src="image/{{ $syaratreward->gambar }}" style="z-index: 1;" width="80px" alt="">
  </div>
  <p style="font-weight: 600;" class="text-center">{{ $syaratreward->title }}</p>
</a>
@endforeach

</div>
</section>




@include('master.footer')
   
    </div>
    <div class="snackbars" id="form-output-global"></div>
@include('master.scripts')
    <script src="/home/js/driver.js"></script>
    <script src="/home/js/script-merchant.js"></script>
    
    
  </body>
</html>