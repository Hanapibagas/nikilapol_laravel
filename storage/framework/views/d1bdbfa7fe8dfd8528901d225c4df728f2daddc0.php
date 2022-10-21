<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
<?php echo $__env->make('master.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
<?php echo $__env->make('master.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="/home/css/layanan.css">
<?php echo $__env->make('master.root', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
/* Banner CTA */

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
      <?php echo $__env->make('master.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- End Header -->

    

 


  <!-- Banner CTA -->
  <?php echo $__env->make('master.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- End Banner CTA -->

        <!-- Footer -->
        <?php echo $__env->make('master.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Akhir Footer -->
    <div class="snackbars" id="form-output-global"></div>
    <?php echo $__env->make('master.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="/home/js/layanan.js"></script>
    <script src="/home/js/script-layanan.js"></script>
  </body>
</html><?php /**PATH C:\Users\saefu\Downloads\source-code-cms-nikila\nikilapol + cms\resources\views/about.blade.php ENDPATH**/ ?>