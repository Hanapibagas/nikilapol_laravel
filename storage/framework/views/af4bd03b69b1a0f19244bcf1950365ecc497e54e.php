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

    
    .hero-bg {
      background-image: url(/image/<?php echo e($hero->gambar); ?>);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 100vh;
      position: relative;
      z-index: 1;
    }
    
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
    <section class="hero-bg">
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
    <?php $__currentLoopData = $merctutor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $merctutor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
    
    <div class="container">
      <h1 class="row text-center" style="font-family: 'Poppins'; font-size: 50px;">Cara pesan Delivery</h1>
      <div class="row">
        <div class="col-md-6" style="height:520px;width:120px;border:1px; font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
          <div>
            <button id="btn-1" class="btn btn-success aktif" type="button">
              <div class="box-tutor">1. <?php echo e($merctutor->title); ?></div>
              <div class="box-tutor"><?php echo e($merctutor->description); ?></div>
            </button>
          </div>
          <div>
            <button id="btn-2" class="btn btn-success" type="button">
              <div>2. <?php echo e($merctutor->title); ?></div>
              <div><?php echo e($merctutor->description); ?></div>
            </button>
          </div>
          <button id="btn-3" class="btn btn-success" type="button">
            <div>3. <?php echo e($merctutor->title); ?></div>
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
          <div>
            <img id="img-1" class="image-app" src="/home/assets/img/Order Delivery/<?php echo e($merctutor->gambar1); ?>">
            <img id="img-2" class="image-app" src="/home/assets/img/Order Delivery/<?php echo e($merctutor->gambar1); ?>">
            <img id="img-3" class="image-app" src="/home/assets/img/Order Delivery/<?php echo e($merctutor->gambar1); ?>">
            <img id="img-4" class="image-app" src="/home/assets/img/Order Delivery/<?php echo e($merctutor->gambar1); ?>">
            <img id="img-5" class="image-app" src="/home/assets/img/Order Delivery/<?php echo e($merctutor->gambar1); ?>">
            <img id="img-6" class="image-app" src="/home/assets/img/Order Delivery/<?php echo e($merctutor->gambar1); ?>">
            <img id="img-7" class="image-app" src="/home/assets/img/Order Delivery/<?php echo e($merctutor->gambar1); ?>">
            <img id="img-8" class="image-app" src="/home/assets/img/Order Delivery/<?php echo e($merctutor->gambar1); ?>">
            <img id="img-9" class="image-app" src="/home/assets/img/Order Delivery/<?php echo e($merctutor->gambar1); ?>">
          </div>
        </div>
      </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <section id="cta" class="mt-5">
      <div class="container">
        <div class="box-cta">
          <div class="cta-text" data-aos="fade-right">Mau Gabung Jadi<br> Mitra Merchant ?<br> Yuk, Cek<br> Persyaratan Nya</div>
          <a href="./syarat.html" class="btn btn-cta" title="Download NikiLa" data-aos="fade-down">
            <i class="fa-solid fa-clipboard"></i> Cek Disini
          </a>
        </div>
      </div>
    </section><!-- Akhir Content -->

    <!-- Footer -->
    <?php echo $__env->make('master.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Akhir Footer -->
    <div class="snackbars" id="form-output-global"></div>
    <?php echo $__env->make('master.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="/home/js/merchant.js"></script>
    <script src="/home/js/script-merchant.js"></script>
</body>

</html><?php /**PATH D:\File Reza\Codingan\.REAL PROJECT\nikilapol + cms\resources\views/merchant.blade.php ENDPATH**/ ?>