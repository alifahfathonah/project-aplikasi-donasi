@extends('layouts.homepagelayouts')

@section('main-content')



  <div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>





    <div class="bg-primary py-3 top-bar shadow d-none d-md-block">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-md-left pl-0">
            <a href="#" class=" pr-3 pl-0">Home</a>
            <a href="#" class="p-3">Events</a>
            <a href="#" class="p-3">Become A Volunteer</a>
          </div>
          <div class="col-md-6 text-md-right">
            <a href="#" class="p-3"><span class="icon-twitter"></span></a>
            <a href="#" class="p-3"><span class="icon-facebook"></span></a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar site-navbar-target bg-secondary shadow py-1" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">


          <div class="site-logo">
            <a href="index.html" class="text-white">Fundraiser</a>
          </div>


          <nav class="site-navigation text-left ml-auto " role="navigation">
            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
              <li class="active"><a href="index.html" class="nav-link">Home</a></li>
              <li><a href="about.html" class="nav-link">About Us</a></li>
              <li><a href="causes.html" class="nav-link">Our Causes</a></li>
              <li><a href="blog.html" class="nav-link">Blog</a></li>
              <li><a href="contact.html" class="nav-link">Contact</a></li>
            </ul>
          </nav>


          <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#"
              class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-white"></span></a>
          </div>



        </div>
      </div>

    </header>




    <div class="owl-carousel-wrapper">



      <div class="box-92819">
        <h1 class="text-white mb-3">Join The Movement To end Child Poverty</h1>
        <p><a href="#" class="btn btn-primary py-3 px-4 rounded-0">Donate Now</a></p>
      </div>

      <div class="owl-carousel owl-1 ">
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg');"></div>
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_2.jpg');"></div>
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_3.jpg');"></div>

      </div>
    </div>


    <div class="container">
      <div class="feature-29192-wrap d-md-flex" style="margin-top: -20px; position: relative; z-index: 2;">

        <a href="#" class="feature-29192 overlay-danger" style="background-image: url('images/img_3_gray.jpg');">
          <div class="text">
            <span class="meta">Livelihood</span>
            <h3 class="text-cursive text-white h1">Livelihood</h3>
          </div>
        </a>

        <a class="feature-29192 overlay-success" style="background-image: url('images/img_2_gray.jpg');">
          <div class="text">
            <span class="meta">Health</span>
            <h3 class="text-cursive text-white h1">Natural Remedies</h3>
          </div>
        </a>

        <div class="feature-29192 overlay-warning" style="background-image: url('images/img_1_gray.jpg');">
          <div class="text">
            <span class="meta">School</span>
            <h3 class="text-cursive text-white h1">New Class Rooms</h3>
          </div>
        </div>

      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5 align-items-st">
          <div class="col-md-4">
            <div class="heading-20219">
              <h2 class="title text-cursive">Latest Causes</h2>
            </div>
          </div>
          <div class="col-md-8">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga ea reprehenderit rerum magnam, ipsum
              aperiam. Earum, expedita ratione.</p>
          </div>
        </div>

        {{-- Bagian Detail Pasien  --}}

        <div class="row">

          @foreach ($data_pasien as $pasien)
          <div class="col-md-4">
            <div class="cause shadow-sm">
              <a href="#" class="cause-link d-block">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                <div class="custom-progress-wrap">
                  <span class="caption">80% complete</span>
                  <div class="custom-progress-inner">
                    <div class="custom-progress bg-danger" style="width: 80%;"></div>
                  </div>
                </div>
              </a>
              <div class="px-3 pt-3 border-top-0 border border shadow-sm">
                <span class="badge-danger py-1 small px-2 rounded mb-3 d-inline-block">School</span>
                <h3 class="mb-4"><a href="{{ url('/pasien') }}/{{ $pasien->id }}">
                    {{ $pasien->pasien_nama }}
                  </a></h3>
                <div class="border-top border-light border-bottom py-2 d-flex">
                  <div>Donated</div>
                  <div class="ml-auto"><strong class="text-primary">$32,919</strong></div>
                </div>
                <div class="py-4">
                  <div class="d-flex align-items-center">
                    <img src="images/person_1.jpg" alt="Image" class="rounded-circle mr-3" width="50">
                    <div class="">James Smith</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach




        </div>
      </div>
    </div>

    <div class="bg-image overlay site-section" style="background-image: url('images/hero_1.jpg');">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-12">
            <div class="row mb-5">
              <div class="col-md-7">
                <div class="heading-20219">
                  <h2 class="title text-white mb-4 text-cursive">Why Choose Us</h2>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt ipsam
                    repellendus voluptatum, totam magni iusto numquam quo eos dolor perferendis.</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-5">
                <div class="feature-29012 d-flex">
                  <div class="number mr-4"><span>1</span></div>
                  <div>
                    <h3>Odit Reiciendis</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi id sint explicabo odit reiciendis
                      eaque accusamus labore necessitatibus.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-5">
                <div class="feature-29012 d-flex">
                  <div class="number mr-4"><span>2</span></div>
                  <div>
                    <h3>Nisi Sint Explicabo</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi id sint explicabo odit reiciendis
                      eaque accusamus labore necessitatibus.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 mb-5">
                <div class="feature-29012 d-flex">
                  <div class="number mr-4"><span>3</span></div>
                  <div>
                    <h3>Accusamus Labore Necessitatibus</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi id sint explicabo odit reiciendis
                      eaque accusamus labore necessitatibus.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-5">
                <div class="feature-29012 d-flex">
                  <div class="number mr-4"><span>4</span></div>
                  <div>
                    <h3>Consectetur Dolor Elit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi id sint explicabo odit reiciendis
                      eaque accusamus labore necessitatibus.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="site-section">
    <div class="container">
      <div class="heading-20219 mb-5">
        <h2 class="title text-cursive">Latest Event</h2>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="event-29191 mb-5">
            <a href="#" class="d-block mb-3"><img src="images/img_1.jpg" alt="Image" class="img-fluid rounded"></a>
            <div class="px-3 d-flex">

              <div class="bg-primary p-3 d-inline-block text-center rounded mr-4 date">
                <span class="text-white h3 m-0 d-block">22</span>
                <span class="text-white small">Oct 2019</span>
              </div>

              <div>
                <div class="mb-3">
                  <span class="mr-3"> <span class="icon-clock-o mr-2 text-muted"></span>9:30 AM &mdash; 11:30 AM</span>
                  <span> <span class="icon-room mr-2 text-muted"></span>Ghana Africa</span>
                </div>
                <h3><a href="single.html">Ratione Delectus Assumenda Rem Modi Quaerat Laborum</a></h3>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="event-29191 mb-5">
            <a href="#" class="d-block mb-3"><img src="images/img_2.jpg" alt="Image" class="img-fluid rounded"></a>
            <div class="px-3 d-flex">

              <div class="bg-primary p-3 d-inline-block text-center rounded mr-4 date">
                <span class="text-white h3 m-0 d-block">22</span>
                <span class="text-white small">Oct 2019</span>
              </div>

              <div>
                <div class="mb-3">
                  <span class="mr-3"> <span class="icon-clock-o mr-2 text-muted"></span>9:30 AM &mdash; 11:30 AM</span>
                  <span> <span class="icon-room mr-2 text-muted"></span>Ghana Africa</span>
                </div>
                <h3><a href="single.html">Ratione Delectus Assumenda Rem Modi Quaerat Laborum</a></h3>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-image overlay-primary" style="background-image: url('images/img_1.jpg');">
    <div class="container">
      <div class="row align-items-stretch">
        <div class="col-md-6">
          <img src="images/img_1.jpg" alt="Image" class="img-fluid shadow">
        </div>
        <div class="col-md-6">
          <div class="bg-white h-100 p-4 shadow">
            <h3 class="mb-4 text-cursive">Donate Now</h3>
            <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Amount in dollar">
              </div>
              <div class="form-group">
                <input type="submit" value="Donate Now" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">

      <div class="d-md-flex cta-20101 align-self-center bg-light p-5">
        <div class="">
          <h2 class="text-cursive">Helping the Homeless, Hungry, and Hurtings Children</h2>
        </div>
        <div class="ml-auto"><a href="#" class="btn btn-primary">Donate Now</a></div>
      </div>

    </div>
  </div>

  <footer class="site-footer bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-7">
              <h2 class="footer-heading mb-4">About Us</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem modi, quaerat laborum id fugit blanditiis
                ratione delectus assumenda.</p>

            </div>
            <div class="col-md-4 ml-auto">
              <h2 class="footer-heading mb-4">Features</h2>
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>

          </div>
        </div>
        <div class="col-md-4 ml-auto">

          <div class="mb-5">
            <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
            <form action="#" method="post" class="footer-suscribe-form">
              <div class="input-group mb-3">
                <input type="text" class="form-control rounded-0 border-secondary text-white bg-transparent"
                  placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                </div>
              </div>
          </div>


          <h2 class="footer-heading mb-4">Follow Us</h2>
          <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
          <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
          <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
          <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </form>
        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <div class="pt-5">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | This template is made with <i class="icon-heart text-danger"
                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>

      </div>
    </div>
  </footer>

  </div>

  <script src="{{ asset('assets/fundraiser/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('assets/fundraiser/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/fundraiser/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/fundraiser/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/fundraiser/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('assets/fundraiser/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/fundraiser/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('assets/fundraiser/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('assets/fundraiser/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/fundraiser/js/aos.js') }}"></script>
  <script src="{{ asset('assets/fundraiser/js/main.js') }}"></script>

@endsection