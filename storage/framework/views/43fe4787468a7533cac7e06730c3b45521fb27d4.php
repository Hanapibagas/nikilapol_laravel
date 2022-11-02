<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
     <title>Syarat Merchant</title>
  <?php echo $__env->make('master.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('master.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <link rel="stylesheet" href="/home/css/syaratmerchant.css">
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

      <!-- Hero -->
      <?php $__currentLoopData = $syaratheader; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $syaratheader): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <section class="hero-bg" style=" background-image: url(/image/<?php echo e($syaratheader->gambar); ?>);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        position: relative;
        z-index: 1;">
               <div class="container">
                   <div class="hero row ">
                       <div class="text-hero">
                           <h1><?php echo e($syaratheader->title); ?></h1>
                           <p><?php echo e($syaratheader->description); ?></p>
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
              <h2><span class="text-bold text-white wow fadeInUp" style="font-family: 'Poppins';">Persyaratan Jadi Mitra Merchant</h2>
              <div class="row mt-5 justify-content-center flex-wrap row-30 number-counter-2   wow fadeInUp">
                <?php $__currentLoopData = $syaratmitra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $syaratmitra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
              <div class="col-md-4">
                  <div class="box-numbered-left unit">
                    <div class="unit-body"> 
                      <img src="image/<?php echo e($syaratmitra->gambar); ?>" alt="<?php echo e($syaratmitra->title); ?>" width="100px">                             
                      <h4 style="color: var(--warna-dasar); margin-top: 20px; font-family: var(--font-dasar);"><?php echo e($syaratmitra->title); ?></h4>
                      <div  style="color: #fff;" class="content"><?php echo e($syaratmitra->description); ?></div>
                    </div>
                  </div>
                </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </section>


          <!-- CTA -->
          <?php echo $__env->make('master.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <!-- end CTA -->

       <?php echo $__env->make('master.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
    <div class="snackbars" id="form-output-global"></div>
     <?php echo $__env->make('master.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="/home/js/merchant.js"></script>
    <script src="/home/js/script-merchant.js"></script>
  </body>
</html><?php /**PATH C:\Users\saefu\OneDrive\Desktop\nikilapol_laravel\resources\views/syaratmerchant.blade.php ENDPATH**/ ?>