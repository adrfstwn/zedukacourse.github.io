<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Z'Eduka</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/logo.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php?target=home" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Z'Eduka</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php?target=home" class="nav-item nav-link ">Home</a>
                <a href="index.php?target=about" class="nav-item nav-link ">About</a>
                <a href="index.php?target=courses" class="nav-item nav-link ">Courses</a>
                <a href="index.php?target=addons" class="nav-item nav-link ">Addons</a>
                <a href="index.php?target=contact" class="nav-item nav-link ">Contact</a>
            </div>
            <a href="form.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container">
        <main class="mb-auto">
          <form id="form1" name="form1" method="post" action="terimasimulasi.php">
            <div class="py-5 text-left">
              <h2>Z'Eduka</h2>
              <p class="lead">CEK ESTIMASI CICILAN KURSUS ANDA</p>
            </div>

            <div class="row g-5">
              <div class="col-md-12 col-lg-8">
                <form class="needs-validation" novalidate>
                  <div class="row g-3">

                    <div class="col-6">
                      <label for="type" class="form-label">Pilihan Kursus</label>
                      <select name="tipe" class="form-select">
                        <option selected>Membuat Website Mastery untuk Teknisi Website</option>
                        <option>Kursus Desainer Grafis Profesional Digital dan Cetak</option>
                        <option>Strategi Inbound Marketing untuk Spesialis Pemasaran</option>
                      </select>
                    </div>

                    <div class="col-sm-12">
                      <label for="harga" class="form-label">Harga Kursus</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text">Rp</span>
                        <input name="harga" type="text" class="form-control" id="harga">
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="uangmuka" class="form-label">Uang Muka</label>
                      <div class="input-group has-validation">

                        <input type="number" name="uangmuka" class="form-control" id="uangmuka" min="30" max="100" placeholder="min. 30% & max. 100%">
                        <span class="input-group-text">%</span>
                        <div class="invalid-feedback">
                          min. 30% & max.100%
                        </div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="tenor" class="form-label">Pilih Tenure
                      </label>
                      <div class="input-group has-validation">
                        <input type="number" name="tenor" class="form-control" id="tenor" min="1" max="5" placeholder="Masukkan Jangka Waktu (1-5 tahun)" required>
                        <span class="input-group-text">Tahun</span>
                        <div class="invalid-feedback">
                          max. 5 tahun
                        </div>
                      </div>
                    </div>

                    <div class="col-6">
                      <label for="bunga" class="form-label">Bunga Pinjaman</label>
                      <div class="input-group has-validation">
                        <input type="number" name="bunga" class="form-control" id="bunga" min="5" max="10" placeholder="(5 - 10)% /tahun" required>
                        <span class="input-group-text">%</span>
                        <div class="invalid-feedback">
                          5-10%
                        </div>
                      </div>
                    </div>


                  </div>
                  <p>
                    <br>

                  </p>
                  <form>
                    <!-- Form input fields here -->
                    <div class="button-container">
                      <button class="btn btn-primary py-3 px-5 mt-2" type="submit">Hitung</button>
                      <button class="btn btn-primary py-3 px-5 mt-2" type="reset">Clear</button>
                    </div>
                  </form>

                </form>
                <p>
                  <br>
                  <br>
                  <br>
                </p>

              </div>
            </div>
      </div>
    
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="index.php?target=about">About Us</a>
                    <a class="btn btn-link" href="index.php?target=contact">Contact Us</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Salatiga, Jawa Tengah, Indonesia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+6284822189438</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>infozeduka@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://youtube.com"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Jika ada pertanyaan silahkan kirim email di bawah ini</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">2023 Z'Eduka</a>, All Right Reserved.</a>
                        <!-- Fungsi Date -->
                        <?php
                        $today = date("[l, d F Y - h:i:s a]");
                        ?>
                        <?= $today ?></p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>