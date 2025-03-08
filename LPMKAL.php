<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LPMKAL</title>

    <!-- Boostrep -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <!-- Icon CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="vendor/bootstrap-icons/bootstrap-icons.min.css"
    />

    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/style.css" />
  </head>

  <body>
    <!-- Navbar -->
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between"
      >
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
              <a href="#"
                ><span>Pejabat</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i
              ></a>
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
      <h2>STRUKTUR KEL. TANI</h2>
      <p class="fw-semibold">
        Informasi event dan kegiatan yang diadakan masyarakat Dusun Dukuh
      </p>
      <img src="assets/Staff/image.png" alt="Event Masyarakat" />
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="footer-brand">
          <div class="logo-image-container">
            <img
              src="/assets/Logodesa.png"
              alt="Logo Desa Sinduharjo"
              class="footer-logo"
            />
          </div>

          <div class="footer-brand-content">
            <div class="footer-address">
              <p class="address-text">
                <span class="address-line">Desa Sinduharjo</span>
                <span class="address-line">Kecamatan Ngaglik</span>
                <span class="address-line">Kabupaten Sleman</span>
                <span class="address-line"
                  >Propinsi Daerah Istimewa Yogyakarta</span
                >
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
      crossorigin="anonymous"
    ></script>

    <!-- Js main -->
    <script src="/js/main.js"></script>

    <script>
      // Navbar JS
      (function () {
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

          window.scrollY > 100
            ? body.classList.add("scrolled")
            : body.classList.remove("scrolled");
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
            navmenu.addEventListener("click", function (e) {
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
            window.scrollY > 100
              ? scrollTop.classList.add("active")
              : scrollTop.classList.remove("active");
          }
        };

        scrollTop?.addEventListener("click", (e) => {
          e.preventDefault();
          window.scrollTo({ top: 0, behavior: "smooth" });
        });

        window.addEventListener("load", toggleScrollTop);
        document.addEventListener("scroll", toggleScrollTop);

        new PureCounter();
      })();
    </script>
  </body>
</html>
