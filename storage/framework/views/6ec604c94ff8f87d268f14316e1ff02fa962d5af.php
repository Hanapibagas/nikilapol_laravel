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
    
    <section class="c-section container-fluid c-top-faq">
        <div class="container">
            <h2 class="col-12 c-heading__h2 mb-3 mb-md-4 mb-lg-5">Masalah yang sering dialami</h2>
            <div class="row">
                <a href="./akun/blog/blog_akun.html" class="col-md-6 col-12 pr-md-2 mb-12px mb-md-3">
                    <div class="row col-12 c-top-faq__item--variant-2">
                        <img class="c-top-faq__service col-auto lazy" alt="niki anterin" src="/image/logo.png"/>
                        <div class="c-top-faq__question text-center">Bagaimana Cara Mendaftar Akun User?</div>
                    </div>
                </a>
                <a href="./akun/blog/blog_akun.html" class="col-md-6 col-12 pr-md-2 mb-12px mb-md-3">
                    <div class="row col-12 c-top-faq__item--variant-2">
                        <img class="c-top-faq__service col-auto lazy" alt="niki anterin" src="/image/logo.png"/>
                        <div class="c-top-faq__question text-center">Mengapa saya tidak bisa mendaftar?</div>
                    </div>
                </a>
                <a href="./akun/blog/blog_akun.html" class="col-md-6 col-12 pr-md-2 mb-12px mb-md-3">
                    <div class="row col-12 c-top-faq__item--variant-2">
                        <img class="c-top-faq__service col-auto lazy" alt="niki anterin" src="/image/logo.png"/>
                        <div class="c-top-faq__question text-center">Apa syarat menjadi mitra driver?</div>
                    </div>
                </a>
                <a href="./akun/blog/blog_akun.html" class="col-md-6 col-12 pr-md-2 mb-12px mb-md-3">
                    <div class="row col-12 c-top-faq__item--variant-2">
                        <img class="c-top-faq__service col-auto lazy" alt="niki anterin" src="/image/logo.png"/>
                        <div class="c-top-faq__question text-center">Bagaimana saya menerima pengembalian dana?</div>
                    </div>
                </a>
                <a href="./akun/blog/blog_akun.html" class="col-md-6 col-12 pr-md-2 mb-12px mb-md-3">
                    <div class="row col-12 c-top-faq__item--variant-2">
                        <img class="c-top-faq__service col-auto lazy" alt="niki anterin" src="/image/logo.png"/>
                        <div class="c-top-faq__question text-center">Bagaimana cara menjadi mitra merchant?</div>
                    </div>
                </a>
                <a href="./akun/blog/blog_akun.html" class="col-md-6 col-12 pr-md-2 mb-12px mb-md-3">
                    <div class="row col-12 c-top-faq__item--variant-2">
                        <img class="c-top-faq__service col-auto lazy" alt="niki anterin" src="/image/logo.png"/>
                        <div class="c-top-faq__question text-center">Bagaimana Cara Mendaftar Akun driver?</div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    
    
    
    
    
    <section class="container-fluid pb-2 pb-md-3">
        <div class="container">
            <div class="row mb-1 mb-md-2">
                <div class="col">
                    <h3 class="c-category__title">Cari Berdasarkan Layanan</h3>
                </div>
                <div class="col-auto u-hide--tablet">
                </div>
            </div>
        </div>
        <div class="container u-container-float--right u-position--relative mx-auto mb-2 mb-md-3">
            <div class="row js-slider-both slider-no-gutter slider-list--hub u-full-width-mb" id="slider-category" data-slider-desktop="true,false,1,false,false,false,1" data-slider-mobile="true,false,1,false,false,false,1">
            
                
                <div class="col-12"><div class="row">
                <?php $__currentLoopData = $logistic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logistic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="c-category__wrapper pr-3 pr-md-4">
                            <a href="./niki_belanjain/niki_belanjain.html">
                                <div class="c-category c-category__item c-category__hover--down-high row">
                                    <div class="c-category__icon">
                                        <img src="/image/<?php echo e($logistic->cover); ?>" class="lazy" alt="belanjain icon">
                                        <span style="background-color: var(--warna-dasar); margin-top: 10px;" data-has-category="true" class="badge"><?php echo e($logistic->title); ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <section class="c-section container-fluid">
        <div class="container">
            <div class="row no-gutter">
                <div class="col mb-2">
                    <h3 class="c-category__title">Lainnya</h3>
                </div>
            </div>
        </div>
        <div class="container u-container-float--right u-position--relative mx-auto">
            <div class="row">
                <div class="col-12 p-md-2">
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="c-category__wrapper pr-3 pr-md-4">
                                <a href="./mitra_usaha/mitra_usaha.html">
                                    <div class="row c-category c-category__item--others c-category__item--alternate c-category__hover--down-high align-items-center">
                                        <div class="c-category__icon mb-1">
                                            <img src="/home/assets/img/banner/1.jpg" data-src="" class="lazy" alt="Merchant Help">
                                              <p style="font-size: 15px; font-weight: 600;">Mitra Usaha</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
    
                         <div class="col-6 col-md-3 col-lg-2">
                            <div class="c-category__wrapper pr-3 pr-md-4">
                                <a href="./akun/akun.html">
                                    <div class="row c-category c-category__item--others c-category__item--alternate c-category__hover--down-high align-items-center">
                                        <div class="c-category__icon mb-1">
                                            <img src="/home/assets/img/banner/2.png" class="lazy" alt="Driver Help">
                                              <p style="font-size: 15px; font-weight: 600;">Akun</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        </main>
    
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
</html><?php /**PATH D:\File Reza\Codingan\.REAL PROJECT\nikilapol + cms\resources\views/faq.blade.php ENDPATH**/ ?>