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
            <h1 style="color: white;">Kelompok Pemuda Dusun Dukuh</h1>
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


    </div>
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <h2 class="mb-3" style="color: var(--color-primary);">Hubungi Kelompok Pemuda</h2>
                    <p class="mb-4">Untuk informasi lebih lanjut tentang Kelompok Pemuda Dusun Dukuh atau ingin
                        bergabung dengan kami, silakan hubungi:</p>
                    <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-calendar-alt me-2"></i> Jadwalkan Kunjungan
                        </a>
                        <a href="https://wa.me/+6281234567890" class="btn btn-success">
                            <i class="fab fa-whatsapp me-2"></i> Hubungi via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footter -->
    <footer>
        <?php
        include 'footer.php';
        ?>
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
    <script src="js/navbar.js"></script>
</body>

</html>