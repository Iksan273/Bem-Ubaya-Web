@extends('layouts.mainweb')

@section('style')
<link rel="stylesheet" href="./assets/css/kementrian.css">
@endsection

@section('title')
BEM UBAYA - Kementrian
@endsection

@section('content')



<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row">
        <div class="col-lg-11 col-xl-10 mx-auto mb-10">
          {{-- <h2 class="fs-16 text-uppercase text-muted text-center mb-3">Our Projects</h2> --}}
          <h3 class="display-3 text-center px-lg-5 px-xl-10 px-xxl-16 mb-0">Kementrian BEM UBAYA</h3>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="grid grid-view projects-masonry">
        <div class="row gx-md-8 gy-10 gy-md-13 isotope">
          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><img src=".\assets\img\kementrian\Untitled-1.png" srcset=".\assets\img\kementrian\Kominfo.png" alt="" /><a class="item-link" href="/kominfo" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="/kominfo" class="link-dark">Kementerian Komunikasi Dan Informasi</a></h2>
                {{-- <div class="post-category text-ash">Stationary</div> --}}
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->
          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><img src=".\assets\img\kementrian\DAGRI.png" srcset=".\assets\img\kementrian\DAGRI.png" alt="" /><a class="item-link" href="/dagri" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="/dagri" class="link-dark">Kementrian Dalam Negeri</a></h2>
                {{-- <div class="post-category text-ash">Magazine, Book</div> --}}
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->

          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><img src=".\assets\img\kementrian\luar-negeri.Png" srcset=".\assets\img\kementrian\luar-negeri.Png" alt="" /><a class="item-link" href="/kemenlu" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="/kemenlu" class="link-dark">Kementerian Luar Negeri</a></h2>
                {{-- <div class="post-category text-ash">Packaging</div> --}}
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->

          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><img src=".\assets\img\kementrian\Keuangan.Png" srcset=".\assets\img\kementrian\Keuangan.Png" alt="" /><a class="item-link" href="/kemenlu" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="/keuangan" class="link-dark">Kementerian Keuangan</a></h2>
                {{-- <div class="post-category text-ash">Packaging</div> --}}
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->
          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><img src=".\assets\img\kementrian\nasionalisme.png" srcset=".\assets\img\kementrian\nasionalisme.png" alt="" /><a class="item-link" href="/nasionalisme" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="/nasionalisme" class="link-dark">Kementerian Nasionalisme</a></h2>
                {{-- <div class="post-category text-ash">Branding</div> --}}
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->
          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><img src=".\assets\img\kementrian\kerohanian.png" srcset=".\assets\img\kementrian\kerohanian.png" alt="" /><a class="item-link" href="/kerohanian" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="/kerohanian" class="link-dark">Kementerian Kerohanian</a></h2>
                {{-- <div class="post-category text-ash">Packaging</div> --}}
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->
          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><img src="" srcset="" alt="" /><a class="item-link" href="/nasionalisme" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="/nasionalisme" class="link-dark"></a></h2>
                {{-- <div class="post-category text-ash"></div> --}}
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->
        </div>
        <!-- /.row -->
      </div>
      <div class="grid grid-view projects-masonry">
        <div class="row gx-md-8 gy-10 gy-md-13 isotope">
          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><img src=".\assets\img\kementrian\olahraga.png" srcset=".\assets\img\kementrian\olahraga.png" alt="" /><a class="item-link" href="/olahraga" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="/olahraga" class="link-dark">Kementerian Olahraga</a></h2>
                {{-- <div class="post-category text-ash">Stationary</div> --}}
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->
          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><img src=".\assets\img\kementrian\PSDM.png" srcset=".\assets\img\kementrian\PSDM.png" alt="" /><a class="item-link" href="/PSDM  " data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="/PSDM" class="link-dark">Kementerian Pengembangan SDM</a></h2>
                {{-- <div class="post-category text-ash">Magazine, Book</div> --}}
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->

          <!-- /.item -->
          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><img src=".\assets\img\kementrian\seni-budaya.png" srcset=".\assets\img\kementrian\seni-budaya.png" alt="" /><a class="item-link" href="/senbud" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="/senbud" class="link-dark">Kementerian Seni Budaya</a></h2>
                {{-- <div class="post-category text-ash">Stationary, Branding</div> --}}
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->
          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><img src=".\assets\img\kementrian\sospengmas.png" srcset=".\assets\img\kementrian\sospengmas.png" alt="" /><a class="item-link" href="/sospengmas" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="/sospengmas" class="link-dark">Kementerian Sosial Dan Pengabdian Masyarakat</a></h2>
                {{-- <div class="post-category text-ash">Packaging</div> --}}
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->
          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><img src=".\assets\img\kementrian\sekretaris negara.png" srcset=".\assets\img\kementrian\sekretaris negara.png" alt="" /><a class="item-link" href="/sekre" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="/sekre" class="link-dark">Sekretaris Negara</a></h2>
                {{-- <div class="post-category text-ash">Packaging</div> --}}
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.grid -->
      <div class="text-center mt-10">
        {{-- <a href="#" class="btn btn-lg btn-primary rounded-pill">Start a Project</a> --}}
      </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->





@endsection
