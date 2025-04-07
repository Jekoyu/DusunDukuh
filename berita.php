<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Berita</title>

  <!-- Boostrep -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />

  <!-- Icon CSS -->
  <link
    rel="stylesheet"
    href="vendor/bootstrap-icons/bootstrap-icons.min.css" />

  <!-- Style CSS -->
  <link rel="stylesheet" href="./css/style.css" />
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
          <li><a href="about.php">About</a></li>
          <li><a href="berita.php" class="active">Berita</a></li>

          <li class="dropdown">
            <a href="#"><span>Pejabat</span>
              <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="Kel-Tani.php">Kel. Tani</a></li>
              <li><a href="#">Kel. Maggot</a></li>
              <li><a href="#">Kel. Pemuda</a></li>
              <li><a href="#">PKK</a></li>
              <li><a href="#">LPMKAL</a></li>
            </ul>
          </li>
          <li><a href="grografis.php">Geografis</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <!-- Slider Berita -->
  <section class="berita-slider">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/Galeri/Masyarakat2.png" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5>First slide label</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam eaque est eius magni, distinctio quae?Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <button type="button" class="btn btn-brt">Selengkapnya</button>
          </div>
        </div>

        <div class="carousel-item">
          <img src="assets/Galeri/Masyarakat2.png" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam eaque est eius magni, distinctio quae?Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <button type="button" class="btn btn-brt">Selengkapnya</button>
          </div>
        </div>

        <div class="carousel-item">
          <img src="assets/Galeri/Masyarakat2.png" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5>Third slide label</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam eaque est eius magni, distinctio quae?Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <button type="button" class="btn btn-brt">Selengkapnya</button>
          </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </section>

  <!-- Blog Berita -->
  <section class="card-berita">
    <div class="d-flex flex-column align-items-center text-center text-berita">
      <h2 class="display-6">BERITA DUSUN</h2>
      <p class="fw-semibold">Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan event-event di Dusun Dukuh</p>
    </div>
    <div class="container p-5 pt-4 pb-5">
      <div class="row g-4">
        <!-- Card 1 -->

          <a href="detail-berita.php" class="col-lg-4 col-md-6 text-decoration-none text-dark">
            <div class="card news-card">
              <div class="position-relative">
                <img src="assets/Galeri/Masyarakat1.png" alt="Pelatihan Linmas">
                <div class="date-badge">05 Sep 2024</div>
              </div>
              <div class="card-body">
                <h5 class="fw-semibold">Pelatihan Anggota Linmas</h5>
                <p class="text-muted">Kersik – Pemerintah Desa Kersik baru-baru ini menyelenggarakan pelatihan...</p>
                <div class="admin-info">
                  <span>👤 Administrator</span> | <span>👁️ Dilihat 633 kali</span>
                </div>
              </div>
            </div>
          </a>
        


        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6">
          <div class="card news-card">
            <div class="position-relative">
              <img src="assets/Galeri/Masyarakat1.png" alt="Rapat Desa">
              <div class="date-badge">10 Sep 2024</div>
            </div>
            <div class="card-body">
              <h5 class="fw-semibold">Rapat Koordinasi Desa</h5>
              <p class="text-muted">Rapat rutin pemerintah desa membahas berbagai program pembangunan...</p>
              <div class="admin-info">
                <span>👤 Administrator</span> | <span>👁️ Dilihat 450 kali</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6">
          <div class="card news-card">
            <div class="position-relative">
              <img src="assets/Galeri/Masyarakat1.png" alt="Pendidikan">
              <div class="date-badge">15 Sep 2024</div>
            </div>
            <div class="card-body">
              <h5 class="fw-semibold">Pelatihan Guru Honorer</h5>
              <p class="text-muted">Guru honorer di desa mendapatkan pelatihan untuk meningkatkan kualitas...</p>
              <div class="admin-info">
                <span>👤 Administrator</span> | <span>👁️ Dilihat 378 kali</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col-lg-4 col-md-6">
          <div class="card news-card">
            <div class="position-relative">
              <img src="assets/Galeri/Masyarakat1.png" alt="Layanan Kesehatan">
              <div class="date-badge">20 Sep 2024</div>
            </div>
            <div class="card-body">
              <h5 class="fw-semibold">Layanan Kesehatan Gratis</h5>
              <p class="text-muted">Masyarakat desa mendapatkan layanan kesehatan gratis di puskesmas...</p>
              <div class="admin-info">
                <span>👤 Administrator</span> | <span>👁️ Dilihat 520 kali</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="col-lg-4 col-md-6">
          <div class="card news-card">
            <div class="position-relative">
              <img src="assets/Galeri/Masyarakat1.png" alt="Kerja Bakti">
              <div class="date-badge">25 Sep 2024</div>
            </div>
            <div class="card-body">
              <h5 class="fw-semibold">Kerja Bakti Lingkungan</h5>
              <p class="text-muted">Warga desa bersama-sama Gotong royong desa untuk menjaga kebersihan...</p>
              <div class="admin-info">
                <span>👤 Administrator</span> | <span>👁️ Dilihat 290 kali</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="col-lg-4 col-md-6">
          <div class="card news-card">
            <div class="position-relative">
              <img src="assets/Galeri/Masyarakat1.png" alt="Pertanian">
              <div class="date-badge">30 Sep 2024</div>
            </div>
            <div class="card-body">
              <h5 class="fw-semibold">Pelatihan Petani Modern</h5>
              <p class="text-muted">Petani desa diberikan pelatihan teknologi pertanian modern...</p>
              <div class="admin-info">
                <span>👤 Administrator</span> | <span>👁️ Dilihat 350 kali</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Event-Event Desa -->
  <section class="event m-5">
    <div class="d-flex flex-column align-items-center text-center">
      <h2 class="display-6">EVENT MASYARAKAT</h2>
      <p class="fw-semibold">Informasi event dan kegiatan yang diadakan masyarakat Dusun Dukuh</p>
    </div>
    <div class="event-wrapper">
      <div class="event-container p-4" id="event">
        <div
          class="event-item"
          style="
                background-image: url('assets/Galeri/Masyarakat1.png');
              ">
          <span class="text-event">
            <p class="event-date"><i class="fas fa-calendar-alt"></i> 12 Oktober 2025</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, dolorum.</p>
          </span>
        </div>
        <div
          class="event-item"
          style="
                background-image: url('assets/Galeri/Masyarakat1.png');
              ">
          <span class="text-event">
            <p class="event-date"><i class="fas fa-calendar-alt"></i> 20 November 2025</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, dolorum.</p>
          </span>
        </div>
        <div
          class="event-item"
          style="
                background-image: url('assets/Galeri/Masyarakat1.png');
              ">
          <span class="text-event">
            <p class="event-date"><i class="fas fa-calendar-alt"></i> 5 Desember 2025</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, dolorum.</p>
          </span>
        </div>
      </div>
  </section>

  <!-- Footer  -->
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

  <!-- Pengduan -->
  <section>
    <button class="pengaduan-btn" onclick="toggleForm()">📝 Pengaduan</button>

    <div class="form-container" id="formPengaduan">
      <form>
        <h2>Form Pengaduan</h2>
        <label for="nama">Nama <span>*</span></label>
        <input
          type="text"
          id="nama"
          placeholder="Masukkan nama Anda"
          required />

        <label for="telepon">Nomor Telepon/WA <span>*</span></label>
        <input
          type="tel"
          id="telepon"
          placeholder="Masukkan nomor HP/WhatsApp"
          required />

        <label for="kategori">Kategori Pengaduan <span>*</span></label>
        <select id="kategori" required>
          <option value="">Pilih kategori pengaduan</option>
          <option value="pelayanan">Pelayanan</option>
          <option value="infrastruktur">Infrastruktur</option>
          <option value="administrasi">Administrasi</option>
        </select>

        <label for="pengaduan">Pengaduan <span>*</span></label>
        <textarea
          id="pengaduan"
          placeholder="Masukkan kesan, informasi, atau detail aduan Anda"
          required></textarea>

        <label for="lampiran">Lampiran</label>
        <input type="file" id="lampiran" />

        <button type="submit" class="kirim-btn">📩 Kirim</button>
      </form>
    </div>
  </section>


  <!--   *****   JQuery Link   *****   -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <!--   *****   Isotope Filter Link   *****  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

  <!-- Bootstrep JS -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- Js main -->
  <script src="/js/main.js"></script>

  <script>
    // ---------- Corasel slider Berita ------------ //
    document.addEventListener("DOMContentLoaded", function() {
      const captions = document.querySelectorAll(".carousel-caption");

      captions.forEach((caption) => {
        gsap.set(caption, {
          opacity: 0,
          y: 50
        });
      });

      function animateCaption(slideIndex) {
        const activeCaption = document.querySelector(
          `.carousel-item:nth-child(${slideIndex + 1}) .carousel-caption`
        );

        if (activeCaption) {
          gsap.to(activeCaption, {
            opacity: 1,
            y: 0,
            duration: 1,
            ease: "power3.out",
          });
        }
      }
      const carousel = document.querySelector("#carouselExampleCaptions");
      carousel.addEventListener("slid.bs.carousel", function(event) {
        const newIndex = event.to;
        gsap.set(captions, {
          opacity: 0,
          y: 50
        });

        animateCaption(newIndex);
      });
      animateCaption(0);
    });

    // ------------------ Navbar JS ---------------- //
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