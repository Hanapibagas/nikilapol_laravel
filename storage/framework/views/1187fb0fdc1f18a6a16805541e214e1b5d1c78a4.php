<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
   <?php echo $__env->make('master.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('master.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="/home/html/blog/konten.css">
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
			<li class="c-breadcrumbs-item">
				<a href="/" itemprop="item">
                    <span itemprop="name">Home</span>
                </a>
				<meta itemprop="position" content="1" />
			</li>
			<li class="c-breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="#" itemprop="item">
                    <span itemprop="name">Bantuan</span>
                </a>
				<meta itemprop="position" content="2" />
			</li>
			<li class="c-breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

				<a href="#" itemprop="item">
                    <span itemprop="name">Akun</span>
                </a>

				<meta itemprop="position" content="3" />
			</li>
			<li class="c-breadcrumbs-item active" itemprop="itemListElement" itemscope
				itemtype="http://schema.org/ListItem" aria-current="page">
				<span itemprop="name"><?php echo e($faqs->title); ?></span>
				<meta itemprop="position" content="4" />
			</li>
		</ol>
	</nav>
</div>

		<section class="c-section c-faq-detail">
			<div class="row">
				<div class="c-faq-detail__content col-12 offset-md-2 col-md-8">
					<div class="c-faq-detail__header">
						<h1 class="c-faq-detail__title"><?php echo e($faqs->title); ?></h1>
					</div>
					<div class="c-faq-detail__body">
                        <?php echo $faqs->description; ?>

                    </div>

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
</article>
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
</html>
<?php /**PATH D:\Project-web\Laravel\nikilapol_laravel\resources\views/detailfaq.blade.php ENDPATH**/ ?>