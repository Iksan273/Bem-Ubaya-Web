@extends('layouts.mainweb')

@section('style')
<link rel="stylesheet" href="./assets/css/kementrian.css">
@endsection

@section('title')
BEM UBAYA - Kementrian Olahraga
@endsection

@section('content')


<section class="wrapper bg-dark angled lower-start">
    <div class="container pt-7 pt-md-11 pb-8">
        <div class="row gx-0 gy-10 align-items-center">
            <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
                <h1 class="display-1 text-white mb-4"><br /><span class="typer text-primary text-nowrap"
                        data-delay="100" data-words="Kementrian Olahraga"></span><span class="cursor text-primary"
                        data-owner="typer"></span></h1>
                <p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15" style="color: white;">
                    Kementerian olahraga

                    <ul>
                        <li>
                            Menaungi Seluruh UKM Olahraga Di Universitas Surabaya (UKM Badminton,Basket,Bridge,
                            Catur,Fitness,Flag Football,Futsal,Mapaus dan Sar,Renang dan Selam,Voli)
                        </li>
                        <li>
                            Mengadakan Kegiatan Dalam Bidang olahraga Untuk Seluruh Mahasiswa Universitas Surabaya

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
                    <a href="" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox><i
                            class=""></i></a>
                    <figure class="rounded shadow-lg"><img src=".\assets\img\kementrian\olahraga\Olahraga.png"
                            srcset=".\assets\img\kementrian\olahraga\Olahraga.png" alt=""></figure>
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
                <h3 class="display-4 mb-7 px-lg-19 px-xl-18">Profile kementrian olahraga</h3>
            </div>


            <!--/column -->
        </div>
        <!--/.row -->


        <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">

            <div class="row mb-3">
                <div class="col-md-10 col-lg-8 col-xl-10 col-xxl-4 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top">
                            <img class="img-fluid"
                                src=".\assets\img\kementrian\olahraga\Gerald Tanzil_120120227_Mentri Olahraga.webp"
                                srcset=".\assets\img\kementrian\olahraga\Gerald Tanzil_120120227_Mentri Olahraga.webp"
                                alt="" /></figure>
                        <div class="card-body px-6 py-5">
                            <h4 class="mb-1">Gerald Tanzil
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
                                src="./assets/img/kementrian/olahraga/Rolland Suciadi_Olahraga.png"
                                srcset="./assets/img/kementrian/olahraga/Rolland Suciadi_Olahraga.png" alt="" />
                        </figure>
                        <div class="card-body px-6 py-5">
                            <h4 class="mb-1">Rolland Suciadi</h4>
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
                                src="./assets/img/kementrian/olahraga/CarolineAngela_Olahraga.png"
                                srcset="./assets/img/kementrian/olahraga/Rolland Suciadi_Olahraga.png" alt="" />
                        </figure>
                        <div class="card-body px-6 py-5">
                            <h4 class="mb-1">Caroline Angela</h4>
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
                                src="./assets/img/kementrian/olahraga/Kimberly Ariana_Olahraga.png"
                                srcset="./assets/img/kementrian/olahraga/Rolland Suciadi_Olahraga.png" alt="" />
                        </figure>
                        <div class="card-body px-6 py-5">
                            <h4 class="mb-1">Kimberly Ariana</h4>
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
                                src="./assets/img/kementrian/olahraga/Jesselyn Angelina Wibisono _ KEMENRA.png"
                                srcset="./assets/img/kementrian/olahraga/Jesselyn Angelina Wibisono _ KEMENRA.png"
                                alt="" /></figure>
                        <div class="card-body px-6 py-5">
                            <h4 class="mb-1">Jesselyn Angelina W</h4>
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
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-02">
                            <figure class="px-md-1 px-xl-0 px-xxl-1 mb-8"><img
                                    src="./assets/img/LOGO_PROGRAM_KERJA/Logo UG.webp" alt="" /></figure>
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
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-03">
                            <figure class="px-md-1 px-xl-0 px-xxl-1 mb-8"><img
                                    src="./assets/img/LOGO_PROGRAM_KERJA/Logo UEL.webp" alt="" /></figure>
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
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-04">
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

            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->


