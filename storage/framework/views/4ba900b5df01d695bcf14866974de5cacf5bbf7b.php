<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Merchant</title>
  <?php echo $__env->make('master.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('master.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <link rel="stylesheet" href="/home/css/merchant.css">
  <?php echo $__env->make('master.root', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
    <section class="hero-bg" style=" background-image: url(/image/<?php echo e($mercbanner->gambar); ?>);
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
          <?php $__currentLoopData = $merctutor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $merctutor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div>
            <button id="btn-<?php echo e($angka++); ?>" class="btn btn-success" type="button">
              <div class="box-tutor"> <?php echo e($merctutor->title); ?></div>
              <div class="box-tutor"> <?php echo e($merctutor->description); ?></div>
            </button>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
        <div class="col-md-6">
          <div id="carousel">
            <?php
                $a = 1
            ?>
            <?php $__currentLoopData = $gambar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gambar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <img id="img-<?php echo e($a++); ?>" class="image-app" src="/image/<?php echo e($gambar->gambar ?? ''); ?>">
                <p id="mobile" class="text-center text-1"><?php echo e($gambar->title); ?></p>
                <p id="mobile" class="text-center text-1"><?php echo e($gambar->description); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
      </div>
    </div>
      </div>


  <!-- Banner CTA -->
  <?php echo $__env->make('master.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- End Banner CTA -->

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