<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Sahabat Umroh Keluarga - NUR SAFITRI - Samira Travel</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        
        <link href="{{ asset('landingpage/img/LOGO_ICON.png') }}" rel="icon">
        <link href="{{ asset('landingpage/img/LOGO_ICON.png') }}" rel="apple-touch-icon">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

        <link href="{{ asset('landingpage/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <link href="{{ asset('landingpage/css/style.css') }}" rel="stylesheet">
    </head>

<body>

<!-- <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@islamic-vibes.com">contact@islamic-vibes.com</a></i>
        <i class="bi bi-whatsapp d-flex align-items-center ms-4"><a href=""><span>0851391853186</span></a></i>

      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="Login"><i class="bi bi-door-open"> LOGIN</i></a>
        <a href="#" class="FAQ"><i class="bi bi-question-square"> FAQ</i></a>
      </div>
    </div>
  </section> -->

  <header id="header" class="fixed-top">
  <div class="container d-flex justify-content-center justify-content-md-between">
  <div class="social-links d-none d-md-flex align-items-center">
        <a href="{{ route('login') }}" class="Login"><i class="bi bi-door-open"> MASUK</i></a>
      </div>
</div>

    <div class="container d-flex align-items-center justify-content-between">

      <a href="#" class="logo"><img src="{{ asset('landingpage/img/Logo-removebg-preview.png') }}" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#prestasi">Prestasi</a></li>
          <li><a class="nav-link scrollto" href="#galeri">Galeri</a></li>
          <li><a class="nav-link scrollto " href="#paket">Paket</a></li>
          <li><a class="nav-link scrollto" href="#video">Video</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block">
                            <center>
                                <p><h1>Selamat Datang Tamu Allah</h1></p>
                                <p><h3>Melakukan Ibadah Haji Dan Umroh Dengan Mudah Dengan Samira Travel</h3></p>
                                <p><a href="https://api.whatsapp.com/send?phone=6282112820184&text=Halo%2C+saya+butuh+bantuan+Sistem+Informasi+Manajemen" button type="button" class="btn btn-success btn-rounded"><b class="bi bi-whatsapp"> Saya Ingin Mendaftar</b></button></a></p>
                            </center>
                        </div>
                    </div>    
                </div>
            </div>
  </section>

  <main id="main">

  <!-- ======= Prestasi Section ======= -->
  <section id="prestasi" class="prestasi">
      <div class="container">

        <div class="section-title">
          <h2>Prestasi Kami</h2>
          </div>

        <div class="row no-gutters">

        @foreach ($prestasi as $row)
          <div class="col-lg-4 col-md-3">
            <div class="prestasi-item">
              <a href="{{ asset('/uploads/'. $row->gambar_prestasi) }}" class="galleery-lightbox" data-gallery="prestasi-item">
                <img src="{{ asset('/uploads/'. $row->gambar_prestasi) }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          @endforeach
