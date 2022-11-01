<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">@lang('translation.Menu')</li>

                <li>
                    <a href="{{ route('dashboard') }}/" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">@lang('translation.Dashboards')</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-edit-alt "></i>
                        <span key="t-crypto">Artikel</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('blog.index') }}" key="t-wallet">Lihat Artiel</a></li>
                        <li><a href="{{ route('blog.create') }}" key="t-buy">Tambah Artikel</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-search-alt"></i>
                        <span key="t-crypto">FAQ</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('faq.index') }}" key="t-wallet">Lihat FAQ</a></li>
                        <li><a href="{{ route('faq.create') }}" key="t-buy">Tambah FAQ</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-crypto">Kategori</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" key="t-wallet">Kategori Artikel</a></li>
                        <li><a href="#" key="t-buy">Kategori FAQ</a></li>
                    </ul>
                </li>
                <li class="menu-title" key="t-apps">Konfigurasi</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-building-house "></i>
                        <span key="t-ecommerce">Homepage</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('header.index') }}" key="t-products">Setting Header</a></li>
                        <li><a href="{{ route('about.index') }}" key="t-products">Setting About Us</a></li>
                        <li><a href="{{ route('banner.index') }}" key="t-products">Setting Banner</a></li>
                        <li><a href="{{ route('profit.index') }}" key="t-products">Setting Keuntungan</a></li>
                        <li><a href="{{ route('service.index') }}" key="t-products">Setting Services</a></li>
                        <li><a href="{{ route('category-page.index') }}" key="t-products">Setting Kategori</a></li>
                        <li><a href="{{ route('mitra.index') }}" key="t-products">Setting Mitra Drive</a></li>
                        <li>
                            <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Setting Showcase</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('show-case.index') }}" key="t-level-2-2">Index</a></li>
                                <li><a href="{{ route('galery.index') }}" key="t-level-2-1">Galery</a></li>
                            </ul>
                        </li>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-copy-alt "></i>
                        <span key="t-ecommerce">Layanan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('layanan.index') }}" key="t-products">Setting Header</a></li>
                        <li><a href="{{ route('category.index') }}" key="t-products">Setting Kategori</a></li>
                        <li><a href="{{ route('logistic.index') }}" key="t-products">Setting Transportasi & Logistik</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-customize"></i>
                        <span key="t-multi-level">Mitra</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Merchant</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('mercbanner.index') }}" key="t-level-2-2">Setting Banner</a></li>
                                <li><a href="{{ route('merchant.index') }}" key="t-level-2-1">Setting Benefit</a></li>
                                <li><a href="{{ route('merctutor.index') }}" key="t-level-2-2">Setting Tutorial</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Driver</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('driver-banner.index') }}" key="t-level-2-2">Setting Banner</a></li>
                                <li><a href="{{ route('driver-benefit.index') }}" key="t-level-2-1">Setting Benefit</a></li>
                                <li><a href="{{ route('driver-tutorial.index') }}" key="t-level-2-2">Setting Tutorial</a></li>
                                <li><a href="{{ route('driver-mengapa.index') }}" key="t-level-2-2">Setting Mengapa</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Persyaratan</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Syarat Merchant</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                    <ol><a href="{{ route('syarat-header.index') }}" key="t-level-2-2">Header</a></ol>
                                    <ol><a href="{{ route('syarat-details.index') }}" key="t-level-2-1">Detail Persyaratan</a></ol>
                                    </ul>
                                </li>

                                 <li>
                                    <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Syarat Driver</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                    <ol><a href="{{ route('syarat-headers.index') }}" key="t-level-2-2">Header</a></ol>
                                    <ol><a href="{{ route('syarat-detail.index') }}" key="t-level-2-1">Detail Persyaratan</a></ol>
                                    <ol><a href="{{ route('syarat-reward.index') }}" key="t-level-2-1">Reward</a></ol>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-copy-alt "></i>
                        <span key="t-ecommerce">FAQ Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('logistic.index') }}" key="t-products">Setting Berdasarkan Layanan</a></li>
                    </ul>
                </li> -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices">Setting Website</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" key="t-invoice-list">Setting SEO Web</a></li>
                        <li><a href="#" key="t-invoice-detail">Informasi Dasar</a></li>
                        <li><a href="#" key="t-invoice-detail">Informasi Kontak</a></li>
                        <li><a href="#" key="t-invoice-detail">Informasi Sosial Media</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/whitelabel/1/edit" class="waves-effect">
                        <i class="bx bx-cog "></i>
                        <span key="t-invoices">White Label</span>
                    </a>
                </li>
                <!-- <li class="menu-title" key="t-apps">User Permission</li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-user "></i>
                        <span key="t-crypto">User</span>
                    </a>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-lock"></i>
                        <span key="t-crypto">Roles</span>
                    </a>
                </li>
                <li class="menu-title" key="t-apps">Informasi</li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="bx bx-book"></i>
                        <span key="t-invoices">Panduan Penggunaan</span>
                    </a>
                </li>
            </ul> -->
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
