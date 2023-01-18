@extends('layouts.mainweb')
@section('style')
<link rel="stylesheet" href="./assets/css/index.css">
@endsection


@section('title')
BEM UBAYA - Home
@endsection


@section('content')

  <!-- /.offcanvas -->
</header>
<!-- /header -->
<section class="wrapper bg-light">
    <div class="container pt-10 pt-md-14 pb-14 pb-md-16 text-center " style="background-image: url(./assets/img/Bem/background-01.png); background-size:cover">
      <div class="row gx-lg-8 gx-xl-12 gy-10 gy-xl-0 mb-14 align-items-center">
        <div class="col-lg-7 order-lg-2">
          <img class="img-fluid" width="60%" src="./assets/img/Bem/LogoBem.png"  alt="" />
        </div>
        <!-- /column -->
        <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
          <h1 class="display-1 fs-54 mb-5 mx-md-n5 mx-lg-0 mt-7">BEM Universitas Surabaya </h1>

          <span><a class="btn btn-lg btn-primary rounded-pill me-2">Lebih Lanjut</a></span>
        </div>
        <!-- /column -->
      </div>

    </div>
    <!-- /.container -->

  </section>
  <!-- /section -->
  {{-- EVENT TERKINI --}}
<section class="wrapper" id="eventContainer">
  <div class="container pt-14 pt-md-16">
    <div class="row text-center">
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <h3 class="display-4 mb-10 px-xl-10">Event Terkini</h3>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="position-relative">
        <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div>
        <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="item-inner">
                  <article>
                    <div class="card" id="cardProgja">
                      <figure class="card-img-top overlay overlay-1 hover-scale"><a href="/eventuel"> <img src="./assets/img/LOGO_PROGRAM_KERJA/Logo UEL.webp" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Read More</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body">
                        <div class="post-header">
                          <div class="post-category text-line">
                            <a href="/event" class="hover" rel="category">Event</a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="/eventuel">Ubaya Esport League Season 3</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                          <p>UBAYA Esports League merupakan kegiatan perlombaan E-sports yang diadakan oleh Kementerian Olahraga. </p>
                        </div>
                        <!-- /.post-content -->
                      </div>
                      <!--/.card-body -->
                      <div class="card-footer">
                        <ul class="post-meta d-flex mb-0">
                          <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Maret 2023</span></li>

                        </ul>
                        <!-- /.post-meta -->
                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!-- /.item-inner -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <div class="item-inner">
                  <article>
                    <div class="card" id="cardProgja">
                      <figure class="card-img-top overlay overlay-1 hover-scale"><a href="/eventug"> <img src="./assets/img/LOGO_PROGRAM_KERJA/Logo UG.webp" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Read More</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body">
                        <div class="post-header">
                          <div class="post-category text-line">
                            <a href="/event" class="hover" rel="category">Event</a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="/eventug">Ubaya Games 2022</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                          <p>UBAYA GAMES merupakan program kerja yang dilakukan setiap 2 tahun sekali oleh Kementerian Olahraga.</p>
                        </div>
                        <!-- /.post-content -->
                      </div>
                      <!--/.card-body -->
                      <div class="card-footer">
                        <ul class="post-meta d-flex mb-0">
                          <li class="post-date"><i class="uil uil-calendar-alt"></i><span>April 2022</span></li>

                        </ul>
                        <!-- /.post-meta -->
                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!-- /.item-inner -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <div class="item-inner">
                  <article>
                    <div class="card" id="cardProgja">
                      <figure class="card-img-top overlay overlay-1 hover-scale"><a href="/nationfest"> <img src=".\assets\img\kementrian\nasionalisme\logo nationFest.webp" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Read More</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body" id="cardProgja">
                        <div class="post-header">
                          <div class="post-category text-line">
                            <a href="/event" class="hover" rel="category">Event</a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="/nationfest">Nation Fest 2022</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                          <p>NATIONFEST merupakan program kerja tahunan Kementerian Nasionalisme yang diselenggarakan oleh BEM UBAYA.</p>
                        </div>
                        <!-- /.post-content -->
                      </div>
                      <!--/.card-body -->
                      <div class="card-footer">
                        <ul class="post-meta d-flex mb-0">
                          <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Agustus 2022</span></li>

                        </ul>
                        <!-- /.post-meta -->
                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!-- /.item-inner -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <div class="item-inner">
                  <article>
                    <div class="card" id="cardProgja">
                      <figure class="card-img-top overlay overlay-1 hover-scale"><a href="/earthday"> <img src=".\assets\img\LOGO_PROGRAM_KERJA\logo earth day.webp" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Read More</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body">
                        <div class="post-header">
                          <div class="post-category text-line">
                            <a href="/event" class="hover" rel="category">Event</a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="/earthday">Earth Day</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                          <p>Earth day adalah event yang  diselenggarakan oleh kementerian Sospengmas BEM UBAYA</p>
                        </div>
                        <!-- /.post-content -->
                      </div>
                      <!--/.card-body -->
                      <div class="card-footer">
                        <ul class="post-meta d-flex mb-0">
                          <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Mei 2022</span></li>

                        </ul>
                        <!-- /.post-meta -->
                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!-- /.item-inner -->
              </div>

              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <div class="item-inner">
                  <article>
                    <div class="card" id="cardProgja">
                      <figure class="card-img-top overlay overlay-1 hover-scale"><a href="/ufest"> <img src=".\assets\img\LOGO_PROGRAM_KERJA\logo Ufest.webp" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Read More</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body">
                        <div class="post-header">
                          <div class="post-category text-line">
                            <a href="/event" class="hover" rel="category">Event</a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="/ufest">United Festival 2022</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                          <p>United Festival adalah event yang diselenggarakan oleh kementerian Kerohanian BEM UBAYA</p>
                        </div>
                        <!-- /.post-content -->
                      </div>
                      <!--/.card-body -->
                      <div class="card-footer">
                        <ul class="post-meta d-flex mb-0">
                          <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Mei 2022</span></li>

                        </ul>
                        <!-- /.post-meta -->
                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!-- /.item-inner -->
              </div>
              <div class="swiper-slide">
                <div class="item-inner">
                  <article>
                    <div class="card" id="cardProgja">
                      <figure class="card-img-top overlay overlay-1 hover-scale"><a href="/eventECC"> <img src="./assets/img/LOGO_PROGRAM_KERJA/logo ecc.webp" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Read More</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body">
                        <div class="post-header">
                          <div class="post-category text-line">
                            <a href="/event" class="hover" rel="category">Event</a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="/eventECC">The Enchanted Ceremony</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                          <p>ECC merupakan acara yang diselenggarakan oleh Kementerian Seni Budaya dan Kementerian Dalam Negeri.</p>
                        </div>
                        <!-- /.post-content -->
                      </div>
                      <!--/.card-body -->
                      <div class="card-footer">
                        <ul class="post-meta d-flex mb-0">
                          <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2022</span></li>

                        </ul>
                        <!-- /.post-meta -->
                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!-- /.item-inner -->
              </div>
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
      </div>
    <!-- /.position-relative -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
{{-- END EVENT TERKINI --}}
{{-- NAUNGAN BEM UBAYA --}}
<section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center bg-map" >
    <div class="container py-14 pt-md-16 pb-md-18">
      <div class="row pt-md-12">
        <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto">
          {{-- <h2 class="fs-15 text-uppercase text-muted mb-3">Join Our Community</h2> --}}
          <h3 class="display-4 mb-8 px-lg-12">BEM UBAYA Menaungi</h3>
        </div>
        <!-- /.row -->
      </div>
      <!-- /column -->
      <div class="row pb-md-12">
        <div class="col-md-10 col-lg-9 col-xl-7 mx-auto">
          <div class="row align-items-center counter-wrapper gy-4 gy-md-0">
            <div class="col-md-4 text-center">
              <h3 class="counter counter-lg text-primary">37</h3>
              <p>Organisasi Mahasiswa</p>
            </div>
            <!--/column -->
            <div class="col-md-4 text-center">
              <h3 class="counter counter-lg text-primary">11</h3>
              <p>Kementerian</p>
            </div>
            <!--/column -->
            <div class="col-md-4 text-center">
              <h3 class="counter counter-lg text-primary">48</h3>
              <p>Staff</p>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  {{-- END NAUNGAN BEM UBAYA --}}
  {{-- APA ITU BEM UBAYA --}}
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
          <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
          <figure class="rounded"><img src="./assets/img/Bem/LogoBem.png"  alt=""></figure>
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <h2 class="display-4 mb-3">Apa Itu Bem Ubaya?</h2>
          {{-- <p class="lead fs-lg">We are a digital and branding company that believes in the power of creative strategy and along with great design.</p> --}}
          <p class="mb-6" style="text-align:justify !important;">Badan Eksekutif Mahasiswa Universitas Surabaya (BEM-US) adalah organisasi mahasiswa intra kampus di lingkup Universitas Surabaya yang merupakan lembaga eksekutif di tingkat Pendidikan tinggi yang dipimpin oleh Presiden dan Wakil Presiden Mahasiswa. Dalam hal ini, untuk melaksanakan program yang telah direncanakan, maka BEM-US terbagi menjadi 11 kementerian, yaitu Kementerian Sekretaris Negara, Kementerian Keuangan, Kementerian Dalam Negeri, Kementerian Luar Negeri, Kementerian Olahraga, Kementerian Seni dan Budaya, Kementerian Pengembangan Sumber Daya Mahasiswa, Kementerian Sosial dan Pengabdian Kepada Masyarakat, Kementerian Kerohanian, Kementerian Komunikasi dan Informasi, serta Kementerian Nasionalisme.</p>

          <!--/.row -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
{{-- END APA ITU BEM UBAYA --}}
{{-- KEMENTERIAN BEM UBAYA --}}
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row">
        <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
        {{-- <h2 class="fs-15 text-uppercase text-muted mb-3">Latest Projects</h2> --}}
          <h3 class="display-4 mb-10"><span class="underline-3 style-2 yellow">Kementerian Bem Ubaya</span></h3>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="swiper-container grid-view mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card shadow-lg h-100 align-items-center">
                    <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                      <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img  src="./assets/img/kementrian/Sekretaris Negara.png" alt="" /></figure>
                    </div>
                    <!--/.card-body -->
                  </div>
              <div class="project-details d-flex justify-content-center flex-column">
                <div class="post-header">
                  <h2 class="post-title h3"><a href="./sekre" class="link-dark">Sekretari Negara</a></h2>

                </div>
                <!-- /.post-header -->
              </div>
              <!-- /.project-details -->
            </div>
            <div class="swiper-slide">
                <div class="card shadow-lg h-100 align-items-center">
                    <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                      <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="./assets/img/kementrian/Keuangan.png"  alt="" /></figure>
                    </div>
                    <!--/.card-body -->
                  </div>
              <div class="project-details d-flex justify-content-center flex-column">
                <div class="post-header">
                  <h2 class="post-title h3"><a href="./keuangan" class="link-dark">Keuangan</a></h2>

                </div>
                <!-- /.post-header -->
              </div>
              <!-- /.project-details -->
            </div>
            <div class="swiper-slide">
                <div class="card shadow-lg h-100 align-items-center">
                    <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                      <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="./assets/img/kementrian/Dagri.png" alt="" /></figure>
                    </div>
                    <!--/.card-body -->
                  </div>
              <div class="project-details d-flex justify-content-center flex-column">
                <div class="post-header">
                  <h2 class="post-title h3"><a href="./dagri" class="link-dark">Dalam Negeri</a></h2>

                </div>
                <!-- /.post-header -->
              </div>
              <!-- /.project-details -->
            </div>
            <div class="swiper-slide">
                <div class="card shadow-lg h-100 align-items-center">
                    <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                      <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="./assets/img/kementrian/Luar-Negeri.png" alt="" /></figure>
                    </div>
                    <!--/.card-body -->
                  </div>
              <div class="project-details d-flex justify-content-center flex-column">
                <div class="post-header">
                  <h2 class="post-title h3"><a href="./kemenlu" class="link-dark">Luar Negeri</a></h2>

                </div>
                <!-- /.post-header -->
              </div>
              <!-- /.project-details -->
            </div>
            <div class="swiper-slide">
                <div class="card shadow-lg h-100 align-items-center">
                    <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                      <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="./assets/img/kementrian/PSDM.png" alt="" /></figure>
                    </div>
                    <!--/.card-body -->
                  </div>
              <div class="project-details d-flex justify-content-center flex-column">
                <div class="post-header">
                  <h2 class="post-title h3"><a href="./PSDM" class="link-dark">PSDM</a></h2>

                </div>
                <!-- /.post-header -->
              </div>
              <!-- /.project-details -->
            </div>
            <div class="swiper-slide">
                <div class="card shadow-lg h-100 align-items-center">
                    <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                      <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="./assets/img/kementrian/Sospengmas.png" alt="" /></figure>
                    </div>
                    <!--/.card-body -->
                  </div>
              <div class="project-details d-flex justify-content-center flex-column">
                <div class="post-header">
                  <h2 class="post-title h3"><a href="./sospengmas" class="link-dark">Sospengmas</a></h2>

                </div>
                <!-- /.post-header -->
              </div>
              <!-- /.project-details -->
            </div>
            <div class="swiper-slide">
                <div class="card shadow-lg h-100 align-items-center">
                    <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                      <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="./assets/img/kementrian/Kerohanian.png" alt="" /></figure>
                    </div>
                    <!--/.card-body -->
                  </div>
              <div class="project-details d-flex justify-content-center flex-column">
                <div class="post-header">
                  <h2 class="post-title h3"><a href="./kerohanian" class="link-dark">Kerohanian</a></h2>

                </div>
                <!-- /.post-header -->
              </div>
              <!-- /.project-details -->
            </div>
            <div class="swiper-slide">
                <div class="card shadow-lg h-100 align-items-center">
                    <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                      <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="./assets/img/kementrian/Seni-Budaya.png" alt="" /></figure>
                    </div>
                    <!--/.card-body -->
                  </div>
              <div class="project-details d-flex justify-content-center flex-column">
                <div class="post-header">
                  <h2 class="post-title h3"><a href="./senbud" class="link-dark">Seni Budaya</a></h2>

                </div>
                <!-- /.post-header -->
              </div>
              <!-- /.project-details -->
            </div>
            <div class="swiper-slide">
                <div class="card shadow-lg h-100 align-items-center">
                    <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                      <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="./assets/img/kementrian/Olahraga.png" alt="" /></figure>
                    </div>
                    <!--/.card-body -->
                  </div>
              <div class="project-details d-flex justify-content-center flex-column">
                <div class="post-header">
                  <h2 class="post-title h3"><a href="./olahraga" class="link-dark">Olahraga</a></h2>

                </div>
                <!-- /.post-header -->
              </div>
              <!-- /.project-details -->
            </div>
            <div class="swiper-slide">
                <div class="card shadow-lg h-100 align-items-center">
                    <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                      <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="./assets/img/kementrian/Kominfo.png" alt="" /></figure>
                    </div>
                    <!--/.card-body -->
                  </div>
              <div class="project-details d-flex justify-content-center flex-column">
                <div class="post-header">
                  <h2 class="post-title h3"><a href="./kominfo" class="link-dark">Kominfo</a></h2>

                </div>
                <!-- /.post-header -->
              </div>
              <!-- /.project-details -->
            </div>
            <div class="swiper-slide">
                <div class="card shadow-lg h-100 align-items-center">
                    <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                      <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="./assets/img/kementrian/Nasionalisme.png" alt="" /></figure>
                    </div>
                    <!--/.card-body -->
                  </div>
              <div class="project-details d-flex justify-content-center flex-column">
                <div class="post-header">
                  <h2 class="post-title h3"><a href="./nasionalisme" class="link-dark">Nasionalisme</a></h2>

                </div>
                <!-- /.post-header -->
              </div>
              <!-- /.project-details -->
            </div>

          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  {{-- END KEMENTERIAN BEM UBAYA --}}
{{-- FAQ --}}
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <h2 class="display-4 mb-3 text-center">FAQ Seputar BEM Ubaya</h2><br><br>

      <div class="row">
        <div class="col-lg-6 mb-0">
          <div id="accordion-1" class="accordion-wrapper">
            <div class="card accordion-item">
              <div class="card-header" id="accordion-heading-1-1">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="false" aria-controls="accordion-collapse-1-1">Jumlah Kementerian BEM UBAYA</button>
              </div>
              <!-- /.card-header -->
              <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                <div class="card-body">
                  <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.collapse -->
            </div>
            <!-- /.card -->
            <div class="card accordion-item">
              <div class="card-header" id="accordion-heading-1-2">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="false" aria-controls="accordion-collapse-1-2">Apa saja kementerian yang di miliki BEM UBAYA</button>
              </div>
              <!-- /.card-header -->
              <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
                <div class="card-body">
                  <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.collapse -->
            </div>
            <!-- /.card -->
            <div class="card accordion-item">
              <div class="card-header" id="accordion-heading-1-3">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="false" aria-controls="accordion-collapse-1-3">UKM (Unit Kegiatan Mahasiswa) apa saja yang di naungi oleh BEM UBAYA</button>
              </div>
              <!-- /.card-header -->
              <div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                <div class="card-body">
                  <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.collapse -->
            </div>
            <!-- /.card -->
            <div class="card accordion-item">
              <div class="card-header" id="accordion-heading-1-4">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-4" aria-expanded="false" aria-controls="accordion-collapse-1-4">Program kerja BEM UBAYA</button>
              </div>
              <!-- /.card-header -->
              <div id="accordion-collapse-1-4" class="collapse" aria-labelledby="accordion-heading-1-4" data-bs-target="#accordion-1">
                <div class="card-body">
                  <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.collapse -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.accordion-wrapper -->
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <div id="accordion-2" class="accordion-wrapper">
            <div class="card accordion-item">
              <div class="card-header" id="accordion-heading-2-1">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-1" aria-expanded="false" aria-controls="accordion-collapse-2-1">Media Sosial apa saja yang di miliki BEM UBAYA</button>
              </div>
              <!-- /.card-header -->
              <div id="accordion-collapse-2-1" class="collapse" aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2">
                <div class="card-body">
                  <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.collapse -->
            </div>
            <!-- /.card -->
            <div class="card accordion-item">
              <div class="card-header" id="accordion-heading-2-2">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="false" aria-controls="accordion-collapse-2-2">BEM Fakultas apa saja yang di naungi oleh BEM UBAYA</button>
              </div>
              <!-- /.card-header -->
              <div id="accordion-collapse-2-2" class="collapse" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
                <div class="card-body">
                  <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.collapse -->
            </div>
            <!-- /.card -->
            <div class="card accordion-item">
              <div class="card-header" id="accordion-heading-2-3">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-3" aria-expanded="false" aria-controls="accordion-collapse-2-3">Benefit apa saja yang di dapatkan ketika bergabung di dalam BEM UBAYA</button>
              </div>
              <!-- /.card-header -->
              <div id="accordion-collapse-2-3" class="collapse" aria-labelledby="accordion-heading-2-3" data-bs-target="#accordion-2">
                <div class="card-body">
                  <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.collapse -->
            </div>
            <!-- /.card -->
            <div class="card accordion-item">
              <div class="card-header" id="accordion-heading-2-4">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-4" aria-expanded="false" aria-controls="accordion-collapse-2-4">Alur Audit Proposal dan Lpj kegiatan Bagi ORMAWA Universitas Surabaya</button>
              </div>
              <!-- /.card-header -->
              <div id="accordion-collapse-2-4" class="collapse" aria-labelledby="accordion-heading-2-4" data-bs-target="#accordion-2">
                <div class="card-body">
                  <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.collapse -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.accordion-wrapper -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

</div>
<!-- /.content-wrapper -->
@endsection
