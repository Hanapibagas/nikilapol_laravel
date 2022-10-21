        <!-- Footer -->
        <footer><?php $__currentLoopData = $whitelabel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="container">
                <div class="row-footer">
                    <div class="logo-bottom">
                        <img src="/image/<?php echo e($footer->logo); ?>" alt="NikiLa" title="NikiLa">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-footer1">
                                <div class="footer-text">
                                    <?php echo e($footer->footer); ?>

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
                                <h2 style="font-family: 'Poppins';">Gabung</h2>
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
                                    <li><a href="/driver" title="">Mitra Driver</a></li>
                                    <li><a href="/merchant" title="">Mitra Merchant</a></li>
                                    <li><a href="/layanan" title="">Layanan</a></li>
                                    <li><a href="/tentang" title="">Tentang NikiLa POL</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-footer3">
                                <h2 style="font-family: 'Poppins';">Hubungi Kami</h2>
                                <ul class="list1 pt-4">
                                    <li><i class="fas fa-envelope"></i><?php echo e($footer->email); ?></li>
                                    <li><i class="fa-brands fa-whatsapp"></i><a href="#">+62 812-812-812</li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="box-copy">
                        &copy; 2022. <b><?php echo e($footer->title); ?></b>. All Rights Reserved
                    </div>
                  <div class="img-nuku">
                    <img src="/home/assets/img/Powered by NuKu.png" width="150px" alt="">
                  </div>
                </div>
            </div><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </footer>
        <!-- Akhir Footer --><?php /**PATH C:\Users\saefu\Downloads\source-code-cms-nikila\coba\resources\views/master/footer.blade.php ENDPATH**/ ?>