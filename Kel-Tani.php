<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelompok Tani - Dusun Dukuh</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Icon CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="vendor/bootstrap-icons/bootstrap-icons.min.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="./css/style.css" />

    <style>
    :root {
        --font-primary: "Poppins", sans-serif;
        --font-secondary: "Montserrat", sans-serif;
        --heading-font: "Raleway", sans-serif;

        /* Color Global */
        --color-primary: #018577;
        --color-secondary: #eaf8ef;
        --color-font-primary1: #f8a23d;
        --color-font-primary2: #272727;
        --color-font-primary3: #fff;
        --color-font-secondary: #777777;
    }

    /* Custom styles for Kelompok Tani page */
    .page-header {
        background-color: var(--color-primary);
        padding: 120px 0 60px;
        margin-bottom: 60px;
        position: relative;
    }

    .page-header::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 50px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 100'%3E%3Cpath fill='%23ffffff' fill-opacity='1' d='M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,100L1360,100C1280,100,1120,100,960,100C800,100,640,100,480,100C320,100,160,100,80,100L0,100Z'%3E%3C/path%3E%3C/svg%3E");
        background-size: cover;
        background-position: center;
    }

    .page-header h1 {
        color: var(--color-font-primary3);
        font-family: var(--heading-font);
        font-weight: 700;
        font-size: 2.5rem;
        margin-bottom: 15px;
        text-align: center;
        /* Ensure it doesn't stretch too wide on large screens */
        margin-left: auto;
        margin-right: auto;
    }

    .page-header p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto;
    }

    .intro-section {
        background-color: var(--color-secondary);
        border-radius: 15px;
        padding: 40px;
        margin-bottom: 60px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    }

    .intro-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background-color: var(--color-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .intro-icon i {
        font-size: 36px;
        color: white;
    }

    .section-title {
        color: var(--color-font-primary1);
        font-family: var(--heading-font);
        font-weight: 700;
        position: relative;
        padding-bottom: 15px;
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

    .tani-card {
        border-radius: 15px;
        overflow: hidden;
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        margin-bottom: 30px;
    }

    .tani-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .tani-card .card-header {
        background-color: var(--color-primary);
        color: white;
        font-weight: 600;
        padding: 15px 20px;
        border: none;
    }

    .tani-card .card-body {
        padding: 25px;
    }

    .timeline {
        position: relative;
        padding-left: 30px;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 2px;
        background-color: var(--color-primary);
    }

    .timeline-item {
        position: relative;
        padding-bottom: 30px;
    }

    .timeline-item:last-child {
        padding-bottom: 0;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: -34px;
        top: 0;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background-color: var(--color-font-primary1);
        border: 3px solid var(--color-primary);
    }

    .timeline-date {
        font-weight: 600;
        color: var(--color-primary);
        margin-bottom: 5px;
    }

    .timeline-content {
        background-color: var(--color-secondary);
        padding: 15px;
        border-radius: 8px;
    }

    .feature-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: var(--color-secondary);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
        flex-shrink: 0;
    }

    .feature-icon i {
        font-size: 24px;
        color: var(--color-primary);
    }

    .gallery-item {
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 25px;
        position: relative;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    .gallery-item img {
        transition: transform 0.5s ease;
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .gallery-item:hover img {
        transform: scale(1.05);
    }

    .gallery-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(1, 133, 119, 0.8);
        color: white;
        padding: 10px;
        font-size: 0.9rem;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }

    .gallery-item:hover .gallery-caption {
        transform: translateY(0);
    }

    .funding-badge {
        background-color: var(--color-font-primary1);
        color: white;
        padding: 5px 15px;
        border-radius: 30px;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 15px;
    }

    .activity-item {
        padding: 20px;
        border-radius: 10px;
        background-color: var(--color-secondary);
        margin-bottom: 20px;
        transition: all 0.3s ease;
    }

    .activity-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .activity-icon {
        font-size: 36px;
        color: var(--color-primary);
        margin-bottom: 15px;
    }

    .alert {
        border-radius: 10px;
        margin: 25px 0;
    }

    @media (max-width: 768px) {
        .page-header {
            padding: 100px 0 50px;
        }

        .page-header h1 {
            font-size: 2rem;
        }

        .intro-section {
            padding: 30px;
            margin-bottom: 40px;
        }

        .section-spacing {
            padding: 40px 0;
        }
    }
    </style>
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
                            <li><a href="Kel-Tani.php" class="active">Kel. Tani</a></li>
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

    <!-- Page Header -->
    <section class="page-header text-center">
        <div class="container">
            <h1>KELOMPOK TANI DUSUN DUKUH</h1>
            <p>Memajukan pertanian lokal melalui inovasi dan kerjasama untuk kesejahteraan petani dan ketahanan pangan
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <!-- Introduction Section -->
        <section class="intro-section">
            <div class="row align-items-center">
                <div class="col-lg-4 text-center mb-4 mb-lg-0">
                    <div class="intro-icon mx-auto">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h2 class="h3 fw-bold" style="color: var(--color-primary);">Tentang Kelompok Tani</h2>
                </div>
                <div class="col-lg-8">
                    <p class="lead mb-3">Kelompok Tani Dusun Dukuh adalah organisasi petani lokal yang berfokus pada
                        pengembangan pertanian berkelanjutan dan peningkatan kesejahteraan anggotanya.</p>
                    <p>Melalui berbagai program dan kegiatan, kelompok ini berupaya meningkatkan produktivitas pertanian
                        dan kualitas hasil panen.</p>
                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a href="#struktur" class="btn btn-outline-primary">
                            <i class="fas fa-users me-2"></i> Struktur Organisasi
                        </a>
                        <a href="#program" class="btn btn-outline-success">
                            <i class="fas fa-leaf me-2"></i> Program Budidaya
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Kelompok Tani Section -->
        <section class="section-spacing" id="tentang">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title">Tentang Kelompok Tani</h2>
                    <p class="mb-4">Kelompok Tani Dusun Dukuh dipimpin oleh Pak RW dan beranggotakan para petani lokal
                        yang berdedikasi untuk memajukan sektor pertanian di daerah kami. Kelompok ini aktif dalam
                        berbagai kegiatan pertanian dan program pengembangan kapasitas petani.</p>

                    <div class="d-flex mb-4">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Kerjasama Antar Petani</h5>
                            <p class="text-muted mb-0">Membangun kerjasama yang kuat antar petani untuk saling berbagi
                                pengetahuan dan pengalaman dalam bertani.</p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="feature-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Pertanian Berkelanjutan</h5>
                            <p class="text-muted mb-0">Menerapkan praktik pertanian yang ramah lingkungan dan
                                berkelanjutan untuk menjaga kesuburan tanah.</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="feature-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Peningkatan Ekonomi</h5>
                            <p class="text-muted mb-0">Berupaya meningkatkan pendapatan petani melalui diversifikasi
                                tanaman dan peningkatan nilai tambah produk pertanian.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="tani-card">
                        <div class="card-header d-flex align-items-center">
                            <i class="fas fa-award me-2"></i>
                            <h5 class="mb-0">Program Unggulan</h5>
                        </div>
                        <div class="card-body">
                            <div class="funding-badge">
                                <i class="fas fa-tag me-1"></i> PUDANA PUUPN MANDIRI 2024
                            </div>
                            <p>Tahun ini, Kelompok Tani Dusun Dukuh menerima bantuan PUDANA PUUPN MANDIRI berupa:</p>
                            <ul class="mb-4">
                                <li>Dana bantuan sebesar Rp 50 juta</li>
                                <li>Benih bawang merah berkualitas</li>
                                <li>Peralatan kusa untuk mendukung budidaya</li>
                            </ul>

                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <i class="fas fa-info-circle me-2"></i>
                                <div>Program ini bertujuan untuk meningkatkan produksi bawang merah lokal dan
                                    kesejahteraan petani.</div>
                            </div>

                            <div class="mt-4">
                                <h6 class="fw-bold mb-3">Kegiatan Utama:</h6>
                                <div class="activity-item">
                                    <div class="activity-icon">
                                        <i class="fas fa-seedling"></i>
                                    </div>
                                    <h5 class="fw-bold">Budidaya Bawang Merah</h5>
                                    <p class="mb-0">Penanaman bawang merah dengan teknologi terbaru untuk meningkatkan
                                        hasil panen dan kualitas produk.</p>
                                </div>

                                <div class="activity-item">
                                    <div class="activity-icon">
                                        <i class="fas fa-chalkboard-teacher"></i>
                                    </div>
                                    <h5 class="fw-bold">Pelatihan Petani</h5>
                                    <p class="mb-0">Pelatihan rutin untuk meningkatkan keterampilan petani dalam
                                        budidaya dan penanganan pasca panen.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Struktur Organisasi -->
        <section class="section-spacing img-struktur " id="struktur">
            <h2 class="section-title">Struktur Organisasi</h2>
            <p class="text-muted mb-4">Kelompok Tani Dusun Dukuh dikelola oleh tim yang berpengalaman dan berdedikasi
                dalam pengembangan pertanian dan pengelolaan sumber daya alam.</p>

            <img src="assets/Staff/Struktur Tani.webp" alt="Event Masyarakat" />
        </section>


        <!-- Program Budidaya Bawang Merah -->
        <section class="section-spacing" id="program">
            <h2 class="section-title">Program Budidaya Bawang Merah</h2>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="tani-card">
                        <div class="card-header d-flex align-items-center">
                            <i class="fas fa-leaf me-2"></i>
                            <h5 class="mb-0">Budidaya Bawang Merah</h5>
                        </div>
                        <div class="card-body">
                            <p>Melalui bantuan PUDANA PUUPN MANDIRI, Kelompok Tani Dusun Dukuh fokus pada budidaya
                                bawang merah dengan pendekatan modern dan berkelanjutan.</p>

                            <h6 class="fw-bold mt-4 mb-3">Manfaat Program:</h6>
                            <ul class="mb-4">
                                <li>Peningkatan produksi bawang merah lokal</li>
                                <li>Peningkatan pendapatan petani</li>
                                <li>Transfer teknologi dan pengetahuan budidaya</li>
                                <li>Penguatan kelembagaan kelompok tani</li>
                            </ul>

                            <h6 class="fw-bold mt-4 mb-3">Tahapan Budidaya:</h6>
                            <ol class="mb-4">
                                <li>Persiapan lahan dan pengolahan tanah</li>
                                <li>Penanaman benih bawang merah berkualitas</li>
                                <li>Pemeliharaan tanaman (penyiraman, pemupukan, pengendalian hama)</li>
                                <li>Panen dan pasca panen</li>
                                <li>Pemasaran hasil panen</li>
                            </ol>

                            <div class="alert alert-warning d-flex align-items-center" role="alert">
                                <i class="fas fa-info-circle me-2"></i>
                                <div>Program ini sedang berjalan dan diharapkan panen pertama dapat dilakukan dalam 2-3
                                    bulan ke depan.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <h5 class="fw-bold mb-3">Dokumentasi Kegiatan</h5>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="gallery-item">
                                <img src="assets/Galeri/tani1.jpg" alt="Persiapan Lahan" class="img-fluid">
                                <div class="gallery-caption">Persiapan Lahan untuk Penanaman</div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="gallery-item">
                                <img src="assets/Galeri/tani2.jpg" alt="Benih Bawang Merah" class="img-fluid">
                                <div class="gallery-caption">Benih Bawang Merah Berkualitas</div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="gallery-item">
                                <img src="assets/Galeri/tani3.jpg" alt="Peralatan Kusa" class="img-fluid">
                                <div class="gallery-caption">Peralatan Kusa untuk Budidaya</div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="gallery-item">
                                <img src="assets/Galeri/tani4.jpg" alt="Pelatihan Petani" class="img-fluid">
                                <div class="gallery-caption">Pelatihan Petani</div>
                            </div>
                        </div>
                    </div>

                    <div class="tani-card mt-4">
                        <div class="card-header d-flex align-items-center">
                            <i class="fas fa-calendar-alt me-2"></i>
                            <h5 class="mb-0">Jadwal Kegiatan</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Persiapan Lahan
                                    <span class="badge bg-success rounded-pill">Selesai</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Penanaman Benih
                                    <span class="badge bg-success rounded-pill">Selesai</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Pemeliharaan Tanaman
                                    <span class="badge bg-primary rounded-pill">Sedang Berlangsung</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Panen
                                    <span class="badge bg-secondary rounded-pill">Mendatang</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hubungi Kami -->
        <section class="section-spacing">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="tani-card">
                        <div class="card-header text-center">
                            <h5 class="mb-0">Hubungi Kelompok Tani</h5>
                        </div>
                        <div class="card-body text-center">
                            <p class="mb-4">Untuk informasi lebih lanjut tentang Kelompok Tani Dusun Dukuh atau ingin
                                bergabung dengan kami, silakan hubungi:</p>

                            <div class="d-flex justify-content-center mb-4">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="text-start">
                                    <h5 class="fw-bold">Pak RW</h5>
                                    <p class="text-muted mb-0">Ketua Kelompok Tani</p>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <a href="tel:+6281234567890" class="btn btn-primary">
                                    <i class="fas fa-phone me-2"></i class="btn btn-primary">
                                    <i class="fas fa-phone me-2"></i> Telepon
                                </a>
                                <a href="https://wa.me/+6281234567890" class="btn btn-success">
                                    <i class="fab fa-whatsapp me-2"></i> WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    })();
    </script>
</body>

</html>