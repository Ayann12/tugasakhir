<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Desa Sumuranja</title>
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

  <script src="<?= base_url('assets/plugin/ckeditor/ckeditor.js') ?>"></script>

  <!-- =======================================================
  * Template Name: Plato - v2.2.1
  * Template URL: https://bootstrapmade.com/plato-responsive-bootstrap-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <div class="wrap">

    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div class="hero-container" data-aos="fade-up">
        <?= $this->session->flashdata('message'); ?>
        <h1>SELAMAT DATANG DI WEB DESA SUMURANJA</h1>
        <a href="#about" class="btn-get-started scrollto">Hayuk Mari</a>
      </div>
    </section><!-- End Hero -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
          <h1 class="text-light"><a href="<?= base_url('home'); ?>"><span>SUMURANJA</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="<?= base_url('home'); ?>">Home</a></li>
            <li class="drop-down"><a href="">Profil Desa</a>
              <ul>
                <li><a href="#about">Sejarah Desa</a></li>
                <li><a href="#team">Visi & Misi</a></li>
                <li><a href="#features">Struktur Desa</a></li>
                <li><a href="#testimonials">Caption Lurah</a></li>
                <li><a href="#clients">Youtuber Desa</a>
                  <!-- <ul>
                    <li><a href="#">Komunitas Seni Sumuranja</a></li>
                    <li><a href="#">OJK Ojek Kuburan</a></li>
                    <li><a href="#">Kibangimi</a></li>
                  </ul> -->
                </li>
              </ul>
            </li>
            <li><a href="#services">Pelayanan Desa</a></li>
            <li><a href="#portfolio">Berita</a></li>
            <!-- <li><a href="#pricing">Pricing</a></li> -->
            <li><a href="#contact">Pengaduan</a></li>
            <li class="drop-down"><a href="">Acoount</a>
              <ul>
                <li><a href="<?= base_url('auth/register/') ?>">Daftar Akun</a></li>
                <li><a href="<?= base_url('auth'); ?>">Masuk</a></li>
              </ul>
            </li>

          </ul>
        </nav><!-- .nav-menu -->

      </div>
    </header><!-- End Header -->

    <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">
          <?php foreach ($profile as $pro) : ?>
            <div class="row">
              <div style="background-image: url(<?= base_url('assets/img/sejarah/') . $pro['image']; ?>)" data-aos="fade-right" class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
              <div class="col-xl-7 pt-4 pt-lg-0 d-flex align-items-stretch">
                <div class="content d-flex flex-column justify-content-center" data-aos="fade-left">
                  <p>
                    <?= $pro['deskripsi']; ?>
                  </p>
                  <!-- <div class="row">
                  <div class="col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <i class="bx bx-receipt"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Ullamco laboris nisi</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <i class="bx bx-images"></i>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="400">
                    <i class="bx bx-shield"></i>
                    <h4>Beatae veritatis</h4>
                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                  </div>
                </div> -->
                </div><!-- End .content-->
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </section><!-- End About Section -->

      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients">
        <div class="container">

          <div class="row">
            <?php foreach ($you as $yo) : ?>
              <div class="col-lg-4 col-md-3 col-3">
                <a href="<?= $yo['link']; ?>">
                  <img src="<?= base_url('assets/img/youtube/') . $yo['image']; ?>" class="img-fluid" alt="" data-aos="zoom-in">
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section><!-- End Clients Section -->

      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
        <div class="container">

          <!-- <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="card" data-aos="fade-up">
                <img src="assets/img/features-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <i class="bx bx-tachometer"></i>
                  <h5 class="card-title"><a href="">Our Mission</a></h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5 mt-md-0 d-flex align-items-stretch">
              <div class="card" data-aos="fade-up" data-aos-delay="150">
                <img src="assets/img/features-2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <i class="bx bx-file"></i>
                  <h5 class="card-title"><a href="">Our Plan</a></h5>
                  <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque
                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                    beatae vitae dicta sunt explicabo. </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 d-flex align-items-stretch">
              <div class="card" data-aos="fade-up" data-aos-delay="300">
                <img src="assets/img/features-3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <i class="bx bx-show"></i>
                  <h5 class="card-title"><a href="">Our Vision</a></h5>
                  <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni
                    dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia
                    dolor sit amet. </p>
                </div>
              </div>
            </div>
          </div> -->
          <div class="section-title" data-aos="fade-down">
            <span>Struktur Pemerintahan Desa</span>
            <h2>Struktur Pemerintahan Desa</h2>
          </div>
          <?php foreach ($struktur as $str) : ?>
            <div class="row align-center" data-aos="zoom-in">
              <div class="col-lg">
                <p class="text-center"><b>Periode : <?= $str['periode']; ?></b></p>
                <img src="<?= base_url('assets/img/struktur/') . $str['image']; ?>" height="100%" width="100%" alt="...">
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </section><!-- End Features Section -->

      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
        <div class="container">

          <!-- <div class="text-center" data-aos="zoom-in">
            <h3>Fakta Sumuranja</h3>
            <p>Sumuranja yaitu Desa kecil yang memiliki ke asrian, dimana desa ini di kelilingi banyak gunung</p>
          </div> -->

        </div>
      </section><!-- End Cta Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container">

          <div class="section-title" data-aos="fade-down">
            <span>Pelayanan Masyarakat</span>
            <h2>Pelayanan Masyarakat</h2>
          </div>

          <div class="row">
            <?php foreach ($pelayanan as $pel) : ?>
              <div class="col-md-6">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="<?= $pel['icon']; ?>" style="color: <?= $pel['kode_warna']; ?>"></i>
                  <h4><?= $pel['judul']; ?></h4>
                  <p><?= $pel['ket']; ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

        </div>
      </section><!-- End Services Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio section-bg">
        <div class="container">

          <div class="section-title" data-aos="fade-down">
            <span>Berita Desa</span>
            <h2>Berita Desa</h2>
          </div>

          <!-- <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div> -->

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">

            <?php foreach ($artikel as $art) : ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="<?= base_url('assets/img/artikel/') . $art['image']; ?>" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4><?= $art['judul']; ?></h4>
                    <p><?= $art['deskripsi']; ?></p>
                  </div>
                  <div class="portfolio-links">
                    <a href="<?= base_url('assets/img/artikel/') . $art['image']; ?>" data-gall="portfolioGallery" class="venobox" title="<?= $art['judul']; ?>"></p><i class="bx bx-plus"></i>
                    </a>
                    <a href="<?= base_url('home/detail/') . $art['id'];; ?>" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>

          </div>

        </div>
      </section><!-- End Portfolio Section -->

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container">

          <div class="owl-carousel testimonials-carousel" data-aos="zoom-in">

            <?php foreach ($caption as $cap) : ?>
              <div class="testimonial-item">
                <!-- <img src="<?= base_url('assets/'); ?>homepage/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
                <h3><?= $cap['nama']; ?></h3>
                <h4><?= $cap['jabatan']; ?></h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?= $cap['caption']; ?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            <?php endforeach; ?>
          </div>

        </div>
      </section><!-- End Testimonials Section -->

      <!-- ======= Team Section ======= -->
      <section id="team" class="team">
        <div class="container">

          <div class="section-title" data-aos="fade-down">
            <span>Visi & Misi</span>
            <h2>Visi & Misi</h2>
          </div>

          <!-- <div class="row">

            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 mt-4 mt-md-0">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 mt-4 mt-lg-0" data-wow-delay="0.2s">
              <div class="member" data-aos="fade-up" data-aos-delay="300">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 mt-4 mt-lg-0" data-wow-delay="0.3s">
              <div class="member" data-aos="fade-up" data-aos-delay="400">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div> -->
          <div class="text-center" data-aos="zoom-in">
            <?php foreach ($visimisi as $nl) : ?>
              <h3>VISI DESA SUMURANJA</h3>
              <p><?= $nl['visi']; ?></p>
              <h3>MISI DESA SUMURANJA</h3>
              <p><?= $nl['misi']; ?></p>
            <?php endforeach; ?>
          </div>

        </div>
      </section><!-- End Team Section -->

      <!-- ======= Pricing Section ======= -->
      <!-- <section id="pricing" class="pricing">
        <div class="container">

          <div class="section-title" data-aos="fade-down">
            <span>Pricing</span>
            <h2>Pricing</h2>
            <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
          </div>

          <div class="row no-gutters">

            <div class="col-lg-4 box" data-aos="zoom-in" data-aos-delay="200">
              <h3>Free</h3>
              <h4>$0<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="get-started-btn">Get Started</a>
            </div>

            <div class="col-lg-4 box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>Business</h3>
              <h4>$29<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="get-started-btn">Get Started</a>
            </div>

            <div class="col-lg-4 box" data-aos="zoom-in" data-aos-delay="200">
              <h3>Developer</h3>
              <h4>$49<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="get-started-btn">Get Started</a>
            </div>

          </div>

        </div>
      </section> -->
      <!-- End Pricing Section -->

      <!-- ======= F.A.Q Section ======= -->
      <!-- <section id="faq" class="faq">
        <div class="container">

          <div class="section-title" data-aos="fade-down">
            <span>F.A.Q</span>
            <h2>F.A.Q</h2>
            <p>Frequently Asked Questions</p>
          </div>

          <div class="faq-list">
            <ul>
              <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse"
                  href="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i
                    class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                  <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur
                    gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2"
                  class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i
                    class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
                    donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque
                    elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3"
                  class="collapsed">Dolor sit amet consectetur adipiscing elit? <i
                    class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                    elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque
                    eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis
                    sed odio morbi quis
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4"
                  class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i
                    class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in.
                    Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est.
                    Purus gravida quis blandit turpis cursus in.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5"
                  class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem
                  dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada
                    nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut
                    venenatis tellus in metus vulputate eu scelerisque.
                  </p>
                </div>
              </li>

            </ul>
          </div>

        </div>
      </section> -->
      <!-- End F.A.Q Section -->

      <!-- ======= Contact Us Section ======= -->
      <section id="contact" class="contact section-bg">
        <div class="container">

          <div class="section-title" data-aos="fade-down">
            <span>Form Pengaduan Masyarakat</span>
            <h2>Form Pengaduan Masyarakat</h2>
          </div>

          <div class="row justify-content-center">
            <?php foreach ($alamat as $alt) : ?>
              <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="100">
                <div class="info-box">
                  <i class="<?= $alt['icon']; ?>"></i>
                  <h3><?= $alt['nama']; ?></h3>
                  <p><?= $alt['alamat']; ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <div class="php-email-form mt-4" data-aos="fade-up" data-aos-delay="400">
            <?= form_open_multipart('home'); ?>
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="col-md-6 form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email Aktif">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Pengaduan">
              <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <textarea type="text" class="form-control" id="isi" name="isi" placeholder="isi Pengaduan"></textarea>
              <?= form_error('isi', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image">
                <label class="custom-file-label" for="image">Choose file</label>
              </div>
            </div>
            <div class="form-group">
              <div class="text-center"><button type="submit">Send Message</button></div>
            </div>
            </form>
          </div>
        </div>
      </section><!-- End Contact Us Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
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

  </div>

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
  <script>
    $('.custom-file-input').on('change', function() {
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
  </script>

  <script>
    CKEDITOR.replace('isi');
  </script>

</body>

</html>