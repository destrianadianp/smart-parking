<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Smart Parking</title>
  <link rel="icon" href="assets/img/logo.ico" />
  <link rel="stylesheet" href="bootstrap/bootstrap-5.3.1-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="bootstrap/bootstrap-icons-1.11.1/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="aos/aos.css" />
  <link rel="stylesheet" href="assets/styles/style.css" />
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-aos-easing="ease" data-aos-duration="900" data-aos-delay="0">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top shadow">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center gap-2">
        <img src="assets/img/logo.png" alt="" width="30px" />
        <h4 class="m-0 fw-bold text-white">SMART<span style="color: #83c373">PARK</span></h4>
        <!-- <a class="navbar-brand fw-bold text-white" href="#" style="text-shadow: 1px 1px 1px #333; font-size: 24px">SMART<span style="color: #83c373">PARK</span></a> -->
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto gap-4">
          <div class="item-group">
            <li class="nav-item">
              <a class="nav-link fw-medium" href="#hero">Home</a>
            </li>
            <div class="line"></div>
          </div>
          <div class="item-group">
            <li class="nav-item">
              <a class="nav-link fw-medium" href="#about">About</a>
            </li>
            <div class="line"></div>
          </div>
          <div class="item-group">
            <li class="nav-item">
              <a class="nav-link fw-medium" href="#feature">Feature</a>
            </li>
            <div class="line"></div>
          </div>
          <div class="item-group">
            <li class="nav-item">
              <a class="nav-link fw-medium" href="#staff">Staff</a>
            </li>
            <div class="line"></div>
          </div>
        </ul>
      </div>
      <div class="btn-sign" id="navbarNavDropdown">
        <a href="pages/login.php"><button type="button" class="btn fw-semibold" style="border: 3px solid #83c373">LOGIN</button></a>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->
  <!-- Hero -->
  <section id="hero" class="hero parallax">
    <div class="cover">
      <div class="container">
        <div class="row">
          <div class="col d-flex flex-column align-items-center justify-content-center">
            <h1 class="display-2 fw-bold text-white" style="text-shadow: 2px 2px 10px #333; margin-top: 30vh" data-aos="fade-up">FIND <span style="color: #83c373">PARKING</span> IN ONE CLICK</h1>
            <h4 class="text-white fw-semibold" style="text-shadow: 2px 2px 10px #333" data-aos="fade-up" data-aos-delay="200">"Simple, Secure & Smart"</h4>
            <div class="btn-book" data-aos="fade-up" data-aos-delay="400">
              <a href="#"><button type="button" class="btn fw-semibold" style="border: 3px solid #d7e486">BOOK NOW</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Hero -->
  <!-- About -->
  <section id="about" style="background-color: #d7e486">
    <div class="container">
      <div class="row text-center py-5">
        <div class="col" data-aos="fade-up">
          <h2 class="fw-semibold display-6 p-2 px-4" style="border: 2px solid white; display: inline; color: white; border-radius: 10px">Tentang SMART<span style="color: #83c373">PARK</span></h2>
        </div>
      </div>
      <div class="row pb-5">
        <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="200">
          <img src="assets/img/about-img.png" alt="" style="max-width: 100%" />
        </div>
        <div class="col-lg-6 col-md-12 px-5" data-aos="fade-up" data-aos-delay="400">
          <p>
            Smart booking parking memanfaatkan teknologi untuk memudahkan pengguna dalam mencari dan memesan tempat parkir secara online. Fungsinya melibatkan pemesanan digital, informasi real-time tentang ketersediaan tempat parkir,
            pembayaran digital, notifikasi waktu parkir, dan integrasi dengan navigasi untuk memandu pengguna ke lokasi parkir yang telah mereka pesan. Dengan demikian, sistem ini tidak hanya meningkatkan efisiensi pencarian parkir tetapi
            juga memberikan pengalaman parkir yang lebih nyaman dan terorganisir.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir About -->
  <!-- Feature -->
  <section id="feature">
    <div class="container-fluid py-5 bg-light">
      <div class="container">
        <div class="row text-center pb-5">
          <div class="col" data-aos="fade-up" data-aos-delay="50">
            <h2 class="fw-semibold display-6 p-2 px-4" style="border: 2px solid black; display: inline; color: black; border-radius: 10px">Kelebihan SMART<span style="color: #83c373">PARK</span></h2>
          </div>
        </div>
        <!-- Fitur 1 -->
        <div class="row">
          <div class="col-lg-6 col-md-12 justify-content-center d-flex mb-3" data-aos="fade-down-right">
            <img src="assets/img/feature1.jpg" alt="" class="rounded-4" style="max-width: 100%" width="400px" />
          </div>
          <div class="col-lg-6 col-md-12 align-self-center px-5 mb-3" data-aos="fade-down-left" data-aos-delay="300">
            <h3 class="fw-semibold">Pemesanan Cepat dan Mudah</h3>
            <p>Temukan tempat parkir dengan cepat dan mudah melalui platform kami. Sistem pemesanan kami yang intuitif memungkinkan Anda untuk memilih lokasi, tanggal, dan durasi parkir dengan beberapa klik saja.</p>
          </div>
        </div>
        <!-- Fitur 2 -->
        <div class="row">
          <div class="col-lg-6 col-md-12 align-self-center px-5 mb-3" data-aos="fade-down-right" data-aos-delay="300">
            <h3 class="fw-semibold">Informasi Real-Time Ketersediaan Parkir</h3>
            <p>
              Dengan teknologi canggih, SmartBook Parking memberikan informasi real-time tentang ketersediaan tempat parkir di berbagai lokasi. Hindari pengecekan berulang kali - temukan dan pesan tempat parkir yang sesuai dengan
              kebutuhan Anda.
            </p>
          </div>
          <div class="col-lg-6 col-md-12 justify-content-center d-flex mb-3" data-aos="fade-down-left">
            <img src="assets/img/feature2.jpg" alt="" class="rounded-4" style="max-width: 100%" width="400px" />
          </div>
        </div>
        <!-- Fitur 3 -->
        <div class="row">
          <div class="col-lg-6 col-md-12 justify-content-center d-flex mb-3" data-aos="fade-down-right">
            <img src="assets/img/feature3.jpg" alt="" class="rounded-4" style="max-width: 100%" width="400px" />
          </div>
          <div class="col-lg-6 col-md-12 align-self-center px-5 mb-3" data-aos="fade-down-left" data-aos-delay="300">
            <h3 class="fw-semibold">Hemat Waktu, Hindari Kerepotan</h3>
            <p>Dengan SmartBook Parking, hemat waktu pencarian parkir dan hindari kerepotan di jalan. Manfaatkan teknologi untuk pengalaman parkir yang lebih efisien dan nyaman.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Feature -->
  <!-- thx -->
  <section id="" style="background-color: #d7e486">
    <div class="container">
      <!-- <div class="row text-center py-5">
          <div class="col">
            <h2 class="fw-semibold display-6 p-2 px-4" style="border: 2px solid white; display: inline; color: white; border-radius: 10px">Tentang SMART<span style="color: #83c373">PARK</span></h2>
          </div>
        </div> -->
      <div class="row" style="padding-top: 80px; padding-bottom: 80px">
        <div class="col d-flex justify-content-center align-items-center flex-column">
          <h4 class="fw-semibold">Booking Parkir menggunakan</h4>
          <h4 class="fw-semibold" style="color: white">SMART<span style="color: #83c373">PARK</span></h4>
          <h4 class="fw-semibold">Sekarang dan Nikmati Manfaatnya!</h4>
        </div>
      </div>
    </div>
  </section>
  <!-- thx -->
  <!-- Staff -->
  <section id="staff">
    <div class="container-fluid py-5 bg-light">
      <div class="container">
        <div class="row text-center pb-5" data-aos="fade-up">
          <div class="col">
            <h2 class="fw-semibold display-6 p-2 px-4" style="border: 2px solid black; display: inline; color: black; border-radius: 10px">OUR TEAM</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12 staff-profil text-center" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/man.jpg" alt="" class="rounded-circle" />
            <h4>Aoki Takeshi</h4>
            <p>Front End Engineer</p>
            <div class="ikon">
              <a href="#" class="ig mb-3" target="_blank">
                <i class="bi bi-instagram"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 staff-profil text-center" data-aos="fade-up" data-aos-delay="400">
            <img src="assets/img/woman2.jpg" alt="" class="rounded-circle" />
            <h4>Amalia Mahardikai</h4>
            <p>UI/UX Designer</p>
            <div class="ikon">
              <a href="#" class="ig mb-3" target="_blank">
                <i class="bi bi-instagram"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 staff-profil text-center" data-aos="fade-up" data-aos-delay="600">
            <img src="assets/img/woman.jpg" alt="" class="rounded-circle" />
            <h4>Destriana Dian</h4>
            <p>UI/UX Designer</p>

            <div class="ikon">
              <a href="#" class="ig mb-3" target="_blank">
                <i class="bi bi-instagram"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 staff-profil text-center" data-aos="fade-up" data-aos-delay="800">
            <img src="assets/img/man2.jpg" alt="" class="rounded-circle" />
            <h4>Ranggo Aldi</h4>
            <p>UI/UX Designer</p>

            <div class="ikon">
              <a href="#" class="ig mb-3" target="_blank">
                <i class="bi bi-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Staff -->

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row pt-5 pb-2 futer">
        <div class="col-md-4 mb-3">
          <div class="logo mb-4">
            <img src="assets/img/logo.png" alt="" style="width: 60px" />
            <!-- <img src="assets/google.png" alt="" class="mb-3" /> -->
          </div>
          <h4>Kelompok 2</h4>
          <p>"Smart park smart life."</p>
        </div>
        <div class="col-md-4 mb-3">
          <h4>Contact</h4>
          <div class="baseline"></div>
          <div class="alamat d-md-flex gap-2 mb-3">
            <i class="fa-solid fa-location-dot mt-1"></i>
            <!-- <i class="bi bi-pin-map-fill me-2"></i> -->
            <p class="p-0 m-0">Jl. Prof. Sudarto, Tembalang, Kec. Tembalang, Kota Semarang, Jawa Tengah</p>
          </div>
          <!-- <div class="telepon d-md-flex">
              <i class="bi bi-telephone-fill me-2"></i>
              <p>+62-xxx-xxxx-xxxx</p>
            </div> -->
          <div class="email d-md-flex gap-2 align-items-center">
            <i class="fa-solid fa-envelope"></i>
            <!-- <i class="bi bi-envelope-fill me-2"></i> -->
            <p class="m-0 p-0">kelompokdua@gmail.com</p>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <h4>Social Media</h4>
          <div class="baseline"></div>
          <p>Ikuti Media Sosial Kami :</p>
          <div class="ikon">
            <a href="#" class="ig mb-3" target="_blank">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="#" class="x" target="_blank">
              <i class="bi bi-twitter-x"></i>
            </a>
            <a href="#" class="tk mb-3" target="_blank">
              <i class="bi bi-tiktok"></i>
            </a>
            <a href="#" class="yt" target="_blank">
              <i class="bi bi-youtube"></i>
            </a>
            <a href="#" class="fb" target="_blank">
              <i class="bi bi-facebook"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="row text-center p-3">
        <div class="copy">Copyright &copy; 2024 - Aoki Takeshi</div>
      </div>
    </div>
  </footer>
  <!-- Akhir Footer -->
  <script src="bootstrap/bootstrap-5.3.1-dist/js/bootstrap.bundle.min.js"></script>
  <script src="aos/aos.js"></script>
  <script src="aos/main.js"></script>
</body>

</html>