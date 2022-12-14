        <!-- Footer -->
        <footer>@foreach ($whitelabel as $footer)
            <div class="container">
                <div class="row-footer">
                    <div class="logo-bottom">
                        <img src="/image/{{ $footer->footer_logo }}" alt="" title="NikiLa">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-footer1">
                                <div class="footer-text">
                                    {{ $footer->footer }}
                                </div>
                                <div class="box-sosmed">
                                    <a href="{{ $footer->facebook }}" title="Facebook NikiLa" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a href="{{ $footer->instagram }}" title="Instagram NikiLa" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="{{ $footer->twitter }}" title="Twitter NikiLa" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="{{ $footer->youtube }}" title="Youtube NikiLa" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="{{ $footer->tiktok }}" title="TikTok NikiLa" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
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
                                    <li><a href="/tentang" title="">Tentang Nikila</a></li>
                                    <li><a href="/privacy" title="">Privacy Police</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-footer3">
                                <h2 style="font-family: 'Poppins';">Hubungi Kami</h2>
                                <ul class="list1 pt-4">
                                    <li><i class="fas fa-envelope"></i>{{ $footer->email }}</li>
                                    <li><i class="fa-brands fa-whatsapp"></i><a href="#">+62 812-812-812</li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="box-copy">
                        &copy; 2022. <b>{{ $footer->title }}</b>. All Rights Reserved
                    </div>
                  <div class="img-nuku">
                    <img src="/home/assets/img/Powered by NuKu.png" width="150px" alt="">
                  </div>
                </div>
            </div>@endforeach
        </footer>
        <!-- Akhir Footer -->