<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelompok Maggot - Dusun Dukuh</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Icon CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="vendor/bootstrap-icons/bootstrap-icons.min.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
    <!-- Navbar -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <h1 class="sitename">Dusun Dukuh</h1>
                <span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">Tentang</a></li>
                    <li><a href="berita.php">Berita</a></li>
                    <li class="dropdown">
                        <a href="#" class="active"><span>Organisasi Desa</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="Kel-Tani.php">Kel. Tani</a></li>
                            <li><a href="Kel-Maggot.php" class="active">Kel. Maggot</a></li>
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

    <!-- Page Header -->
    <section class="page-header text-center">
        <div class="container">
            <h1 style="color: white;">Kelompok Maggot Dusun Dukuh</h1>
            <p>Inovasi pengelolaan sampah organik untuk lingkungan yang lebih bersih dan berkelanjutan</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <!-- Introduction Section -->
        <section class="intro-section">
            <div class="row align-items-center">
                <div class="col-lg-4 text-center mb-4 mb-lg-0">
                    <div class="intro-icon mx-auto">
                        <i class="fas fa-bug"></i>
                    </div>
                    <h2 class="h3 fw-bold" style="color: var(--color-primary);">Apa itu Kelompok Maggot?</h2>
                </div>
                <div class="col-lg-8">
                    <p class="lead mb-3">Kelompok Maggot Dusun Dukuh adalah komunitas yang berfokus pada pengelolaan
                        sampah organik menjadi sumber daya bernilai melalui budidaya larva lalat Black Soldier Fly
                        (BSF).</p>
                    <p>Dibentuk dengan tujuan mengurangi volume sampah organik dan menciptakan produk bernilai ekonomi,
                        kelompok ini telah menjadi percontohan pengelolaan sampah organik yang berkelanjutan di Daerah
                        Istimewa Yogyakarta.</p>
                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a href="#struktur" class="btn btn-outline-primary">
                            <i class="fas fa-users me-2"></i> Struktur Organisasi
                        </a>
                        <a href="#produk" class="btn btn-outline-success">
                            <i class="fas fa-shopping-cart me-2"></i> Produk Maggot
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Maggot Section -->
        <section class="section-spacing" id="tentang">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title">Tentang Kelompok Maggot</h2>
                    <p class="mb-4">Kelompok Maggot Dusun Dukuh adalah kelompok masyarakat yang fokus pada pengelolaan
                        sampah organik menjadi maggot (larva lalat Black Soldier Fly). Kegiatan ini tidak hanya membantu
                        mengurangi sampah organik tetapi juga menghasilkan produk bernilai ekonomi.</p>

                    <div class="d-flex mb-4">
                        <div class="feature-icon">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Pengelolaan Sampah Organik</h5>
                            <p class="text-muted mb-0">Mengolah sampah organik menjadi sumber nutrisi untuk maggot,
                                mengurangi volume sampah di TPA.</p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="feature-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Ramah Lingkungan</h5>
                            <p class="text-muted mb-0">Proses yang berkelanjutan dan ramah lingkungan, mendukung program
                                zero waste.</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="feature-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Nilai Ekonomi</h5>
                            <p class="text-muted mb-0">Menghasilkan produk bernilai ekonomi berupa maggot segar dan
                                kering yang dapat digunakan sebagai pakan ternak.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="maggot-card">
                        <div class="card-header d-flex align-items-center">
                            <i class="fas fa-newspaper me-2"></i>
                            <h5 class="mb-0">Kegiatan Kelompok Maggot</h5>
                        </div>
                        <div class="card-body">
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div class="timeline-date">Februari 2024</div>
                                    <div class="timeline-content">
                                        <h6 class="fw-bold">Kunjungan dari Kelurahan Wirobrajan</h6>
                                        <p class="mb-0">Pada tanggal 5 Februari, Kelompok Maggot menerima kunjungan dari
                                            Kelurahan Wirobrajan untuk studi banding pengelolaan sampah organik.</p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <div class="timeline-date">Februari 2024</div>
                                    <div class="timeline-content">
                                        <h6 class="fw-bold">Kunjungan dari Kelurahan Rowodadi Purworejo</h6>
                                        <p class="mb-0">Pada tanggal 16 Februari, kelompok menerima kunjungan dari
                                            Kelurahan Rowodadi Purworejo untuk berbagi pengalaman tentang budidaya
                                            maggot.</p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <div class="timeline-date">Januari 2024</div>
                                    <div class="timeline-content">
                                        <h6 class="fw-bold">Kegiatan Capacity Building</h6>
                                        <p class="mb-0">Pada tanggal 20 Januari, kelompok mengadakan kegiatan capacity
                                            building untuk meningkatkan kemampuan anggota dalam budidaya maggot.</p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <div class="timeline-date">Januari 2024</div>
                                    <div class="timeline-content">
                                        <h6 class="fw-bold">Audit dari DLH</h6>
                                        <p class="mb-0">Kedatangan audit dari DLH mengenai pemberian kendaraan untuk
                                            memastikan kendaraan tersebut digunakan dengan baik. Kebetulan kendaraan
                                            sedang digunakan untuk kegiatan yang berbarengan dengan Pilkada.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-info d-flex mt-4" role="alert">
                        <i class="fas fa-info-circle me-3 fa-2x"></i>
                        <div>
                            <h5 class="alert-heading">Kunjungan Mahasiswa</h5>
                            <p class="mb-0">Kelompok Maggot Dusun Dukuh juga sering menerima kunjungan dari mahasiswa
                                berbagai universitas, terutama dari UII dan UMY untuk keperluan penelitian dan
                                pembelajaran.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Struktur Organisasi -->
        <section class="section-spacing img-struktur " id="struktur">
            <h2 class="section-title">Struktur Organisasi</h2>
            <p class="text-muted mb-4">Kelompok Maggot Dusun Dukuh dikelola oleh tim yang berpengalaman dan berdedikasi
                dalam pengembangan budidaya maggot dan pengelolaan sampah organik.</p>

            <img src="assets/Staff/Struktur Magot.webp" alt="Event Masyarakat" />
        </section>

        <!-- Produk Maggot -->
        <section class="section-spacing" id="produk">
            <h2 class="section-title">Produk Maggot</h2>
            <p class="text-muted mb-4">Kelompok Maggot Dusun Dukuh memproduksi maggot berkualitas tinggi yang dapat
                digunakan sebagai pakan ternak dan pengurai sampah organik.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="maggot-card">
                        <div class="card-header d-flex align-items-center">
                            <i class="fas fa-bug me-2"></i>
                            <h5 class="mb-0">Maggot Segar & Kering</h5>
                        </div>
                        <div class="card-body">
                            <div class="price-tag">
                                <i class="fas fa-tag me-1"></i> Rp 10.000/kg
                            </div>
                            <p>Kelompok Maggot Dusun Dukuh menjual maggot segar dengan harga Rp 10.000 per kilogram.
                                Maggot ini sangat baik digunakan sebagai:</p>
                            <ul class="mb-4">
                                <li>Pakan ternak (ayam, bebek, ikan, dll)</li>
                                <li>Pengurai sampah organik</li>
                                <li>Bahan baku pupuk organik</li>
                            </ul>

                            <p class="mb-1 fw-bold">Produk yang tersedia:</p>
                            <div class="d-flex mb-3">
                                <div class="me-4">
                                    <i class="fas fa-check-circle text-success me-2"></i> Maggot Segar
                                </div>
                                <div>
                                    <i class="fas fa-check-circle text-success me-2"></i> Maggot Kering (belum dikemas)
                                </div>
                            </div>

                            <div class="alert alert-warning d-flex align-items-center" role="alert">
                                <i class="fas fa-info-circle me-2"></i>
                                <div>Produk maggot kering sudah tersedia namun belum dikemas.</div>
                            </div>

                            <div class="mt-4">
                                <a href="https://wa.me/+6281234567890" class="btn btn-success">
                                    <i class="fab fa-whatsapp me-2"></i> Hubungi Pak Edy untuk Pemesanan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">

                    <div class="tani-card">
                        <div class="card-header d-flex align-items-center">
                            <i class="fas fa-calendar-alt me-2"></i>
                            <h5 class="mb-0">Hubungi Kelompok Tani</h5>
                        </div>
                        <div class="card-body">
                            <h2 class="mb-3" style="color: var(--color-primary);">Tertarik dengan Budidaya Maggot?
                            </h2>
                            <p class="mb-4">
                                Kelompok Maggot Dusun Dukuh terbuka untuk kunjungan, studi banding, dan konsultasi
                                tentang budidaya maggot. Kami juga menerima pesanan maggot segar dan kering untuk
                                kebutuhan
                                pakan ternak Anda.
                            </p>
                            <div class="d-flex flex-wrap gap-3">
                                <a href="https://wa.me/+6281234567890" class="btn btn-primary">
                                    <i class="fab fa-whatsapp me-2"></i> Hubungi via Telephone
                                </a>
                                <a href="https://wa.me/+6281234567890" class="btn btn-success">
                                    <i class="fab fa-whatsapp me-2"></i> Hubungi via WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Dokumentasi -->
        <!-- <section class="section-spacing" id="dokumentasi">
            <h2 class="section-title">Video Dokumentasi</h2>
            <p class="text-muted mb-4">Berikut adalah dokumentasi kegiatan Kelompok Maggot Dusun Dukuh dalam mengelola
                sampah organik dan budidaya maggot.</p>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="ratio ratio-16x9 shadow-sm rounded overflow-hidden">
                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                            title="Video Dokumentasi Kelompok Maggot" allowfullscreen></iframe>
                    </div>
                    <p class="text-center text-muted mt-3">
                        <i class="fas fa-info-circle me-1"></i> Semua informasi dalam kegiatan maggot ditampilkan dalam
                        video menggunakan handphone Pak Edy.
                    </p>
                </div>
            </div>
        </section> -->
    </div>

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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

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

        // Gallery image hover effects
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.querySelector('.gallery-caption').style.transform = 'translateY(0)';
            });

            item.addEventListener('mouseleave', function() {
                this.querySelector('.gallery-caption').style.transform = 'translateY(100%)';
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                if (this.getAttribute('href') !== "#") {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);

                    if (targetElement) {
                        const headerOffset = 100;
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    })();
    </script>
</body>

</html>