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
              <h1 class="display-1 mb-3">NATION FEST</h1>
              {{-- <p class="lead px-md-12 px-lg-12 px-xl-15 px-xxl-18">Integer posuere erat a ante venenatis dapibus posuere. Maecenas faucibus mollis interdum.</p> --}}
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
                    <img src=".\assets\img\LOGO_PROGRAM_KERJA\logo nationFest.webp" alt="" />
                    <div class="caption-wrapper p-12">
                      <div class="caption bg-white rounded px-4 py-3 ms-auto mt-auto animate__animated animate__slideInDown animate__delay-1s">
                        {{-- <h5 class="mb-0">Vivamus sagittis lacus augue</h5> --}}
                      </div>
                      <!--/.caption -->
                    </div>
                    <!--/.caption-wrapper -->
                  </div>
                  <!--/.swiper-slide -->

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


<p>NATIONFEST merupakan program kerja tahunan Kementerian Nasionalisme yang diselenggarakan oleh Badan Eksekutif Mahasiswa Universitas Surabaya (BEM-US) yang bertujuan untuk meningkatkan nilai-nilai nasionalisme di lingkungan Universitas Surabaya. NATIONFEST diadakan dalam bentuk gelar wicara (talkshow) dengan narasumber yang memaparkan isu-isu hingga upaya meningkatkan rasa kecintaan kawula muda kepada bangsa Indonesia. Selain itu, NATIONFEST diawali dengan berbagai penampilan baik dari pagelaran seni, budaya, alat musik, tari, hingga kuliner yang berasal dari Indonesia untuk memperkenalkan kepada lingkungan Universitas Surabaya terkait betapa kaya dan uniknya budaya yang dimiliki oleh Bangsa Indonesia.</p>

                </p>Kementerian Nasionalisme sebagai kementerian termuda di Badan Eksekutif Mahasiswa Universitas Surabaya mengadakan NATIONFEST pertama kali diselenggarakan pada tahun 2019 secara offline dengan tema “Portrait of Indonesia” dimana mengundang Pandji Pragiwaksono sebagai pembicara dan disertai bazar kuliner nusantara. Kemudian pandemi melanda menyebabkan seluruh kegiatan salah satunya dalam ranah pendidikan wajib untuk diselenggarakan secara online yang tentunya berdampak pada kegiatan NATIONFEST pada tahun 2020 dan 2021. Untuk yang penasaran dan mau tahu info lebih lanjut... yuk! mampir ke Instagram nationfest (@nationfest2021) dan Instagram Nasionalisme</p>

                </div>
                <!--/column -->
                <div class="col-md-2 ms-auto">
                  <ul class="list-unstyled">
                    <li>
                      <h5 class="mb-1">Date</h5>
                      <p>Agustus 2022</p>
                    </li>
                    <li>
                      <h5 class="mb-1">Program kerja Kementerian</h5>
                      <p>Nationalisme</p>
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
            <a href="/eventuel" class="btn btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0 me-1"><i class="uil uil-arrow-left"></i> Prev Post</a>
            <a href="/earthday" class="btn btn-soft-ash rounded-pill btn-icon btn-icon-end mb-0">Next Post <i class="uil uil-arrow-right"></i></a>
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
