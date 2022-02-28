<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/serang.ico') ?>" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/'); ?>homepage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>homepage/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>homepage/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>homepage/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>homepage/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>homepage/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/'); ?>homepage/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Plato - v2.2.1
  * Template URL: https://bootstrapmade.com/plato-responsive-bootstrap-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <div class="wrap">

        <!-- ======= Header ======= -->
        <header id="header" class="d-flex align-items-center">
            <div class="container d-flex align-items-center">

                <div class="logo mr-auto">
                    <h1 class="text-light"><a href="<?= base_url('home'); ?>"><span>Sumuranja</span></a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                </div>

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li><a href="<?= base_url('home'); ?>">Home</a></li>
                    </ul>
                </nav><!-- .nav-menu -->

            </div>
        </header><!-- End Header -->

        <main id="main">

            <!-- ======= Portfolio Details Section ======= -->
            <section id="portfolio-details" class="portfolio-details" data-aos="fade-up" data-aos-delay="200">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="<?= base_url('assets/img/artikel/') . $artikel['image']; ?>" class="img-fluid" width="100%" height="100%" alt="">
                        </div>
                        <div class="col-lg-5">
                            <h2><b><?= $artikel['judul']; ?></b></h2>
                            <p>
                                <?= $artikel['deskripsi']; ?>
                            </p>

                        </div>
                    </div>
                </div>
            </section><!-- End Portfolio Details Section -->

        </main><!-- End #main -->


    </div>
    <footer id="footer">
        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>2021</span></strong>. WEB Desa Sumuranja
            </div>
            <div class="credits">
                Developer by <a href="<?= base_url('home'); ?>">Andriyan</a>
            </div>
        </div>
    </footer><!-- End Footer -->
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/'); ?>homepage/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>homepage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>homepage/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets/'); ?>homepage/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url('assets/'); ?>homepage/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="<?= base_url('assets/'); ?>homepage/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets/'); ?>homepage/assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url('assets/'); ?>homepage/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/'); ?>homepage/assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/'); ?>homepage/assets/js/main.js"></script>

</body>

</html>