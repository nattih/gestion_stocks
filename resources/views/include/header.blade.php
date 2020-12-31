<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Application Gestion</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  {{-- <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet"> --}}
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('asset/accueil.css')}}">
  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">
      <div class="profile">
        <img src="{{ asset('assets/img/profile.png') }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light">{{Auth::user()->name }}</h1>
        <div class=" d-flex justify-content-between  mt-3 text-center">
          <h6 >
            <a class="text-light btn btn-warning"  href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item">
              <i class="icofont-exit "> </i> <span class="text-bold"> Logout</span>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
             </form>
            </a>
          </h6>
          <h6>
            <a class="btn btn-success" href="{{route('register')}}"><i class="icofont-plus "> </i> User</a>
          </h6>
        </div>
      </div>
      <nav class="nav-menu ">
        <ul>
          <li class="active"><a href="{{route('accueil')}}"><i class="bx bx-home"></i> <span>Accueil</span></a></li>
          <li><a href="{{route('categorie')}}"><i class="bx bx-book-content"></i> <span>Nos Categories</span></a></li>
          <li><a href="{{route('produit')}}"><i class="bx bx-file-blank"></i> <span>Nos Produits</span></a></li>
          <li><a href="{{route('vente.list')}}"><i class="bx bx-server"></i>Nos ventes</a></li>
          <li><a href="#portfoli"><i class=" bx bx-user"></i>Nos Clients</a></li>
         </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
    </div>
  </header><!-- End Header -->
