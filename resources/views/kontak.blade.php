<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
@include('master.meta')  
@include('master.head-css')
<link rel="stylesheet" href="/home/css/kontak.css">
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
      <!-- End Header -->

<!-- Content -->
<div class="contactUs">
        <div class="title-contact">
          <h3 style="font-family: var(--font-dasar);">Kontak Kami</h3>
        </div>
        <div class="box-contact">

          <!-- form -->
          <div id="contact-form" class="contact form">
            <h3 style="font-family: var(--font-dasar);">Tulis pesan</h3>
            <form id="contact-form">
              <div class="formBox">
                <div class="row50">
                  <div class="inputBox">
                    <span>Nama Depan</span>
                    <input type="text" placeholder="Nama Depan Kamu">
                  </div>
                  <div class="inputBox">
                    <span>Nama Belakang</span>
                    <input type="text" placeholder="Nama Belakang Kamu">
                  </div>
                </div>

                 <div class="row50">
                  <div class="inputBox">
                    <span>Email</span>
                    <input type="text" placeholder="contoh12@email.com">
                  </div>
                  <div class="inputBox">
                    <span>No HP</span>
                    <input type="text" placeholder="08XXXXXXXXX">
                  </div>
                </div>

                <div class="row100">
                  <div class="inputBox">
                    <span>Pesan</span>
                    <textarea placeholder="Tulis suatu pesan"></textarea>
                  </div>
                </div>

                <div class="row100">
                  <div class="inputBox">
                      <input type="submit" value="Kirim">
                  </div>
                </div>
              </div>
            </form>
          </div>
          @foreach ($whitelabel as $media)
          <!-- Info -->
          <div class="contact info">
            <h3 style="font-family: var(--font-dasar);">  Selengkapnya Hubungi</h3>
            <div class="infoBox">
              <div class="">
                <span><i class="fa-solid fa-location-dot"></i></span>
                <p>{{ $media->alamat }}</p>
              </div>

              <div class="">
                <span><i class="fa-solid fa-envelope"></i></span>
                <a href="mailto:{{ $media->email }}">{{ $media->email }}</a>
              </div>

              <div class="">
                <span><i class="fa-brands fa-whatsapp"></i></span>
                <a href="#">+6223498023948</a>
              </div>
            
              <!-- sosmed -->
              <ul class="sosmed-kontak">
                <li><a href="https://facebook.com/{{ $media->facebook }}"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://instagram.com/{{ $media->instagram }}"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://twitter.com/{{ $media->twitter }}"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="https://tiktok.com/{{ $media->tiktok }}"><i class="fa-brands fa-tiktok"></i></a></li>
                <li><a href="https://youtube.com/{{ $media->youtube }}"><i class="fa-brands fa-youtube"></i></a></li>
              </ul>

            </div>
          </div>

          <!-- Map -->
          <div class="contact map">
            <iframe src="{{ $media->maps }}" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>
      </div>
      @endforeach
  

  <!-- Banner CTA -->
  @include('master.cta')
  <!-- End Banner CTA -->
<!-- Akhir Content -->

        <!-- Footer -->
        @include('master.footer')
        <!-- Akhir Footer -->
    <div class="snackbars" id="form-output-global"></div>
    @include('master.scripts')
    <script src="/home/js/kontak.js"></script>
    <script src="/home/js/script-kontak.js"></script>
  </body>
</html>