<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fundraiser &mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Mansalva|Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/fundraiser/fonts/icomoon/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fundraiser/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fundraiser/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fundraiser/css/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fundraiser/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fundraiser/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fundraiser/fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fundraiser/css/aos.css') }}">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{ asset('assets/fundraiser/css/style.css') }}">
  <script src="{{ asset('js/app.js') }}"></script>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
@yield('main-content')
@include('sweet::alert')
</body>
</html>