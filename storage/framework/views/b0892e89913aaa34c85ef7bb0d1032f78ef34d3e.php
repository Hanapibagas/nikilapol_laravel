<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
<?php echo $__env->make('master.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('master.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="/home/css/bantuan.css">
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
<main class="component-wrapper" style="background-color: var(--warna-dasar);" >

    <section class="c-section container-fluid pt-4">
        <div class="container">
            <div class="col-12 mb-4 c-main-search__wrapper">



        <picture>
            <?php $__currentLoopData = $whitelabel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bantuan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img src="/image/<?php echo e($bantuan->bantuan); ?>" class="lazy col-md-4 col-8 c-main-search__img mx-auto" alt="NikiLa" type="image/jpeg">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </picture>


            </div>
            <h1 class="c-heading__h1 u-text-align__center mb-1 mb-md-4 px-3 px-md-0 col-12" style="color: #fff;">Ada yang bisa kami bantu?</h1>
            <form class="col-12" method="GET" >
                <div class="row c-filter-box">
                        <div class="col-12 row justify-content-center" style="background-color: var(--warna-dasar);">
                            <div class="c-search col-md-6">
                                <input type="text" placeholder="Cari Masalah Anda..." class="c-search__field" name="q" autocomplete="off" value="" />
                                <button class="c-search__button" type="submit">
                                    <i class="fa fa-search"></i> <span class="u-hide--mobile ml-1">Search</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    

        <h5 class="c-heading__h1 u-text-align__center mb-1 mb-md-4 px-3 px-md-0 col-12" style="color: #212121; font-size: 20px;">Masih Bingung ? Cek kontak dibawah ini</h5>
       <div class="flex-container">
        <div class="flex-items">
            <a href="#">
            <div class="box-kontak">
                <i class="fa-solid fa-whatsapp mr-2"></i> +62 812-812-812-812
            </div>
            </a>
        </div>
        <div class="flex-items">
             <a href="#">
            <div class="box-kontak">
                <i class="fa-solid fa-envelope mr-2"></i> support@nikila.com
            </div>
            </a>
        </div>
    </div>


  <!-- Banner CTA -->
  <?php echo $__env->make('master.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- End Banner CTA -->
<!-- Akhir Content -->

        <!-- Footer -->
        <?php echo $__env->make('master.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Akhir Footer -->
    <div class="snackbars" id="form-output-global"></div>
    <?php echo $__env->make('master.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="/home/js/bantuan.js"></script>
    <script src="/home/js/script-bantuan.js"></script>
  </body>
</html>
<?php /**PATH D:\Project-web\Laravel\nikilapol_laravel\resources\views/faq.blade.php ENDPATH**/ ?>