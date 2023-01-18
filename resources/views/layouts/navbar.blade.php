<nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
    <div class="container flex-lg-row flex-nowrap align-items-center">
      <div class="navbar-brand w-100">
        <a href="./index.html">
          <img src=".\assets\img\REVISI.png" srcset=".\assets\img\REVISI.png" style="width: 75%" alt="" />
        </a>
      </div>
      <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
        <div class="offcanvas-header d-lg-none">
          <h3 class="text-white fs-30 mb-0">Sandbox</h3>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
          <ul class="navbar-nav">

              <a class="nav-link " href="/">Home</a>

              <!--/.dropdown-menu -->


              <a class="nav-link" href="/kementrian">Kementrian</a>

            </li>

              <a class="nav-link " href="kabinet">About us</a>

              <a class="nav-link" href="/event">Event</a>

              <a class="nav-link " href="/kalendar">Kalendar Ormawa</a>
          </ul>
          <!-- /.navbar-nav -->
          <div class="offcanvas-footer d-lg-none">
            <div>
              <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
              <br /> 00 (123) 456 78 90 <br />
              <nav class="nav social social-white mt-4">
                <a href="#"><i class="uil uil-twitter"></i></a>
                <a href="#"><i class="uil uil-facebook-f"></i></a>
                <a href="#"><i class="uil uil-dribbble"></i></a>
                <a href="#"><i class="uil uil-instagram"></i></a>
                <a href="#"><i class="uil uil-youtube"></i></a>
              </nav>
              <!-- /.social -->
            </div>
          </div>
          <!-- /.offcanvas-footer -->
        </div>
        <!-- /.offcanvas-body -->
      </div>
      <!-- /.navbar-collapse -->
      <div class="navbar-other w-100 d-flex ms-auto">
        <ul class="navbar-nav flex-row align-items-center ms-auto">
          @auth
          <li class="nav-item dropdown language-select text-uppercase">
            <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li class="nav-item">
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">Sign Out</button>
                </form>
            </ul>
          </li>
          @else
          <li class="nav-item dropdown language-select text-uppercase">
            <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="dropdown-item" href="/login">Sign In</a></li>
              <li><hr class="dropdown-divider"></li>
            </ul>
          </li>
          @endauth
          
          <li class="nav-item d-lg-none">
            <button class="hamburger offcanvas-nav-btn"><span></span></button>
          </li>
        </ul>
        <!-- /.navbar-nav -->
      </div>
      <!-- /.navbar-other -->
    </div>
    <!-- /.container -->
  </nav>
