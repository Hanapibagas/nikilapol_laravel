<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
      <title>Syarat Driver</title>
  <?php echo $__env->make('master.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('master.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <link rel="stylesheet" href="/home/css/syaratdriver.css">
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
        <!-- Navbar -->
        <?php echo $__env->make('master.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- End Navbar -->
      
        <!-- Hero -->
        <?php $__currentLoopData = $driveheader; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driveheader): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
        <section class="hero-bg" style=" background-image: url(/image/<?php echo e($driveheader->gambar); ?>);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        position: relative;
        z-index: 1;">
               <div class="container ">
                   <div class="hero row ">
                       <div class="text-hero">
                           <h1><?php echo e($driveheader->title); ?></h1>
                           <p><?php echo e($driveheader->description); ?></p>
                       </div>
                       <div class="btns row">
                        <?php $__currentLoopData = $header; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($header->link); ?>" class="button button-secondary button-nuka">Daftar Sekarang</a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                   </div>
               </div>
           </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           <!-- End Hero -->

                      <!-- Persyaratan -->
           <section class="section section-lg bungkus-fitur bg-gray-100">
            <div class="container text-center text-lg-left">
              <h2><span class="text-bold text-white wow fadeInUp" style="font-family: var(--font-dasar);">Persyaratan Jadi Mitra Driver</h2>
              <div class="row mt-5 justify-content-center flex-wrap row-30 number-counter-2   wow fadeInUp">
              <?php $__currentLoopData = $driversyarat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driversyarat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
              <div class="col-md-4">
                  <div class="box-numbered-left unit">
                    <div class="unit-body">
                      <img src="image/<?php echo e($driversyarat->gambar); ?>" alt="<?php echo e($driversyarat->title); ?>" width="100px">                             
                      <h4 style="color: var(--warna-putih1); margin-top: 20px; font-family: var(--font-dasar);"><?php echo e($driversyarat->title); ?></h4>
                    </div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </section>

             
    <!-- Kenapa Kami-->
    <section class="section section-md bg-default">
         <div class="text-center wow fadeInUp pb-5">
              <h2 style="font-family: var(--font-dasar);">Reward Gabung Untuk 100 Driver Pertama !!</h2>
            </div>
        <div class="why-driver wow fadeInUp">
        <?php $__currentLoopData = $syaratreward; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $syaratreward): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="#" class="card education">
  <div class="overlay"></div>
  <div class="circle">
      <img src="image/<?php echo e($syaratreward->gambar); ?>" style="z-index: 1;" width="80px" alt="">
  </div>
  <p style="font-weight: 600;" class="text-center"><?php echo e($syaratreward->title); ?></p>
</a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
</section>




<?php echo $__env->make('master.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
    </div>
    <div class="snackbars" id="form-output-global"></div>
<?php echo $__env->make('master.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="/home/js/driver.js"></script>
    <script src="/home/js/script-merchant.js"></script>
    
    
  </body>
</html><?php /**PATH C:\Users\saefu\OneDrive\Desktop\nikilapol_laravel\resources\views/syaratdriver.blade.php ENDPATH**/ ?>