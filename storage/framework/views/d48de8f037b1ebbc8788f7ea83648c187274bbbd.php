
      <!-- Header -->
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
                  <div class="rd-navbar-brand"><?php $__currentLoopData = $whitelabel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $whitelabel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!--Brand--><a class="brand" href="/"><img class="brand-logo-dark" src="/image/<?php echo e($whitelabel->logo); ?>" alt="" width="140" height="45"/><img class="brand-logo-light" src="/image/<?php echo e($whitelabel->logo); ?>" alt="Marketplace Asli Lamongan" width="140"/></a>
                  </div><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">Gabung Mitra</a>
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="/merchant">Mitra Merchant</a>
                          </li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="/driver">Mitra Driver</a>
                          </li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/layanan">Layanan</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/kontak">Kontak</a>
                      </li>
                        <!-- <li class="rd-nav-item"><a class="rd-nav-link" href="/faq">Bantuan</a>
                      </li> -->
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/blog">Blog</a>
                      </li>
                        

                    </ul>
                  </div>
                  <div class="rd-navbar-collapse">
                    <?php $__currentLoopData = $header; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="button button-secondary button-nuka" href="<?php echo e($header->link); ?>">Belanja Sekarang<span class="button-overlay"></span></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
<?php /**PATH C:\Users\saefu\OneDrive\Desktop\nikilapol_laravel\resources\views/master/navbar.blade.php ENDPATH**/ ?>