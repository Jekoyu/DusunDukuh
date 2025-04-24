<?php
include 'conn.php';

$query = "SELECT * FROM posts join categories on categories.id = posts.category_id where posts.status = 'published' AND  categories.name = 'Berita' ORDER BY created_at DESC";
$result = $conn->query($query);
// var_dump($result->num_rows);

$query_2 = "SELECT * FROM posts join categories on categories.id = posts.category_id where posts.status = 'published' AND  categories.name = 'Event' ORDER BY created_at DESC";
$event = $conn->query($query_2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Berita</title>

    <!-- Boostrep -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Icon CSS -->
    <link rel="stylesheet" href="vendor/bootstrap-icons/bootstrap-icons.min.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="./css/style.css" />

    <style>
        /* Card Berita */
        .news-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .date-badge {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.8rem;
        }

        .admin-info {
            font-size: 0.8rem;
            color: #6c757d;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <h1 class="sitename">Padusunan Dukuh</h1>
                <span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">Tentang</a></li>
                    <li><a href="berita.php" class="active">Berita</a></li>

                    <li class="dropdown">
                        <a href="#"><span>Organisasi Desa</span><i class="bi bi-chevron-down toggle-dropdown"></i></a>
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

    <!-- Slider Berita -->
    <section class="berita-slider">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/berita/B_1.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h2>Berita Warga, Cerita Kita.</h2>
                        <p>Temukan berita dan informasi terkini seputar Padusunan Dukuh di sini. Kami menyajikan kabar
                            terbaru mengenai kegiatan desa, pengumuman resmi, dan perkembangan wilayah secara aktual dan
                            terpercaya.</p>
                        <!-- <button type="button" class="btn btn-brt">Selengkapnya</button> -->
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="assets/berita/B_2.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h2>Berita Warga, Cerita Kita.</h2>
                        <p>Temukan berita dan informasi terkini seputar Padusunan Dukuh di sini. Kami menyajikan kabar
                            terbaru mengenai kegiatan desa, pengumuman resmi, dan perkembangan wilayah secara aktual dan
                            terpercaya.</p>
                        <!-- <button type="button" class="btn btn-brt">Selengkapnya</button> -->
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="assets/berita/B_3.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h2>Berita Warga, Cerita Kita.</h2>
                        <p>Temukan berita dan informasi terkini seputar Padusunan Dukuh di sini. Kami menyajikan kabar
                            terbaru mengenai kegiatan desa, pengumuman resmi, dan perkembangan wilayah secara aktual dan
                            terpercaya.</p>
                        <!-- <button type="button" class="btn btn-brt">Selengkapnya</button> -->
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>

    <!-- Blog Berita -->
    <section class="card-berita">
        <div class="d-flex flex-column align-items-center text-center text-berita">
            <h2 class="display-6">BERITA DUSUN</h2>
            <p class="fw-semibold">Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan event-event di
                Dusun Dukuh</p>
        </div>
        <div class="container p-5 pt-4 pb-5">
            <div class="row g-4">



                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $title = $row['title'];
                        $content = $row['content'];
                        $date = date('d M Y', strtotime($row['created_at']));
                        ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="card news-card h-100">
                                <!-- Tambahkan h-100 untuk tinggi seragam -->
                                <div class="position-relative">
                                    <!-- Gunakan gambar dari database jika ada -->
                                    <img src="assets/berita/B_1.webp" class="card-img-top" alt="<?= $title ?>">
                                    <div class=" date-badge">
                                    <?= $date ?></div>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="fw-semibold card-title"><?= htmlspecialchars(substr($title, 0, 50)) ?></h5>
                                    <p class="card-text flex-grow-1">
                                        <?= htmlspecialchars(substr(strip_tags($content), 0, 100)) ?>...
                                    </p>
                                    <div class="admin-info mt-auto">
                                        <span>👤 Administrator</span> |
                                        <span>👁️ Dilihat <?= $row['views'] ?? rand(500, 1000) ?> kali</span>
                                    </div>
                                    <a href="berita_detail.php?id=<?= $id ?>" class="btn btn-primary mt-2">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo 'Mohon maaf Belum ada berita saat ini.';
                }
                ?>
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
                <div class="event-item" style="
                background-image: url('assets/program/17 Agustusan.webp');
              ">
                    <span class="text-event">
                        <p class="event-date"><i class="fas fa-calendar-alt"></i> 17 Agustus 2024</p>
                        <p>Padukuhan Dukuh meriahkan HUT RI ke-80.</p>
                    </span>
                </div>
                <div class="event-item" style="
                background-image: url('assets/program/Hadrohan.webp');
              ">
                    <span class="text-event">
                        <p class="event-date"><i class="fas fa-calendar-alt"></i> 20 November 2025</p>
                        <p>Padukuhan Dukuh menggelar tradisi Ruwahan menjelang bulan Ramadan.</p>
                    </span>
                </div>
                <div class="event-item" style="
                background-image: url('assets/program/Ruwuhan.webp');
              ">
                    <span class="text-event">
                        <p class="event-date"><i class="fas fa-calendar-alt"></i> 5 Desember 2025</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, dolorum.</p>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer  -->
    <footer>
        <div class="container">
            <div class="footer-brand">
                <div class="logo-image-container">
                    <img src="/assets/Logodesa.png" alt="Logo Desa Sinduharjo" class="footer-logo" />
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

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <!-- Bootstrep JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

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
            const carousel = document.querySelector("#carouselExam pleCaptions");
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
   
         // ------ ------------ Navbar JS ---------------- //
        (function() {
        "use strict";

                // Apply .scrolled class to the body as the page is scrolled down
         cons   t toggleScrolled = () => {
                const body = document.querySelector("body");
            const header = document.querySelector("#header");
  
                 if ( 
                    !header.classList.contains("scroll-up-sticky") &&
                    !header.classList.contains("sticky-top") &&
                    !header.classList.contains("fixed-top")
            )
                    return;
 
                wind   ow.scrollY > 100 ?
                    body.classList.add("scrolled") :
                    body.classList.remove("scrolled");
        };
   
             // Event listeners for scroll and load
            document.addEventListener("scroll", toggleScrolled);
        window.addEventListener("load", toggleScrolled);

                // Mobile navigation toggle
            const mobileNavToggleBtn = document.querySelector(".mobile-nav-toggle");
          cons  t mobileNavToogle = () => {
                document.querySelector("body").classList.toggle("mobile-nav-active");
                mobileNavToggleBtn.classList.toggle("bi-list");
                mobileNavToggleBtn.classList.toggle("bi-x");
            };
        mobileNavToggleBtn?.addEventListener("click", mobileNavToogle);

                // Hide mobile nav on same-page/hash links
         docu   ment.querySelectorAll("#navmenu a").forEach((navmenu) => {
              navm  enu.addEventListener("click", () => {
                  if (  document.querySelector(".mobile-nav-active")) {
                        mobileNavToogle();
                    }
                });
        });
    
            // Toggle mobile nav dropdowns
         docu   ment
                .querySelectorAll(".navmenu .toggle-dropdown")
               .for Each((navmenu) => {
                   navm  enu.addEventListener("click", function(e) {
                        e.preventDefault();
                        const parent = this.parentNode;
                        parent.classList.toggle("active");
                        parent.nextElementSibling.classList.toggle("dropdown-active");
                        e.stopImmediatePropagation();
                    });
            });
 
               // Preloader
            const preloader = document.querySelector("#preloader");
           if ( preloader) {
                window.addEventListener("load", () => preloader.remove());
        }
    
            //  Scroll top button
        const scrollTop = document.querySelector(".scroll-top");

             cons   t toggleScrollTop = () => {
             if (   scrollTop) {
                  wind  ow.scrollY > 100 ?
                        scrollTop.classList.add("active") :
                        scrollTop.classList.remove("active");
                }
        };
    
            scrollTop?.addEventListener("click", (e) => {
                e.preventDefault();
             wind   ow.scrollTo({
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