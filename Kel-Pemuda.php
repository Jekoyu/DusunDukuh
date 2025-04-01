<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kel-Pemuda</title>

  <!-- Boostrep -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />

  <!-- Icon CSS -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <link
    rel="stylesheet"
    href="vendor/bootstrap-icons/bootstrap-icons.min.css" />

  <!-- Style CSS -->
  <link rel="stylesheet" href="./css/style.css" />
  
  <style>
    /* Custom styles for Kelompok Pemuda page */
    .profile-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .profile-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .activity-card {
      transition: all 0.3s ease;
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
    }
    
    .activity-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
      border-color: var(--color-primary);
    }
    
    .activity-card img {
      transition: transform 0.5s ease;
    }
    
    .activity-card:hover img {
      transform: scale(1.05);
    }
    
    .section-title {
      position: relative;
      color: var(--color-font-primary1);
      padding-bottom: 10px;
      margin-bottom: 30px;
    }
    
    .section-title::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 60px;
      height: 3px;
      background-color: var(--color-primary);
    }
    
    .activity-category {
      background-color: var(--color-secondary);
      padding: 15px;
      border-radius: 8px;
      margin-bottom: 20px;
    }
    
    .activity-category h3 {
      color: var(--color-primary);
      font-size: 1.3rem;
      margin-bottom: 15px;
      font-weight: 600;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div
      class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <h1 class="sitename">Dusun Dukuh</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php" class="active">About</a></li>
          <li><a href="berita.php">Berita</a></li>
          <li class="dropdown">
            <a href="#"><span>Pejabat</span>
              <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="Kel-Tani.php">Kel. Tani</a></li>
              <li><a href="Kel-Maggot.php">Kel. Maggot</a></li>
              <li><a href="Kel-Pemuda.php">Kel. Pemuda</a></li>
              <li><a href="PKK.php">PKK</a></li>
              <li><a href="LPMKAL.php">LPMKAL</a></li>
            </ul>
          </li>
          <li><a href="grografis.php">Geografis</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <!-- Foster ke Anggotaan -->
  <section class="img-struktur text-center">
    <h2>STRUKTUR KELOMPOK PEMUDA</h2>
    <p class="fw-semibold">
      Informasi event dan kegiatan yang diadakan masyarakat Dusun Dukuh
    </p>
    <img src="assets/Staff/image.png" alt="Event Masyarakat" />
  </section>

  <!-- Card Anggota Kelompok pemuda -->
  <section class="py-5">
    <div class="ms-2 ms-md-3 ms-lg-4 mb-4">
      <h1 class="section-title fs-3 fw-semibold">Kelompok Pemuda Desa Sinduharjo</h1>
      <p class="text-muted">Berdasarkan wawancara dengan Mas Danang, berikut struktur kepengurusan Kelompok Pemuda</p>
    </div>
    <div class="container-staff">
      <div class="card-wrapper">
        <div class="card profile-card">
          <img
            src="assets/Staff/Bu_Rini.jpg"
            alt="Mohamad Danang Santoso"
            class="profile-img" />
          <div class="profile-footer">
            <div class="profile-name">Mohamad Danang Santoso</div>
            <div class="profile-role">Ketua Kelompok Pemuda</div>
          </div>
        </div>

        <div class="card profile-card">
          <img
            src="assets/Staff/Bu_Rini.jpg"
            alt="Ikhsan Nur Majid"
            class="profile-img" />
          <div class="profile-footer">
            <div class="profile-name">Ikhsan Nur Majid</div>
            <div class="profile-role">Wakil Kelompok Pemuda</div>
          </div>
        </div>

        <div class="card profile-card">
          <img
            src="assets/Staff/Bu_Rini.jpg"
            alt="Susan"
            class="profile-img" />
          <div class="profile-footer">
            <div class="profile-name">Susan</div>
            <div class="profile-role">Sekretaris 1</div>
          </div>
        </div>

        <div class="card profile-card">
          <img
            src="assets/Staff/Bu_Rini.jpg"
            alt="Maya"
            class="profile-img" />
          <div class="profile-footer">
            <div class="profile-name">Maya</div>
            <div class="profile-role">Sekretaris 2</div>
          </div>
        </div>
        
        <div class="card profile-card">
          <img
            src="assets/Staff/Bu_Rini.jpg"
            alt="Uut"
            class="profile-img" />
          <div class="profile-footer">
            <div class="profile-name">Uut</div>
            <div class="profile-role">Bendahara</div>
          </div>
        </div>

        <div class="card profile-card">
          <img
            src="assets/Staff/Bu_Rini.jpg"
            alt="Muhammad Abdika"
            class="profile-img" />
          <div class="profile-footer">
            <div class="profile-name">Muhammad Abdika</div>
            <div class="profile-role">Olahraga</div>
          </div>
        </div>
        
        <div class="card profile-card">
          <img
            src="assets/Staff/Bu_Rini.jpg"
            alt="Dwimas Nur Ilham"
            class="profile-img" />
          <div class="profile-footer">
            <div class="profile-name">Dwimas Nur Ilham</div>
            <div class="profile-role">Humas</div>
          </div>
        </div>
        
        <div class="card profile-card">
          <img
            src="assets/Staff/Bu_Rini.jpg"
            alt="Zulfa"
            class="profile-img" />
          <div class="profile-footer">
            <div class="profile-name">Zulfa</div>
            <div class="profile-role">Keagamaan</div>
            <div class="profile-note text-muted small">(sedang di luar desa)</div>
          </div>
        </div>
        
        <div class="card profile-card">
          <img
            src="assets/Staff/Bu_Rini.jpg"
            alt="Helmi Dwi Fahmi"
            class="profile-img" />
          <div class="profile-footer">
            <div class="profile-name">Helmi Dwi Fahmi</div>
            <div class="profile-role">SDM</div>
          </div>
        </div>
        
        <div class="card profile-card">
          <img
            src="assets/Staff/Bu_Rini.jpg"
            alt="Yoga"
            class="profile-img" />
          <div class="profile-footer">
            <div class="profile-name">Yoga</div>
            <div class="profile-role">Sosial Budaya</div>
          </div>
        </div>
        
        <div class="card profile-card">
          <img
            src="assets/Staff/Bu_Rini.jpg"
            alt="Tesa"
            class="profile-img" />
          <div class="profile-footer">
            <div class="profile-name">Tesa</div>
            <div class="profile-role">Lingkungan Hidup</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Kegiatan dan Event Pemuda desa Sinduharjo -->
  <section class="py-5" style="background-color: var(--color-secondary);">
    <div class="container">
      <div class="mb-5">
        <h1 class="section-title fs-3 fw-semibold">Kegiatan dan Event Pemuda Desa Sinduharjo</h1>
        <p class="text-muted">Berbagai kegiatan yang diselenggarakan oleh Kelompok Pemuda untuk membangun kebersamaan dan mengembangkan potensi</p>
      </div>

      <!-- Kategori Olahraga -->
      <div class="activity-category">
        <h3><i class="fas fa-running me-2"></i> Event Olahraga</h3>
        <div class="row g-4">
          <!-- Futsal -->
          <div class="col-md-4">
            <div class="activity-card h-100">
              <div class="position-relative overflow-hidden" style="height: 180px;">
                <img src="assets/Staff/Bu_Rini.jpg" alt="Futsal" style="width:100%; height:100%; object-fit:cover;">
                <div class="position-absolute top-0 end-0 bg-primary text-white px-2 py-1 m-2 rounded-pill">
                  <small>Rutin</small>
                </div>
              </div>
              <div class="card-body p-3">
                <h5 class="fw-semibold fs-5 mb-2">Futsal</h5>
                <p class="text-muted mb-0">Kegiatan olahraga futsal yang rutin diadakan untuk menjaga kekompakan dan kesehatan pemuda desa.</p>
              </div>
            </div>
          </div>

          <!-- Voli -->
          <div class="col-md-4">
            <div class="activity-card h-100">
              <div class="position-relative overflow-hidden" style="height: 180px;">
                <img src="assets/Galeri/voli.png" alt="Voli" style="width:100%; height:100%; object-fit:cover;">
                <div class="position-absolute top-0 end-0 bg-primary text-white px-2 py-1 m-2 rounded-pill">
                  <small>Tahunan</small>
                </div>
              </div>
              <div class="card-body p-3">
                <h5 class="fw-semibold fs-5 mb-2">Voli</h5>
                <p class="text-muted mb-0">Pertandingan voli yang diadakan setahun sekali sebagai ajang silaturahmi antar warga desa.</p>
              </div>
            </div>
          </div>

          <!-- Mini Soccer -->
          <div class="col-md-4">
            <div class="activity-card h-100">
              <div class="position-relative overflow-hidden" style="height: 180px;">
                <img src="assets/Galeri/minisoccer.png" alt="Mini Soccer" style="width:100%; height:100%; object-fit:cover;">
                <div class="position-absolute top-0 end-0 bg-primary text-white px-2 py-1 m-2 rounded-pill">
                  <small>Berkala</small>
                </div>
              </div>
              <div class="card-body p-3">
                <h5 class="fw-semibold fs-5 mb-2">Mini Soccer</h5>
                <p class="text-muted mb-0">Permainan sepak bola di lapangan yang lebih kecil, menjadi sarana rekreasi dan olahraga bagi pemuda desa.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Kategori Kegiatan Umum -->
      <div class="activity-category mt-4">
        <h3><i class="fas fa-calendar-alt me-2"></i> Kegiatan Umum</h3>
        <div class="row g-4">
          <!-- Makrab -->
          <div class="col-md-4">
            <div class="activity-card h-100">
              <div class="position-relative overflow-hidden" style="height: 180px;">
                <img src="assets/Galeri/makrab.png" alt="Makrab" style="width:100%; height:100%; object-fit:cover;">
              </div>
              <div class="card-body p-3">
                <h5 class="fw-semibold fs-5 mb-2">Makrab</h5>
                <p class="text-muted mb-0">Malam keakraban untuk mempererat hubungan antar pemuda di lingkungan desa dengan berbagai kegiatan menarik.</p>
              </div>
            </div>
          </div>

          <!-- Sumpah Pemuda -->
          <div class="col-md-4">
            <div class="activity-card h-100">
              <div class="position-relative overflow-hidden" style="height: 180px;">
                <img src="assets/Galeri/sumpahpemuda.png" alt="Sumpah Pemuda" style="width:100%; height:100%; object-fit:cover;">
              </div>
              <div class="card-body p-3">
                <h5 class="fw-semibold fs-5 mb-2">Sumpah Pemuda</h5>
                <p class="text-muted mb-0">Peringatan hari Sumpah Pemuda dengan berbagai kegiatan positif untuk menumbuhkan semangat persatuan.</p>
              </div>
            </div>
          </div>

          <!-- 17 Agustusan -->
          <div class="col-md-4">
            <div class="activity-card h-100">
              <div class="position-relative overflow-hidden" style="height: 180px;">
                <img src="assets/Galeri/17an.png" alt="17 Agustusan" style="width:100%; height:100%; object-fit:cover;">
              </div>
              <div class="card-body p-3">
                <h5 class="fw-semibold fs-5 mb-2">17 Agustusan</h5>
                <p class="text-muted mb-0">Perayaan Hari Kemerdekaan RI dengan berbagai lomba, upacara, dan kegiatan yang melibatkan seluruh warga desa.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Kategori Kegiatan Keagamaan -->
      <div class="activity-category mt-4">
        <h3><i class="fas fa-pray me-2"></i> Kegiatan Keagamaan</h3>
        <div class="row g-4">
          <!-- Pengajian Rutin -->
          <div class="col-md-4">
            <div class="activity-card h-100">
              <div class="position-relative overflow-hidden" style="height: 180px;">
                <img src="assets/Galeri/pengajian.png" alt="Pengajian Rutin" style="width:100%; height:100%; object-fit:cover;">
              </div>
              <div class="card-body p-3">
                <h5 class="fw-semibold fs-5 mb-2">Pengajian Rutin</h5>
                <p class="text-muted mb-0">Kegiatan pengajian rutin yang diadakan di masjid TPA untuk meningkatkan pemahaman agama di kalangan pemuda.</p>
              </div>
            </div>
          </div>

          <!-- Hadroh -->
          <div class="col-md-4">
            <div class="activity-card h-100">
              <div class="position-relative overflow-hidden" style="height: 180px;">
                <img src="assets/Galeri/hadroh.png" alt="Hadroh" style="width:100%; height:100%; object-fit:cover;">
              </div>
              <div class="card-body p-3">
                <h5 class="fw-semibold fs-5 mb-2">Hadroh</h5>
                <p class="text-muted mb-0">Grup hadroh yang aktif mengisi berbagai kegiatan keagamaan dan acara-acara penting di lingkungan desa.</p>
              </div>
            </div>
          </div>

          <!-- Yasinan -->
          <div class="col-md-4">
            <div class="activity-card h-100">
              <div class="position-relative overflow-hidden" style="height: 180px;">
                <img src="assets/Galeri/yasinan.png" alt="Yasinan" style="width:100%; height:100%; object-fit:cover;">
              </div>
              <div class="card-body p-3">
                <h5 class="fw-semibold fs-5 mb-2">Yasinan</h5>
                <p class="text-muted mb-0">Tradisi yasinan rutin yang dilaksanakan pada malam Jumat bersama warga di masjid TPA.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Catatan Kegiatan Keagamaan -->
      <div class="alert alert-info mt-4" role="alert">
        <div class="d-flex">
          <div class="me-3">
            <i class="fas fa-info-circle fa-2x"></i>
          </div>
          <div>
            <h5 class="alert-heading">Catatan Kegiatan Keagamaan</h5>
            <p class="mb-0">Untuk pengembangan kegiatan keagamaan, Kelompok Pemuda berencana berkoordinasi dengan Pak Ibnu untuk kegiatan di masjid TPA.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Kegiatan dan Event Pemuda desa Sinduharjo -->

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-brand">
        <div class="logo-image-container">
          <img
            src="/assets/Logodesa.png"
            alt="Logo Desa Sinduharjo"
            class="footer-logo" />
        </div>

        <div class="footer-brand-content">
          <div class="footer-address">
            <p class="address-text">
              <span class="address-line">Desa Sinduharjo</span>
              <span class="address-line">Kecamatan Ngaglik</span>
              <span class="address-line">Kabupaten Sleman</span>
              <span class="address-line">Propinsi Daerah Istimewa Yogyakarta</span>
            </p>
          </div>

          <div class="footer-social">
            <a href="#" class="social-link">
              <i class="fab fa-facebook social-icon"></i>
            </a>
            <a href="#" class="social-link">
              <i class="fab fa-instagram social-icon"></i>
            </a>
            <a href="#" class="social-link">
              <i class="fab fa-twitter social-icon"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="footer-section contact">
        <h4>Kontak Desa</h4>
        <p><i class="fas fa-phone"></i> 088888888888</p>
        <p><i class="fas fa-envelope"></i> sindoharjo.desa@gmail.com</p>
        <p>
          <i class="fas fa-clock"></i> Senin - Kamis (08.00 - 15.00) & Jumat
          (08.00 - 11.00)
        </p>
        <p>
          <i class="fas fa-map-marker-alt"></i> Jalan Sindoharjo, Desa Sleman,
          Rt 004 / Rw 005 DIY.
        </p>
      </div>
      <div class="footer-section emergency">
        <h4>Nomer Telephone Penting</h4>
        <p>Jumadi/Kades Kersik<br /><strong>08124368478</strong></p>
        <p>Yayan/Ambulan Kersik<br /><strong>085392095123</strong></p>
      </div>
    </div>
  </footer>

  <!--   *****   JQuery Link   *****   -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <!--   *****   Isotope Filter Link   *****  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

  <!-- Bootstrep JS -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- Js main -->
  <script src="/js/main.js"></script>

  <script>
    // Navbar JS
    (function() {
      "use strict";

      // Apply .scrolled class to the body as the page is scrolled down
      const toggleScrolled = () => {
        const body = document.querySelector("body");
        const header = document.querySelector("#header");

        if (
          !header.classList.contains("scroll-up-sticky") &&
          !header.classList.contains("sticky-top") &&
          !header.classList.contains("fixed-top")
        )
          return;

        window.scrollY > 100 ?
          body.classList.add("scrolled") :
          body.classList.remove("scrolled");
      };

      // Event listeners for scroll and load
      document.addEventListener("scroll", toggleScrolled);
      window.addEventListener("load", toggleScrolled);

      // Mobile navigation toggle
      const mobileNavToggleBtn = document.querySelector(".mobile-nav-toggle");
      const mobileNavToogle = () => {
        document.querySelector("body").classList.toggle("mobile-nav-active");
        mobileNavToggleBtn.classList.toggle("bi-list");
        mobileNavToggleBtn.classList.toggle("bi-x");
      };
      mobileNavToggleBtn?.addEventListener("click", mobileNavToogle);

      // Hide mobile nav on same-page/hash links
      document.querySelectorAll("#navmenu a").forEach((navmenu) => {
        navmenu.addEventListener("click", () => {
          if (document.querySelector(".mobile-nav-active")) {
            mobileNavToogle();
          }
        });
      });

      // Toggle mobile nav dropdowns
      document
        .querySelectorAll(".navmenu .toggle-dropdown")
        .forEach((navmenu) => {
          navmenu.addEventListener("click", function(e) {
            e.preventDefault();
            const parent = this.parentNode;
            parent.classList.toggle("active");
            parent.nextElementSibling.classList.toggle("dropdown-active");
            e.stopImmediatePropagation();
          });
        });

      // Preloader
      const preloader = document.querySelector("#preloader");
      if (preloader) {
        window.addEventListener("load", () => preloader.remove());
      }

      //  Scroll top button
      const scrollTop = document.querySelector(".scroll-top");

      const toggleScrollTop = () => {
        if (scrollTop) {
          window.scrollY > 100 ?
            scrollTop.classList.add("active") :
            scrollTop.classList.remove("active");
        }
      };

      scrollTop?.addEventListener("click", (e) => {
        e.preventDefault();
        window.scrollTo({
          top: 0,
          behavior: "smooth"
        });
      });

      window.addEventListener("load", toggleScrollTop);
      document.addEventListener("scroll", toggleScrollTop);

      new PureCounter();
    })();
  </script>
</body>

</html>