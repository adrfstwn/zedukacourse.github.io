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

    <div class="mendaftar">
        <?php
        $nama = $_POST['nama'];
        $pekerjaan = $_POST['pekerjaan'];
        $alamat = $_POST['alamat'];
        $tlp = $_POST['tlp'];
        $email = $_POST['email'];
        $promo = $_POST['promo'];
        $kodepromo = $_POST['kodepromo'];
        $tgl = $_POST['tgl'];
        $i = 0; {
            if (isset($_POST['paket1'])) {
                $paket[$i] = $_POST['paket1'];
                $i++;
            }
            if (isset($_POST['paket2'])) {
                $paket[$i] = $_POST['paket2'];
                $i++;
            }
            if (isset($_POST['paket3'])) {
                $paket[$i] = $_POST['paket3'];
                $i++;
            }
            $paketlist = implode(", ", $paket);
        }
        $metode_pembayaran = $_POST['metode_pembayaran'];
        ?>

        <?php
        echo "<pre>";
        echo "</pre>";

        $uploaddir = 'uploads/';
        $uploadfile = $uploaddir . $_FILES['foto']['name'];

        if (
            isset($_FILES['foto']) &&
            $_FILES['foto']['error'] === UPLOAD_ERR_OK &&
            ($_FILES['foto']['type'] == "image/png" || $_FILES['foto']['type'] == "image/jpeg")
        ) {
            if (!is_dir($uploaddir)) {
                mkdir($uploaddir, 0777, true);
            }

            if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile)) {
                echo "File telah berhasil diupload";
            } else {
                echo "File gagal diupload";
            }
        } else {
            echo "Terjadi kesalahan dalam upload file";
        }
        ?>


        <p>
        <h2 align="center">Data Pendaftar </h2>

        <table align="center">

            <tr>
                <td>Nama Lengkap </td>
                <td> : <?= $nama ?> </td>
            </tr>

            <tr>
                <td>Pekerjaan </td>
                <td> : <?= $pekerjaan ?></td>
            </tr>

            <tr>
                <td>Alamat </td>
                <td> : <?= $alamat ?></td>
            </tr>

            <tr>
                <td>Nomor Telepon </td>
                <td> : <?= $tlp ?>
                </td>
            </tr>

            <tr>
                <td>Promo </td>
                <td> : <?= $promo ?>
                </td>
            </tr>

            <tr>
                <td>Kode promo </td>
                <td> : <?= $kodepromo ?></td>
            </tr>

            <tr>
                <td>Tanggal Pesan </td>
                <td> : <?= $tgl ?></td>
            </tr>

            <tr>
                <td>Pilih Kursus </td>
                <td> : <?= $paketlist ?></td>
            </tr>

            <tr>
                <td>Metode Pembayaran </td>
                <td> : <?= $metode_pembayaran ?>
                </td>
            </tr>

            <tr>
                <td>Upload Foto (PNG/JPEG) </td>
                <td> : <img src="uploads/<?= $_FILES['foto']['name'] ?>" height="100" width="100" < /td>
            </tr>

        </table>
        </form>
        </p>
    </div>

    <section>
        <p class="button" align="center"><a class="btn btn-primary py-3 px-5 mt-2" href="simulasi.php">Next</a></p>
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