<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Merchant</title>
  @include('master.meta')
  @include('master.head-css')
  <link rel="stylesheet" href="/home/css/merchant.css">
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

    <!-- Header -->
    @include('master.navbar')
    <!-- End Header -->

    <!-- Content -->
    <!-- Hero -->
    @foreach( $mercbanner as $mercbanner)
    <section class="hero-bg" style=" background-image: url(/image/{{$mercbanner->gambar}});
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        position: relative;
        z-index: 1;">
      <div class="container">
        <div class="hero row ">
          <div class="text-hero">
            <h1>{{ $mercbanner->title }}</h1>
            <p>{{ $mercbanner->description }}</p>
          </div>
          <div class="btns row">
            <a href="#" class="button button-secondary button-nuka">Daftar Sekarang</a>
          </div>
        </div>
      </div>
    </section>
    @endforeach
    <!-- End Hero -->


    <!-- Kenapa Harus-->
    <section class="section section-md bg-default">
      <div class="text-center wow fadeInUp pb-5">
        <h2 style="font-family: 'Poppins';">Kenapa Gabung Mitra Kami ?</h2>
      </div>
      <div class="why-driver wow fadeInUp ">
        @foreach( $merchant as $merchant)
        <a href="#" class="card">
          <div class="overlay"></div>
          <div class="circle">
            <img src="/image/{{ $merchant->gambar }}" style="z-index: 1;" width="80px" alt="">
          </div>
          <p style="font-weight: 600;" class="text-center" class="text-center">{{ $merchant->title }}</p>
        </a>
        @endforeach

      </div>
    </section>


    <!-- Tutor Pesen -->
<div class="container">
      <h1 class="row text-center" style="font-family: 'Poppins'; font-size: 50px;">Cara pesan Delivery</h1>
      <div class="row">
        <div class="col-md-6 text-tutor">
            @php
                $angka = 1
            @endphp
          @foreach ( $merctutor as $key => $merctutor  )
          <div>
            <button id="btn-{{ $angka++ }}" class="btn btn-success" type="button">
              <div class="box-tutor"> {{ $merctutor->title }}</div>
              <div class="box-tutor"> {{ $merctutor->description }}</div>
            </button>
          </div>
          @endforeach

          </div>
        <div class="col-md-6">
          <div id="carousel">
            @php
                $a = 1
            @endphp
            @foreach ( $gambar as $gambar )
            <div>
                <img id="img-{{ $a++ }}" class="image-app" src="/image/{{$gambar->gambar ?? ''}}">
                <p id="mobile" class="text-center text-1">{{ $gambar->title }}</p>
                <p id="mobile" class="text-center text-1">{{ $gambar->description }}</p>
            </div>
            @endforeach
          </div>
      </div>
    </div>
      </div>


  <!-- Banner CTA -->
  @include('master.cta')
  <!-- End Banner CTA -->

    <!-- Footer -->
    @include('master.footer')
    <!-- Akhir Footer -->
    <div class="snackbars" id="form-output-global"></div>
    @include('master.scripts')
    <script src="/home/js/merchant.js"></script>
    <script src="/home/js/script-merchant.js"></script>
</body>

</html>
