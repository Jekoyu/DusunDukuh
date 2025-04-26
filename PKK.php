<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PKK</title>

    <!-- Boostrep -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Icon CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="vendor/bootstrap-icons/bootstrap-icons.min.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="./css/style.css" />
</head>

<!-- Add CSS for list view -->
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

    /* List view styling */
    #umkm-container.list-view .umkm-item {
        width: 100%;
        max-width: 100%;
        flex: 0 0 100%;
    }

    #umkm-container.list-view .card-body {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    #umkm-container.list-view .umkm-header {
        width: 25%;
    }

    #umkm-container.list-view .umkm-product {
        width: 45%;
        padding-left: 0 !important;
    }

    #umkm-container.list-view .umkm-contact {
        width: 20%;
        padding-left: 0 !important;
        text-align: right;
    }

    #umkm-container.list-view .umkm-image {
        width: 10%;

        text-align: center;
    }

    #umkm-container.list-view .product-image {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 8px;
    }

    .product-image {
        display: flex;
        width: 70%;
        height: 100%;
        object-fit: cover;
        border-radius: 8px;
        margin: 0 auto;
        margin-bottom: 15px;
    }

    @media (max-width: 768px) {
        #umkm-container.list-view .card-body {
            flex-direction: column;
        }

        #umkm-container.list-view .umkm-header,
        #umkm-container.list-view .umkm-product,
        #umkm-container.list-view .umkm-contact,
        #umkm-container.list-view .umkm-image {
            width: 100%;
            text-align: left;
            padding-left: 65px !important;
            margin-bottom: 10px;
        }

        #umkm-container.list-view .umkm-image {
            padding-left: 0 !important;
        }
    }
