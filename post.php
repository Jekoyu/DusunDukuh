<?php
include 'conn.php';

$category = isset($_GET['category']) ? $_GET['category'] : '';
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

if ($category != '' && $slug != '') {
  try {

    $stmt = $conn->prepare("SELECT posts.*, categories.name 
                                FROM posts
                                JOIN categories ON posts.category_id = categories.id
                                WHERE categories.slug = ? AND posts.slug = ?");
    $stmt->bind_param("ss", $category, $slug);
    $stmt->execute();
    $resultSet = $stmt->get_result();

    // if ($resultSet->num_rows > 0) {
    //   // $post = $resultSet->fetch_assoc();
    //   // echo "<h1>" . htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8') . "</h1>";
    //   // echo "<p><strong>Category:</strong> " . htmlspecialchars($post['name'], ENT_QUOTES, 'UTF-8') . "</p>";
    //   // echo "<div>" . nl2br(htmlspecialchars($post['content'], ENT_QUOTES, 'UTF-8')) . "</div>";
    // } else {
    //   echo "<p>Post not found!</p>";
    // }
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
} else {
  echo "<p>Invalid URL parameters!</p>";
}

$conn = null;
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Berita - Desa Kersik</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    :root {
      --primary-color: #0d6efd;
      --secondary-color: #f8f9fa;
      --accent-color: #ffc107;
      --text-color: #212529;
      --text-muted: #6c757d;
      --border-color: #dee2e6;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: var(--text-color);
      background-color: #f8f9fa;
    }

    .news-title {
      font-weight: 700;
      line-height: 1.2;
      margin-bottom: 1rem;
    }

    .news-meta {
      color: var(--text-muted);
      font-size: 0.9rem;
      margin-bottom: 1.5rem;
      padding-bottom: 1rem;
      border-bottom: 1px solid var(--border-color);
    }

    .news-meta i {
      color: var(--primary-color);
      margin-right: 0.25rem;
    }

    .news-meta span {
      margin-right: 1.5rem;
    }

    .news-content {
      line-height: 1.8;
      font-size: 1.05rem;
    }

    .news-content p {
      margin-bottom: 1.5rem;
    }

    .news-image {
      width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 1.5rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .sidebar-title {
      font-weight: 600;
      padding-bottom: 0.75rem;
      margin-bottom: 1.25rem;
      border-bottom: 2px solid var(--primary-color);
      position: relative;
    }

    .latest-news-item {
      padding: 1rem;
      border-bottom: 1px solid var(--border-color);
      transition: all 0.3s ease;
    }

    .latest-news-item:hover {
      background-color: rgba(13, 110, 253, 0.05);
    }

    .latest-news-item:last-child {
      border-bottom: none;
    }

    .latest-news-title {
      font-weight: 600;
      margin-bottom: 0.5rem;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .latest-news-meta {
      color: var(--text-muted);
      font-size: 0.8rem;
    }

    .latest-news-meta i {
      color: var(--primary-color);
      margin-right: 0.25rem;
    }

    .latest-news-meta span {
      margin-right: 1rem;
    }

    .card {
      border: none;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
      margin-bottom: 2rem;
    }

    @media (max-width: 991.98px) {
      .sidebar {
        margin-top: 2rem;
      }
    }
  </style>
</head>

<body>
  <!-- Header would go here -->
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
  <div class="container py-5">
    <div class="row">
      <!-- Main Content Column -->
      <div class="col-lg-8">
        <div class="card p-4">
          <!-- News Title -->
          <h1 class="news-title">Pemerintah Desa Kersik Gelar Pelatihan untuk Anggota Linmas</h1>

          <!-- News Meta Information -->
          <div class="news-meta">
            <span><i class="far fa-calendar-alt"></i> 5 September 2024</span>
            <span><i class="far fa-user"></i> Administrator</span>
            <span><i class="far fa-eye"></i> 850 kali dilihat</span>
          </div>

          <!-- News Image -->
          <img src="https://via.placeholder.com/600x400" alt="Pelatihan Linmas Desa Kersik" class="news-image">

          <!-- News Content -->

          <?php
          if ($resultSet->num_rows > 0) {
            // $post = $resultSet->fetch_assoc();
            // echo "<h1>" . htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8') . "</h1>";
            // echo "<p><strong>Category:</strong> " . htmlspecialchars($post['name'], ENT_QUOTES, 'UTF-8') . "</p>";
            // echo "<div>" . nl2br(htmlspecialchars($post['content'], ENT_QUOTES, 'UTF-8')) . "</div>";
          ?>
            <div class="news-content">
              <?= $content ?>
            </div>
          <?php
          } else {
            echo "<p>Post not found!</p>";
          } ?>
          <!-- Social Share Buttons -->
          <div class="mt-4 pt-3 border-top">
            <h5 class="mb-3">Bagikan Berita:</h5>
            <a href="#" class="btn btn-primary me-2"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#" class="btn btn-info me-2"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#" class="btn btn-success"><i class="fab fa-whatsapp"></i> WhatsApp</a>
          </div>
        </div>
      </div>

      <!-- Sidebar Column -->
      <div class="col-lg-4 sidebar">
        <div class="card p-4">
          <h3 class="sidebar-title">Berita Terbaru</h3>

          <!-- Latest News Item 1 -->
          <div class="latest-news-item">
            <a href="#" class="text-decoration-none text-dark">
              <h5 class="latest-news-title">Desa Kersik Raih Penghargaan Desa Terbaik Tingkat Kabupaten</h5>
            </a>
            <div class="latest-news-meta">
              <span><i class="far fa-calendar-alt"></i> 1 September 2024</span>
              <span><i class="far fa-eye"></i> 732 kali</span>
            </div>
          </div>

          <!-- Latest News Item 2 -->
          <div class="latest-news-item">
            <a href="#" class="text-decoration-none text-dark">
              <h5 class="latest-news-title">Pembangunan Jembatan Penghubung Dusun Mulai Dikerjakan</h5>
            </a>
            <div class="latest-news-meta">
              <span><i class="far fa-calendar-alt"></i> 28 Agustus 2024</span>
              <span><i class="far fa-eye"></i> 645 kali</span>
            </div>
          </div>

          <!-- Latest News Item 3 -->
          <div class="latest-news-item">
            <a href="#" class="text-decoration-none text-dark">
              <h5 class="latest-news-title">Posyandu Desa Kersik Adakan Pemeriksaan Kesehatan Gratis</h5>
            </a>
            <div class="latest-news-meta">
              <span><i class="far fa-calendar-alt"></i> 25 Agustus 2024</span>
              <span><i class="far fa-eye"></i> 589 kali</span>
            </div>
          </div>

          <!-- Latest News Item 4 -->
          <div class="latest-news-item">
            <a href="#" class="text-decoration-none text-dark">
              <h5 class="latest-news-title">Kelompok Tani Desa Kersik Panen Raya Padi Varietas Unggul</h5>
            </a>
            <div class="latest-news-meta">
              <span><i class="far fa-calendar-alt"></i> 20 Agustus 2024</span>
              <span><i class="far fa-eye"></i> 512 kali</span>
            </div>
          </div>

          <!-- Latest News Item 5 -->
          <div class="latest-news-item">
            <a href="#" class="text-decoration-none text-dark">
              <h5 class="latest-news-title">BUMDes Kersik Makmur Luncurkan Program Simpan Pinjam</h5>
            </a>
            <div class="latest-news-meta">
              <span><i class="far fa-calendar-alt"></i> 15 Agustus 2024</span>
              <span><i class="far fa-eye"></i> 478 kali</span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card p-4">
          <h3 class="sidebar-title">Kategori</h3>
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Pemerintahan Desa
              <span class="badge bg-primary rounded-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Pembangunan
              <span class="badge bg-primary rounded-pill">8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Kesehatan
              <span class="badge bg-primary rounded-pill">6</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Pendidikan
              <span class="badge bg-primary rounded-pill">5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Pertanian
              <span class="badge bg-primary rounded-pill">4</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer would go here -->
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
  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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