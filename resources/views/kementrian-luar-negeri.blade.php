@extends('layouts.mainweb')

@section('style')
<link rel="stylesheet" href="./assets/css/kementrian.css">
@endsection

@section('title')
BEM UBAYA - Kementrian Luar Negeri
@endsection

@section('content')


<section class="wrapper bg-dark angled lower-start">
    <div class="container pt-7 pt-md-11 pb-8">
        <div class="row gx-0 gy-10 align-items-center">
            <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
                <h1 class="display-1 text-white mb-4"><br /><span class="typer text-primary text-nowrap"
                        data-delay="100" data-words="Kementrian Luar Negeri"></span><span class="cursor text-primary"
                        data-owner="typer"></span></h1>
                <p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15" style="color: white;">
                    <ul>
                        <li>
                            Berkoordinasi Dan Mengadakan Kegiatan Kolaborasi Dengan BEM Universitas Lain
                        </li>
                        <li>
                            Mengurus Segala Hubungan Dengan Pihak Eksternal
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
                            class="icn-caret-right"></i></a>
                    <figure class="rounded shadow-lg"><img src=".\assets\img\kementrian\luar-negeri\LuarNegeri.png"
                            srcset=".\assets\img\kementrian\luar-negeri\LuarNegeri.png" alt=""></figure>
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
                <h3 class="display-4 mb-7 px-lg-19 px-xl-18">Profile kementrian Luar Negeri</h3>
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
                                src=".\assets\img\kementrian\luar-negeri\Melisa Rusli_130220095_Luar Negeri.webp"
                                srcset=".\assets\img\kementrian\luar-negeri\Melisa Rusli_130220095_Luar Negeri.webp"
                                alt="" /></figure>
                        <div class="card-body px-6 py-5">
                            <h4 class="mb-1">Melisa Rusli</h4>
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
                                src="./assets/img/kementrian/luar-negeri/Ghaza Gamada.png"
                                srcset="./assets/img/kementrian/luar-negeri/Ghaza Gamada.png" alt="" /></figure>
                        <div class="card-body px-6 py-5">
                            <h4 class="mb-1">Ghaza Gamada</h4>
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
                                src="./assets/img/kementrian/luar-negeri/Lydia Gunawan_MenLu.png"
                                srcset="./assets/img/kementrian/luar-negeri/Lydia Gunawan_MenLu.png" alt="" /></figure>
                        <div class="card-body px-6 py-5">
                            <h4 class="mb-1">Lydia Gunawan</h4>
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
                                src="./assets/img/kementrian/luar-negeri/Luky Wilan Nathael_Menlu.png"
                                srcset="./assets/img/kementrian/luar-negeri/Luky Wilan Nathael_Menlu.png" alt="" />
                        </figure>
                        <div class="card-body px-6 py-5">
                            <h4 class="mb-1">Luky Wilan Nathael</h4>
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
                                src="./assets/img/kementrian/luar-negeri/Nathania Faustina Oei_Kementrian Luar Negeri.png"
                                srcset="./assets/img/kementrian/luar-negeri/Nathania Faustina Oei_Kementrian Luar Negeri.png"
                                alt="" /></figure>
                        <div class="card-body px-6 py-5">
                            <h4 class="mb-1">Nathania Faustina Oei</h4>
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
                            <figure class="px-md-1 px-xl-0 px-xxl-1 mb-8"><img src="./assets/img/brands/z1.png"
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
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-03">
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
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-04">
                            <figure class="px-md-1 px-xl-0 px-xxl-1 mb-8"><img
                                    src=".\assets\img\LOGO_PROGRAM_KERJA\logo ufe.png" alt="" /></figure>
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
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-05">
                            <figure class="px-md-1 px-xl-0 px-xxl-1 mb-8"><img src="./assets/img/brands/z4.png"
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


