<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  @include('master.meta')
  @include('master.head-css')
  <link rel="stylesheet" href="/home/css/merchant.css">
  @include('master.root')
  @foreach ($mercbanner as $hero)
  <style>

    /* Banner CTA */
    #cta {
      padding: 50px 0;
      background: var(--warna-dasar) url(/home/assets/img/Ilustrasi/Daftar.png) no-repeat;
      background-size: 40%;
      position: relative;
    }

    /*
    .hero-bg {
      background-image: url(/image/{{$hero->gambar}});
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 100vh;
      position: relative;
      z-index: 1;
    } */

    /* End Banner CTA */
  </style>
  @endforeach
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
    <section class="hero-bg" style=" background-image: url(/image/{{$hero->gambar}});
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
          <div>
            <button id="btn-1" class="btn btn-success aktif" type="button">
              <div class="box-tutor">1. Buka Aplikasi Nikila.</div>
              <div class="box-tutor">Lalu Pilih Salah Satu Kategori</div>
            </button>
          </div>
          <div>
            <button id="btn-2" class="btn btn-success" type="button">
              <div>2. Tentukan Produk Yang</div>
              <div>Ingin Dibeli</div>
            </button>
          </div>
            <button id="btn-3" class="btn btn-success" type="button">
              <div>3. Kalau Sudah, klik BELI.</div>
            </button>
             <div>
            <button id="btn-4" class="btn btn-success" type="button">
              <div class="box-tutor">4. Isi semua kolom yang</div>
              <div class="box-tutor">Yang Sudah Tertera.</div>
            </button>
          </div>
           <div>
            <button id="btn-5" class="btn btn-success" type="button">
              <div class="box-tutor">5. Pilih Alamat </div>
              <div class="box-tutor">Tujuan Pengiriman Kamu</div>
            </button>
          </div>
           <div>
            <button id="btn-6" class="btn btn-success" type="button">
              <div class="box-tutor">6. Pilih Jasa Pengiriman. </div>
            </button>
          </div>
           <div>
            <button id="btn-7" class="btn btn-success" type="button">
              <div class="box-tutor">7. Pilih Metode Pembayaran</div>
            </button>
          </div>
           <div>
            <button id="btn-8" class="btn btn-success" type="button">
              <div class="box-tutor">8. Pastikan Semua Data </div>
              <div class="box-tutor">Yang Kamu Isi Sudah Benar</div>
            </button>
          </div>
           <div>
            <button id="btn-9" class="btn btn-success" type="button">
              <div class="box-tutor">9. Tunggu Hingga Pesanan</div>
              <div class="box-tutor">Kamu Sampai Ke Tujuan.</div>
            </button>
          </div>
          </div>
        <div class="col-md-6">
          <div id="carousel">
            <div>
              <img id="img-1" class="image-app" src="/home/assets/img/Order Delivery/1. Buka Aplikasi NikiLaPOL, lalu pilih salah satu kategori.png">
            <p id="mobile" class="text-center text-1">1. Buka Aplikasi Nikila, Lalu Pilih Salah Satu Kategori</p>
            </div>

            <div>
              <img id="img-2" class="image-app" src="/home/assets/img/Order Delivery/2. Tentukan Produk yang ingin di beli.png">
                <p id="mobile" class="text-center text-1">2. Tentukan Produk Yang Ingin Dibeli</p>
            </div>

            <div>
              <img id="img-3" class="image-app" src="/home/assets/img/Order Delivery/3. Kalau sudah yakin dengan barangnya, kamu tinggal klik BELI LANGSUNG.png">
                <p id="mobile" class="text-center text-1">3. Kalau Sudah, Klik BELI</p>
            </div>

            <div>
              <img id="img-4" class="image-app" src="/home/assets/img/Order Delivery/4. Sekarang kamu hanya perlu isi semua data dengan benar.png">
              <p id="mobile" class="text-center text-1">4. Isi Semua Kolom Yang Sudah Tersedia</p>  
            </div>

           <div>
              <img id="img-5" class="image-app" src="/home/assets/img/Order Delivery/5. Pilih Alamat tempat kamu berada.png">
              <p id="mobile" class="text-center text-1">5. Pilih Alamat Tujuan Pengiriman Kamu</p>  
            </div>

            <div>
              <img id="img-6" class="image-app" src="/home/assets/img/Order Delivery/6. Lalu pilih mau pake jasa pengiriman apa.png">
              <p id="mobile" class="text-center text-1">6. Pilih Jasa Pengiriman</p>  
            </div>

            <div>
              <img id="img-7" class="image-app" src="/home/assets/img/Order Delivery/7. Dan pilih metode pembayaran mau pake apa.png">
              <p id="mobile" class="text-center text-1">7. Pilih Metode Pembayaran</p>  
            </div>

            <div>
              <img id="img-8" class="image-app" src="/home/assets/img/Order Delivery/8. Cek kembali apakah semuanya sudah benar, kalau sudah kamu tinggal klik CHECKOUT.png">
              <p id="mobile" class="text-center text-1">8. Pastikan Semua Data Yang Kamu Isi Sudah Benar</p>  
            </div>

            <div>
              <img id="img-9" class="image-app" src="/home/assets/img/Order Delivery/9. Kamu tinggal tungguin barangnya sampai ke tempatmu.png">
              <p id="mobile" class="text-center text-1">9. Tunggu Hingga Pesanan Kamu Sampai Ke Tujuan</p>  
            </div>
          </div>
      </div>
    </div>
      </div>  


@include('master.cta')

    <!-- Footer -->
    @include('master.footer')
    <!-- Akhir Footer -->
    <div class="snackbars" id="form-output-global"></div>
    @include('master.scripts')
    <script src="/home/js/merchant.js"></script>
    <script src="/home/js/script-merchant.js"></script>
</body>

</html>
