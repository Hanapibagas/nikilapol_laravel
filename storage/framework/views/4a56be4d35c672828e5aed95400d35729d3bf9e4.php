<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
  <?php echo $__env->make('master.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('master.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <link rel="stylesheet" href="/home/css/konten_blog.css">
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
      <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!--RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="/home/index.html"><img class="brand-logo-dark" src="/home/assets/img/logo/Logo NIKILA_Lamongan POL.png" alt="" width="181" height="45"/><img class="brand-logo-light" src="/home/assets/img/logo/Logo NIKILA_Lamongan POL.png" alt="" width="181" height="45"/></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="../../../tentang/tentang.html">Tentang Nikila</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">Mitra</a>
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="../../../mitra/mitra_merchant/merchant.html">Mitra Merchant</a>
                          </li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="../../../mitra/mitra_driver/driver.html">Mitra Driver</a>
                          </li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="../../../layanan/layanan.html">Layanan</a>
                        <!-- <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Makanan & Belanja</a>
                            <ul class="rd-menu rd-navbar-dropdown">
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Oleh-Oleh</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Peternakan</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Pertanian</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Perkebunan</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Perikanan</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Kesehatan</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Kerajinan</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Fashion</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Elektronik</a></li>
                            </ul>
                          </li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Transportasi & Logistik</a>
                            <ul class="rd-menu rd-navbar-dropdown">
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Niki Anterin</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Niki Belanjain</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Niki Delivery</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Niki Center</a></li>
                            </ul>
                          </li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Wisata</a>
                            <ul class="rd-menu rd-navbar-dropdown">
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Reservasi Hotel</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Tiket Wisata</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Desa Wisata</a></li>
                            </ul>
                          </li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Pembayaran</a>
                            <ul class="rd-menu rd-navbar-dropdown">
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Bayar Transaksi</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Bayar Tagihan</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">TopUp Saldo Mitra</a></li>
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">TopUp Pulsa</a></li>
                            </ul>
                          </li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Modal Kerja</a>
                            <ul class="rd-menu rd-navbar-dropdown">
                              <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Pinjaman Modal Kerja</a></li>
                            </ul>
                          </li>
                        </ul> -->
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="../../../kontak/kontak.html">Kontak</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="../../../bantuan/bantuan.html">Bantuan</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="../../../blog/konten_blog.html">Blog</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">
                        <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                          <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                          <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                        </svg>IDN</a>
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="/home/index.html">IDN</a>
                          </li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="/home/html-en/index.html">ENG</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="rd-navbar-collapse"><a class="button button-secondary button-nuka" href="#">Belanja Sekarang<span class="button-overlay"></span></a></div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>

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
				<a href="/home/index.html" itemprop="item">
                    <span itemprop="name">Home</span>
                </a>
				<meta itemprop="position" content="1" />
			</li>
			<li class="c-breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="../bantuan.html" itemprop="item">
                    <span itemprop="name">Bantuan</span>
                </a>
				<meta itemprop="position" content="2" />
			</li>
			<li class="c-breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				
				<a href="../akun.html" itemprop="item">
                    <span itemprop="name">Akun</span>
                </a>
				
				<meta itemprop="position" content="3" />
			</li>
			<li class="c-breadcrumbs-item active" itemprop="itemListElement" itemscope
				itemtype="http://schema.org/ListItem" aria-current="page">
				<span itemprop="name"><?php echo e($blog->title); ?></span>
				<meta itemprop="position" content="4" />
			</li>
		</ol>
	</nav>
</div>

		<section class="c-section c-faq-detail">
			<div class="row">
				<div class="c-faq-detail__content col-12 offset-md-2 col-md-8">
					<div class="c-faq-detail__header">
						<h1 class="c-faq-detail__title"><?php echo e($blog->title); ?></h1>
					</div>

					<div class="c-faq-detail__body">
          <?php echo $blog->description; ?>

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

    
<section id="cta">
            <div class="container">
                <div class="box-cta">
                   <div class="cta-text" data-aos="fade-right">Cintai Produk Lamongan.<br> Cintai Produk Daerah.<br> Yuk, download<br> sekarang juga</div>
                    <a href="#" class="btn btn-cta" title="Download NikiLa" target="_blank" data-aos="fade-down">
                        <i class="fab fa-google-play"></i> Play store
                    </a>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row-footer">
                    <div class="logo-bottom">
                        <img src="/home/assets/img/logo/Logo NIKILA_Lamongan POL.png" alt="NikiLa" title="NikiLa">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-footer1">
                                <div class="footer-text">
                                    Nikila Lamongan atau yang disingkat Nikila adalah Super Apps yang menggabungkan <em>Marketplace</em> dan <em>Delivery Order</em>, yang mempunyai tujuan menjadi wadah jualan produk kearifan lokal Kabupaten Lamongan serta untuk meningkatkan PAD (Pendapatan Asli Daerah) Kabupaten.</p>
                                </div>
                               <div class="box-sosmed">
                                    <a href="#" title="Facebook NikiLa" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/nuku.id_of/" title="Instagram NikiLa" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="https://twitter.com/NuKu_id" title="Twitter NikiLa" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="#" title="Youtube NikiLa" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="https://www.tiktok.com/@nuku_id" title="TikTok NikiLa" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="box-footer2">
                                <h2 style="font-family: var(--font-dasar);">Gabung</h2>
                                <ul class="list1 pt-4">
                                    <li><a href="#" title="">Mitra Merchant</a></li>
                                    <li><a href="#" title="">Mitra Driver</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="box-footer2">
                                <h2 style="font-family: 'Poppins';">Pintasan</h2>
                                <ul class="list1 pt-4">
                                    <li><a href="/home/html/mitra/mitra_driver/driver.html" title="">Mitra Driver</a></li>
                                    <li><a href="/home/html/mitra/mitra_merchant/merchant.html" title="">Mitra Merchant</a></li>
                                    <li><a href="/home/html/layanan/layanan.html" title="">Layanan</a></li>
                                    <li><a href="/home/html/tentang/tentang.html" title="">Tentang Nikila</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-footer3">
                                <h2 style="font-family: var(--font-dasar);">Hubungi Kami</h2>
                                <ul class="list1 pt-4">
                                    <li><i class="fas fa-envelope"></i>contact@Nikila.id</li>
                                    <li><i class="fa-brands fa-whatsapp"></i><a href="#">+62 812-812-812</li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="box-copy">
                        &copy; 2022. <b>Nikila</b>. All Rights Reserved
                    </div>
                  <div class="img-nuku">
                    <img src="/home/assets/img/Powered by NuKu.png" width="150px" alt="">
                  </div>
                </div>
            </div>
        </footer>
   
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="/home/js/core.min.js"></script>
    <script src="/home/js/script.js"></script>
    <script>
		window.addEventListener('load', function() {
		const helpFulBtnElement = document.querySelectorAll('.js-snackbar');
			helpFulBtnElement.forEach(function(btn) {
				btn.addEventListener('click', function(e) {
					setTimeout(function() {
					$('.c-faq-detail__helpful').slideUp();
					$('.c-faq-detail__buttons').slideUp();								
					}, 1618)
				});
			});
		});
    </script>
  </body>
</html><?php /**PATH D:\File Reza\Codingan\.REAL PROJECT\nikilapol + cms\resources\views/show.blade.php ENDPATH**/ ?>