<div class="modal fade" id="modal-02" tabindex="-1">
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
                <h3>Triple U x UC 2019</h3>
                <p class="mb-6" style="text-align:justify !important;">Pada tanggal 3 Maret 2019, empat universitas
                    telah menyelenggarakan sebuah kegiatan pengabdian masyarakat yang dikenal dengan Triple-U x UC.
                    Kegiatan ini dibagi menjadi empat sub-kegiatan dan dilakukan secara serentak di Kelurahan Gunung
                    Anyar Tambak. Setiap universitas yang terlibat
                    bertanggung jawab terhadap satu sub-kegiatan tersebut. Universitas Kristen Petra mengkoordinir
                    aktivitas "Lingkungan", Universitas Pelita Harapan dengan aktivitas "Pendidikan", Universitas
                    Ciputra dengan aktivitas "Entrepreneur", dan yang terakhir Universitas Surabaya dengan aktivitas
                    "Kampung Warna".
                    Setiap sub-kegiatan memiliki fokusnya masing-masing. Kegiatan entrepreneur menyajikan penyuluhan
                    kepada masyarakat sekitar seputar informasi di bidang bisnis yang dapat membantu masyarakat di
                    kelurahan tersebut untuk lebih memahami strategi berbisnis. Pada kegiatan pendidikan, para volunteer
                    yang terlibat memberikan edukasi kepada anak-anak sekitar dengan tujuan untuk menambah ilmu
                    pengetahuan mereka. Di samping itu, pada kegiatan lingkungan para volunteer melakukan pembuatan
                    sistem hidroponik dan menghias tong sampah untuk digunakan di sekitar daerah Kelurahan Gunung Anyar
                    Tambak. Terakhir, namun tak kalah penting, kegiatan yang dikoordinir oleh Universitas Surabaya yaitu
                    kegiatan kampung warna yang dilakukan para volunteer untuk memperindah salah satu jalan di desa
                    Mangrove Gunung Anyar. Jalanan dicat dengan menggunakan cat tembok yang digambar dan dihias dengan
                    sangat kreatif oleh para volunteer Triple-U x UC. Kegiatan kampung warna ini dilakukan dengan tujuan
                    untuk mengembalikan keadaan jalan Kelurahan Gunung Anyar Tambak yang dulunya sudah pernah dicat,
                    namun warna-warninya telah pudar.
                    Kegiatan Triple-U x UC diadakan bukan hanya sekedar kegiatan yang dilakukan oleh mahasiswa terhadap
                    wilayah desa Mangrove Gunung Anyar, namun juga sebagai upaya agar masyarakat dapat lebih menghargai
                    dan menjaga lingkungan sekitarnya, serta melestarikan alam yang masih kita miliki saat ini.</p>

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
                        {{-- <figure class="mb-6"><img src="../../assets/img/illustrations/i7.png" srcset="../../assets/img/illustrations/i7@2x.png 2x" alt="" /></figure> --}}
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <h3>Surabaya EPIK</h3>
                <p class="mb-6" style="text-align:justify !important;">Surabaya Epik (SEPIK) merupakan kegiatan
                    kolaboratif antar BEM dan Mahasiswa se-Surabaya yang hadir pertama kali di tahun 2020 sebagai
                    kegiatan untuk mengapresiasi dan memberikan ucapan terima kasih kepada garda terdepan penanganan
                    COVID-19 secara kreatif.
                    Kegiatan yang diselenggarakan oleh SEPIK 2020 terdiri dari social media movement, Lomba Cipta Lagu,
                    SEPIK donation, Gift Package, dan Closing Ceremony.
                    Buat kamu yang masih ingin tahu lebih lanjut mengenai kegiatan Surabaya Epik (SEPIK), langsung aja
                    mampir ke Instagram @SURABAYAEPIK. Kami tunggu partisipasimu di tahun - tahun berikutnya ya!!</p>

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
                        <figure class="mb-6"><img src=".\assets\img\LOGO_PROGRAM_KERJA\logo ufe.png"
                                srcset=".\assets\img\LOGO_PROGRAM_KERJA\logo ufe.png" alt="" /></figure>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <h3>Kunjungan Kerja dan Studi Banding</h3>
                <p class="mb-6" style="text-align:justify !important;">Kunjungan Kerja dan Studi Banding merupakan
                    kegiatan yang dilakukan dalam rangka untuk menjalin, memperluas, dan mempererat hubungan antara
                    Badan Eksekutif Mahasiswa Universitas Surabaya dengan Badan Eksekutif Mahasiswa Universitas lain.
                    Melalui kegiatan ini, antar Badan Eksekutif Mahasiswa dapat bertukar ilmu dan informasi serta
                    meningkatkan pengetahuan, khususnya dalam bidang organisasi mahasiswa.</p>

                <!-- /.row -->
            </div>
            <!--/.modal-body -->
        </div>
        <!--/.modal-content -->
    </div>
    <!--/.modal-dialog -->
</div>
<!--/.modal -->

