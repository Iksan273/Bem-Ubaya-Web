@extends('layouts.mainweb')

@section('style')
    <link rel="stylesheet" href="./assets/css/kementrian.css">
@endsection

@section('title')
    BEM UBAYA - Kementrian Seni Budaya
@endsection

@section('content')
    <section class="wrapper bg-dark angled lower-start">
        <div class="container pt-7 pt-md-11 pb-8">
            <div class="row gx-0 gy-10 align-items-center">
                <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
                    <h1 class="display-1 text-white mb-4"><br /><span class="typer text-primary text-nowrap" data-delay="100"
                            data-words="Kementrian Seni Budaya"></span><span class="cursor text-primary"
                            data-owner="typer"></span></h1>
                    <p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15" style="color: white;">
                        Kementerian Seni Budaya

                    <ul>
                        <li>

                            Menaungi Seluruh UKM Seni Di Universitas Surabaya(UKM Musik,Paduan
                            Suara,Tari,Taekwondo,Teater,Karate,JiuJitsu)
                        </li>
                        <li>

                            Mengadakan Kegiatan Kemahasiswaan Dalam Bidang Seni dan Budaya

                        </li>
                        <li>
                            Memberikan informasi & pengetahuan seputar kesenian & budaya melalui sosial media BEM-US
                        </li>

                    </ul>
                    </p>
                    <div>
                        <a class="btn btn-lg btn-primary rounded">Info Lebih Lanjut</a>
                    </div>
                </div>
                <!-- /column -->
                <div class="col-lg-5 offset-lg-1 mb-n8" data-cues="slideInDown">
                    <div class="position-relative">
                        <a href="" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;"
                            data-glightbox><i class=""></i></a>
                        <figure class="rounded shadow-lg"><img src=".\assets\img\kementrian\senbud\Senbud.png"
                                srcset=".\assets\img\kementrian\senbud\senbud.png" alt=""></figure>
                    </div>
                    <!-- /div -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->



    <section class="wrapper bg-light">

        <div class="container py-14 py-md-16">
            <div class="row mb-3">
                <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
                    {{-- <h2 class="fs-15 text-uppercase text-muted mb-3">Kementrian</h2> --}}
                    <h3 class="display-4 mb-7 px-lg-19 px-xl-18">Profile kementrian Seni Budaya</h3>
                </div>


                <!--/column -->
            </div>
            <!--/.row -->


            <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">

                <div class="row mb-3">
                    <div class="col-md-10 col-lg-8 col-xl-10 col-xxl-4 mx-auto text-center">
                        <div class="card">
                            <figure class="card-img-top">
                                <img class="img-fluid" src=".\assets\img\kementrian\senbud\senbud-menteri.webp"
                                    srcset=".\assets\img\kementrian\senbud\senbud-menteri.webp" alt="" />
                            </figure>
                            <div class="card-body px-6 py-5">
                                <h4 class="mb-1">Erin Lewi Santoso
                                </h4>
                                <p class="mb-0">Menteri</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                    </div>


                    <!--/column -->
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="position-relative">
                        <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0"
                            style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                        <div class="card">
                            <figure class="card-img-top"><img class="img-fluid"
                                    src=".\assets\img\kementrian\senbud\Heinrich Willfred Mokaliran_Seni Budaya.jpg"
                                    srcset=".\assets\img\kementrian\senbud\Heinrich Willfred Mokaliran_Seni Budaya.jpg"
                                    alt="" /></figure>
                            <div class="card-body px-6 py-5">
                                <h4 class="mb-1">Heinrich Willfred M</h4>
                                <p class="mb-0">Staff 1</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /div -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3">
                    <div class="position-relative">
                        <div class="shape rounded bg-soft-red rellax d-md-block" data-rellax-speed="0"
                            style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                        <div class="card">
                            <figure class="card-img-top"><img class="img-fluid"
                                    src=".\assets\img\kementrian\senbud\Salsabil Wemia Adlisela.png"
                                    srcset=".\assets\img\kementrian\senbud\Salsabil Wemia Adlisela.png" alt="" />
                            </figure>
                            <div class="card-body px-6 py-5">
                                <h4 class="mb-1">Salsabil Wemia Adlisela</h4>
                                <p class="mb-0">Staff 2</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /div -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3">
                    <div class="position-relative">
                        <div class="shape rounded bg-soft-green rellax d-md-block" data-rellax-speed="0"
                            style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                        <div class="card">
                            <figure class="card-img-top"><img class="img-fluid"
                                    src=".\assets\img\kementrian\senbud\Tarya Irenna Utama_Seni Budaya.png"
                                    srcset=".\assets\img\kementrian\senbud\Tarya Irenna Utama_Seni Budaya.png"
                                    alt="" /></figure>
                            <div class="card-body px-6 py-5">
                                <h4 class="mb-1">Tarya Irenna Utama</h4>
                                <p class="mb-0">Staff 3</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /div -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3">
                    <div class="position-relative">
                        <div class="shape rounded bg-soft-violet rellax d-md-block" data-rellax-speed="0"
                            style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                        <div class="card">
                            <figure class="card-img-top"><img class="img-fluid"
                                    src=".\assets\img\kementrian\senbud\Yehezkiel Dharma Putra_Seni Budaya.png"
                                    srcset=".\assets\img\kementrian\senbud\Yehezkiel Dharma Putra_Seni Budaya.png"
                                    alt="" /></figure>
                            <div class="card-body px-6 py-5">
                                <h4 class="mb-1">Yehezkiel Dharma Putra</h4>
                                <p class="mb-0">Staff 4</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /div -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->



    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row mb-3">
                <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
                    {{-- <h2 class="fs-15 text-uppercase text-muted mb-3">Kementrian</h2> --}}
                    <h3 class="display-4 mb-7 px-lg-19 px-xl-18">Program Kerja</h3>
                </div>


                <!--/column -->
            </div>
            <!-- /.row -->
            <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 gx-lg-6 gy-6 justify-content-center">
                <div class="col">
                    <div class="card shadow-lg h-100 align-items-center">
                        <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                            <a href="#"data-bs-toggle="modal" data-bs-target="#modal-01">
                                <figure class="px-md-1 px-xl-0 px-xxl-1 mb-8"><img
                                        src=".\assets\img\kementrian\senbud\logo ecc.webp" alt="" /></figure>
                            </a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col">
                    <div class="card shadow-lg h-100 align-items-center">
                        <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                            <a href="#"data-bs-toggle="modal" data-bs-target="#modal-02">
                                <figure class="px-md-1 px-xl-0 px-xxl-1 mb-8"><img src="./assets/img/brands/z2.png"
                                        alt="" /></figure>
                            </a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col">
                    <div class="card shadow-lg h-100 align-items-center">
                        <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                            <a href="#"data-bs-toggle="modal" data-bs-target="#modal-03">
                                <figure class="px-md-1 px-xl-0 px-xxl-1 mb-8"><img src="./assets/img/brands/z3.png"
                                        alt="" /></figure>
                            </a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->

                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->



    <section class="wrapper bg-light">
        <div class="overflow-hidden">
            <div class="container py-14 py-md-16">
                <div class="row">
                    <div class="col-xl-7 col-xxl-6 mx-auto text-center">
                        <i class="icn-flower text-leaf fs-30 opacity-25"></i>
                        <h2 class="display-5 text-center mt-2 mb-10">Gallery</h2>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="swiper-container nav-bottom nav-color mb-14" data-margin="30" data-dots="false"
                    data-nav="true" data-items-lg="3" data-items-md="2" data-items-xs="1">
                    <div class="swiper overflow-visible pb-2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article>
                                    <div class="card shadow-lg">
                                        <figure class="card-img-top overlay overlay-1"><a href="#"> <img
                                                    src=".\assets\img\kementrian\senbud\ecc\ecc1.webp"
                                                    alt="" /></a>
                                            {{-- <figcaption>
                       <h5 class="from-top mb-0">Read More</h5>
                     </figcaption> --}}
                                        </figure>
                                        <div class="card-body p-6">
                                            <div class="post-header">
                                                {{-- <div class="post-category">
                        <a href="#" class="hover" rel="category">Wedding</a>
                      </div> --}}
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3">The Enchanted Ceremony</h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-footer">
                                                <ul class="post-meta d-flex mb-0">
                                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr
                                                            2022</span></li>

                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <article>
                                    <div class="card shadow-lg">
                                        <figure class="card-img-top overlay overlay-1"><a href="#"> <img
                                                    src=".\assets\img\kementrian\senbud\ecc\ecc2.webp"
                                                    alt="" /></a>
                                            {{-- <figcaption>
                       <h5 class="from-top mb-0">Read More</h5>
                     </figcaption> --}}
                                        </figure>
                                        <div class="card-body p-6">
                                            <div class="post-header">
                                                {{-- <div class="post-category">
                        <a href="#" class="hover" rel="category">Wedding</a>
                      </div> --}}
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3">The Enchanted Ceremony</h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-footer">
                                                <ul class="post-meta d-flex mb-0">
                                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr
                                                            2022</span></li>

                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <article>
                                    <div class="card shadow-lg">
                                        <figure class="card-img-top overlay overlay-1"><a href="#"> <img
                                                    src=".\assets\img\kementrian\senbud\ecc\ecc3.webp"
                                                    alt="" /></a>
                                            {{-- <figcaption>
                       <h5 class="from-top mb-0">Read More</h5>
                     </figcaption> --}}
                                        </figure>
                                        <div class="card-body p-6">
                                            <div class="post-header">
                                                {{-- <div class="post-category">
                        <a href="#" class="hover" rel="category">Wedding</a>
                      </div> --}}
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3">The Enchanted Ceremony</h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-footer">
                                                <ul class="post-meta d-flex mb-0">
                                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr
                                                            2022</span></li>

                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <article>
                                    <div class="card shadow-lg">
                                        <figure class="card-img-top overlay overlay-1"><a href="#"> <img
                                                    src=".\assets\img\kementrian\senbud\ecc\ecc4.webp"
                                                    alt="" /></a>
                                            {{-- <figcaption>
                       <h5 class="from-top mb-0">Read More</h5>
                     </figcaption> --}}
                                        </figure>
                                        <div class="card-body p-6">
                                            <div class="post-header">
                                                {{-- <div class="post-category">
                        <a href="#" class="hover" rel="category">Wedding</a>
                      </div> --}}
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3">The Enchanted Ceremony</h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-footer">
                                                <ul class="post-meta d-flex mb-0">
                                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr
                                                            2022</span></li>

                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <article>
                                    <div class="card shadow-lg">
                                        <figure class="card-img-top overlay overlay-1"><a href="#"> <img
                                                    src=".\assets\img\kementrian\senbud\ecc\ecc5.webp"
                                                    alt="" /></a>
                                            {{-- <figcaption>
                       <h5 class="from-top mb-0">Read More</h5>
                     </figcaption> --}}
                                        </figure>
                                        <div class="card-body p-6">
                                            <div class="post-header">
                                                {{-- <div class="post-category">
                        <a href="#" class="hover" rel="category">Wedding</a>
                      </div> --}}
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3">The Enchanted Ceremony</h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-footer">
                                                <ul class="post-meta d-flex mb-0">
                                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr
                                                            2022</span></li>

                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!--/.swiper-slide -->

                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <article>
                                    <div class="card shadow-lg">
                                        <figure class="card-img-top overlay overlay-1"><a href="#"> <img
                                                    src=".\assets\img\kementrian\senbud\ecc\ecc7.webp"
                                                    alt="" /></a>
                                            {{-- <figcaption>
                      <h5 class="from-top mb-0">Read More</h5>
                    </figcaption> --}}
                                        </figure>
                                        <div class="card-body p-6">
                                            <div class="post-header">
                                                {{-- <div class="post-category">
                        <a href="#" class="hover" rel="category">Wedding</a>
                      </div> --}}
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3">The Enchanted Ceremony</h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-footer">
                                                <ul class="post-meta d-flex mb-0">
                                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr
                                                            2022</span></li>

                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!--/.swiper-slide -->

                            <!--/.swiper-slide -->

                            <!--/.swiper-slide -->


                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <article>
                                    <div class="card shadow-lg">
                                        <figure class="card-img-top overlay overlay-1"><a href="#"> <img
                                                    src=".\assets\img\kementrian\senbud\UCF\ucf10.webp"
                                                    alt="" /></a>
                                            {{-- <figcaption>
                      <h5 class="from-top mb-0">Read More</h5>
                    </figcaption> --}}
                                        </figure>
                                        <div class="card-body p-6">
                                            <div class="post-header">
                                                {{-- <div class="post-category">
                        <a href="#" class="hover" rel="category">Wedding</a>
                      </div> --}}
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3">Ubaya Culture Festival</h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-footer">
                                                <ul class="post-meta d-flex mb-0">
                                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr
                                                            2022</span></li>

                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </div>

                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!--/.swiper-slide -->

                            <!--/.swiper-slide -->

                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <article>
                                    <div class="card shadow-lg">
                                        <figure class="card-img-top overlay overlay-1"><a href="#"> <img
                                                    src=".\assets\img\kementrian\senbud\UCF\ucf4.webp"
                                                    alt="" /></a>
                                            {{-- <figcaption>
                      <h5 class="from-top mb-0">Read More</h5>
                    </figcaption> --}}
                                        </figure>
                                        <div class="card-body p-6">
                                            <div class="post-header">
                                                {{-- <div class="post-category">
                        <a href="#" class="hover" rel="category">Wedding</a>
                      </div> --}}
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3">Ubaya Culture Festival</h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-footer">
                                                <ul class="post-meta d-flex mb-0">
                                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr
                                                            2022</span></li>

                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /article -->
                            </div>
                            <div class="swiper-slide">
                                <article>
                                    <div class="card shadow-lg">
                                        <figure class="card-img-top overlay overlay-1"><a href="#"> <img
                                                    src=".\assets\img\kementrian\senbud\UCF\ucf6.webp"
                                                    alt="" /></a>
                                            {{-- <figcaption>
                      <h5 class="from-top mb-0">Read More</h5>
                    </figcaption> --}}
                                        </figure>
                                        <div class="card-body p-6">
                                            <div class="post-header">
                                                {{-- <div class="post-category">
                        <a href="#" class="hover" rel="category">Wedding</a>
                      </div> --}}
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3">Ubaya Culture Festival</h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-footer">
                                                <ul class="post-meta d-flex mb-0">
                                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr
                                                            2022</span></li>

                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /article -->
                            </div>



                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.overflow-hidden -->
    </section>
    <!-- /section -->
    <div class="modal fade" id="modal-01" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <figure class="mb-6"><img src=".\assets\img\kementrian\senbud\logo ecc.webp"
                                    srcset=".\assets\img\kementrian\senbud\logo ecc.webp" alt="" /></figure>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                    <h3>The Enchanted Ceremony</h3>
                    <p class="mb-6" style="text-align:justify !important;">

                        The Enchanted Ceremony (ECC) merupakan acara gabungan antara malam keakraban dan malam apresiasi
                        yang diselenggarakan oleh Kementerian Seni Budaya dan Kementerian Dalam Negeri Badan Eksekutif
                        Mahasiswa Universitas Surabaya. The Enchanted Ceremony (ECC) merupakan bentuk perayaan untuk menutup
                        satu periode yang telah berjalan. Acara ini dikemas dengan tujuan untuk mempererat hubungan antar
                        Ormawa di Universitas Surabaya (UBAYA) serta mengapresiasi kerja keras setiap pengunjung acara yang
                        telah berusaha mengharumkan nama UBAYA. </p>

                    <!-- /.row -->
                </div>
                <!--/.modal-body -->
            </div>
            <!--/.modal-content -->
        </div>
        <!--/.modal-dialog -->
    </div>
    <!--/.modal -->
    <div class="modal fade" id="modal-02" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            {{-- <figure class="mb-6"><img src="../../assets/img/illustrations/i7.png"
                                    srcset="../../assets/img/illustrations/i7@2x.png 2x" alt="" /></figure> --}}
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                    <h3>UBAYA Culture Festival</h3>
                    <p class="mb-6" style="text-align:justify !important;">

                        UBAYA Culture Festival atau UCF merupakan sebuah festival budaya yang menjadi program kerja besar
                        yang dinaungi oleh Kementerian Seni dan Budaya BEM-US setiap 2 tahun sekali.

                        Dalam hal ini, UCF memiliki misi untuk membuat masyarakat lebih mengenal budaya Indonesia yang tidak
                        selalu kuno, namun dapat dirangkai secara modern dan menarik, sehingga dapat meningkatkan kecintaan
                        masyarakat terhadap budaya Indonesia yang luar biasa.
                    </p>

                    <!-- /.row -->
                </div>
                <!--/.modal-body -->
            </div>
            <!--/.modal-content -->
        </div>
        <!--/.modal-dialog -->
    </div>
    <!--/.modal -->
    <div class="modal fade" id="modal-03" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            {{-- <figure class="mb-6"><img src=".\assets\img\kementrian\senbud\ecc\ecc19.webp" srcset=".\assets\img\kementrian\senbud\ecc\ecc19.webp" alt="" /></figure> --}}
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                    <h3>CreatiOnline</h3>
                    <p class="mb-6" style="text-align:justify !important;'">



                        Pada BEM-US periode 2019/2020 yang dipimpin oleh Aurelius Kevin (Presiden) dan Sharon Leonata Itam
                        (Wakil Presiden), telah diadakan program kerja baru berbasis online yang diberi nama CreatiOnline.
                        Dalam hal ini, kegiatan tersebut hadir, dikarenakan kondisi pandemi COVID-19

                        CreatiOnline menyediakan berbagai cabang lomba yang dapat diikuti oleh Mahasiswa/i UBAYA. Dimana
                        terdapat 7 cabang lomba utama, dan 2 cabang lomba ‘kejutan’, serta 2 cabang lomba Nasional. Oleh
                        karena itu, apabila Ingin melihat keseruan #CreatiOnline2020, maka mampir yuk, pada akun Instagram
                        resmi @creationline2020


                        <!-- /.row -->
                </div>
                <!--/.modal-body -->
            </div>
            <!--/.modal-content -->
        </div>
        <!--/.modal-dialog -->
    </div>
    <!--/.modal -->
@endsection
