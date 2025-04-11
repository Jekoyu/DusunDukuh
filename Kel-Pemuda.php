<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelompok Pemuda - Dusun Dukuh</title>

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

    /* Custom styles for Kelompok Pemuda page */
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

    .profile-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 15px;
        overflow: hidden;
        border: none;
        margin-bottom: 30px;
    }

    .profile-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .profile-footer {
        padding: 15px;
        background-color: var(--color-primary);
        color: white;
    }

    .profile-name {
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 5px;
    }

    .profile-role {
        font-size: 0.9rem;
        opacity: 0.9;
    }

    .activity-card {
        transition: all 0.3s ease;
        border-radius: 15px;
        overflow: hidden;
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
    }

    .activity-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .activity-card img {
        transition: transform 0.5s ease;
        height: 200px;
        object-fit: cover;
    }

    .activity-card:hover img {
        transform: scale(1.05);
    }

    .activity-category {
        background-color: var(--color-secondary);
        padding: 25px;
        border-radius: 15px;
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .activity-category h3 {
        color: var(--color-primary);
        font-size: 1.3rem;
        margin-bottom: 20px;
        font-weight: 600;
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
                            <li><a href="Kel-Tani.php">Kel. Tani</a></li>
                            <li><a href="Kel-Maggot.php">Kel. Maggot</a></li>
                            <li><a href="Kel-Pemuda.php" class="active">Kel. Pemuda</a></li>
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
            <h1>KELOMPOK PEMUDA DUSUN DUKUH</h1>
            <p>Membangun generasi muda yang aktif, kreatif, dan berkontribusi positif untuk kemajuan desa</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <!-- Introduction Section -->
        <section class="intro-section">
            <div class="row align-items-center">
                <div class="col-lg-4 text-center mb-4 mb-lg-0">
                    <div class="intro-icon mx-auto">
                        <i class="fas fa-users"></i>
                    </div>
                    <h2 class="h3 fw-bold" style="color: var(--color-primary);">Tentang Kelompok Pemuda</h2>
                </div>
                <div class="col-lg-8">
                    <p class="lead mb-3">Kelompok Pemuda Dusun Dukuh adalah organisasi yang mewadahi para pemuda desa
                        untuk mengembangkan potensi, bakat, dan minat mereka melalui berbagai kegiatan positif.</p>
                    <p>Kelompok ini berperan penting dalam membangun semangat kebersamaan, gotong royong, dan
                        partisipasi aktif dalam pembangunan desa.</p>
                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a href="#struktur" class="btn btn-outline-primary">
                            <i class="fas fa-users me-2"></i> Struktur Organisasi
                        </a>
                        <a href="#kegiatan" class="btn btn-outline-success">
                            <i class="fas fa-calendar-alt me-2"></i> Kegiatan
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Visi Misi dan Tujuan -->
        <section class="section-spacing" id="visi-misi">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Visi, Misi & Tujuan</h2>

                    <div class="d-flex mb-4">
                        <div class="feature-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Visi</h5>
                            <p class="text-muted mb-0">Mewujudkan generasi muda Dusun Dukuh yang berkarakter, berdaya
                                saing, dan berkontribusi aktif dalam pembangunan desa.</p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="feature-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Misi</h5>
                            <ul class="text-muted mb-0">
                                <li>Mengembangkan potensi dan kreativitas pemuda desa</li>
                                <li>Membangun karakter kepemimpinan dan gotong royong</li>
                                <li>Meningkatkan partisipasi pemuda dalam kegiatan sosial</li>
                                <li>Melestarikan budaya dan nilai-nilai positif di masyarakat</li>
                            </ul>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="feature-icon">
                            <i class="fas fa-flag"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Tujuan</h5>
                            <p class="text-muted mb-0">Menjadi wadah bagi pemuda desa untuk mengembangkan diri,
                                berkreasi, dan berkontribusi positif bagi kemajuan Dusun Dukuh.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="card border-0 shadow-sm" style="border-radius: 15px; overflow: hidden;">
                        <div class="card-header d-flex align-items-center"
                            style="background-color: var(--color-primary); color: white; border: none; padding: 15px 20px;">
                            <i class="fas fa-award me-2"></i>
                            <h5 class="mb-0">Program Unggulan</h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <i class="fas fa-running"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0 fw-bold">Pengembangan Olahraga</h5>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <i class="fas fa-hands-helping"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0 fw-bold">Bakti Sosial</h5>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0 fw-bold">Pendidikan & Pelatihan</h5>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <i class="fas fa-pray"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0 fw-bold">Kegiatan Keagamaan</h5>
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <i class="fas fa-seedling"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0 fw-bold">Pelestarian Lingkungan</h5>
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
            <img src="assets/Staff/Struktur Pemuda.webp" alt="Event Masyarakat" />
        </section>

        <!-- Kegiatan dan Event -->
        <section class="section-spacing" id="kegiatan">
            <h2 class="section-title">Kegiatan dan Event Pemuda Desa Sinduharjo</h2>
            <p class="text-muted mb-4">Berbagai kegiatan yang diselenggarakan oleh Kelompok Pemuda untuk membangun
                kebersamaan dan mengembangkan potensi</p>

            <!-- Kategori Olahraga -->
            <div class="activity-category">
                <h3><i class="fas fa-running me-2"></i> Event Olahraga</h3>
                <div class="row g-4">
                    <!-- Futsal -->
                    <div class="col-md-4">
                        <div class="activity-card h-100">
                            <div class="position-relative overflow-hidden">
                                <img src="assets/Staff/Bu_Rini.jpg" alt="Futsal" class="img-fluid">
                                <div
                                    class="position-absolute top-0 end-0 bg-primary text-white px-2 py-1 m-2 rounded-pill">
                                    <small>Rutin</small>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <h5 class="fw-semibold fs-5 mb-2">Futsal</h5>
                                <p class="text-muted mb-0">Kegiatan olahraga futsal yang rutin diadakan untuk menjaga
                                    kekompakan dan kesehatan pemuda desa.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Voli -->
                    <div class="col-md-4">
                        <div class="activity-card h-100">
                            <div class="position-relative overflow-hidden">
                                <img src="assets/Galeri/voli.png" alt="Voli" class="img-fluid">
                                <div
                                    class="position-absolute top-0 end-0 bg-primary text-white px-2 py-1 m-2 rounded-pill">
                                    <small>Tahunan</small>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <h5 class="fw-semibold fs-5 mb-2">Voli</h5>
                                <p class="text-muted mb-0">Pertandingan voli yang diadakan setahun sekali sebagai ajang
                                    silaturahmi antar warga desa.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Mini Soccer -->
                    <div class="col-md-4">
                        <div class="activity-card h-100">
                            <div class="position-relative overflow-hidden">
                                <img src="assets/Galeri/minisoccer.png" alt="Mini Soccer" class="img-fluid">
                                <div
                                    class="position-absolute top-0 end-0 bg-primary text-white px-2 py-1 m-2 rounded-pill">
                                    <small>Berkala</small>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <h5 class="fw-semibold fs-5 mb-2">Mini Soccer</h5>
                                <p class="text-muted mb-0">Permainan sepak bola di lapangan yang lebih kecil, menjadi
                                    sarana rekreasi dan olahraga bagi pemuda desa.</p>
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
                            <div class="position-relative overflow-hidden">
                                <img src="assets/Galeri/makrab.png" alt="Makrab" class="img-fluid">
                            </div>
                            <div class="card-body p-3">
                                <h5 class="fw-semibold fs-5 mb-2">Makrab</h5>
                                <p class="text-muted mb-0">Malam keakraban untuk mempererat hubungan antar pemuda di
                                    lingkungan desa dengan berbagai kegiatan menarik.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sumpah Pemuda -->
                    <div class="col-md-4">
                        <div class="activity-card h-100">
                            <div class="position-relative overflow-hidden">
                                <img src="assets/Galeri/sumpahpemuda.png" alt="Sumpah Pemuda" class="img-fluid">
                            </div>
                            <div class="card-body p-3">
                                <h5 class="fw-semibold fs-5 mb-2">Sumpah Pemuda</h5>
                                <p class="text-muted mb-0">Peringatan hari Sumpah Pemuda dengan berbagai kegiatan
                                    positif untuk menumbuhkan semangat persatuan.</p>
                            </div>
                        </div>
                    </div>

                    <!-- 17 Agustusan -->
                    <div class="col-md-4">
                        <div class="activity-card h-100">
                            <div class="position-relative overflow-hidden">
                                <img src="assets/Galeri/17an.png" alt="17 Agustusan" class="img-fluid">
                            </div>
                            <div class="card-body p-3">
                                <h5 class="fw-semibold fs-5 mb-2">17 Agustusan</h5>
                                <p class="text-muted mb-0">Perayaan Hari Kemerdekaan RI dengan berbagai lomba, upacara,
                                    dan kegiatan yang melibatkan seluruh warga desa.</p>
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
                            <div class="position-relative overflow-hidden">
                                <img src="assets/Galeri/pengajian.png" alt="Pengajian Rutin" class="img-fluid">
                            </div>
                            <div class="card-body p-3">
                                <h5 class="fw-semibold fs-5 mb-2">Pengajian Rutin</h5>
                                <p class="text-muted mb-0">Kegiatan pengajian rutin yang diadakan di masjid TPA untuk
                                    meningkatkan pemahaman agama di kalangan pemuda.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Hadroh -->
                    <div class="col-md-4">
                        <div class="activity-card h-100">
                            <div class="position-relative overflow-hidden">
                                <img src="assets/Galeri/hadroh.png" alt="Hadroh" class="img-fluid">
                            </div>
                            <div class="card-body p-3">
                                <h5 class="fw-semibold fs-5 mb-2">Hadroh</h5>
                                <p class="text-muted mb-0">Grup hadroh yang aktif mengisi berbagai kegiatan keagamaan
                                    dan acara-acara penting di lingkungan desa.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Yasinan -->
                    <div class="col-md-4">
                        <div class="activity-card h-100">
                            <div class="position-relative overflow-hidden">
                                <img src="assets/Galeri/yasinan.png" alt="Yasinan" class="img-fluid">
                            </div>
                            <div class="card-body p-3">
                                <h5 class="fw-semibold fs-5 mb-2">Yasinan</h5>
                                <p class="text-muted mb-0">Tradisi yasinan rutin yang dilaksanakan pada malam Jumat
                                    bersama warga di masjid TPA.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Catatan Kegiatan Keagamaan -->
            <div class="alert alert-info mt-4 d-flex" role="alert">
                <i class="fas fa-info-circle me-3 fa-2x"></i>
                <div>
                    <h5 class="alert-heading">Catatan Kegiatan Keagamaan</h5>
                    <p class="mb-0">Untuk pengembangan kegiatan keagamaan, Kelompok Pemuda berencana berkoordinasi
                        dengan Pak Ibnu untuk kegiatan di masjid TPA.</p>
                </div>
            </div>
        </section>

        <!-- Hubungi Kami -->
        <section class="section-spacing">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow-sm" style="border-radius: 15px; overflow: hidden;">
                        <div class="card-header text-center bg-primary text-white py-3">
                            <h4 class="mb-0">Hubungi Kelompok Pemuda</h4>
                        </div>
                        <div class="card-body text-center p-4">
                            <p class="mb-4">Untuk informasi lebih lanjut tentang Kelompok Pemuda Dusun Dukuh atau ingin
                                bergabung dengan kami, silakan hubungi:</p>

                            <div class="d-flex justify-content-center mb-4">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="text-start">
                                    <h5 class="fw-bold">Mohamad Danang Santoso</h5>
                                    <p class="text-muted mb-0">Ketua Kelompok Pemuda</p>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <a href="tel:+6281234567890" class="btn btn-primary">
                                    <i class="fas fa-phone me-2"></i> Telepon
                                </a>
                                <a href="https://wa.me/+6281234567890" class="btn btn-success">
                                    <i class="fab fa-whatsapp me-2"></i> WhatsApp
                                </a>
                                <a href="mailto:pemuda.dusundukuh@gmail.com" class="btn btn-info text-white">
                                    <i class="fas fa-envelope me-2"></i> Email
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
    })();
    </script>
</body>

</html>