<div class="modal fade" id="modal-05" tabindex="-1">
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
                <h3>United For Others (UFO)</h3>
                <p class="mb-6" style="text-align:justify !important;">United For Others (UFO) merupakan kegiatan sosial
                    dan pengabdian masyarakat yang diadakan sebagai sarana untuk membantu meningkatkan kesadaran
                    mahasiswa akan realita yang terjadi di Indonesia saat ini. Melalui rangkaian kegiatan UFO, para
                    mahasiswa dapat membantu dan memberikan dampak positif bagi masyarakat.
                    Sebelum dikenal dengan nama UFO, kegiatan ini bernama Triple-U yang menggambarkan bentuk kolaborasi
                    (kerjasama) antara Universitas Surabaya, Universitas Pelita Harapan, dan Universitas Kristen Petra.
                    Seiring dengan berjalannya waktu, Triple-U memperluas kerjasamanya dengan Universitas Ciputra dan
                    dikenal dengan nama Triple-U x UC. Hingga pada tahun 2020, kegiatan ini resmi diubah dengan nama
                    United For Others (UFO) dengan tujuan untuk memperluas ruang lingkup kerjasama antar Universitas.
                    Pada tahun 2021, UFO diadakan oleh Badan Eksekutif Mahasiswa Universitas Surabaya dan Universitas
                    Kristen Petra dengan tema “Enlight: Extending the Length of Touch”. Berbeda dengan tahun – tahun
                    sebelumnya, tahun ini kegiatan UFO dilaksanakan secara daring sebagai langkah adaptif terhadap
                    pandemi COVID-19 yang terjadi saat ini. Bentuk kegiatan yang awalnya bersentuhan langsung dengan
                    masyarakat, terpaksa diubah dengan kegiatan yang dilakukan dari masing - masing rumah mahasiswa, dan
                    kemudian disebarkan pada 70 titik penyebaran NGO (Non-Governmental Organization) Tangan Pengharapan
                    di Indonesia.
                    Buat kamu yang masih ingin tahu lebih lanjut mengenai kegiatan United For Others (UFO), langsung aja
                    mampir ke Instagram @ufo_2k21. Kami tunggu partisipasimu di tahun - tahun berikutnya ya!!</p>

                <!-- /.row -->
            </div>
            <!--/.modal-body -->
        </div>
        <!--/.modal-content -->
    </div>
    <!--/.modal-dialog -->
</div>


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
                                                src=".\assets\img\kementrian\luar-negeri\kunjungankerja\kunjungan kerja UPH1.png"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Kunjungan Kerja</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\kunjungankerja\kunjungan kerja UPH2.png"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Kunjungan Kerja</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\kunjungankerja\kunjungan kerja UPH3.png"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Kunjungan Kerja</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\kunjungankerja\kunjungan kerja UPH4.png"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Kunjungan Kerja</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\SEPIK\Sepik1.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">SEPIK</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\SEPIK\Sepik2.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">SEPIK</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\SEPIK\Sepik3.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">SEPIK</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\SEPIK\Sepik2022(2).JPG"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">SEPIK</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\SEPIK\Sepik2022(1).JPG"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">SEPIK</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\studibanding\Stuban1.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Studi Banding</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\studibanding\Stuban2.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Studi Banding</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\studibanding\Stuban3.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Studi Banding</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\studibanding\Stuban4.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Studi Banding</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\studibanding\Stuban5.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Studi Banding</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\studibanding\Stuban6.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Studi Banding</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\studibanding\Stuban7.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Studi Banding</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\studibanding\Stuban8.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Studi Banding</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\studibanding\Stuban9.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Studi Banding</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\studibanding\Stuban10.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Studi Banding</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\studibanding\Stuban11.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Studi Banding</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\studibanding\Stuban12.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">Studi Banding</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\United For Others\ufo 2.png"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">United For Others</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\United For Others\ufo 3.png"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">United For Others</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\United For Others\ufo 1.png"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">United For Others</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\United For Others\UFO1.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">United For Others</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\United For Others\UFO2.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">United For Others</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\United For Others\UFO3.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">United For Others</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\United For Others\UFO4.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">United For Others</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\United For Others\UFO5.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">United For Others</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\United For Others\UFO6.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">United For Others</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\United For Others\UFO7.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">United For Others</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\United For Others\UFO8.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">United For Others</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\United For Others\UFO9.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">United For Others</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\United For Others\UFO10.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">United For Others</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\United For Others\UFO11.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">United For Others</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\United For Others\UFO12.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">United For Others</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\United For Others\UFO13.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">United For Others</h2>
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
                                                src=".\assets\img\kementrian\luar-negeri\United For Others\UFO14.webp"
                                                alt="" /></a>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">United For Others</h2>
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
