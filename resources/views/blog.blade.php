<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  @include('master.meta')
  @include('master.head-css')
  <link rel="stylesheet" href="/home/css/konten_blog.css">
  @include('master.root')

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
    @include('master.navbar')
    <!-- End Header -->

    <!-- Content -->
<!-- Blog -->
<div class="carousel-blog">
    <div class="progress-bar progress-bar--primary hide-on-desktop">
      <div class="progress-bar__fill"></div>
    </div>

    <header class="main-post-wrapper">

      <section class="c-section container-fluid mb-0">
    <div class="container">
        <h1 class="c-heading__h1 pt-md-4 pt-3 mb-1">
            Apa yang terbaru ?</h1>
        <p class="c-heading__p pb-md-4 pb-3">
            Berita Baru Dan Seru Untuk Dibaca
        </p>
    </div>
</section>
  <!-- End Blog -->


    <main class="component-wrapper">

      <!-- Search And Kategory -->
      <section class="pb-4 mb-0 mb-md-4">
        <div class="container-fluid">
          <div class="container">
            <form action="/blog/search/" method="GET">
              <div class="row c-filter-box p-0">
                <!-- <div class="col-12 col-md-3 mb-1 mb-md-0 pr-0 pr-md-2">
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
                </div> -->
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
          @foreach ($blog as $blog)
            <!-- Card 1 -->
            <div class="o-row--slider__col-3 c-list-grid-item">
              <a href="{{ route('detail', $blog->slug) }}">
                <div class="col-12">
                  <div class="c-blog-hl-wrapper--one lazy">
                    <picture class="lazy loaded">
                      <img src="/image/{{ $blog->gambar }}" srcset="/image/{{ $blog->gambar }}" data-srcset="/image/{{ $blog->gambar }}" class="c-blog-hl-image-helper lazy loaded" type="image/jpeg" data-was-processed="true" alt="{{ $blog->title }}">
                    </picture>
                    <picture class="lazy loaded">
                      <img src="/image/{{ $blog->gambar }}" data-src="/image/{{ $blog->gambar }}" srcset="/image/{{ $blog->gambar }}" data-srcset="/image/{{ $blog->gambar }}" class="c-blog-hl-image lazy loaded" type="image/jpeg" data-was-processed="true" alt="{{ $blog->title }}">
                    </picture>
                  </div>
                </div>
                <h3 class="col-12 c-blog-highlight__title-4">{{ $blog->title }}</h3>
                <div class="mt-auto col-12 row justify-content-between">
                  <span class="c-blog-highlight__date-large"> {{ $blog->category }} / {{ $blog->created_at }}</span>
                </div>
              </a>
            </div>
            @endforeach
          </div>
        </div>
      </section>
    </main>

  <!-- Banner CTA -->
  @include('master.cta')
  <!-- End Banner CTA -->

    <!-- Akhir Content -->

    <!-- Footer -->
    @include('master.footer')
    <!-- Akhir Footer -->
    <div class="snackbars" id="form-output-global"></div>
    @include('master.scripts')
    <script src="/home/js/script.js"></script>
    <script src="/home/js/konten_blog.js"></script>

</body>

</html>
