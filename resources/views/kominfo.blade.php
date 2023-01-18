@extends('layouts.mainweb')

@section('style')
<link rel="stylesheet" href="./assets/css/kementrian.css">
@endsection

@section('title')
BEM UBAYA - Kominfo
@endsection
<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
@section('content')


<section class="wrapper bg-dark angled lower-start">
   <div class="container pt-7 pt-md-11 pb-8">
     <div class="row gx-0 gy-10 align-items-center">
       <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
         <h1 class="display-1 text-white mb-4"><br><span class="typer text-primary text-nowrap" data-delay="100" data-words="Kementrian KOMINFO"></span><span class="cursor text-primary" data-owner="typer"></span></h1>
         <p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15" style="color: white;">
            Kementerian Komunikasi Dan Informasi



            <ul >
               <li>
                Melakukan Komunikasi Dan Penyampaian Informasi Terkait Kegiatan Kepada Seluruh Mahasiswa Universitas Surabaya


               </li>
               <li>
                Mengelola E-mail Dan Seluruh Akun Media Sosial BEM Universitas Surabaya
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
           <a href="" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox><i class="icn-caret-right"></i></a>
           <figure class="rounded shadow-lg"><img src=".\assets\img\kementrian\kominfo\Kominfo.png" srcset=".\assets\img\kementrian\kominfo\Kominfo.png" alt=""></figure>
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
         <h3 class="display-4 mb-7 px-lg-19 px-xl-18">Profile kementerian Komunikasi Dan Informasi</h3>
       </div>


       <!--/column -->
     </div>
     <!--/.row -->


     <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-8">

      <div class="row mb-3">
         <div class="col-md-10 col-lg-8 col-xl-10 col-xxl-4 mx-auto text-center">
            <div class="card">
               <figure class="card-img-top">
                  <img class="img-fluid" src=".\assets\img\kementrian\kominfo\Ikhsan.jpg" srcset=".\assets\img\kementrian\kominfo\Ikhsan.jpg" alt="" /></figure>
                  <div class="card-body px-6 py-5" style="'text-align:center'">
                    <h4 class="mb-1" style=" align='center'">Muhammad Ikhsan</h4>
                    <p class="mb-0" style=" align='center'">Menteri</p>
                    <p style="align='center'"><a class="text-dark" href="http://instagram.com/m_iksan273"><i
                        class="fab fa-instagram"></i></a></p>
                </div>
               <!--/.card-body -->
             </div>
         </div>


         <!--/column -->
       </div>

       <div class="col-md-6 col-lg-3">
         <div class="position-relative">
           <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
           <div class="card">
             <figure class="card-img-top"><img class="img-fluid" src=".\assets\img\kementrian\kominfo\Gabriel Darma Prasetya Agisucida_KOMINFO.png" srcset=".\assets\img\kementrian\kominfo\Gabriel Darma Prasetya Agisucida_KOMINFO.png" alt="" /></figure>
             <div class="card-body px-6 py-5" style="'text-align:center'">
              <h4 class="mb-1"style=" align='center'">Gabriel Darma Prasetya<br>Agisucida</h4>
              <p class="mb-0"  style=" align='center'">Staff 1</p>
              <p style=" align='center'"><a class="text-dark" href="http://instagram.com/agissucida"><i
                  class="fab fa-instagram"></i></a></p>
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
           <div class="shape rounded bg-soft-red rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
           <div class="card">
             <figure class="card-img-top"><img class="img-fluid" src=".\assets\img\kementrian\kominfo\Aaron_Kominfo.png" srcset=".\assets\img\kementrian\kominfo\Aaron_Kominfo.png" alt="" /></figure>
             <div class="card-body px-6 py-5" style="'text-align:center'">
              <h4 class="mb-1"  style=" align='center'">Aaron Macauley<br>Chandra</h4>
              <p class="mb-0"  style=" align='center'">Staff 2</p>
              <p  style=" align='center'"><a class="text-dark" href="http://instagram.com/macauley.chandra"><i
                  class="fab fa-instagram"></i></a></p>
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
           <div class="shape rounded bg-soft-green rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
           <div class="card">
             <figure class="card-img-top"><img class="img-fluid" src=".\assets\img\kementrian\kominfo\novia_Kominfo.png" srcset=".\assets\img\kementrian\kominfo\novia_Kominfo-01.png" alt="" /></figure>
             <div class="card-body px-6 py-5" style="'text-align:center'">
              <h4 class="mb-1" style=" align='center'">Novia Norman<br>Azzahra</h4>
              <p class="mb-0" style=" align='center'">Staff 3</p>
              <p style=" align='center'"><a class="text-dark" href="http://instagram.com/novianrmn"><i
                  class="fab fa-instagram"></i></a></p>
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
           <div class="shape rounded bg-soft-violet rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
           <div class="card">
             <figure class="card-img-top"><img class="img-fluid" src=".\assets\img\kementrian\kominfo\aurel_kominfo.png" srcset=".\assets\img\kementrian\kominfo\aurel_kominfo.png" alt="" /></figure>
             <div class="card-body px-6 py-5" style="'text-align:center'">
              <h4 class="mb-1" style="align='center'">Aurelia Evelyn<br>Sucipto</h4>
              <p class="mb-0" style=" align='center'">Staff 4</p>
              <p style=" align='center'"><a class="text-dark" href="http://instagram.com/aureliavelyn"><i
                  class="fab fa-instagram"></i></a></p>
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
          <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
          <div class="card">
            <figure class="card-img-top"><img class="img-fluid" src=".\assets\img\kementrian\kominfo\matthew_Kominfo.png" srcset=".\assets\img\kementrian\kominfo\matthew_Kominfo-01.png" alt="" /></figure>
            <div class="card-body px-6 py-5" style="'text-align:center'">
              <h4 class="mb-1" style=" align='center'">Matthew<br>Chandra</h4>
              <p class="mb-0" style=" align='center'">Staff 5</p>
              <p style=" align='center'"><a class="text-dark" href="http://instagram.com/matthew_chandra_"><i
                  class="fab fa-instagram"></i></a></p>
          </div>
            <!--/.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /div -->
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="position-relative">
          <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
          <div class="card">
            <figure class="card-img-top"><img class="img-fluid" src=".\assets\img\kementrian\kominfo\jeremy_Kominfo.png" srcset=".\assets\img\kementrian\kominfo\jeremy_Kominfo-01.png" alt="" /></figure>
            <div class="card-body px-6 py-5" style="'text-align:center'">
              <h4 class="mb-1" style=" align='center'">Jeremy Ivan<br>Hadiono</h4>
              <p class="mb-0" style=" align='center'">Staff 6</p>
              <p style=" align='center '"><a class="text-dark" href="http://instagram.com/kojeremyy"><i
                  class="fab fa-instagram"></i></a></p>
          </div>
            <!--/.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /div -->
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="position-relative">
          <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
          <div class="card">
            <figure class="card-img-top"><img class="img-fluid" src=".\assets\img\kementrian\kominfo\farah_kominfo.png" srcset=".\assets\img\kementrian\kominfo\farah_kominfo.png" alt="" /></figure>
            <div class="card-body px-6 py-5" style="'text-align:center'">
              <h4 class="mb-1" style=" align='center'">Farah Adila Nur<br>Syafira</h4>
              <p class="mb-0" style=" align='center'">Staff 7</p>
              <p style=" align='center'"><a class="text-dark" href="http://instagram.com/farah_adns"><i
                  class="fab fa-instagram"></i></a></p>
          </div>
            <!--/.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /div -->
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="position-relative">
          <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
          <div class="card">
            <figure class="card-img-top"><img class="img-fluid" src=".\assets\img\kementrian\kominfo\jojo_kominfo.png" srcset=".\assets\img\kementrian\kominfo\jojo_kominfo.png" alt="" /></figure>

            <div class="card-body px-6 py-5" style="'text-align:center'">
              <h4 class="mb-1"  style=" align='center'">Jonathan Wicaksono<br>Nugroho</h4>
              <p class="mb-0" style="align='center'">Staff 8</p>
              <p style=" align='center'"><a class="text-dark" href="http://instagram.com/jonathanwicksn"><i
                  class="fab fa-instagram"></i></a></p>
          </div>

            <!--/.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /div -->
      </div>
      <div class="row justify-content-center" style="margin-top:100px;">

      <div class="col-md-6 col-lg-3">
        <div class="position-relative">
          <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
          <div class="card">
            <figure class="card-img-top"><img class="img-fluid" src=".\assets\img\kementrian\kominfo\stefanie_kominfo.png" srcset=".\assets\img\kementrian\kominfo\stefanie_kominfo.png" alt="" /></figure>
            <div class="card-body px-6 py-5" style="'text-align:center'">
              <h4 class="mb-1" style=" align='center'">Stefanie<br>Jovita</h4>
              <p class="mb-0" style=" align='center'">Staff 9</p>
              <p style=" align='center'"><a class="text-dark" href="http://instagram.com/stefaniejovita"><i
                  class="fab fa-instagram"></i></a></p>
          </div>
            <!--/.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /div -->
      </div>

     </div>
     <!--/.row -->
   </div>
   <!-- /.container -->
 </section>
 <!-- /section -->




 <!-- /section -->







@endsection
