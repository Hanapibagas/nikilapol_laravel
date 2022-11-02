<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Driver</title>
@include('master.meta')
@include('master.head-css')
<link rel="stylesheet" href="/home/css/driver.css">
@include('master.root')
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

<!-- Content -->
      <!-- Hero -->
      @foreach ($drivebanner as $drivebanner)
      <section class="hero-bg" style=" background-image: url(/image/{{$drivebanner->gambar}});
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        position: relative;
        z-index: 1;">
               <div class="container ">
                   <div class="hero row ">
                       <div class="text-hero">
                           <h1>{{ $drivebanner->title }}</h1>
                           <p>{{ $drivebanner->description }}</p>
                       </div>
                       <div class="btns row">
                        <a href="./syarat.html" class="button button-secondary button-nuka">Daftar Sekarang</a>
                    </div>
                   </div>
               </div>
           </section>
      @endforeach
           <!-- End Hero -->

   <!-- Persyaratan -->
           <section class="section section-lg bungkus-fitur bg-gray-100">
            <div class="container text-center text-lg-left">
              <h2><span class="text-bold text-white wow fadeInUp" style="font-family: 'Poppins';">Driver</h2>
              <div class="row mt-5 justify-content-center flex-wrap row-30 number-counter-2   wow fadeInUp">
                @foreach ($drivebenefit as $drivebenefit)
              <div class="col-md-4">
                  <div class="box-numbered-left unit">
                    <div class="unit-body">
                      <img src="/image/{{$drivebenefit->gambar}}" alt="{{ $drivebenefit->title }}" width="100px"><h4 style="color: var(--warna-putih1); margin-top: 20px; font-family: var(--font-dasar);">{{ $drivebenefit->title }}</h4>
                      <div  style="color: #fff;" class="content">{{ $drivebenefit->description }}</div>
                      <a href="./syarat.html" class="button button-secondary button-nuka">Daftar</a>
                    </div>
                  </div>
                </div>
                @endforeach
                </div>
              </div>
            </div>
          </section>

    <!-- Kenapa Kami-->
    <section class="section section-md bg-default">
         <div class="text-center wow fadeInUp pb-5">
              <h2 style="font-family: var(--font-dasar);">Kenapa Gabung Mitra Kami ?</h2>
            </div>
        <div class="why-driver wow fadeInUp">
          @foreach ($drivemengapa as $drivemengapa )
    <a href="#" class="card education">
  <div class="overlay"></div>
  <div class="circle">
      <img src="image/{{ $drivemengapa->gambar }}" style="z-index: 1;" width="80px" alt="">
  </div>
  <p style="font-weight: 600;" class="text-center">{{ $drivemengapa->title }}</p>
</a>
 @endforeach
</div>
</section>

<!-- Tutor Pesen -->
<!-- Tutor Pesen -->
<div class="container">
      <h1 class="row text-center" style="font-family: var(--font-dasar); font-size: 50px;">Cara pesan Niki Anterin</h1>
      <div class="row">
        <div class="col-md-6 text-tutor">
            @php
                $angka = 1
            @endphp
          @foreach ( $drivetutor as $drivetutor )
          <div>
            <button id="btn-{{ $angka++ }}" class="btn btn-success" type="button">
              <div class="box-tutor">{{ $drivetutor->title }}</div>
              <div class="box-tutor">{{ $drivetutor->description }}</div>
            </button>
          </div>
          @endforeach
        </div>
        <div class="col-md-6">
          <div id="carousel">
            @php
                $a = 1
            @endphp
            @foreach ( $drivetutorgambar as $drivetutorgambar )
            <div>
                <img id="img-{{ $a++ }}" class="image-app" src="/image/{{$drivetutorgambar->gambar ?? ''}}">
                <p id="mobile" class="text-center text-1">1. Buka Aplikasi Nikila Lalu Pilih Niki Anterin</p>
                </div>
            @endforeach
      </div>
      </div>
    </div>
      </div>

      <!-- CTA -->
      @include('master.cta')
      <!-- END CTA -->

        <!-- Footer -->
        @include('master.footer')
        <!-- Akhir Footer -->
    <div class="snackbars" id="form-output-global"></div>
    @include('master.scripts')
    <script src="/home/js/driver.js"></script>
    <script src="/home/js/script-merchant.js"></script>
  </body>
</html>
