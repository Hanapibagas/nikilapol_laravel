<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
@include('master.meta')  
@include('master.head-css')
<link rel="stylesheet" href="/home/css/driver.css">
@include('master.root')
<style>
/* Banner CTA */
#cta {
    padding: 50px 0;
    background: var(--warna-kedua) url(/home/assets/img/Ilustrasi/Daftar.png)  no-repeat;
    background-size: 40%;
    position: relative;
}
.hero-bg {
    background-image: url(/home/assets/img/banner/Banner_Driver.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    position: relative;
    z-index: 1;
}
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

<!-- Content -->
      <!-- Hero -->
      <section class="hero-bg">
               <div class="container ">
                   <div class="hero row ">
                       <div class="text-hero">
                           <h1>Kapan Saja, dimana saja kami siap antar</h1>
                           <p>Manfaatkan waktu luang jadi cuan, tingkatkan pasif income dan jadi pahlawan keluarga</p>
                       </div>
                       <div class="btns row">
                        <a href="./syarat.html" class="button button-secondary button-nuka">Daftar Sekarang</a>
                    </div>
                   </div>
               </div>
           </section>
           <!-- End Hero -->

                      <!-- Persyaratan -->
           <section class="section section-lg bungkus-fitur bg-gray-100">
            <div class="container text-center text-lg-left">
              <h2><span class="text-bold text-white wow fadeInUp" style="font-family: 'Poppins';">Gabung Driver Mana nih ?</h2>
              <div class="row mt-5 justify-content-center flex-wrap row-30 number-counter-2   wow fadeInUp">
                <div class="col-md-4">
                  <div class="box-numbered-left unit">
                    <div class="unit-body">

                      <img src="/home/assets/img/Icon Gabung Driver Mana/Delivery.png" alt="Kita Delivery" width="100px"><h4 style="color: var(--warna-dasar); margin-top: 20px; font-family: var(--font-dasar);">Driver Niki Delivery</h4>
                      <div  style="color: #fff;" class="content">Anter pesanan makanan kamu kemanapun dan kapanpun kamu mau</div>
                      <a href="./syarat.html" class="button button-secondary button-nuka">Daftar</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box-numbered-left unit">
                    <div class="unit-body">
                       <img src="/home/assets/img/Icon Gabung Driver Mana/Anterin.png" alt="Kita Anterin" width="100px">
                       <h4 style="color: var(--warna-dasar); margin-top: 20px; font-family: var(--font-dasar);">Driver Niki Anterin</h4>
                        <div style="color: #fff;" class="content">Bisa nganter kamu kemanapun kamu mau dengan aman dan nyaman... </div>
                        <a href="./syarat.html" class="button button-secondary button-nuka">Daftar</a>
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box-numbered-left unit">
                    <div class="unit-body">
                        <img src="/home/assets/img/Icon Gabung Driver Mana/Belanjain.png" alt="Kita Belanjain" width="100px">
                        <h4 style="color: var(--warna-dasar); margin-top: 20px; font-family: var(--font-dasar);">Driver Niki Belanjain</h4>
                        <div style="color: #fff;" class="content">Bantu kamu buat beliin barang atau makanan yang belum terdaftar di Nikila</div>
                        <a href="./syarat.html" class="button button-secondary button-nuka">Daftar</a>
                      </div>
                  </div>
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
    <a href="#" class="card education">
  <div class="overlay"></div>
  <div class="circle">

      <img src="/home/assets/img/Icon Kelebihan/Sistem Integrasi.png" style="z-index: 1;" width="80px" alt="">
  </div>
  <p style="font-weight: 600;" class="text-center">Sistem terintregasi dan aman</p>
</a>

<a href="#" class="card credentialing">
  <div class="overlay"></div>
  <div class="circle">
      <img src="/home/assets/img/Icon Kelebihan/Fee_100__Milik_Mitra_Merchant.png" style="z-index: 1;" width="80px" alt="">
  </div>
  <p  style="font-weight: 600;" class="text-center" class="text-center">Untung 100% untuk driver </p>
</a>

<a href="#" class="card wallet">
  <div class="overlay"></div>
  <div class="circle">
      <img src="/home/assets/img/Icon Kelebihan/Punya Banyak Mitra.png" style="z-index: 1;" width="80px" alt="">
  </div>
  <p  style="font-weight: 600;" class="text-center" class="text-center">Punya Banyak Mitra Merchant</p>
</a>

<a href="#" class="card human-resources">
  <div class="overlay"></div>
  <div class="circle">
      <img src="/home/assets/img/Icon Kelebihan/Bisa Cairin Saldo Kapan Saja.png" style="z-index: 1;" width="80px" alt="">
  </div>
  <p  style="font-weight: 600;" class="text-center" class="text-center">Bisa Cairin Saldo Kapan Saja</p>
</a>

<a href="#" class="card human-resources">
  <div class="overlay"></div>
  <div class="circle">
      <img src="/home/assets/img/Icon Kelebihan/Bisa Buat Promo Sendiri.png" style="z-index: 1;" width="80px" alt="">
  </div>
  <p style="font-weight: 600;" class="text-center" class="text-center">Banyak Reward</p>
</a>

</div>
</section>

<!-- Tutor Pesen -->
<div class="container">
      <h1 class="row text-center" style="font-family: var(--font-dasar); font-size: 50px;">Cara pesan Niki Anterin</h1>
      <div class="row">
        <div class="col-md-6">
          <div>
            <button id="btn-1" class="btn btn-success aktif" type="button">
              <div class="box-tutor">1. Buka Aplikasi Nikila.</div>
              <div class="box-tutor">Lalu pilih Niki Anterin</div>
            </button>
          </div>
          <div>
            <button id="btn-2" class="btn btn-success" type="button">
              <div>2. Tentukan Lokasi Jemput.</div>
            </button>
          </div>
            <button id="btn-3" class="btn btn-success" type="button">
              <div>3. Pilih Lokasi Yang Kamu Mau.</div>
            </button>
             <div>
            <button id="btn-4" class="btn btn-success" type="button">
              <div class="box-tutor">4. Cek Ulang Pesanan.</div>
              <div class="box-tutor">Lalu Pilih Metode Pembayaran</div>
            </button>
          </div>
           <div>
            <button id="btn-5" class="btn btn-success" type="button">
              <div class="box-tutor">5. Driver Menuju Titik Jemput.</div>
            </button>
          </div>
           <div>
            <button id="btn-6" class="btn btn-success" type="button">
              <div class="box-tutor">6. Sesampainya Driver, Kamu </div>
              <div class="box-tutor">Akan Diantar Sampai Tujuan.</div>
            </button>
          </div>
          </div>
        <div class="col-md-6">
          <div>
            <img id="img-1" class="image-app" src="/home/assets/img/Order Anterin/1. Buka Aplikasi NikiLaPOL, lalu pilih NikiAnterin.png">
            <img id="img-2" class="image-app" src="/home/assets/img/Order Anterin/2. Tentukan Lokasi Jemput.png">
            <img id="img-3" class="image-app" src="/home/assets/img/Order Anterin/3. Lalu pilih lokasi tujuan kamu mau di anterin.png">
            <img id="img-4" class="image-app" src="/home/assets/img/Order Anterin/4. Cek ulang pesanan, pilih metode pembayaran, lalu klik PESAN.png">
            <img id="img-5" class="image-app" src="/home/assets/img/Order Anterin/5. Driver menuju titik jemput kamu.png">
            <img id="img-6" class="image-app" src="/home/assets/img/Order Anterin/6. Sampainya driver, kamu akan di anterin ke lokasi tujuan yang sudah di pilih.png">
          </div>
      </div>
    </div>
      </div>  
  

      <section id="cta">
            <div class="container">
                <div class="box-cta">
                    <div class="cta-text" data-aos="fade-right">Mau Gabung Jadi<br> Mitra Driver ?<br> Yuk, Cek<br> Persyaratan Nya</div>
                    <a href="./syarat.html" class="btn btn-cta" title="Download NikiLa" target="_blank" data-aos="fade-down">
                       <i class="fa-solid fa-clipboard"></i> Cek Disini
                    </a>
                </div>
            </div>
        </section><!-- Akhir Content -->

        <!-- Footer -->
        @include('master.footer')
        <!-- Akhir Footer -->
    <div class="snackbars" id="form-output-global"></div>
    @include('master.scripts')
    <script src="/home/js/driver.js"></script>
    <script src="/home/js/script-merchant.js"></script>
  </body>
</html>