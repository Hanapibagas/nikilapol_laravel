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

      <div id="slider" class="beer-slider" data-start="75">
      <?php $__currentLoopData = $layanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($loop->first): ?>
  <div class="ctnr ctnr-winter">
    <svg class="winter" width="100%" height="100%" viewBox="0 0 600 361" preserveAspectRatio="xMidYMid slice" data-beer-src="/image/<?php echo e($layanan->cover); ?>" aria-labelledby="title1" aria-role="img">
      <image xlink:href="/image/<?php echo e($layanan->cover); ?>" x="0" y="0" width="100%" height="100%"></image>
    </svg>
    <section class="b b2">
      <h2 style="color: #fff;">Transportasi & Logistik</h2>
      <p style="color: #fff;">Anter barang, antar penumpang... Semua bisa dilakuin!</p>
      <div class="btns pt-3">
         <a href="#" class="button button-secondary button-nuka">Gabung Mitra</a>
      </div>
    </section>
  </div>
  <?php endif; ?>

<?php if($loop->last): ?>
  <div class="beer-reveal">
    <div class="ctnr ctnr-summer">
      <svg width="100%" height="100%" viewBox="0 0 600 361" preserveAspectRatio="xMidYMid slice" data-beer-src="/image/<?php echo e($layanan->cover); ?>" aria-labelledby="title2" aria-role="img">
        <image xlink:href="/image/<?php echo e($layanan->cover); ?>" x="0" y="0" width="100%" height="100%"></image>
      </svg>
      <section class="b b1">
        <h2 style="color: #fff;"><?php echo e($layanan->title); ?></h2>
        <p style="color: #fff;"><?php echo e($layanan->description); ?></p>
        <div class="btns pt-3">
         <a href="#" class="button button-secondary button-nuka">Belanja Sekarang</a>
      </div>
      </section>
    </div>
  </div>
  <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<svg>
  <defs>
    <clipPath id="svgPath" clipPathUnits="objectBoundingBox" transform="scale(0.00083 0.0075)">
      <path d="M1397,490H204c263,0,160-32,371-33,191.52-.91,150.49-135.14,225-92C990,475,1144,490,1397,490Z" transform="translate(-178 -350.46)" />
    </clipPath>
  </defs>
</svg>

<section class="layanan">
 <div class="text-center wow fadeInUp pb-5">
              <br>
              <h2 style="font-size: 40px;  font-weight: 500; color: #fff;">Makanan & Belanja</h2>
            </div>
            <div class="row">
              <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="card2 pb-3" href="#">
                      <img src="/image/<?php echo e($category->gambar); ?>" width="50px" alt="">
                <h3 style="font-family: var(--font-dasar);"><?php echo e($category->title); ?></h3>
                <p class="small"><?php echo e($category->description); ?></p>
                
                <div class="go-corner" href="#">
                  <div class="go-arrow">
                    →
                  </div>
                </div>
              </a>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            </div>
        </div>
</section>

<section class="layanan-2">
   <div class="text-center wow fadeInUp pb-5">
              <br>
              <h2 style="font-size: 40px; color: #fff; font-weight: 500;">Transportasi & Logistik</h2>
            </div>
            <div class="row">
              <?php $__currentLoopData = $logistic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logistic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="card2 pb-3" href="#">
                      <img src="/image/<?php echo e($logistic->cover); ?>" width="60px" alt="">
                <h3 style="font-family: var(--font-dasar);"><?php echo e($logistic->title); ?></h3>
                <p class="small">A<?php echo e($logistic->description); ?></p>
                
                <div class="go-corner" href="#">
                  <div class="go-arrow">
                    →
                  </div>
                </div>
              </a>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            </div>
        </div>
</section>




 


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
</html><?php /**PATH C:\Users\saefu\Downloads\source-code-cms-nikila\coba\resources\views/layanan.blade.php ENDPATH**/ ?>