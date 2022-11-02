<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
     <title>Syarat Merchant</title>
  @include('master.meta')
  @include('master.head-css')
  <link rel="stylesheet" href="/home/css/syaratmerchant.css">
  @include('master.root')
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

      <!-- Hero -->
      @foreach ($syaratheader as $syaratheader)
        <section class="hero-bg" style=" background-image: url(/image/{{$syaratheader->gambar}});
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        position: relative;
        z-index: 1;">
               <div class="container">
                   <div class="hero row ">
                       <div class="text-hero">
                           <h1>{{ $syaratheader->title }}</h1>
                           <p>{{ $syaratheader->description }}</p>
                       </div>
                       <div class="btns row">
                        @foreach ($header as $header)
                        <a href="{{ $header->link }}" class="button button-secondary button-nuka">Daftar Sekarang</a>
                        @endforeach
                    </div>
                   </div>
               </div>
           </section>
                 @endforeach
           <!-- End Hero -->

           
                      <!-- Persyaratan -->
           <section class="section section-lg bungkus-fitur bg-gray-100">
            <div class="container text-center text-lg-left">
              <h2><span class="text-bold text-white wow fadeInUp" style="font-family: 'Poppins';">Persyaratan Jadi Mitra Merchant</h2>
              <div class="row mt-5 justify-content-center flex-wrap row-30 number-counter-2   wow fadeInUp">
                @foreach ($syaratmitra as $syaratmitra)  
              <div class="col-md-4">
                  <div class="box-numbered-left unit">
                    <div class="unit-body"> 
                      <img src="image/{{ $syaratmitra->gambar }}" alt="{{ $syaratmitra->title }}" width="100px">                             
                      <h4 style="color: var(--warna-dasar); margin-top: 20px; font-family: var(--font-dasar);">{{ $syaratmitra->title }}</h4>
                      <div  style="color: #fff;" class="content">{{ $syaratmitra->description }}</div>
                    </div>
                  </div>
                </div>
                 @endforeach
              </div>
            </div>
          </section>


          <!-- CTA -->
          @include('master.cta')
          <!-- end CTA -->

       @include('master.footer')

    </div>
    <div class="snackbars" id="form-output-global"></div>
     @include('master.scripts')
    <script src="/home/js/merchant.js"></script>
    <script src="/home/js/script-merchant.js"></script>
  </body>
</html>