<div class="modal fade" id="modal-02" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <figure class="mb-6"><img src="./assets/img/LOGO_PROGRAM_KERJA/Logo UG.webp"
                                srcset="./assets/img/LOGO_PROGRAM_KERJA/Logo UG.webp" alt="" /></figure>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <h3>UBAYA GAMES</h3>
                <p class="mb-6" style="text-align:justify !important;">UBAYA GAMES merupakan program kerja yang
                    dilakukan setiap 2 tahun sekali oleh Kementerian Olahraga BEM-US. Program kerja ini terakhir kali
                    telah dilaksanakan pada tahun 2018. Hal ini demikian, karena UBAYA GAMES 2020: “MAY THE FRATERNITY
                    REMAINS IN ETERNITY” dengan berat hati dibatalkan, karena pandemi COVID-19 dan pada 2022 kembali di
                    laksanakan.
                    Dalam hal ini, terdapat beberapa cabang olahraga, penalaran, serta seni yang dinantikan untuk
                    diperlombakan pada kegiatan UBAYA GAMES, dan tentunya selalu ada cabang baru di setiap tahun-nya
                    yang akan diperlombakan oleh 8 Fakultas dan 1 Politeknik Universitas Surabaya.</p>

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
                        <figure class="mb-6"><img src="./assets/img/LOGO_PROGRAM_KERJA/Logo UEL.webp"
                                srcset="./assets/img/LOGO_PROGRAM_KERJA/Logo UEL.webp" alt="" /></figure>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <h3>UBAYA Esports League</h3>
                <p class="mb-6" style="text-align:justify !important;"><i>Ubaya E-sports League</i> merupakan kegiatan perlombaan <i>e-sports</i> pertama yang diadakan oleh Kementerian Olahraga BEM-US. Dimana terdapat 3 cabang <i>e-sports</i> yang diperlombakan pada
                    UEL: <i>Season</i> 2 ini, yaitu <i>Mobile Legends, PUBG Mobile, dan VALORANT</i>.
                    Dalam hal ini, untuk tema UEL: <i>Season</i> 2 adalah <i>“Strive to Thrive”</i> yang diambil dari hasil dan
                    semangat yang mereka dapatkan pada <i>season</i> sebelumnya, mereka harus berusaha untuk
                    mengembangkan diri, meningkatkan <i>skill</i>, dan melatih diri agar dapat menjadi pemain yang
                    tangguh, hebat, dan berkualitas
                    <i>Last but not least</i>, UEL: <i>Season</i> 2 juga memiliki tagline yang membuat para peserta menjadi
                    lebih bersemangat lagi, yaitu <i>“Survive is Good, Thrive is Better”.</i></p>

                <!-- /.row -->
            </div>
            <!--/.modal-body -->
        </div>
        <!--/.modal-content -->
    </div>
    <!--/.modal-dialog -->
</div>
<!--/.modal -->

<div class="modal fade" id="modal-04" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        {{-- <figure class="mb-6"><img src="../../assets/img/illustrations/i7.png" srcset="../../assets/img/illustrations/i7@2x.png 2x" alt="" /></figure> --}}
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <h3>FOR YOUR INSPORTMATION</h3>
                <p class="mb-6" style="text-align:justify !important;">FOR YOUR INSPORTMATION atau yang disingkat dengan
                    FYI merupakan sebuah informasi yang dipaparkan oleh Kementerian Olahraga di Instagram BEM-US. Dalam
                    hal ini, informasi yang dipaparkan melalui FYI merupakan informasi seputar olahraga dan Unit
                    Kegiatan Mahasiswa Universitas Surabaya.</p>

                <!-- /.row -->
            </div>
            <!--/.modal-body -->
        </div>
        <!--/.modal-content -->
    </div>
    <!--/.modal-dialog -->
