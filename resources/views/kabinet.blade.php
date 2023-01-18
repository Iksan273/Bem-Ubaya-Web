@extends('layouts.mainweb')
<meta charset="utf-8">
<title>BEM UBAYA</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">

<!-- Favicon -->
<link href="./assets/img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
    rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="./assets/lib/animate/animate.min.css" rel="stylesheet">
<link href="./assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="./assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="./assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="./assets/css/style1.css" rel="stylesheet">


@section('content')
<div class="container-kabinet">
    <div class="container-xxl bg-white p-0">
        <!-- Carousel Start -->
        <section class="wrapper bg-dark">
            <div class="container-fluid p-0 mb-5">
                <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="w-100" src="./assets/img/fotbarBEM1.jpg">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">BEM
                                        UBAYA</h6>
                                    <h1 class="display-3 text-white mb-4 animated slideInDown">BERSAMA MENJADI RESPONSIF
                                    </h1>
                                    <h4 class="text-white mb-4">(Restorasi, Professional, Inklusif)</h4>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Info
                                        Lebih Lanjud</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="w-100" src="./assets/img/fotbarBEM2.jpg" height="743" width="auto" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">BEM
                                        UBAYA</h6>
                                    <h1 class="display-3 text-white mb-4 animated slideInDown">BERSAMA MENJADI RESPONSIF
                                    </h1>
                                    <h4 class="text-white mb-4">(Restorasi, Professional, Inklusif)</h4>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Info
                                        Lebih Lanjud</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- Carousel End -->
        <section id="visi" class="visi">
            <div class="containerVisi">
                <div class="classPres align-items-center">
                    <div class="row justify-content-md-center">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="mb-5">PRESIDEN <span class="text-primary text-uppercase">& WAKIL PRESIDEN</span>
                            </h1>
                        </div>
                        <div id="barisPresidenWakil" class="row justify-content-center">

                            <div class="col-md-6 col-lg-4">
                                <div class="position-relative">
                                  <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                                  <div class="card">
                                    <figure class="card-img-top"><img class="img-fluid" src="./assets/img/kementrian/Gavriel Heavenly Blessing Torar_120120072.webp" srcset="./assets/img/kementrian/kerohanian/FREDDY CHRISTIANTO.png" alt="" /></figure>
                                    <div class="card-body px-6 py-5">
                                      <h4 class="mb-1" align='center'>Gavriel Heavenly Blessing T</h4>
                                      <p class="mb-0" align='center'>Presiden BEM-US</p>
                                      <p align='center'><a class="text-dark" align='center' href="http://instagram.com/gavrieltorar"><i
                                            class="fab fa-instagram"></i></a></p>
                                    </div>
                                    <!--/.card-body -->
                                  </div>
                                  <!-- /.card -->
                                </div>
                                <!-- /div -->
                              </div>

                              <div class="col-md-6 col-lg-4">
                                <div class="position-relative">
                                  <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                                  <div class="card">
                                    <figure class="card-img-top"><img class="img-fluid" src="./assets/img/kementrian/Christina Maria P_120121055_Wapres.webp" srcset="./assets/img/kementrian/kerohanian/FREDDY CHRISTIANTO.png" alt="" /></figure>
                                    <div class="card-body px-6 py-5" style="'text-align:center'">
                                        <h4 class="mb-1" align='center'>Christina Maria P</h4>
                                        <p class="mb-0" align='center'>Wakil Presiden BEM-US</p>
                                        <p align='center'><a class="text-dark" href="http://instagram.com/christinaampp"><i
                                            class="fab fa-instagram"></i></a></p>
                                    </div>
                                    <!--/.card-body -->
                                  </div>
                                  <!-- /.card -->
                                </div>
                                <!-- /div -->
                              </div>

                            <section id="featured-services" class="featured-services">
                                <div class="row g-4">
                                    <h4 class="mb-3"><br></h4>
                                </div>
                                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                    <h1 class="mb-5">MISI <span class="text-primary text-uppercase">BEM UBAYA</span>
                                    </h1>
                                </div>

                                <div class="container" data-aos="fade-up">

                                    <div id="barisMisi1" class="row">
                                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                            <a class="service-item rounded" href="">
                                                <h5 class="mb-3">Misi 1</h5>
                                                <p class="text-body mb-0">Menjadikan BEM-US sebagai organisasi yang
                                                    berdedikasi,
                                                    berintegritas, dan mengedepankan profesionalitas kerja.</p>
                                            </a>
                                        </div>

                                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                            <a class="service-item rounded" href="">
                                                <h5 class="mb-3">Misi 2</h5>
                                                <p class="text-body mb-0">Mendukung penuh UKM untuk dapat berkarya dan
                                                    berprestasi
                                                    secara optimal di bidangnya.</p>
                                            </a>
                                        </div>

                                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                            <a class="service-item rounded" href="">
                                                <h5 class="mb-3">Misi 3</h5>
                                                <p class="text-body mb-0">Bersinergi dengan BEM Fakultas dan Politeknik
                                                    Universitas
                                                    Surabaya untuk dapat menjalin hubungan yang dilandaskan rasa
                                                    kekeluargaan</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="barisMisi2" class="row justify-content-center">
                                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                            <a class="service-item rounded" href="">
                                                <h5 class="mb-3">Misi 4</h5>
                                                <p class="text-body mb-0">Mengembangkan jiwa multikultur, sikap
                                                    toleransi dan
                                                    nilai-nilai nasionalisme di kalangan mahasiswa/i Universitas
                                                    Surabaya.</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                            <a class="service-item rounded" href="">
                                                <h5 class="mb-3">Misi 5</h5>
                                                <p class="text-body mb-0">Meningkatkan kualitas diri setiap
                                                    mahasiswa/i
                                                    Universitas Surabaya melalui program kerja BEM-US yang aspiratif
                                                    dan
                                                    inovatif</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Kementerian</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Ministry</span></h1>
                </div>
                <h4 class="mb-3"><br></h4>
                <div id="barisKementrian1" class="row justify-content-center">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="service-item rounded" href="/sekre">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <img src=".\assets\img\kementrian\sekretaris negara.png" height="auto" width="200px"></img>
                                    </div>
                                </div>
                                <br><br>
                                <h5 class="mb-3">Kementerian Sekretaris Negara</h5>
                                <button
                                    class="btn btn-dark py-md-1 px-md-2 me-1 animated slideInLeft" >Selengkapnya</button>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <a class="service-item rounded" href="/keuangan">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <img src=".\assets\img\kementrian\Keuangan.Png" height="auto" width="200px"></img>
                                    </div>
                                </div>
                                <br><br>
                                <h5 class="mb-3">Kementerian Keuangan</h5>
                                <button
                                    class="btn btn-dark py-md-1 px-md-2 me-1 animated slideInLeft">Selengkapnya</button>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <a class="service-item rounded" href="/dagri">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <img src=".\assets\img\kementrian\DAGRI.png" height="auto" width="200px"></img>
                                    </div>
                                </div>
                                <br><br>
                                <h5 class="mb-3">Kementerian Dalam Negeri</h5>
                                <button
                                    class="btn btn-dark py-md-1 px-md-2 me-1 animated slideInLeft">Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                    <h4 class="mb-3"><br></h4>
                    <div id="barisKementrian2" class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <a class="service-item rounded" href="/kemenlu">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <img src=".\assets\img\kementrian\luar-negeri.Png" height="auto" width="200px"></img>
                                    </div>
                                </div>
                                <br><br>
                                <h5 class="mb-3">Kementerian Luar Negeri</h5>
                                <button
                                    class="btn btn-dark py-md-1 px-md-2 me-1 animated slideInLeft">Selengkapnya</button>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <a class="service-item rounded" href="/kerohanian">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <img src=".\assets\img\kementrian\kerohanian.png" height="auto" width="200px"></img>
                                    </div>
                                </div>
                                <br><br>
                                <h5 class="mb-3">Kementerian Kerohanian</h5>
                                <button
                                    class="btn btn-dark py-md-1 px-md-2 me-1 animated slideInLeft">Selengkapnya</button>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                            <a class="service-item rounded" href="/PSDM">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <img src=".\assets\img\kementrian\PSDM.png" height="auto" width="200px"></img>
                                    </div>
                                </div>
                                <br><br>
                                <h5 class="mb-3">Kementerian PSDM</h5>
                                <button
                                    class="btn btn-dark py-md-1 px-md-2 me-1 animated slideInLeft">Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                    <h4 class="mb-3"><br></h4>
                    <div id="barisKementrian3" class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <a class="service-item rounded" href="/kominfo">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <img src=".\assets\img\kementrian\Kominfo.png" height="auto" width="200px"></img>
                                    </div>
                                </div>
                                <br><br>
                                <h5 class="mb-3">Kementerian KOMINFO</h5>
                                <button
                                    class="btn btn-dark py-md-1 px-md-2 me-1 animated slideInLeft">Selengkapnya</button>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                            <a class="service-item rounded" href="/senbud">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <img src=".\assets\img\kementrian\seni-budaya.png" height="auto" width="200px"></img>
                                    </div>
                                </div>
                                <br><br>
                                <h5 class="mb-3">Kementerian Seni Budaya</h5>
                                <button
                                    class="btn btn-dark py-md-1 px-md-2 me-1 animated slideInLeft">Selengkapnya</button>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                            <a class="service-item rounded" href="/olahraga">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <img src=".\assets\img\kementrian\olahraga.png" height="auto" width="200px"></img>
                                    </div>
                                </div>
                                <br><br>
                                <h5 class="mb-3">Kementerian Olah Raga</h5>
                                <button
                                    class="btn btn-dark py-md-1 px-md-2 me-1 animated slideInLeft">Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                    <h4 class="mb-3"><br></h4>
                    <div id="barisKementrian4" class="row justify-content-center">
                        <div id="barisMisi2" class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.10s">
                                <a class="service-item rounded" href="/sospengmas">
                                    <div class="service-icon bg-transparent border rounded p-1">
                                        <div
                                            class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                            <img src=".\assets\img\kementrian\sospengmas.png" height="auto" width="200px"></img>
                                        </div>
                                    </div>
                                    <br><br>
                                    <h5 class="mb-3">Kementerian SOSPENGMAS</h5>
                                    <button
                                        class="btn btn-dark py-md-1 px-md-2 me-1 animated slideInLeft">Selengkapnya</button>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.11s">
                                <a class="service-item rounded" href="/nasionalisme">
                                    <div class="service-icon bg-transparent border rounded p-1">
                                        <div
                                            class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                            <img src=".\assets\img\kementrian\nasionalisme.png" height="auto" width="200px"></img>
                                        </div>
                                    </div>
                                    <br><br>
                                    <h5 class="mb-3">Kementerian Nasionalisme</h5>
                                    <button
                                        class="btn btn-dark py-md-1 px-md-2 me-1 animated slideInLeft">Selengkapnya</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Service End -->

        <br><br>
        <!-- Footer Start -->

        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/lib/wow/wow.min.js"></script>
    <script src="./assets/lib/easing/easing.min.js"></script>
    <script src="./assets/lib/waypoints/waypoints.min.js"></script>
    <script src="./assets/lib/counterup/counterup.min.js"></script>
    <script src="./assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="./assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="./assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="./assets/js/main.js"></script>
    @endsection
</div>
