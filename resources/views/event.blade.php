@extends('layouts.mainweb')

@section('style')

@endsection

@section('title')
BEM UBAYA - Event
@endsection

@section('content')


<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row">
        <div class="col-lg-11 col-xl-10 mx-auto mb-10">
          <h2 class="fs-16 text-uppercase text-muted text-center mb-3">Our Event</h2>
          <h3 class="display-3 text-center px-lg-5 px-xl-10 px-xxl-16 mb-0">Event BEM US</h3>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="grid grid-view projects-masonry">
        <div class="row gx-md-8 gy-10 gy-md-13 isotope">
          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><img src="./assets/img/LOGO_PROGRAM_KERJA/Logo UG.webp" srcset="./assets/img/LOGO_PROGRAM_KERJA/Logo UG.webp" alt="" /><a class="item-link" href="/evetdummy" data-glightbox data-gallery="projects-group"><img src="./assets/img/icons/solid/edit-2.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-primary" alt="" /></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="/eventug" class="link-dark">UBAYA GAMES</a></h2>
                {{-- <div class="post-category text-ash">Stationary</div> --}}
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->
          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><img src="./assets/img/LOGO_PROGRAM_KERJA/Logo UEL.webp" srcset="./assets/img/LOGO_PROGRAM_KERJA/Logo UEL.webp" alt="" /><a class="item-link" href="/eventuel" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="./eventuel" class="link-dark">UBAYA E-SPORT LEAGUE</a></h2>
                {{-- <div class="post-category text-ash">Magazine, Book</div> --}}
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->
          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><img src=".\assets\img\kementrian\nasionalisme\logo nationFest.webp" srcset=".\assets\img\kementrian\nasionalisme\logo nationFest.webp" alt="" /><a class="item-link" href="/nationfest" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="/nationfest" class="link-dark">NATION FEST</a></h2>
                {{-- <div class="post-category text-ash">Packaging</div> --}}
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->
          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><img src=".\assets\img\LOGO_PROGRAM_KERJA\logo earth day.webp" srcset=".\assets\img\LOGO_PROGRAM_KERJA\logo earth day.webp" alt="" /><a class="item-link" href="/earthday" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="/earthday" class="link-dark">EARTH DAY</a></h2>
                {{-- <div class="post-category text-ash">Stationary, Branding</div> --}}
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->
          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><img src=".\assets\img\LOGO_PROGRAM_KERJA\logo Ufest.webp" srcset=".\assets\img\LOGO_PROGRAM_KERJA\logo Ufest.webp" alt="" /><a class="item-link" href="/ufest" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="/ufest" class="link-dark">UNITED FESTIVAL</a></h2>
                {{-- <div class="post-category text-ash">Packaging</div> --}}
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->
          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><img src="./assets/img/LOGO_PROGRAM_KERJA/logo ecc.webp" srcset="./assets/img/LOGO_PROGRAM_KERJA/logo ecc.webp" alt="" /><a class="item-link" href="/eventecc" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="/eventecc" class="link-dark">The Enchanted Ceremony</a></h2>
                {{-- <div class="post-category text-ash">Branding</div> --}}
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
      {{-- <div class="text-center mt-10">
        <a href="#" class="btn btn-lg btn-primary rounded-pill">Start a Project</a>
      </div> --}}
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->


@endsection
