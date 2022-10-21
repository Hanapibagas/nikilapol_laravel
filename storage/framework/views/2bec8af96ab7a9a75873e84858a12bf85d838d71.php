<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <?php echo $__env->make('master.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('master.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <link rel="stylesheet" href="/home/css/konten_blog.css">
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
<!-- Blog -->
<div class="carousel-blog">
    <div class="progress-bar progress-bar--primary hide-on-desktop">
      <div class="progress-bar__fill"></div>
    </div>

    <header class="main-post-wrapper">

      <div class="slides">
        <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="main-post main-post--active">
          <div class="main-post__image">
            <img src="/image/<?php echo e($artikel->gambar); ?>" alt="New McLaren wind tunnel 'critical' to future performance, says Tech Director Key" />
          </div>
          <div class="main-post__content">
            <div class="main-post__tag-wrapper">
              <span class="main-post__tag">Berita Artikel</span>
            </div>
            <h1 class="main-post__title"><?php echo e($artikel->title); ?></h1>
            <p><?php echo $artikel->description; ?></p>
            <a class="main-post__link" href="#">
              <span class="main-post__link-text mt-2">Selengkapnya</span>
              <svg class="main-post__link-icon main-post__link-icon--arrow mt-2" width="37" height="12" viewBox="0 0 37 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 6H36.0001M36.0001 6L31.0001 1M36.0001 6L31.0001 11" stroke="white" />
              </svg>
            </a>
          </div>
        </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </header>
    <div class="posts-wrapper hide-on-mobile">
    <?php $__currentLoopData = $blog->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <article onclick="location.href='#' " style="cursor: pointer;" class="post post--active">
        <div class="progress-bar">
          <div class="progress-bar__fill"></div>
        </div>
        <header class="post__header">
          <span class="post__tag">Berita Artikel</span>
          <p class="post__published"><?php echo e($sub->created_at->format('d F Y')); ?></p>
        </header>
        <h2 class="post__title"><?php echo e($sub->title); ?></h2>
      </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
  <!-- End Blog -->


    <main class="component-wrapper">

      <!-- Search And Kategory -->
      <section class="pb-4 mb-0 mb-md-4">
        <div class="container-fluid">
          <div class="container">
            <form action="/blog/search/" method="GET">
              <div class="row c-filter-box p-0">
                <div class="col-12 col-md-3 mb-1 mb-md-0 pr-0 pr-md-2">
                  <label class="c-filter-box__label mb-2 u-hide--mobile">Kategori</label>
                  <div class="c-select">
                    <input type="hidden" value="#" name="service" id="val-service" />
                    <div class="c-select__dropdown js-dropdown">
                      <label class="c-select__dropdown__label">
                        Semua
                      </label>
                    </div>
                    <div class="c-select__option">
                      <ul class="c-select__list js-colspan">
                        <li class="c-select__list__option  c-select__list__option--active  js-option" data-value="Niki Anterin" data-placeholder="Niki Anterin" data-target="#val-service" data-list="list__option">
                          <a> Niki Anterin</a>
                        </li>
                        <li class="c-select__list__option  js-option" data-value="Niki Kirimin" data-placeholder="Niki Kirimin" data-target="#val-service" data-list="list__option">
                          <a>Niki Kirimin</a>
                        </li>
                        <li class="c-select__list__option  js-option" data-value="Niki Belanjain" data-placeholder="Niki Belanjain" data-target="#val-service" data-list="list__option">
                          <a>Niki Belanjain</a>
                        </li>
                        <li class="c-select__list__option  js-option" data-value="mitra" data-placeholder="Mitra" data-target="#val-service" data-list="list__option">
                          <a>Mitra</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-6 align-self-end">
                  <div class="c-search">
                    <input type="text" placeholder="Cari Blog...." class="c-search__field" name="q" autocomplete="off" value="" maxlength="100" />
                    <button class="c-search__button col-auto" type="submit">
                      <i class="fa fa-search"></i> <span class="u-hide--mobile ml-1">Cari</span>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>


      <!-- Card Blog -->
      <section class="c-section container-fluid pb-1 pb-md-2">
        <div class="container-konten-blog">
          <div class="o-row o-row--slider">
          <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Card 1 -->
            <div class="o-row--slider__col-3 c-list-grid-item">
              <a href="../bantuan/akun/blog/blog_akun.html">
                <div class="col-12">
                  <div class="c-blog-hl-wrapper--one lazy">
                    <picture class="lazy loaded">
                      <img src="/image/<?php echo e($blog->gambar); ?>" srcset="/image/<?php echo e($blog->gambar); ?>" data-srcset="/image/<?php echo e($blog->gambar); ?>" class="c-blog-hl-image-helper lazy loaded" alt="#" type="image/jpeg" data-was-processed="true">
                    </picture>
                    <picture class="lazy loaded">
                      <img src="/image/<?php echo e($blog->gambar); ?>" data-src="/image/<?php echo e($blog->gambar); ?>" srcset="/image/<?php echo e($blog->gambar); ?>" data-srcset="/image/<?php echo e($blog->gambar); ?>" class="c-blog-hl-image lazy loaded" alt="#" type="image/jpeg" data-was-processed="true">
                    </picture>
                  </div>
                </div>
                <h3 class="col-12 c-blog-highlight__title-4"><?php echo e($blog->title); ?></h3>
                <div class="mt-auto col-12 row justify-content-between">
                  <span class="c-blog-highlight__date-large">Niki Anterin / <?php echo e($blog->created_at); ?></span>
                </div>
              </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </section>
    </main>

  <!-- Banner CTA -->
  <?php echo $__env->make('master.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- End Banner CTA -->
  
    <!-- Akhir Content -->

    <!-- Footer -->
    <?php echo $__env->make('master.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Akhir Footer -->
    <div class="snackbars" id="form-output-global"></div>
    <?php echo $__env->make('master.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="/home/js/script.js"></script>
    <script src="/home/js/konten_blog.js"></script>

</body>

</html><?php /**PATH D:\laravel-real\coba\resources\views/blog.blade.php ENDPATH**/ ?>