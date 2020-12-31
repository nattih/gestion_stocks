
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Application Gestion</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">
         </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center mt-5" >
    <div class="hero-container " data-aos="fade-in">
      <h1>Gestion de Stock</h1>
      <p>connectez vous à votre <span class="typed" data-typed-items="Application,plateforme,Espace de travail,"></span></p>
      <div class="divg">
        <form action="{{ route('login') }}" method="POST">
            @csrf
        <div class="form-group row">
                  <div class="col-sm-10">
                      <label for="inputName" class="ecrit font-weight-bold">Votre email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"   autocomplete="email" autofocus   id="inputName" >
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                      <label for="inputPassword3"class="ecrit font-weight-bold">Mot de passe</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password"   id="inputPassword3" >
                    @error('password')
                    <span class="invalid-feedback font-weight-bold" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                </div>
                      <div  id="but">
                        <div class="form-group row">
                            <div class="col-sm-10">
                               <input type="submit" value="Se connecter"  class="btn btn-primary">  
                             </div>
                           </div>
                     </div>
              </form>
            </div>
    </div>
  </section><!-- End Hero -->

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Application Gestion de stocks</span></strong>
      </div>
      <div class="credits">
        Simplon Burkina@2020 <a href="https://bootstrapmade.com/">Groupe 3</a>
      </div>
    </div>
  </footer><!-- End  Footer -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
