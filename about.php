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
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/style.css" />
    <style>
        /* -------- Galeri Section ------- */
        .gallery-section {
            max-width: 1000px;
            margin: auto;
            text-align: center;
            margin-bottom: 100px;
        }

        .gallery-section h2 {
            font-size: 30px;
            font-weight: 600;
            color: var(--color-font-primary1);
            margin-bottom: 10px;
        }

        .gallery-section p {
            font-size: 16px;
            color: var(--color-font-primary2);
        }

        .gallery-title {
            font-size: 2rem;
            margin: 0;
        }

        .gallery-desc {
            font-size: 1rem;
            color: #555;
            margin-bottom: 20px;
        }

        /* Filter Buttons */
        .filter-buttons {
            margin-bottom: 20px;
        }

        .filter-buttons button {
            background-color: var(--color-secondary);
            color: var(--color-font-primary2);
            border: none;
            padding: 5px 15px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
            font-weight: 500;
        }

        .filter-buttons button:hover {
            background-color: var(--color-hvr-program);
            color: var(--background-color);
        }

        .filter-buttons button.active {
            background-color: var(--color-hvr-program);
            color: var(--background-color);
        }

        /* Gallery */
        .gambah {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        .gambah img {
            width: 250px;
            height: 180px;
            object-fit: cover;
            border-radius: 3px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            cursor: pointer;
        }

        .gambah img:hover {
            transform: scale(1.05);
        }

        .hidden {
            display: none;
        }

        /* Lightbox */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .lightbox img {
            max-width: 80%;
            max-height: 80%;
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.2);
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 40px;
            font-size: 2rem;
            color: #fff;
            cursor: pointer;
        }

        /* Responsive: 2 columns on mobile */
        @media (min-width: 760px) {
            .gallery-section {
                margin-bottom: 50px;
            }

            .gallery-section h2 {
                font-size: 20px;
                font-weight: 600;
                color: var(--color-font-primary1);
                margin-bottom: 20px;
            }

            .gambah {
                gap: 10px;
            }

            .gambah img {
                width: 180px;
                height: 120px;
                object-fit: cover;
            }
        }
    </style>
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
            <img src="assets/Padukuhan.png" alt="Kades" class="fade-in-image touch-animate-img" />
        </div>
        <div class="about-content mt-5">
            <h2 class="sitename"
                style="font-family: 'Dancing Script', cursive; font-size: 40px; font-weight: 700; letter-spacing: 1px; text-transform: capitalize;  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
                Padukuhan Dukuh
            </h2>
            <p class="fw-semibold" id="dukuhText" style="font-weight: 500;">
                Padukuhan Dukuh merupakan salah satu padukuhan yang terletak di Desa Sinduharjo, Kecamatan Ngaglik,
                Kabupaten Sleman. Dukuh ini dikenal sebagai wilayah yang masih asri dengan masyarakat yang ramah dan
                menjunjung tinggi semangat gotong royong. Di bidang pertanian, warga aktif menanam padi, sayuran, dan
                buah-buahan secara organik, menjadikan pertanian sebagai salah satu potensi unggulan.
                <span id="dots">...</span><span id="more" style="display: none;">
                    Selain itu, Padukuhan Dukuh juga mengembangkan pengelolaan sampah organik menggunakan magot atau
                    larva Black Soldier Fly (BSF), yang mampu mengurangi limbah rumah tangga sekaligus menghasilkan
                    pakan ternak yang bernilai ekonomi. Pengelolaan ini dilakukan secara kolektif oleh warga melalui
                    bank sampah dan kelompok lingkungan. Padukuhan Dukuh berbatasan langsung dengan Padukuhan Genta di
                    sebelah barat, Padukuhan Ngelingan di timur, Padukuhan Pedak di selatan, dan Padukuhan Nglaban di
                    sebelah utara. Dengan dukungan dari berbagai kelompok masyarakat seperti kelompok tani, KWT, dan
                    karang taruna, Padukuhan Dukuh terus berbenah menjadi wilayah yang mandiri, hijau, dan
                    berkelanjutan..</span>
            </p>
            <button onclick="toggleText()" id="readMoreBtn"
                style="background: none; border: none; color: #333; font-size: 14px; cursor: pointer; padding: 0; margin-top: 10px; text-decoration: underline; text-underline-offset: 2px; transition: color 0.3s ease;">
                Baca Selengkapnya
            </button>
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

    <!-- Galleri Section -->
    <section class="gallery-section">
        <h2 class="gallery-title">GALERI DUKUH</h2>
        <p class="bottom-contact-title mb-2"></p>
        <p class="gallery-desc fw-semibold">
            Dokumentasi foto kegiatan-kegiatan yang berlangsung di Padukuhan Dukuh
        </p>

        <!-- Filter Buttons -->
        <div class="filter-buttons">
            <button class="filter-btn active" onclick="filterGallery('all', this)">All</button>
            <button class="filter-btn" onclick="filterGallery('masyarakat', this)">Masyarakat</button>
            <button class="filter-btn" onclick="filterGallery('kebudayaan', this)">Kebudayaan</button>
            <button class="filter-btn" onclick="filterGallery('umkm', this)">UMKM</button>
        </div>

        <!-- Gallery Images -->
        <div class="gambah">
            <img src="assets/Galeri/17_1.webp" alt="Gambar 1" data-kategori="all" onclick="openLightbox(this)">
            <img src="assets/Galeri/17_2.webp" alt="Masyarakat" data-kategori="masyarakat" onclick="openLightbox(this)">
            <img src="assets/Galeri/H_1.webp" alt="Kebudayaan" data-kategori="masyarakat" onclick="openLightbox(this)">
            <img src="assets/Galeri/H_2.webp" alt="Gambar 4" data-kategori="all" onclick="openLightbox(this)">
            <img src="assets/Galeri/R_1.webp" alt="UMKM" data-kategori="masyarakat" onclick="openLightbox(this)">
            <img src="assets/Galeri/R_2.webp" alt="Gambar 1" data-kategori="masyarakat" onclick="openLightbox(this)">
            <img src="assets/Galeri/SP_1.webp" alt="Gambar 1" data-kategori="kebudayaan" onclick="openLightbox(this)">
            <img src="assets/Galeri/SP_2.webp" alt="Gambar 1" data-kategori="kebudayaan" onclick="openLightbox(this)">
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div class="lightbox" id="lightbox">
        <span class="close-btn" onclick="closeLightbox()">&times;</span>
        <img id="lightbox-img" src="" alt="Preview">
    </div>

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
                <p><i class="fas fa-phone"></i> +62 858-0060-7454</p>
                <p>
                    <i class="fas fa-clock"></i> Senin - Kamis (08.00 - 15.00) & Jumat
                    (08.00 - 11.00)
                </p>
            </div>
            <div class="footer-section emergency">
                <h4>Nomer Telephone Penting</h4>
                <p>Vito Pratama/Pemuda Dukuh :<br /><strong>+62 858-0060-7454</strong></p>
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
    <script src="js/toggtext.js"></script>
</body>

</html>