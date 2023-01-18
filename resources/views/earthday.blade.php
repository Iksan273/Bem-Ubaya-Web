@extends('layouts.mainweb')

@section('content')
<div class="content-wrapper">
    <header class="wrapper bg-light">

      <!-- /.navbar -->
    </header>
    <!-- /header -->
    <section class="wrapper bg-light">
      <div class="container pt-10 pb-9 pt-md-14 pb-md-11 text-center">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div class="post-header">
              <div class="post-category text-line">
                <a href="#" class="hover" rel="category">EVENT</a>
              </div>
              <!-- /.post-category -->
              <h1 class="display-1 mb-3"> EARTH DAY</h1>

            </div>
            <!-- /.post-header -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>N
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light wrapper-border">
      <div class="container pb-14 pb-md-16">
        <article>
          <div class="post-slider mb-8 mb-md-12">
            <div class="swiper-container dots-over" data-margin="5" data-dots="true" data-nav="true" data-autoheight="true">
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide rounded">
                    <img src=".\assets\img\LOGO_PROGRAM_KERJA\logo earth day.webp" alt="" />
                    <div class="caption-wrapper p-12">
                      <div class="caption bg-white rounded px-4 py-3 ms-auto mt-auto animate__animated animate__slideInDown animate__delay-1s">
                        {{-- <h5 class="mb-0">Vivamus sagittis lacus augue</h5> --}}
                      </div>
                      <!--/.caption -->
                    </div>
                    <!--/.caption-wrapper -->
                  </div>
                  <!--/.swiper-slide -->

                  <!--/.swiper-slide -->
                </div>
                <!--/.swiper-wrapper -->
              </div>
              <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
          </div>
          <!-- /.post-slider -->
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <h2 class="display-6 mb-4">About the Event</h2>
              <div class="row gx-0">
                <div class="col-md-9 text-justify">
                </p>Earth day diselengarakan oleh kementrian sospengmas badan eksekutif mahasiswa universitas surabaya. Program kerja ini dibungkus dalam bentuk perlombaan dan edukasi mengenai tanaman hidroponik. Perlombaan yang diadakan yaitu lomba desing poster, fotografi, dan desain totebag. </p>

                </div>
                <!--/column -->
                <div class="col-md-2 ms-auto">
                  <ul class="list-unstyled">
                    <li>
                      <h5 class="mb-1">Date</h5>
                      <p>May 2022</p>
                    </li>
                    <li>
                      <h5 class="mb-1">Kementerian</h5>
                      <p>SOSPENGMAS</p>
                    </li>
                  </ul>
                  {{-- <a href="#" class="more hover">See Project</a> --}}
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!-- /column -->
          </div>
          <!--/.row -->
        </article>
        <!-- /.project -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-10">
        <div class="row gx-md-6 gy-3 gy-md-0">
          <div class="col-md-8 align-self-center text-center text-md-start navigation">
            <a href="/ufest" class="btn btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0 me-1"><i class="uil uil-arrow-left"></i> Prev Post</a>
            <a href="/nationfest" class="btn btn-soft-ash rounded-pill btn-icon btn-icon-end mb-0">Next Post <i class="uil uil-arrow-right"></i></a>
          </div>
          <!--/column -->
          <!-- /column .sidebar -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
@endsection
