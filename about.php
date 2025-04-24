<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang</title>

    <!-- Boostrep -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Icon CSS -->
    <link rel="stylesheet" href="vendor/bootstrap-icons/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <!-- Font question -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Markazi+Text:wght@400..700&display=swap" rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- Navbar -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <h1 class="sitename">Padukuhan Dukuh</h1>
                <span>.</span>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php" class="active">Tentang</a></li>
                    <li><a href="berita.php">Berita</a></li>
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

    <!-- Sejarah Desa -->
    <section class="about">
        <div class="about-img mt-5">
            <img src="assets/Sejarah-dusun/Logodesa1.png" alt="Kades" class="fade-in-image touch-animate-img" />
        </div>
        <div class="about-content mt-5">
            <h2 class="heading">SEJARAH DUKUH</h2>
            <p class="fw-semibold" style="font-weight: 500;">
                Dusun Sindoharjo, terletak di wilayah pedesaan Indonesia, memiliki
                sejarah yang kaya dan menarik. Konon, wilayah ini awalnya merupakan
                hutan belantara yang belum tersentuh peradaban. Sekitar abad ke-18,
                sekelompok pelancong dipimpin oleh Ki Ageng Sindo menemukan daerah ini
                saat mencari tempat baru untuk bermukim. Terkesan dengan kesuburan
                tanah dan sumber daya alam yang melimpah, mereka memutuskan untuk
                menetap dan membuka lahan pertanian...</p>
            </p>
        </div>
    </section>

    <!-- Question dusun -->
    <section class="my-5 question">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="h-100 d-flex flex-column rounded">
                    <h2 class="display-6 ">Sekilas <span class="fw-bold">Padukuhan Dukuh</span></h2>
                    <p class="fw-semibold">Kenali lebih dekat Dukuh kami yang penuh kekayaan budaya. </p>
                </div>
            </div>

            <div class="col-md-8">
                <div class="accordion-wrapper shadow rounded" id="accordionPanelsStayOpenExample">
                    <div class="accordion accordion-flush" id="accordionPanels">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-globe-asia" style="padding-right: 8px;"></i> Profil Dukuh
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                                <div class="accordion-body" style="text-align: justify;">
                                    <strong>Padukuhan Dukuh dalam Sekilas Pandang.</strong>
                                    Padukuhan Dukuh merupakan salah
                                    satu
                                    Dukuh yang berada di Desa Sinduharjo, Kecamatan Ngaglik, Kabupaten Sleman,
                                    Provinsi
                                    Daerah Istimewa Yogyakarta. Terletak di kawasan yang strategis namun tetap
                                    menjaga
                                    nuansa pedesaan yang asri, Padukuhan Dukuh dikenal sebagai lingkungan yang harmonis,
                                    aman, dan ramah penduduk.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fas fa-seedling" style="padding-right: 8px;"></i> Sektor Unggulan
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                                <div class="accordion-body" style="text-align: justify;">
                                    <strong>Pertanian Sebagai Sumber Penghidupan.</strong> Padukuhan Dukuh dikenal
                                    sebagai
                                    daerah yang subur dan mendukung kegiatan pertanian. Komoditas utama yang
                                    dibudidayakan antara lain padi, jagung, dan aneka sayuran. Sistem pertanian di Dukuh
                                    ini masih mengandalkan metode tradisional namun mulai diarahkan menuju pertanian
                                    berkelanjutan. Kehidupan petani menjadi bagian penting dalam menjaga ketahanan
                                    pangan lokal
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fas fa-people-group" style="padding-right: 8px;"></i>Kehidupan Sosial
                                    Masyarakat
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                                <div class="accordion-body">
                                    <strong>Gotong Royong dan Tradisi Lokal.</strong> Masyarakat Padukuhan Dukuh dikenal
                                    ramah dan menjunjung tinggi nilai-nilai kekeluargaan. Berbagai kegiatan sosial
                                    seperti kerja bakti, pengajian, hingga arisan rutin menjadi bagian dari kehidupan
                                    sehari-hari warga.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri -->
    <section class="portfolio">
        <main class="mainContainer">
            <h2 class="gallery-title">GALERI DUKUH</h2>
            <p class="bottom-contact-title mb-2"></p>
            <p class="fw-semibold">
                Dokumentasi foto kegiatan-kegiatan yang berlangsung di Padukuhan Dukuh
            </p>
            <div class="button-group">
                <button class="button active" data-filter="*">All</button>
                <button class="button" data-filter=".masyarakat">Masyarakat</button>
                <button class="button" data-filter=".kebudayaan">Kebudayaan</button>
                <button class="button" data-filter=".umk">UMKM</button>
            </div>

            <div class="gallery">
                <div class="item masyarakat">
                    <img src="assets/Galeri/17_1.webp" />
                </div>

                <div class="item masyarakat">
                    <img src="assets/Galeri/17_2.webp" />
                </div>

                <div class="item masyarakat">
                    <img src="assets/Galeri/H_1.webp" />
                </div>

                <div class="item masyarakat">
                    <img src="assets/Galeri/H_2.webp" />
                </div>

                <div class="item masyarakat">
                    <img src="assets/Galeri/R_1.webp" />
                </div>

                <div class="item masyarakat">
                    <img src="assets/Galeri/R_2.webp" />
                </div>
            </div>
        </main>
    </section>

    <!-- Potensi Desa -->
    <section class="potensi m-5">
        <div class="d-flex flex-column align-items-center text-center">
            <h2 class="display-6 fw-semibold">POTENSI DUKUH</h2>
            <p class="bottom-contact-title mb-2"></p>
            <p class="fw-semibold">Potensi Padukuhan Dukuh yang menjadi keunggulan</p>
        </div>
        <div class="gallery-wrapper">
            <div class="gallery-container" id="gallery">
                <div class="gallery-item" style="
              background-image: url('assets/potensi/Keseniann.webp');
            "></div>
                <div class="gallery-item" style="
              background-image: url('assets/potensi/Pertanian.webp');
            "></div>
                <div class="gallery-item" style="
              background-image: url('assets/potensi/Magot.webp');
            "></div>
            </div>
        </div>
    </section>

    <!-- Ulasan -->
    <section class="ulasan mb-5">
        <div id="reviewCarousel" class="carousel slide text-center" data-bs-ride="carousel">
            <!-- Titik indikator -->
            <div class="carousel-indicators mb-0">
                <button type="button" data-bs-target="#reviewCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#reviewCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#reviewCarousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <!-- Isi carousel -->
            <div class="carousel-inner pt-4">

                <div class="carousel-item active">
                    <div class="card mx-auto" style="max-width: 600px;">
                        <div class="card-body">
                            <h5 class="card-title">Dewi Lestari</h5>
                            <p class="card-text">Tempatnya sangat asri dan pelayanannya ramah. Cocok untuk liburan
                                keluarga.</p>
                            <small class="text-muted">20 April 2025</small>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card mx-auto" style="max-width: 600px;">
                        <div class="card-body">
                            <h5 class="card-title">Ahmad Fauzi</h5>
                            <p class="card-text">Pengalaman menyenangkan! Banyak spot foto yang keren.</p>
                            <small class="text-muted">18 April 2025</small>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card mx-auto" style="max-width: 600px;">
                        <div class="card-body">
                            <h5 class="card-title">Sinta Amelia</h5>
                            <p class="card-text">Harga terjangkau, suasana kampung wisata bikin betah.</p>
                            <small class="text-muted">15 April 2025</small>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Tombol navigasi -->
            <button class="carousel-control-prev" type="button" data-bs-target="#reviewCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#reviewCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-brand">
                <div class="logo-image-container">
                    <img src="/assets/Logodesa.png" alt="Logo Desa Sinduharjo" class="footer-logo" />
                </div>

                <div class="footer-brand-content">
                    <div class="footer-address">
                        <p class="address-text">
                            <span class="address-line">Padukuhan Dukuh, </span>
                            <span class="address-line">Desa Sinduharjo, </span>
                            <span class="address-line">Kecamatan Ngaglik, </span>
                            <span class="address-line">Kabupaten Sleman, </span>
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

    <!--   *****   Bootstrap JS Link   *****   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    <!-- Js main -->
    <script src="js/main.js"></script>

    <script>
        // Galeri Filtering
        $(document).ready(function () {
            var $galleryContainer = $(".gallery").isotope({
                itemSelector: ".item",
                layoutMode: "fitRows",
            });

            $(".button-group .button").on("click", function () {
                $(".button-group .button").removeClass("active");

                $(this).addClass("active");

                var value = $(this).attr("data-filter");

                $galleryContainer.isotope({
                    filter: value,
                });
            });
        });

        // Navbar & Header
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

        // Scrolling Potensi Desa
        let autoScrollInterval;

        function startAutoScroll() {
            autoScrollInterval = setInterval(() => {
                const gallery = document.getElementById("gallery");
                const scrollAmount = gallery.offsetWidth / 3;

                if (
                    gallery.scrollLeft + gallery.clientWidth >=
                    gallery.scrollWidth - 50
                ) {
                    gallery.scrollTo({
                        left: 0,
                        behavior: "instant"
                    });
                } else {
                    gallery.scrollBy({
                        left: scrollAmount,
                        behavior: "smooth"
                    });
                }
            }, 1000);
        }

        document.getElementById("gallery").addEventListener("mouseenter", () => {
            clearInterval(autoScrollInterval);
        });

        document.getElementById("gallery").addEventListener("mouseleave", () => {
            startAutoScroll();
        });

        function scrollGallery(scrollOffset) {
            clearInterval(autoScrollInterval);
            document.getElementById("gallery").scrollBy({
                left: scrollOffset,
                behavior: "smooth",
            });
            startAutoScroll();
        }
        startAutoScroll();
    </script>
</body>

</html>