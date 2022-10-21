<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
   <title>Nikila | Beranda</title>
  @include('master.meta')
  @include('master.head-css')
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

    <!-- Hero Section-->@foreach ($header as $header)
    <section id="home" class="atf-particle-one atf-cover-bg atf-hero-area atf-align-items-details" style="background-image: url(/image/{{$header->cover}}); background-size:cover; background-position: center center;">
      <div class="atf-round-area d-none d-lg-block"></div>
      <div class="container atf-particles-area">
        <div class="row atf-content-details align-items-center">
          <div class="col-lg-7 col-md-6 col-12 atf-single-details text-lg-left">
            <h2 class="mb-0 d-block d-lg-block">{{ $header->title }}</h2>
            <p class="mr-lg-5"> {{ $header->description }}</p>
            <div class="atf-one__btn-wrap">
              <a href="https://{{ $header->link }}"> <img src="/home/assets/img/googleplay.png" width="150px" alt=""></a>
            </div>
          </div>

          <div class="col-lg-5 col-md-5 col-12 atf_home_img  atf_home_img4 text-center">
            <div class="atf-img-inner  wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s" data-wow-offset="0">
              <div class="home-image-box atf-particle-img"><img src="/image/{{$header->aplikasi}}" alt="portfolio" class="card-s"></div>
            </div>
          </div>
        </div>
      </div>
    </section>@endforeach
    <!-- Akhir Hero Section -->

    <!-- Tentang-->@foreach ($about as $about)
    <section class="section section-md bg-default" id="about">
      <div class="container">
        <div class="row row-40 align-items-center wow fadeInUp">
          <div class="col-xl-7 col-lg-6">
            <div class="img-video">
              <a class="button-play" href="{{ $about->youtube }}" data-lightgallery="item">
                <svg width="19" height="21" viewbox="0 0 19 21">
                  <path d="M18.0698 8.92762C19.3101 9.63455 19.3101 11.3655 18.0698 12.0724L2.85678 20.7432C1.59455 21.4626 -6.40869e-08 20.585 0 19.1708L7.85887e-07 1.82916C8.49974e-07 0.414998 1.59455 -0.462644 2.85678 0.256784L18.0698 8.92762Z"></path>
                </svg>
              </a>
              <img class="box-shadow" src="/image/{{$about->gambar}}" width="660" height="406" />
            </div>
          </div>
          <div class="col-xl-5 col-lg-6">
            <h6>Tentang</h6>
            <h2 style="font-family: 'Roboto' ; font-size: 50px;">Apa itu <span style="color: var(--warna-dasar);"> {{ $about->title }}?</span></h2>
            <p class="big">{{ $about->description }}</p>
          </div>
        </div>
      </div>
    </section>@endforeach
    <!-- Akhir Tentang -->

    <!-- Banner -->
    <div class="content">
      <div class="container wow fadeInUp">
        <h2 class="my-5 text-center" class="poppins"> <span style="color: var(--warna-dasar);">Fasilitas</span> Yang Kami Sajikan</h2>
        <div class="owl-carousel owl-1 text-center">
          @foreach ($banner as $banner)
          <div><img src="/image/{{$banner->gambar}}" alt="Image" class="img-fluid"></div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- End Banner -->

    <!-- Kenapa Harus Kami-->@foreach($profit as $profit)
    <section class="section section-md bg-default">
      <div class="container">
        <div class="row row-15 justify-content-sm-between wow fadeInUp">
          <div class="col-xl-5 col-lg-6">
            <h6> Kenapa harus {{ $profit->title }}?</h6>
            <h2 style="font-family: 'Poppins'; font-size: 40px;">Portofolio Produk Daerah</h2>
            <p class="big">{{ $profit->description }}</p>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="text-center text-lg-left"><img src="/image/{{$profit->gambar}}" alt="" width="500" height="406" />
            </div>
          </div>
        </div>
      </div>
    </section>@endforeach
    <!-- Akhir kenapa harus kami -->

    <!-- Jasa yang ditawarkan-->
    <section class="section section-md bg-default" id="what-we-do">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <h6>Apa Yang Kami Tawarkan ?</h6>
          <h2 class="poppins">Jasa yang bisa nemenin hari hari mu</h2>
        </div>
        <div class="row wow fadeInUp">
          @foreach ($service as $service)
          <div class="column pt-5">
            <div class="card">
              <div class="icon-wrapper">
                <img src="/image/{{$service->gambar}}" width="60px" alt="">
              </div>
              <h3 style="padding-bottom: 10px; font-family: 'Poppins';">{{ $service->title }}</h3>
              <p>
                {{ $service->description }}
              </p>
            </div>
          </div>@endforeach
        </div>
    </section>
    <!-- Akhir Jasa yang ditawarkan -->

    <!-- Layanan Kategori -->
    <section class="section section-md bg-default">
      <div class="container">
        <div class="row row-50 align-items-center flex-xl-row-reverse justify-content-center wow fadeInUp">
          <div class="col-xl-5 col-lg-8 col-md-9 text-center text-xl-left">
            <h6>Kategori Layanan</h6>
            <h2 class="poppins">Kategori Layanan</h2>
            <a href="/layanan" class="button button-secondary button-nuka">Selengkapnya</a>
          </div>
          <div class="col-xl-7 col-lg-9">
            <ul class="list-brands">
              @foreach ($category as $category)
              <li class="list-brands-item"><a class="list-brands-link" href="javascript: void(0);"><img class="list-brands-img" src="/image/{{$category->gambar}}" alt="" width="50" height="71" /></a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Layanan Kategori -->

    <!-- Ajakan Driver -->
    <section class="section section-md bg-default">
      <div class="text-center wow fadeInUp pb-5">
        <h6>Mitra</h6>
        <h2 class="poppins">Gabung Bersama Kami</h2>
      </div>
      <div class="row">
        @foreach($mitra as $mitra)
        <a class="card2" href="#">
          <img src="/image/{{ $mitra->gambar }}" width="80px" alt="">
          <h3 class="poppins">{{ $mitra->title }}</h3>
          <p class="small">{{ $mitra->description }}</p>

          <div class="go-corner" href="#">
            <div class="go-arrow">
              →
            </div>
          </div>
        </a>
        @endforeach
      </div>
  </div>
  </div>
  </section>
  <!-- Akhir Ajakan Driver -->
  <!-- Showcase -->
  <section class="section section-md bg-default">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="col4">
            <div class="content wow fadeInUp">
              <h6>Nikila</h6>
              <p class=" h2 mb-4">Lebih Dari Sekedar Marketplace</p>
              <p class="text-muted mb-4">Nikila merupakan solusi dan layanan untuk memberdayakan jutaan penjual produk kearifan lokal dan konsumen agar dapat berpartisipasi membangun ketahanan ekonomi Kabupaten Lamongan
              <p><a href="/layanan" class="button button-secondary button-nuka">Selengkapnya</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="align-items-center justify-content-center">
            <div id="carousel" class="owl-carousel wow fadeInUp ">
              <div>
                <img width="75%" id="img-1" class="image-app" src="/home/assets/img/Showcase Mockup/Homescreen.png">
              </div>

              <div>
                <img width="75%" id="img-2" class="image-app" src="/home/assets/img/Showcase Mockup/Anterin.png">
              </div>

              <div>
                <img width="75%" id="img-3" class="image-app" src="/home/assets/img/Showcase Mockup/All Produk.png">
              </div>

              <div>
                <img width="75%" id="img-4" class="image-app" src="/home/assets/img/Showcase Mockup/Produk Screen.png">
              </div>

              <div>
                <img width="75%" id="img-5" class="image-app" src="/home/assets/img/Showcase Mockup/Reservasi.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Showcae -->

  <section class="section section-md bg-default">
    <div class="text-center wow fadeInUp">
      <h6>Nikila Blog</h6>
      <h2 style="font-family: var(--font-dasar);">Ikuti Blog Kami Dan Dapatkan Informasi Menarik</h2>
    </div>
    <div class="band wow fadeInUp">
      @foreach ($blog as $artikel)
      
      <div @if ($loop->first) class="item-1" @endif class="item-2">
        <a href="/html/bantuan/akun/blog/blog_akun.html" class="card-blog">
          <!-- <div class="thumb" style="background-image: url(/home/assets/img/banner/bg-home\ Left.jpg);"></div> -->
          <div class="thumb" style="background-image: url(/image/{{$artikel->gambar}});"></div>
          <article>
            <h1>{{ $artikel->title }}</h1>
            <p>Lamongan hadirkan Aplikasi Nikila untuk mengingkatkan PAD </p>
            <span>Baca Selengkapnya</span>
          </article>
        </a>
      </div>
      @endforeach
    </div>
    
  </section>
  <!-- End Blog -->
  <!-- Banner CTA -->
  @include('master.cta')
  <!-- End Banner CTA -->

  <!-- Footer -->
  @include('master.footer')
  <!-- Akhir Footer -->
  <div class="snackbars" id="form-output-global"></div>

  @include('master.scripts')
  <script src="/home/js/script.js"></script>
</body>

</html>