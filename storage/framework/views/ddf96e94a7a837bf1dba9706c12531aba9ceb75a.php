<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Nikila | Beranda</title>
    <meta charset="utf-8">
    <meta name="keywords" content="NikiLa, Marketplace, Lamongan, Driver ">
    <meta name="title" content="NikiLa POL">
    <meta name="description" content="NikiLa POL, Marketplace yang digabungkan dengan Delivery Order">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Open Graph / Facebook -->
<meta property="og:type" content="/home/images/lamongan.jpg">
<meta property="og:url" content="www.NikiLa-POL.com">
<meta property="og:title" content="NikiLa POL">
<meta property="og:description" content="Marketplace yang digabungkan dengan Delivery Order">
<meta property="og:image" content="/home/images/lamongan.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="/home/images/lamongan.jpg">
<meta property="twitter:url" content="www.NikiLa-POL.com">
<meta property="twitter:title" content="NikiLa POL">
<meta property="twitter:description" content="Marketplace yang digabungkan dengan Delivery Order">
<meta property="twitter:image" content="/home/images/lamongan.jpg">

    <link rel="icon" href="/home/assets/img/logo/nikila.ico" type="image/x-icon">
    <?php echo $__env->make('master.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    
</head>

<?php $__env->startSection('body'); ?>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
    </div>
    <div class="page">
<?php echo $__env->yieldSection(); ?>

    </div>

  <?php echo $__env->make('master.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>

    <?php echo $__env->make('master.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="snackbars" id="form-output-global"></div>
    <?php echo $__env->make('master.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH D:\laravel-real\coba\resources\views/master/master.blade.php ENDPATH**/ ?>