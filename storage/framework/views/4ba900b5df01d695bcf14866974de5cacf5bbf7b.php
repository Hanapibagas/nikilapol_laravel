<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <?php echo $__env->make('master.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('master.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <link rel="stylesheet" href="/home/css/merchant.css">
  <?php echo $__env->make('master.root', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php $__currentLoopData = $mercbanner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <style>

    /* Banner CTA */
    #cta {
      padding: 50px 0;
      background: var(--warna-dasar) url(/home/assets/img/Ilustrasi/Daftar.png) no-repeat;
      background-size: 40%;
      position: relative;
    }


    /* .hero-bg {
      background-image: url(/image/<?php echo e($hero->gambar); ?>);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 100vh;
      position: relative;
      z-index: 1;
    } */

    /* End Banner CTA */
  </style>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    <?php echo $__env->make('master.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Header -->

    <!-- Content -->
    <!-- Hero -->
    <?php $__currentLoopData = $mercbanner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mercbanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="hero-bg" style=" background-image: url(/image/<?php echo e($hero->gambar); ?>);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        position: relative;
        z-index: 1;">
      <div class="container">
        <div class="hero row ">
          <div class="text-hero">
            <h1><?php echo e($mercbanner->title); ?></h1>
            <p><?php echo e($mercbanner->description); ?></p>
          </div>
          <div class="btns row">
            <a href="#" class="button button-secondary button-nuka">Daftar Sekarang</a>
          </div>
        </div>
      </div>
    </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!-- End Hero -->


    <!-- Kenapa Harus-->
    <section class="section section-md bg-default">
      <div class="text-center wow fadeInUp pb-5">
        <h2 style="font-family: 'Poppins';">Kenapa Gabung Mitra Kami ?</h2>
      </div>
      <div class="why-driver wow fadeInUp ">
        <?php $__currentLoopData = $merchant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $merchant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="#" class="card">
          <div class="overlay"></div>
          <div class="circle">
            <img src="/image/<?php echo e($merchant->gambar); ?>" style="z-index: 1;" width="80px" alt="">
          </div>
          <p style="font-weight: 600;" class="text-center" class="text-center"><?php echo e($merchant->title); ?></p>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
    </section>


    <!-- Tutor Pesen -->



<div class="container">
      <h1 class="row text-center" style="font-family: 'Poppins'; font-size: 50px;">Cara pesan Delivery</h1>
      <div class="row">
        <div class="col-md-6 text-tutor">
            <?php
                $angka = 1
            ?>
          <?php $__currentLoopData = $merctutor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $merctutor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div>
            <button id="btn-<?php echo e($angka++); ?>" class="btn btn-success aktif" type="button">
              <div class="box-tutor"> <?php echo e($merctutor->title); ?></div>
            </button>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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


      <section id="cta">
        <div class="container">
            <div class="box-cta">
                <div class="cta-text" data-aos="fade-right">Cintai Produk Lamongan.<br> Cintai Produk Daerah.<br> Yuk, download<br> sekarang juga</div>
                <a href="" title="Download NikiLa" target="_blank" data-aos="fade-down">
                <img src="/home/assets/img/googleplay.png" width="150px" alt="">
                </a>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php echo $__env->make('master.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Akhir Footer -->
    <div class="snackbars" id="form-output-global"></div>
    <?php echo $__env->make('master.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="/home/js/merchant.js"></script>
    <script src="/home/js/script-merchant.js"></script>
</body>

</html>
<?php /**PATH D:\Project-web\Laravel\nikilapol_laravel\resources\views/merchant.blade.php ENDPATH**/ ?>