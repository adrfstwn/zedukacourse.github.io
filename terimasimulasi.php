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

    <section>
    <?php
    error_reporting(0);
    $tipe = $_POST['tipe'];
    $harga = (int)$_POST['harga'];
    $uangmuka = (int)$_POST['uangmuka'] / 100;
    $bunga = (int)$_POST['bunga'] / 100;
    $tenor = (int)$_POST['tenor'];
    $perhitungan = $_POST['perhitungan'];

    $detailuangmuka = $harga * $uangmuka;
    $plafon = $harga - $detailuangmuka;
    $detailBungaTahun = $plafon * $bunga;
    $detailBungaBulan = $plafon * ($bunga / 12);
    $kredit = $plafon / ($tenor * 12);
    $totalAngsuran = $kredit + $detailBungaBulan;

    ?>

    <body>
      <p>

        <br>
        <br>
      <h1 class="text-center mt-5 mb-5" style="color:black;">Hasil Perhitungan</h1>
      </p>
      <div class="row"> 

      </div>
      <h4 align="center"><b>Data Kredit Kursus</b></h4>
      <div class="container">
        <div class="text-center">
          <table class="table table-secondary table-striped shadow" border="1" align="center" width="40%">

            <form>
              <tr>
                <td align="right">Tipe :</td>
                <td align="left"><?= $tipe ?></td>
              </tr>
              <tr>
                <td align="right">Total Tagihan :</td>
                <td align="left">Rp<?php echo number_format($harga) ?></td>
              </tr>
              <tr>
                <td align="right">Uang Muka :</td>
                <td align="left">Rp<?php echo number_format($detailuangmuka) ?> <i class="persen">(<?php echo $uangmuka * 100 ?>%)</i></td>
              </tr>
              <tr>
                <td align="right">Plafon Pinjaman : </td>
                <td align="left">Rp<?php echo number_format($plafon) ?></td>
              </tr>
              <tr>
                <td align="right">Bunga per tahun :</td>
                <td align="left">Rp<?php echo number_format($detailBungaTahun) ?> <i class="persen">(<?php echo number_format(($bunga * 100)) ?>%)</i></td>
              </tr>
              <tr>
                <td align="right">Bunga per bulan :</td>
                <td align="left">Rp<?php echo number_format($detailBungaBulan) ?> <i class="persen"></i></td>
              </tr>
              <tr>
                <td align="right">Tenure :</td>
                <td align="left"><?php echo $tenor ?> Tahun</td>
              </tr>
            </form>
          </table>
        </div>
      </div>
      <br />
      <br />
      <h4 align="center"><b>Tabel Angsuran Kredit</b></h4>
      <div class="container">
        <div class="text-center">
          <table class="table table-secondary table-striped shadow" border="1" align="center" width="40%">
            <thead>
              <tr class="tablee-primary">
                <th>Bulan</th>
                <th>Angsuran Bunga</th>
                <th>Angsuran Pokok</th>
                <th>Total Angsuran</th>
                <th>Sisa Pinjaman</th>
              </tr>
            </thead>
            <tbody>
              <?php
              for ($i = 1; $i <= ($tenor * 12); $i++) {
              ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td>Rp<?php echo number_format($detailBungaBulan) ?></td>
                  <td>Rp<?php echo number_format($kredit) ?></td>
                  <td>Rp<?php echo number_format($totalAngsuran) ?></td>
                  <?php
                  if ($plafon < 0) {
                    $plafon = 0;
                  }
                  ?>
                  <td>Rp<?php echo number_format($plafon) ?></td>
                </tr>
                <?php $plafon -= $totalAngsuran ?>
              <?php } ?>
              <tr class="tablee-primary">
                <td>Total</td>
                <td><?php echo number_format($detailBungaBulan * ($tenor * 12)) ?></td>
                <td><?php echo number_format($kredit * ($tenor * 12)) ?></td>
                <td><?php echo number_format($totalAngsuran * ($tenor * 12)) ?></td>
                <td>Rp0</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
  </section>

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