</div>
      </div>
    </section><!-- End Prestasi Section -->


    <section id="galeri" class="galeri">
      <div class="container position-relative">

      <div class="section-title">
          <h2>Galeri</h2>
          </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

          @foreach ($galeri as $row)
            <div class="swiper-slide">
              <div class="galeri-item">
                <img src="{{ asset('/uploads/'. $row->gambar_galeri) }}" class="galeri-img" alt="">
              </div>
            </div>
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>
        <p></p>
        <div class="section-title">
          <h4>Hukum Membayar Dengan Angsuran</h4>
          </div>
        <div class="galeri-item">
        <iframe width="720" height="480"src="https://www.youtube.com/embed/0rAD77X6IAc"></iframe>
              <!-- <img src="{{ asset('landingpage/img/galeri.jpeg') }}" class="galeri-video" alt=""> -->
        </div>


      </div>
    </section><!-- End Galeri Section -->

    <!-- ======= Paket Section ======= -->
    <section id="paket" class="paket section-bg">
      <div class="container">

      
        <div class="section-title">
          <h2>Paket Haji dan Umrah</h2>
        </div>
        <div class="row">
        @foreach ($paket as $row)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="info">
              <div class="info-img">
                <img src="{{ asset('/uploads/'. $row->gambar_paket) }}" class="img-fluid" alt="">
              </div>
              <div class="info-info">
                <b><h3>{{ $row->judul_paket }}</h3></b>
                <p></p>
                <h6>Angsuran mulai dari <a href="" class="button-pesan"><b>PESAN</b></a></h6>
                <p></p>
                <b><h2>Rp {{ $row->angsuran_paket }}</h2></b>
              </div>
              <div class="info-btn">
              <p> </p>
                <h7>{{ date('d F Y', strtotime ($row->tanggal)) }}</h7>
                <h7>{{ $row->jumlah_paket }} Seat Tersedia</h7>
              </div>
            </div>
        </div>
        @endforeach
        </div>
      </div>
    </section><!-- End Team Section -->

    <section id="video" class="video">
      <div class="container">
      <div class="section-title">
          <h2>Sajian Video</h2>
          </div>
    <div class="row tm-catalog-item-list">
      @foreach ($video as $row)
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                              <video width="350px" height="200px" controls>
                                    <source src="{{ asset('/uploads/'. $row->konten) }}" type="video/mp4">
                                  </video>
                            </div>    
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h5 class="tm-text-primary mb-3 tm-catalog-item-title">{{ $row->judul_konten }}</h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{ $video->links() }}
        </div>
        </section>

  <!-- ======= Prestasi Section ======= -->
  <!-- <section id="prestasi" class="prestasi">
        <div class="container">

            <div class="section-title">
                <h2>Prestasi Kami</h2>
            </div>

            <div class="row prestasi-container">

                <div class="col-lg-4 col-md-6 prestasi-item filter-app">
                    <div class="prestasi-wrap">
                        <a href="{{ asset('landingpage/img/prestasi1.jpeg') }}" class="prestasi-lightbox">
                            <img src="{{ asset('landingpage/img/prestasi1.jpeg') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 prestasi-item filter-app" >
                    <div class="prestasi-wrap">
                        <a href="{{ asset('landingpage/img/prestasi2.jpeg') }}" class="prestasi-lightbox">
                            <img src="{{ asset('landingpage/img/prestasi2.jpeg') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 prestasi-item filter-app">
                    <div class="prestasi-wrap">
                        <a href="{{ asset('landingpage/img/prestasi3.jpeg') }}" class="prestasi-lightbox">
                            <img src="{{ asset('landingpage/img/prestasi3.jpeg') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>End Portfolio Section -->

    <!-- ======= About Section ======= -->
    <!-- <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-5 col-lg-6 d-flex justify-content-center video-box align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div>

          </div>
        </div>

      </div>
    </section>End About Section -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts">
      <div class="container">

        <div class="text-center title">
          <h3>What we have achieved so far</h3>
          <p>Iusto et labore modi qui sapiente xpedita tempora et aut non ipsum consequatur illo.</p>
        </div>

        <div class="row counters position-relative">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section>End Counts Section -->

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container">

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{ asset('landingpage/img/clients/client-1.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{ asset('landingpage/img/clients/client-2.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{ asset('landingpage/img/clients/client-3.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{ asset('landingpage/img/clients/client-4.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{ asset('landingpage/img/clients/client-5.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{ asset('landingpage/img/clients/client-6.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{ asset('landingpage/img/clients/client-7.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{ asset('landingpage/img/clients/client-8.png') }}" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section>End Clients Section -->

    <!-- ======= Services Section ======= -->
    <!-- <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-cash-stack" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-calendar4-week" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-chat-text" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-credit-card-2-front" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section>End Services Section -->

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>


      </div>
    </section>End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Islamic Vibes</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('landingpage/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('landingpage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('landingpage/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('landingpage/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('landingpage/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('landingpage/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('landingpage/js/main.js') }}"></script>

</body>

</html>