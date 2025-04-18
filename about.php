<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang</title>

    <!-- Boostrep -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Icon CSS -->
    <link rel="stylesheet" href="vendor/bootstrap-icons/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />
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

    <!-- Intro Kades -->
    <section class="about">
        <div class="about-img">
            <img src="assets/Logodesa.png" alt="Kades" class="fade-in-image touch-animate-img" />
        </div>
        <div class="about-content">
            <h2 class="heading">SEJARAH DUSUN</h2>
            <p class="fw-medium">
                Dusun Sindoharjo, terletak di wilayah pedesaan Indonesia, memiliki
                sejarah yang kaya dan menarik. Konon, wilayah ini awalnya merupakan
                hutan belantara yang belum tersentuh peradaban. Sekitar abad ke-18,
                sekelompok pelancong dipimpin oleh Ki Ageng Sindo menemukan daerah ini
                saat mencari tempat baru untuk bermukim. Terkesan dengan kesuburan
                tanah dan sumber daya alam yang melimpah, mereka memutuskan untuk
                menetap dan membuka lahan pertanian...
                <a href="berita-detail.php" class="text-link">Selengkapnya</a>
            </p>
        </div>
    </section>

    <!-- Potensi Desa -->
    <section class="potensi m-5">
        <div class="d-flex flex-column align-items-center text-center">
            <h2 class="display-6 fw-semibold">POTENSI DUSUN</h2>
            <p class="fw-semibold">Potensi Dusun Dukuh yang menjadi keunggulan</p>
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

    <!-- Program Desa -->
    <section id="category-program">
        <div class="container-program">
            <h2 class="text-center text-program display-6">PETA LOKASI DESA</h2>
            <!-- Perbatasan desa -->
            <!-- <div class="align-items-center">
                <div>
                    <div class="d-flex row">
                        <div class="border border-dark rounded-4 px-4 mb-3 col-md-6 h-25">
                            <div class="line-bottom">
                                <h5>Batas Dusun</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <h6>Utara</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                    <div class="col-6">
                                        <h6>Selatan</h6>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <div class="col-6">
                                        <h6>Timur</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                    <div class="col-6">
                                        <h6>Barat</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="line-bottom">
                                <h3>Luas Dusun</h3>
                                <p>400.000 ㎡</p>
                            </div>
                            <div>
                                <h3>Jumlah Penduduk</h3>
                                <p>1.000 Jiwa</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <iframe class=" maps"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31628.4426481496!2d110.3801232653408!3d-7.73076298033092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a593f72c5303b%3A0x5027a76e3569670!2sSinduharjo%2C%20Kec.%20Ngaglik%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1739797475162!5m2!1sid!2sid"
                                width="100%" height="420" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Poster dan yt -->
            <div class="row mt-4">
                <!-- Poster Image -->
                <div class="col-md-4">
                    <img class="img-fluid mt-2 rounded-4" src="assets/program/image.png" alt="Poster" width="100%"
                        height="100%" />
                </div>
                <!-- YouTube Video -->
                <div class="col-md-8">
                    <div class="ratio ratio-16x9 rounded-4 overflow-hidden mt-2">
                        <iframe src="https://www.youtube.com/embed/DtjQ3R-_dGE" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri -->
    <section class="portfolio">
        <main class="mainContainer">
            <h2 class="gallery-title">GALERI DESA</h2>
            <p class="fw-semibold">
                Dokumentasi foto kegiatan-kegiatan yang berlangsung di Dusun Dukuh
            </p>
            <div class="button-group">
                <button class="button active" data-filter="*">All</button>
                <button class="button" data-filter=".design">Kebudayaan</button>
                <button class="button" data-filter=".development">Masyarakat</button>
                <button class="button" data-filter=".logo">UMKM</button>
            </div>

            <div class="gallery">
                <div class="item design">
                    <img src="assets/Galeri/17_1.webp" />
                </div>

                <div class="item design">
                    <img src="assets/Galeri/17_2.webp" />
                </div>

                <div class="item development">
                    <img src="assets/Galeri/H_1.webp" />
                </div>

                <div class="item development">
                    <img src="assets/Galeri/H_2.webp" />
                </div>

                <div class="item development">
                    <img src="assets/Galeri/R_1.webp" />
                </div>

                <div class="item logo">
                    <img src="assets/Galeri/R_2.webp" />
                </div>
            </div>
        </main>
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

    <!-- Pengduan -->
    <section>
        <button class="pengaduan-btn" onclick="toggleForm()">📝 Pengaduan</button>

        <div class="form-container" id="formPengaduan">
            <form>
                <h2>Form Pengaduan</h2>
                <label for="nama">Nama <span>*</span></label>
                <input type="text" id="nama" placeholder="Masukkan nama Anda" required />

                <label for="telepon">Nomor Telepon/WA <span>*</span></label>
                <input type="tel" id="telepon" placeholder="Masukkan nomor HP/WhatsApp" required />

                <label for="kategori">Kategori Pengaduan <span>*</span></label>
                <select id="kategori" required>
                    <option value="">Pilih kategori pengaduan</option>
                    <option value="pelayanan">Pelayanan</option>
                    <option value="infrastruktur">Infrastruktur</option>
                    <option value="administrasi">Administrasi</option>
                </select>

                <label for="pengaduan">Pengaduan <span>*</span></label>
                <textarea id="pengaduan" placeholder="Masukkan kesan, informasi, atau detail aduan Anda"
                    required></textarea>

                <label for="lampiran">Lampiran</label>
                <input type="file" id="lampiran" />

                <button type="submit" class="kirim-btn">📩 Kirim</button>
            </form>
        </div>
    </section>

    <!--   *****   JQuery Link   *****   -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!--   *****   Isotope Filter Link   *****  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

    <!-- Js main -->
    <script src="js/main.js"></script>

    <script>
    // Galeri Filtering
    $(document).ready(function() {
        var $galleryContainer = $(".gallery").isotope({
            itemSelector: ".item",
            layoutMode: "fitRows",
        });

        $(".button-group .button").on("click", function() {
            $(".button-group .button").removeClass("active");

            $(this).addClass("active");

            var value = $(this).attr("data-filter");

            $galleryContainer.isotope({
                filter: value,
            });
        });
    });

    // Navbar & Header
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