</style>

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
                    <li><a href="berita.php">Berita</a></li>
                    <li class="dropdown">
                        <a href="#" class="active"><span>Organisasi Desa</span><i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
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

    <section class="page-header text-center">
        <div class="container">
            <h1>Kelompok PKK Dusun Dukuh</h1>
            <p>Kelompok PKK Dusun Dukuh mendorong terwujudnya keluarga yang beriman, sehat, mandiri, serta peduli
                terhadap keadilan, hukum, dan lingkungan.</p>
        </div>
    </section>

    <!-- PKK Information Section -->
    <section class="pkk-section py-5" style="background-color: var(--color-secondary);">
        <div class="container">
            <!-- Section Header -->
            <div class="mb-2">
                <h2 class="section-title">Informasi Kelompok PKK</h2>
                <p
                    style="color: var(--color-font-secondary); font-family: var(--font-secondary); max-width: 700px; margin: 0 auto; margin-top: 15px;">
                    Pemberdayaan Kesejahteraan Keluarga untuk masyarakat yang lebih sejahtera dan mandiri
                </p>
            </div>

            <!-- PKK Activthies Cards -->
            <div class="row mb-2">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm"
                        style="border-radius: 15px; overflow: hidden; transition: transform 0.3s ease;">
                        <div class="card-header d-flex align-items-center"
                            style="background-color: var(--color-primary); color: var(--color-font-primary3); border: none; padding: 20px;">
                            <i class="fas fa-heart me-3" style="font-size: 24px;"></i>
                            <h3 class="h5 mb-0" style="font-family: var(--heading-font); font-weight: 600;">Dana Sosial
                                PKK</h3>
                        </div>
                        <div class="card-body" style="padding: 25px;">
                            <p
                                style="color: var(--color-font-primary2); font-family: var(--font-primary); line-height: 1.6;">
                                Berita terbaru dari PKK ada dana sosial kurang lebih 1 tahun yang digunakan untuk orang
                                meninggal, semua dana sampai tiga hari dipegang oleh PKK untuk kegitan sosial, yang
                                dimana dilakukan secara iuran per RT kemudian di kumpulkan ke bendahara PKK kampung.
                            </p>
                            <div class="mt-3 text-end">
                                <a href="#" class="btn"
                                    style="background-color: var(--color-font-primary1); color: white; border-radius: 30px; padding: 8px 20px; font-weight: 500; transition: all 0.3s ease;">
                                    Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm"
                        style="border-radius: 15px; overflow: hidden; transition: transform 0.3s ease;">
                        <div class="card-header d-flex align-items-center"
                            style="background-color: var(--color-primary); color: var(--color-font-primary3); border: none; padding: 20px;">
                            <i class="fas fa-calendar-check me-3" style="font-size: 24px;"></i>
                            <h3 class="h5 mb-0" style="font-family: var(--heading-font); font-weight: 600;">Kegiatan
                                Rutin PKK</h3>
                        </div>
                        <div class="card-body" style="padding: 25px;">
                            <div class="d-flex mb-3">
                                <div
                                    style="background-color: var(--color-secondary); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                    <i class="fas fa-users" style="color: var(--color-primary); font-size: 20px;"></i>
                                </div>
                                <div>
                                    <h5
                                        style="font-family: var(--heading-font); font-weight: 600; font-size: 16px; color: var(--color-font-primary2);">
                                        Arisan Rutin</h5>
                                    <p style="color: var(--color-font-secondary); margin-bottom: 0;">Kegiatan arisan
                                        rutin untuk mempererat silaturahmi</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div
                                    style="background-color: var(--color-secondary); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                    <i class="fas fa-heartbeat"
                                        style="color: var(--color-primary); font-size: 20px;"></i>
                                </div>
                                <div>
                                    <h5
                                        style="font-family: var(--heading-font); font-weight: 600; font-size: 16px; color: var(--color-font-primary2);">
                                        Cek Kesehatan</h5>
                                    <p style="color: var(--color-font-secondary); margin-bottom: 0;">Layanan cek
                                        kesehatan tensi secara gratis</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div
                                    style="background-color: var(--color-secondary); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                    <i class="fas fa-hand-holding-usd"
                                        style="color: var(--color-primary); font-size: 20px;"></i>
                                </div>
                                <div>
                                    <h5
                                        style="font-family: var(--heading-font); font-weight: 600; font-size: 16px; color: var(--color-font-primary2);">
                                        Simpan Pinjam</h5>
                                    <p style="color: var(--color-font-secondary); margin-bottom: 0;">Layanan simpan
                                        pinjam untuk kebutuhan anggota</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Struktur Organisasi -->
            <section class="section-spacing img-struktur mb-5" id="struktur" style="padding: 0px;">
                <h2 class="section-title">Struktur Organisasi</h2>
                <p class="text-muted mb-4">Kelompok Tani Padukuhan Dukuh dikelola oleh tim yang berpengalaman dan
                    berdedikasi
                    dalam pengembangan pertanian dan pengelolaan sumber daya alam.</p>

                <img src="assets/Staff/PKK.webp" alt="Event Masyarakat" />
            </section>

            <!-- UMKM Section -->
            <div class="umkm-section mb-5">
                <div class="card border-0 shadow-sm" style="border-radius: 15px; overflow: hidden;">
                    <div class="card-header d-flex justify-content-between align-items-center"
                        style="background-color: var(--color-primary); color: var(--color-font-primary3); border: none; padding: 20px;">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-store me-3" style="font-size: 24px;"></i>
                            <h3 class="h5 mb-0" style="font-family: var(--heading-font); font-weight: 600;">Data UMKM
                            </h3>
                        </div>
                        <div>
                            <button class="btn btn-sm me-2" id="view-grid"
                                style="background-color: white; color: var(--color-primary);">
                                <i class="fas fa-th"></i>
                            </button>
                            <button class="btn btn-sm" id="view-list"
                                style="background-color: transparent; color: white; border: 1px solid white;">
                                <i class="fas fa-list"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Search and Filter -->
                    <div class="card-body"
                        style="background-color: #f9f9f9; border-bottom: 1px solid #eee; padding: 20px;">
                        <div class="row g-3">
                            <div class="col-md-8">
                                <div class="input-group">
                                    <span class="input-group-text"
                                        style="background-color: var(--color-primary); color: white; border: none;">
                                        <i class="fas fa-search"></i>
                                    </span>
                                    <input type="text" id="search-umkm" class="form-control"
                                        placeholder="Cari UMKM berdasarkan nama atau produk..."
                                        style="border: 1px solid #ced4da; padding: 10px 15px;">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select id="filter-category" class="form-select"
                                    style="border: 1px solid #ced4da; padding: 10px 15px; height: 100%;">
                                    <option value="">Semua Kategori</option>
                                    <option value="makanan">Makanan</option>
                                    <option value="pembibitan">Pembibitan</option>
                                    <option value="fashion">Fashion</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- UMKM Cards -->
                    <div class="card-body" style="padding: 25px;">
                        <div class="row" id="umkm-container">
                            <!-- UMKM items will be generated by JavaScript -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Card Struktur -->

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

    <!--   *****   Bootstrap JS Link   *****   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    <!-- Library PureCounter (opsional, jika digunakan) -->
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>

    <!-- UMKM Data and Script -->
    <script src="js/umkm-script.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            "use strict";

            const body = document.querySelector("body");
            const header = document.querySelector("#header");

            // SCROLL HANDLING
            const toggleScrolled = () => {
                if (
                    header &&
                    (header.classList.contains("scroll-up-sticky") ||
                        header.classList.contains("sticky-top") ||
                        header.classList.contains("fixed-top"))
                ) {
                    window.scrollY > 100 ?
                        body.classList.add("scrolled") :
                        body.classList.remove("scrolled");
                }
            };

            document.addEventListener("scroll", toggleScrolled);
            window.addEventListener("load", toggleScrolled);

            // TOGGLE MOBILE NAV
            const mobileNavToggleBtn = document.querySelector(".mobile-nav-toggle");
            const mobileNavToogle = () => {
                body.classList.toggle("mobile-nav-active");
                mobileNavToggleBtn.classList.toggle("bi-list");
                mobileNavToggleBtn.classList.toggle("bi-x");
            };

            if (mobileNavToggleBtn) {
                mobileNavToggleBtn.addEventListener("click", mobileNavToogle);
            }

            // CLOSE NAV ON LINK CLICK
            document.querySelectorAll("#navmenu a").forEach((navLink) => {
                navLink.addEventListener("click", () => {
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

            // SCROLL TO TOP
            const scrollTop = document.querySelector(".scroll-top");
            const toggleScrollTop = () => {
                if (scrollTop) {
                    window.scrollY > 100 ?
                        scrollTop.classList.add("active") :
                        scrollTop.classList.remove("active");
                }
            };
            if (scrollTop) {
                scrollTop.addEventListener("click", (e) => {
                    e.preventDefault();
                    window.scrollTo({
                        top: 0,
                        behavior: "smooth"
                    });
                });
            }

            window.addEventListener("load", toggleScrollTop);
            document.addEventListener("scroll", toggleScrollTop);

            // PURECOUNTER
            if (typeof PureCounter === "function") {
                new PureCounter();
            }

            // Card hover effect
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function () {
                    this.style.transform = 'translateY(-5px)';
                    this.style.boxShadow = '0 10px 20px rgba(0,0,0,0.1)';
                });
                card.addEventListener('mouseleave', function () {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = '0 0.125rem 0.25rem rgba(0,0,0,0.075)';
                });
            });
        });
    </script>

</body>

</html>