<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
<?php echo $__env->make('master.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('master.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="/home/css/kontak.css">
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
<div class="contactUs">
        <div class="title-contact">
          <h3 style="font-family: var(--font-dasar);">Kontak Kami</h3>
        </div>
        <div class="box-contact">

          <!-- form -->
          <div id="contact-form" class="contact form">
            <h3 style="font-family: var(--font-dasar);">Tulis pesan</h3>
                <?php if( $errors->any() ): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            <form action="<?php echo e(route('kontak.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="formBox">
                    <div class="row50">
                        <div class="inputBox">
                            <span>Nama Depan</span>
                            <input name="name_depan" type="text" placeholder="Nama Depan Kamu">
                        </div>
                        <div class="inputBox">
                            <span>Nama Belakang</span>
                            <input name="name_belakang" type="text" placeholder="Nama Belakang Kamu">
                        </div>
                    </div>
                    <div class="row50">
                        <div class="inputBox">
                            <span>Email</span>
                            <input name="email" type="email" placeholder="contoh12@email.com">
                        </div>
                        <div class="inputBox">
                            <span>No HP</span>
                            <input name="no_hp" type="number" placeholder="08XXXXXXXXX">
                        </div>
                    </div>
                    <div class="row100">
                        <div class="inputBox">
                            <span>Pesan</span>
                            <textarea name="pesan" placeholder="Tulis suatu pesan"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
          </div>

          <?php $__currentLoopData = $whitelabel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <!-- Info -->
          <div class="contact info">
            <h3 style="font-family: var(--font-dasar);">  Selengkapnya Hubungi</h3>
            <div class="infoBox">
              <div class="">
                <span><i class="fa-solid fa-location-dot"></i></span>
                <p><?php echo e($media->alamat); ?></p>
              </div>

              <div class="">
                <span><i class="fa-solid fa-envelope"></i></span>
                <a href="mailto:<?php echo e($media->email); ?>"><?php echo e($media->email); ?></a>
              </div>

              <div class="">
                <span><i class="fa-brands fa-whatsapp"></i></span>
                <a href="#">+6223498023948</a>
              </div>

              <!-- sosmed -->
              <ul class="sosmed-kontak">
                <li><a href="<?php echo e($media->facebook); ?>"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="<?php echo e($media->instagram); ?>"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="<?php echo e($media->twitter); ?>"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="<?php echo e($media->tiktok); ?>"><i class="fa-brands fa-tiktok"></i></a></li>
                <li><a href="<?php echo e($media->youtube); ?>"><i class="fa-brands fa-youtube"></i></a></li>
              </ul>

            </div>
          </div>

          <!-- Map -->
          <div class="contact map">
            <iframe src="<?php echo e($media->maps); ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


  <!-- Banner CTA -->
  <?php echo $__env->make('master.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- End Banner CTA -->
<!-- Akhir Content -->

        <!-- Footer -->
        <?php echo $__env->make('master.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Akhir Footer -->
    <div class="snackbars" id="form-output-global"></div>
    <?php echo $__env->make('master.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="/home/js/kontak.js"></script>
    <script src="/home/js/script-kontak.js"></script>
  </body>
</html>
<?php /**PATH D:\Project-web\Laravel\nikilapol_laravel\resources\views/kontak.blade.php ENDPATH**/ ?>