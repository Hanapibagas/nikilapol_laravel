<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Driver</title>
<?php echo $__env->make('master.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('master.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="/home/css/driver.css">
<?php echo $__env->make('master.root', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
      <?php $__currentLoopData = $drivebanner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drivebanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <section class="hero-bg" style=" background-image: url(/image/<?php echo e($drivebanner->gambar); ?>);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        position: relative;
        z-index: 1;">
               <div class="container ">
                   <div class="hero row ">
                       <div class="text-hero">
                           <h1><?php echo e($drivebanner->title); ?></h1>
                           <p><?php echo e($drivebanner->description); ?></p>
                       </div>
                       <div class="btns row">
                        <a href="./syarat.html" class="button button-secondary button-nuka">Daftar Sekarang</a>
                    </div>
                   </div>
               </div>
           </section>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           <!-- End Hero -->

   <!-- Persyaratan -->
           <section class="section section-lg bungkus-fitur bg-gray-100">
            <div class="container text-center text-lg-left">
              <h2><span class="text-bold text-white wow fadeInUp" style="font-family: 'Poppins';">Driver</h2>
              <div class="row mt-5 justify-content-center flex-wrap row-30 number-counter-2   wow fadeInUp">
                <?php $__currentLoopData = $drivebenefit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drivebenefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-4">
                  <div class="box-numbered-left unit">
                    <div class="unit-body">
                      <img src="/image/<?php echo e($drivebenefit->gambar); ?>" alt="<?php echo e($drivebenefit->title); ?>" width="100px"><h4 style="color: var(--warna-putih1); margin-top: 20px; font-family: var(--font-dasar);"><?php echo e($drivebenefit->title); ?></h4>
                      <div  style="color: #fff;" class="content"><?php echo e($drivebenefit->description); ?></div>
                      <a href="./syarat.html" class="button button-secondary button-nuka">Daftar</a>
                    </div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
          <?php $__currentLoopData = $drivemengapa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drivemengapa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="#" class="card education">
  <div class="overlay"></div>
  <div class="circle">
      <img src="image/<?php echo e($drivemengapa->gambar); ?>" style="z-index: 1;" width="80px" alt="">
  </div>
  <p style="font-weight: 600;" class="text-center"><?php echo e($drivemengapa->title); ?></p>
</a>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</section>

<!-- Tutor Pesen -->
<!-- Tutor Pesen -->
<div class="container">
      <h1 class="row text-center" style="font-family: var(--font-dasar); font-size: 50px;">Cara pesan Niki Anterin</h1>
      <div class="row">
        <div class="col-md-6 text-tutor">
            <?php
                $angka = 1
            ?>
          <?php $__currentLoopData = $drivetutor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drivetutor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div>
            <button id="btn-<?php echo e($angka++); ?>" class="btn btn-success" type="button">
              <div class="box-tutor"><?php echo e($drivetutor->title); ?></div>
              <div class="box-tutor"><?php echo e($drivetutor->description); ?></div>
            </button>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="col-md-6">
          <div id="carousel">
            <?php
                $a = 1
            ?>
            <?php $__currentLoopData = $drivetutorgambar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drivetutorgambar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <img id="img-<?php echo e($a++); ?>" class="image-app" src="/image/<?php echo e($drivetutorgambar->gambar ?? ''); ?>">
                <p id="mobile" class="text-center text-1">1. Buka Aplikasi Nikila Lalu Pilih Niki Anterin</p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      </div>
    </div>
      </div>

      <!-- CTA -->
      <?php echo $__env->make('master.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- END CTA -->

        <!-- Footer -->
        <?php echo $__env->make('master.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Akhir Footer -->
    <div class="snackbars" id="form-output-global"></div>
    <?php echo $__env->make('master.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="/home/js/driver.js"></script>
    <script src="/home/js/script-merchant.js"></script>
  </body>
</html>
<?php /**PATH C:\Users\saefu\OneDrive\Desktop\nikilapol_laravel\resources\views/driver.blade.php ENDPATH**/ ?>