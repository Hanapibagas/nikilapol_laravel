<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
@include('master.meta')  
@include('master.head-css')
<link rel="stylesheet" href="/home/css/layanan.css">
@include('master.root')
<style>
/* Banner CTA */

/* End Banner CTA */
</style>   
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
      @include('master.navbar')
      <!-- End Header -->

      <div id="slider" class="beer-slider" data-start="75">
      @foreach ($layanan as $layanan)
@if ($loop->first)
  <div class="ctnr ctnr-winter">
    <svg class="winter" width="100%" height="100%" viewBox="0 0 600 361" preserveAspectRatio="xMidYMid slice" data-beer-src="/image/{{$layanan->cover}}" aria-labelledby="title1" aria-role="img">
      <image xlink:href="/image/{{$layanan->cover}}" x="0" y="0" width="100%" height="100%"></image>
    </svg>
    <section class="b b2">
      <h2 style="color: #fff;">Transportasi & Logistik</h2>
      <p style="color: #fff;">Anter barang, antar penumpang... Semua bisa dilakuin!</p>
      <div class="btns pt-3">
         <a href="#" class="button button-secondary button-nuka">Gabung Mitra</a>
      </div>
    </section>
  </div>
  @endif

@if ($loop->last)
  <div class="beer-reveal">
    <div class="ctnr ctnr-summer">
      <svg width="100%" height="100%" viewBox="0 0 600 361" preserveAspectRatio="xMidYMid slice" data-beer-src="/image/{{$layanan->cover}}" aria-labelledby="title2" aria-role="img">
        <image xlink:href="/image/{{$layanan->cover}}" x="0" y="0" width="100%" height="100%"></image>
      </svg>
      <section class="b b1">
        <h2 style="color: #fff;">{{ $layanan->title }}</h2>
        <p style="color: #fff;">{{ $layanan->description }}</p>
        <div class="btns pt-3">
         <a href="#" class="button button-secondary button-nuka">Belanja Sekarang</a>
      </div>
      </section>
    </div>
  </div>
  @endif
@endforeach
</div>

<svg>
  <defs>
    <clipPath id="svgPath" clipPathUnits="objectBoundingBox" transform="scale(0.00083 0.0075)">
      <path d="M1397,490H204c263,0,160-32,371-33,191.52-.91,150.49-135.14,225-92C990,475,1144,490,1397,490Z" transform="translate(-178 -350.46)" />
    </clipPath>
  </defs>
</svg>

<section class="layanan">
 <div class="text-center wow fadeInUp pb-5">
              <br>
              <h2 style="font-size: 40px;  font-weight: 500; color: #fff;">Makanan & Belanja</h2>
            </div>
            <div class="row">
              @foreach ($category as $category)
                <a class="card2 pb-3" href="#">
                      <img src="/image/{{$category->gambar}}" width="50px" alt="">
                <h3 style="font-family: var(--font-dasar);">{{ $category->title }}</h3>
                <p class="small">{{ $category->description }}</p>
                
                <div class="go-corner" href="#">
                  <div class="go-arrow">
                    →
                  </div>
                </div>
              </a>
              @endforeach
            </div>
            </div>
        </div>
</section>

<section class="layanan-2">
   <div class="text-center wow fadeInUp pb-5">
              <br>
              <h2 style="font-size: 40px; color: #fff; font-weight: 500;">Transportasi & Logistik</h2>
            </div>
            <div class="row">
              @foreach ($logistic as $logistic)
                <a class="card2 pb-3" href="#">
                      <img src="/image/{{ $logistic->cover }}" width="60px" alt="">
                <h3 style="font-family: var(--font-dasar);">{{ $logistic->title }}</h3>
                <p class="small">A{{ $logistic->description }}</p>
                
                <div class="go-corner" href="#">
                  <div class="go-arrow">
                    →
                  </div>
                </div>
              </a>
              @endforeach
            </div>
            </div>
        </div>
</section>




 


  <!-- Banner CTA -->
  @include('master.cta')
  <!-- End Banner CTA -->

        <!-- Footer -->
        @include('master.footer')
        <!-- Akhir Footer -->
    <div class="snackbars" id="form-output-global"></div>
    @include('master.scripts')
    <script src="/home/js/layanan.js"></script>
    <script src="/home/js/script-layanan.js"></script>
  </body>
</html>