</div>
<!--/.modal -->


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
            <div class="swiper-container nav-bottom nav-color mb-14" data-margin="30" data-dots="false" data-nav="true"
                data-items-lg="3" data-items-md="2" data-items-xs="1">
                <div class="swiper overflow-visible pb-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <article>
                                <div class="card shadow-lg">
                                    <figure class="card-img-top overlay overlay-1"><a href="#"> <img
                                                src=".\assets\img\kementrian\olahraga\Ubaya Games\ug1.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya Games</h2>
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
                                                src=".\assets\img\kementrian\olahraga\Ubaya Games\ug2.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya Games</h2>
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
                                                src=".\assets\img\kementrian\olahraga\Ubaya Games\ug3.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya Games</h2>
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
                                                src=".\assets\img\kementrian\olahraga\Ubaya Games\ug4.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya Games</h2>
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
                                                src=".\assets\img\kementrian\olahraga\Ubaya Games\ug5.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya Games</h2>
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
                                                src=".\assets\img\kementrian\olahraga\Ubaya Games\ug6.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya Games</h2>
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
                                                src=".\assets\img\kementrian\olahraga\Ubaya Games\ug7.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya Games</h2>
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
                                                src=".\assets\img\kementrian\olahraga\Ubaya Games\ug8.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya Games</h2>
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
                                                src=".\assets\img\kementrian\olahraga\Ubaya Games\ug9.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya Games</h2>
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
                                                src=".\assets\img\kementrian\olahraga\Ubaya Games\ug10.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya Games</h2>
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
                                                src=".\assets\img\kementrian\olahraga\Ubaya Games\ug11.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya Games</h2>
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
                                                src=".\assets\img\kementrian\olahraga\Ubaya Games\ug12.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya Games</h2>
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
                                                src=".\assets\img\kementrian\olahraga\Ubaya Games\ug13.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya Games</h2>
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
                                                src=".\assets\img\kementrian\olahraga\Ubaya Games\ug14.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya Games</h2>
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
                                                src=".\assets\img\kementrian\olahraga\Ubaya Games\ug16.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya Games</h2>
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
                                                src=".\assets\img\kementrian\olahraga\Ubaya Games\ug17.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya Games</h2>
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
                                                src=".\assets\img\kementrian\olahraga\Ubaya Games\ug18.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya Games</h2>
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
                                                src=".\assets\img\kementrian\olahraga\UEL\UEL 1.webp" alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya E-Sport League</h2>
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
                                                src=".\assets\img\kementrian\olahraga\UEL\UEL 2.webp" alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya E-Sport League</h2>
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
                                                src=".\assets\img\kementrian\olahraga\UEL\UEL 5.webp" alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya E-Sport League</h2>
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
                                                src=".\assets\img\kementrian\olahraga\UEL\UEL 8.webp" alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya E-Sport League</h2>
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
                                                src=".\assets\img\kementrian\olahraga\UEL\UEL 10.webp" alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya E-Sport League</h2>
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
                                                src=".\assets\img\kementrian\olahraga\UEL\UEL 12.webp" alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya E-Sport League</h2>
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
                                                src=".\assets\img\kementrian\olahraga\UEL\UEL 19.webp" alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya E-Sport League</h2>
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
                                                src=".\assets\img\kementrian\olahraga\UEL\UEL 20.webp" alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya E-Sport League</h2>
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
                                                src=".\assets\img\kementrian\olahraga\UEL\UEL17.webp" alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya E-Sport League</h2>
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
                                                src=".\assets\img\kementrian\olahraga\UEL\uels2(1).webp" alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya E-Sport League</h2>
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
                                                src=".\assets\img\kementrian\olahraga\UEL\uels2(2).webp" alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya E-Sport League</h2>
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
                                                src=".\assets\img\kementrian\olahraga\UEL\uels2(3).webp" alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya E-Sport League</h2>
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
                                                src=".\assets\img\kementrian\olahraga\UEL\uels2(4).webp" alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya E-Sport League</h2>
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
                                                src=".\assets\img\kementrian\olahraga\UEL\uels2(5).webp" alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya E-Sport League</h2>
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
                                                src=".\assets\img\kementrian\olahraga\UEL\uels2(6).webp" alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya E-Sport League</h2>
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
                                                src=".\assets\img\kementrian\olahraga\UEL\uels2(7).webp" alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya E-Sport League</h2>
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
                                                src=".\assets\img\kementrian\olahraga\UEL\uels2(8).webp" alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya E-Sport League</h2>
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
                                                src=".\assets\img\kementrian\olahraga\UEL\uels2(9).webp" alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Ubaya E-Sport League</h2>
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





@endsection
