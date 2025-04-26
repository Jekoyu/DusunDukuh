<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelompok Tani - Padukuhan Dukuh</title>

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
                <h1 class="sitename">Padukuhan Dukuh</h1>
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
                            <li><a href="LPMKAL.php">LPMKAL</a></li>
                            <li><a href="PKK.php">PKK</a></li>
                            <li><a href="Kel-Tani.php" class="active">Kel. Tani</a></li>
                            <li><a href="Kel-Maggot.php">Kel. Maggot</a></li>
                            <li><a href="Kel-Pemuda.php">Kel. Pemuda</a></li>


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
            <h1 style="color: white;">Kelompok Tani Padukuhan Dukuh</h1>
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
                    <p class="lead mb-3">Kelompok Tani Padukuhan Dukuh adalah organisasi petani lokal yang berfokus pada
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
                    <p class="mb-4">Kelompok Tani Padukuhan Dukuh dipimpin oleh Pak RW dan beranggotakan para petani
                        lokal
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
                            <p>Tahun ini, Kelompok Tani Padukuhan Dukuh menerima bantuan PUDANA PUUPN MANDIRI berupa:
                            </p>
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
            <p class="text-muted mb-4">Kelompok Tani Padukuhan Dukuh dikelola oleh tim yang berpengalaman dan
                berdedikasi
                dalam pengembangan pertanian dan pengelolaan sumber daya alam.</p>

            <img src="assets/Staff/Kel_Tani.webp" alt="Event Masyarakat" />
        </section>


        <!-- Program Budidaya Bawang Merah -->
        <section class="section-spacing" id="program">
            <h2 class="section-title">Program Budidaya Bawang Merah</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="tani-card">
                        <div class="card-header d-flex align-items-center">
                            <i class="fas fa-leaf me-2"></i>
                            <h5 class="mb-0">Budidaya Bawang Merah</h5>
                        </div>
                        <div class="card-body">
                            <p>Melalui bantuan PUDANA PUUPN MANDIRI, Kelompok Tani Padukuhan Dukuh fokus pada budidaya
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

                    <div class="tani-card">
                        <div class="card-header d-flex align-items-center">
                            <i class="fab fa-whatsapp me-2"></i>
                            <h5 class="mb-0">Hubungi Kelompok Tani</h5>
                        </div>
                        <div class="card-body">
                            <h2 class="mb-3" style="color: var(--color-primary);">Hubungi lebih lanjut terkait kelompok
                                tani</h2>
                            </h2>
                            <p class="mb-4">
                                Untuk informasi lebih lanjut tentang Kelompok Tani Padukuhan Dukuh atau ingin
                                bergabung dengan kami, silakan hubungi:
                            </p>
                            <div class="d-flex flex-wrap gap-3">
                                <a href="https://wa.me/+6281234567890" class="btn btn-success">
                                    <i class="fab fa-whatsapp me-2"></i> Hubungi via WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

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