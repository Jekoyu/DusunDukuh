<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Padusunan Dukuh</title>

    <!-- Boostrep -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Icon CSS -->
    <link rel="stylesheet" href="vendor/bootstrap-icons/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

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
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="about.php">Tentang</a></li>
                    <li><a href="berita.php">Berita</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Organisasi Desa</span><i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="LPMKAL.php">LPMKAL</a></li>
                            <li><a href="PKK.php">PKK</a></li>
                            <li><a href="Kel-Tani.php">Kel. Tani</a></li>
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

    <!-- Conten Home -->
    <section class="home">
        <video class="video-slide active" src="assets/vidio/Layout Dukuh .mp4" autoplay muted loop></video>
        <div class="content active">
            <h1>Sugeng rawuh <br /> di <span
                    style="color: #f8a23d; font-family: 'Dancing Script', cursive; font-size: 40px; font-weight: 700; letter-spacing: 1px; text-transform: capitalize;  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
                    Padukuhan Dukuh</span> kelurahan Sinduharjo</h1>
            <p>
                Tempat di mana kearifan lokal, semangat gotong royong, dan keindahan
                alam bersatu. Temukan informasi seputar kegiatan warga, potensi dusun, dan layanan masyarakat di sini.
            </p>
        </div>
    </section>

    <!-- Intro Kades -->
    <section class="about">
        <div class="about-img">
            <img src="assets/Staff/Kelapa_Dukuh.png" alt="" class="fade-in-image" class="touch-animate-img" />
        </div>
        <div class="about-content">
            <h2 class="heading">SAMBUTAN KEPALA DUKUH</h2>
            <h3>Assalamualaikum Warohmatullah Wabarokatuh,</h3>
            <p class="fw-medium">
                Website ini hadir sebagai wujud transformasi Padukuhan Dukuh dalam memanfaatkan teknologi informasi dan
                komunikasi yang terintegrasi ke dalam sistem digital. Kehadiran website ini diharapkan dapat menjadi
                sarana informasi dan dokumentasi kegiatan masyarakat serta pembangunan di tingkat dusun, sekaligus
                mendukung visi menjadikan Padukuhan Dukuh sebagai bagian dari Desa Sinduharjo yang berkelanjutan,
                adaptif
                terhadap perubahan zaman.
            </p>
        </div>
    </section>

    <!-- Visi dan Misi -->
    <section id="beranda" class="beranda">
        <div class="container position-relative">
            <!-- VISI -->
            <div class="row justify-content-center" data-aos="fade-up">
                <h2 class="text-center mt-5 mb-2 visi-misi">VISI & MISI</h2>
                <h2 class="text-center mt-0 mb-4 visi">VISI</h2>
                <div class="col-lg-10 col-md-11">
                    <div class="card shadow-sm mx-2">
                        <div class="card-body">
                            <p class="card-text fw-medium">
                                Mewujudkan Dusun Padukuhan Dukuh yang mandiri, sejahtera,
                                dan berbudaya melalui partisipasi aktif masyarakat serta
                                pembangunan yang berkelanjutan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MISI -->
            <div class="row justify-content-center" data-aos="fade-up">
                <h2 class="text-center my-4 misi">MISI</h2>
                <!-- Repeated Cards -->
                <div class="col-lg-5 col-md-11 d-flex align-items-stretch mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p class="card-text fw-medium">
                                Meningkatkan kesejahteraan masyarakat melalui pengembangan potensi ekonomi lokal,
                                seperti pertanian, peternakan, dan UMKM.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-11 d-flex align-items-stretch mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p class="card-text fw-medium">
                                Menumbuhkan semangat gotong royong dan kepedulian sosial antarwarga dalam setiap
                                kegiatan kemasyarakatan dan pembangunan dusun.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-11 d-flex align-items-stretch mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p class="card-text fw-medium">
                                Melestarikan nilai-nilai adat, budaya, dan kearifan lokal sebagai identitas dan kekuatan
                                karakter Dusun Padusunan Dukuh.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-11 d-flex align-items-stretch mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p class="card-text fw-medium">
                                Mewujudkan lingkungan Dukuh yang bersih, sehat, dan tertata melalui program kebersihan,
                                penghijauan, serta pengelolaan sampah yang baik.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-11 d-flex align-items-stretch mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p class="card-text fw-medium">
                                Membangun sarana dan prasarana dusun yang memadai dan merata demi mendukung kegiatan
                                ekonomi, sosial, dan budaya masyarakat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Admistrasi -->
    <section id="stats" class="stats section dark-background mb-3">
        <img src="" alt="" data-aos="fade-in" />
        <div class="container-fluid position-relative" data-aos="fade-up" data-aos-delay="100">
            <!-- Subheading Section -->
            <div class="subheading">
                <h2>INFORMASI KEPENDUDUKAN</h2>
                <p class="bottom-contact-title mb-2"></p>
                <p>Informasi jumlah kependudukan masyarakat Padukuhan Dukuh</p>
            </div>

            <!-- Stats Items -->
            <div class="row gy-4">
                <!-- Penduduk -->
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="556" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Penduduk</p>
                    </div>
                </div>

                <!-- Keluarga -->
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="167" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Keluarga</p>
                    </div>
                </div>

                <!-- Perempuan -->
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="280" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Laki-laki</p>
                    </div>
                </div>

                <!-- Laki-laki -->
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="276" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Perempuan</p>
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

    <!-- Swiper JS (di akhir body) -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- PureCounter.js -->
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>

    <!-- Bootstrap JS (bundle includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

    <!-- Custom JS -->
    <script src="js/main.js" defer></script>

    <!-- Swiper Inisialisasi -->
    <script>
        const swiper = new Swiper('.berita-swiper', {
            slidesPerView: 1,
            spaceBetween: 15,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>

</html>