<!DOCTYPE html>
<html lang="en">
    <head>
  <?php echo $__env->make('master.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('master.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <link rel="stylesheet" href="/home/html/blog/konten.css">
  <?php echo $__env->make('master.root', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <style>
  </style>
</head>
<body>
    <!-- Loader -->
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


   <main class="component-wrapper">
    

<section class="mb-md-4 pb-md-1 mb-4 js-search-box c-search-box c-search-box--sticky c-search-box--static__mobile">
    <div class="container-fluid">
        <div class="container">
            <div class="row col-12 align-items-center u-hide--tablet-desktop">
						
						
						
            </div>

						<div class="col-12 offset-md-2 col-md-8 c-search-box--mobile pt-2 pt-md-0 active" id="form-mobile">
							<form  method="GET">
								<div class="row c-filter-box">
									<div class="c-search col-md-12">
										<input type="text" placeholder="Cari Masalah Anda..." class="c-search__field" name="q" autocomplete="off" value="" />
										<button class="c-search__button" type="submit">
											<i class="fa fa-search"></i> <span class="u-hide--mobile ml-1">Search</span>
										</button>
									</div>
								</form>
							</div>
						</div>
        </div>
    </div>
</section>




<article class="container-fluid">
	<div class="container">
<div class="row d-md-flex">
	<div class="col-12 col-md-2"></div>
	<nav class="c-breadcrumbs col-12 col-md-8" aria-label="breadcrumb">
		<ol class="c-breadcrumbs__ol mt-0">
			<li class="c-breadcrumbs-item active" itemprop="itemListElement" itemscope
				<span itemprop="name">Mitra /</span>
				<span itemprop="name">08 Oktober 2022</span>
				<meta itemprop="position" content="1" />
			</li>
		</ol>
	</nav>
</div>

		<section class="c-section c-faq-detail">
			<div class="row">
				<div class="c-faq-detail__content col-12 offset-md-2 col-md-8">
					<?php if($blog->count()): ?>
						<?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="c-faq-detail__header">
						<h1 class="c-faq-detail__title"><?php echo e($blog->title); ?></h1>
					</div>

          			<figure class="text-center"><img class="lazy" data-image="11119"  src="/image/<?php echo e($blog->gambar); ?>" srcset="/image/<?php echo e($blog->gambar); ?>" data-srcset="/image/<?php echo e($blog->gambar); ?>" style="height: auto;width: 100%; border-radius: 10px;"/></figure>

					<div class="c-faq-detail__body">
						<p><?php echo $blog->description; ?></p>
           			 <p>Source : <a href="https://komentar.id/usai-di-launcing-aplikasi-ojek-online-nyaku-bitung-bakal-beroperasi/"> komentar.id</a></p>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>

					<div class="c-faq-detail__footer">
						
						

						<p class="c-faq-detail__helpful u-text-align__center">Apa artikel ini cukup membantu?</p>
						<div class="c-faq-detail__buttons row justify-content-md-center">
							<a  href="#" 
								onclick="return false" 
								class="js-snackbar col col-md-auto col-lg-auto"
								data-snack-label="&lt;strong&gt;Great&lt;/strong&gt;, Thank you for your response" 
								data-snack-color=""
								data-snack-timer="4000">
								<button class="btn btn-primary btn--outline col-12 col-lg-auto js-show-popup">Ya</button>
							</a>
							<a  href="#" 
								onclick="return false" 
								class="js-snackbar col col-md-auto col-lg-auto pl-1 pl-md-2"
								data-snack-label="We will try better next time, Thank You" 
								data-snack-color=""
								data-snack-timer="4000">
								<button class="btn btn-primary btn--outline col-12 col-lg-auto">Tidak</button>
							</a>
						</div>

						
					</div>
				</div>

			</div>
		</section>
	</div>
	<?php echo $__env->make('master.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<?php echo $__env->make('master.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</article>
    </main>


    <!-- Footer -->
  <!-- Akhir Footer -->
  <div class="snackbars" id="form-output-global"></div>

  <?php echo $__env->make('master.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <script src="/home/js/script.js"></script>
</body>
</html><?php /**PATH D:\File Reza\Codingan\.REAL PROJECT\nikilapol + cms\resources\views//detail.blade.php ENDPATH**/ ?>