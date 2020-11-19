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
    
  </div>

{{-- Main Content Here  --}}

<div class="container my-5 py-5 mx-auto d-inline-flex">

{{-- <div class="col-lg-12 mx-auto d-inline-flex"> --}}

  <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXp3DxP80ArpRzsB0XWBG9Ow5GeuefbLrUHw&usqp=CAU" class="card-img-top img-fluid" width="250px" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXp3DxP80ArpRzsB0XWBG9Ow5GeuefbLrUHw&usqp=CAU" class="card-img-top img-fluid" width="250px" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXp3DxP80ArpRzsB0XWBG9Ow5GeuefbLrUHw&usqp=CAU" class="card-img-top img-fluid" width="250px" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>

{{-- </div> --}}

</div>

{{-- End of Main Content  --}}

  <footer class="site-footer text-center bg-dark" style="padding: 1em !important;">
    {{-- <div class="container">
      <div class="row pt-0 mt-0 text-center">
        <div class="col-md-12">
          <div class="pt-0">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | This template is made with <i class="icon-heart text-danger"
                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>

      </div>
    </div> --}}
    <p>
      Copyright &copy; 2020. All rights reserved | Tempelate Made by Colorib. Forged by Dev
    </p>
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