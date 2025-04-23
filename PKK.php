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
            <div class="row mb-5">
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
                            <!-- UMKM Item 1 -->
                            <div class="col-md-6 col-lg-4 mb-4 umkm-item" data-category="makanan">
                                <div class="card h-100 border-0 shadow-sm"
                                    style="border-radius: 10px; overflow: hidden; transition: all 0.3s ease;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div
                                                style="background-color: var(--color-secondary); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                                <i class="fas fa-utensils"
                                                    style="color: var(--color-primary); font-size: 20px;"></i>
                                            </div>
                                            <div>
                                                <h5
                                                    style="font-family: var(--heading-font); font-weight: 600; margin-bottom: 0; color: var(--color-font-primary2);">
                                                    Bu Harini</h5>
                                                <span style="font-size: 12px; color: var(--color-font-secondary);">RT
                                                    02</span>
                                            </div>
                                        </div>
                                        <div class="mb-3" style="padding-left: 65px;">
                                            <p
                                                style="color: var(--color-font-primary2); margin-bottom: 5px; font-weight: 500;">
                                                Produk:</p>
                                            <p style="color: var(--color-font-secondary); margin-bottom: 0;">Pepes tahu
                                                jamur (tiap hari), bakmi goreng, nasi goreng</p>
                                        </div>
                                        <div style="padding-left: 65px;">
                                            <a href="tel:085810245923" class="btn btn-sm"
                                                style="background-color: var(--color-primary); color: white; border-radius: 30px; padding: 5px 15px;">
                                                <i class="fas fa-phone-alt me-2"></i> 085810245923
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- UMKM Item 2 -->
                            <div class="col-md-6 col-lg-4 mb-4 umkm-item" data-category="makanan">
                                <div class="card h-100 border-0 shadow-sm"
                                    style="border-radius: 10px; overflow: hidden; transition: all 0.3s ease;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div
                                                style="background-color: var(--color-secondary); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                                <i class="fas fa-utensils"
                                                    style="color: var(--color-primary); font-size: 20px;"></i>
                                            </div>
                                            <div>
                                                <h5
                                                    style="font-family: var(--heading-font); font-weight: 600; margin-bottom: 0; color: var(--color-font-primary2);">
                                                    Bu Meiti Aris Setyani</h5>
                                                <span
                                                    style="font-size: 12px; color: var(--color-font-secondary);">-</span>
                                            </div>
                                        </div>
                                        <div class="mb-3" style="padding-left: 65px;">
                                            <p
                                                style="color: var(--color-font-primary2); margin-bottom: 5px; font-weight: 500;">
                                                Produk:</p>
                                            <p style="color: var(--color-font-secondary); margin-bottom: 0;">Kripik usus
                                                re-packing</p>
                                        </div>
                                        <div style="padding-left: 65px;">
                                            <a href="tel:085729827177" class="btn btn-sm"
                                                style="background-color: var(--color-primary); color: white; border-radius: 30px; padding: 5px 15px;">
                                                <i class="fas fa-phone-alt me-2"></i> 085729827177
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- UMKM Item 3 -->
                            <div class="col-md-6 col-lg-4 mb-4 umkm-item" data-category="pembibitan">
                                <div class="card h-100 border-0 shadow-sm"
                                    style="border-radius: 10px; overflow: hidden; transition: all 0.3s ease;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div
                                                style="background-color: var(--color-secondary); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                                <i class="fas fa-seedling"
                                                    style="color: var(--color-primary); font-size: 20px;"></i>
                                            </div>
                                            <div>
                                                <h5
                                                    style="font-family: var(--heading-font); font-weight: 600; margin-bottom: 0; color: var(--color-font-primary2);">
                                                    Bu Tanti</h5>
                                                <span style="font-size: 12px; color: var(--color-font-secondary);">RT
                                                    02</span>
                                            </div>
                                        </div>
                                        <div class="mb-3" style="padding-left: 65px;">
                                            <p
                                                style="color: var(--color-font-primary2); margin-bottom: 5px; font-weight: 500;">
                                                Produk:</p>
                                            <p style="color: var(--color-font-secondary); margin-bottom: 0;">Pembibitan
                                            </p>
                                        </div>
                                        <div style="padding-left: 65px;">
                                            <a href="tel:08974831397" class="btn btn-sm"
                                                style="background-color: var(--color-primary); color: white; border-radius: 30px; padding: 5px 15px;">
                                                <i class="fas fa-phone-alt me-2"></i> 08974831397
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- UMKM Item 4 -->
                            <div class="col-md-6 col-lg-4 mb-4 umkm-item" data-category="pembibitan">
                                <div class="card h-100 border-0 shadow-sm"
                                    style="border-radius: 10px; overflow: hidden; transition: all 0.3s ease;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div
                                                style="background-color: var(--color-secondary); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                                <i class="fas fa-seedling"
                                                    style="color: var(--color-primary); font-size: 20px;"></i>
                                            </div>
                                            <div>
                                                <h5
                                                    style="font-family: var(--heading-font); font-weight: 600; margin-bottom: 0; color: var(--color-font-primary2);">
                                                    Bu Ngatijo</h5>
                                                <span style="font-size: 12px; color: var(--color-font-secondary);">RT
                                                    04</span>
                                            </div>
                                        </div>
                                        <div class="mb-3" style="padding-left: 65px;">
                                            <p
                                                style="color: var(--color-font-primary2); margin-bottom: 5px; font-weight: 500;">
                                                Produk:</p>
                                            <p style="color: var(--color-font-secondary); margin-bottom: 0;">Pembibitan
                                            </p>
                                        </div>
                                        <div style="padding-left: 65px;">
                                            <a href="tel:085729120709" class="btn btn-sm"
                                                style="background-color: var(--color-primary); color: white; border-radius: 30px; padding: 5px 15px;">
                                                <i class="fas fa-phone-alt me-2"></i> 085729120709
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- UMKM Item 5 -->
                            <div class="col-md-6 col-lg-4 mb-4 umkm-item" data-category="makanan">
                                <div class="card h-100 border-0 shadow-sm"
                                    style="border-radius: 10px; overflow: hidden; transition: all 0.3s ease;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div
                                                style="background-color: var(--color-secondary); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                                <i class="fas fa-utensils"
                                                    style="color: var(--color-primary); font-size: 20px;"></i>
                                            </div>
                                            <div>
                                                <h5
                                                    style="font-family: var(--heading-font); font-weight: 600; margin-bottom: 0; color: var(--color-font-primary2);">
                                                    Bu Umie Nufiyaningsih</h5>
                                                <span style="font-size: 12px; color: var(--color-font-secondary);">RT 03
                                                    RW 10</span>
                                            </div>
                                        </div>
                                        <div class="mb-3" style="padding-left: 65px;">
                                            <p
                                                style="color: var(--color-font-primary2); margin-bottom: 5px; font-weight: 500;">
                                                Produk:</p>
                                            <p style="color: var(--color-font-secondary); margin-bottom: 0;">Peyek</p>
                                        </div>
                                        <div style="padding-left: 65px;">
                                            <a href="tel:085643700070" class="btn btn-sm"
                                                style="background-color: var(--color-primary); color: white; border-radius: 30px; padding: 5px 15px;">
                                                <i class="fas fa-phone-alt me-2"></i> 085643700070
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- UMKM Item 6 -->
                            <div class="col-md-6 col-lg-4 mb-4 umkm-item" data-category="makanan">
                                <div class="card h-100 border-0 shadow-sm"
                                    style="border-radius: 10px; overflow: hidden; transition: all 0.3s ease;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div
                                                style="background-color: var(--color-secondary); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                                <i class="fas fa-utensils"
                                                    style="color: var(--color-primary); font-size: 20px;"></i>
                                            </div>
                                            <div>
                                                <h5
                                                    style="font-family: var(--heading-font); font-weight: 600; margin-bottom: 0; color: var(--color-font-primary2);">
                                                    Bu Devi</h5>
                                                <span style="font-size: 12px; color: var(--color-font-secondary);">RT
                                                    02</span>
                                            </div>
                                        </div>
                                        <div class="mb-3" style="padding-left: 65px;">
                                            <p
                                                style="color: var(--color-font-primary2); margin-bottom: 5px; font-weight: 500;">
                                                Produk:</p>
                                            <p style="color: var(--color-font-secondary); margin-bottom: 0;">Gudeg</p>
                                        </div>
                                        <div style="padding-left: 65px;">
                                            <a href="tel:081326006761" class="btn btn-sm"
                                                style="background-color: var(--color-primary); color: white; border-radius: 30px; padding: 5px 15px;">
                                                <i class="fas fa-phone-alt me-2"></i> 081326006761
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Add more UMKM items here following the same pattern -->
                            <!-- You can add the remaining UMKM items following the same structure -->

                            <!-- "Show More" Button -->
                            <div class="col-12 text-center mt-3">
                                <button id="show-more-umkm" class="btn"
                                    style="background-color: var(--color-font-primary1); color: white; border-radius: 30px; padding: 10px 25px; font-weight: 500;">
                                    Lihat Semua UMKM <i class="fas fa-chevron-down ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Card Struktur -->


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

    <!--   *****   Bootstrap JS Link   *****   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Js main -->
    <script src="/js/main.js"></script>

    <!-- Library PureCounter (opsional, jika digunakan) -->
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
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
                navmenu.addEventListener("click", function(e) {
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

        // UMKM SECTION
        const viewGridBtn = document.getElementById('view-grid');
        const viewListBtn = document.getElementById('view-list');
        const umkmContainer = document.getElementById('umkm-container');

        if (viewGridBtn && viewListBtn && umkmContainer) {
            viewGridBtn.addEventListener('click', function() {
                viewGridBtn.style.backgroundColor = 'white';
                viewGridBtn.style.color = 'var(--color-primary)';
                viewListBtn.style.backgroundColor = 'transparent';
                viewListBtn.style.color = 'white';
                umkmContainer.classList.remove('list-view');
            });

            viewListBtn.addEventListener('click', function() {
                viewListBtn.style.backgroundColor = 'white';
                viewListBtn.style.color = 'var(--color-primary)';
                viewGridBtn.style.backgroundColor = 'transparent';
                viewGridBtn.style.color = 'white';
                umkmContainer.classList.add('list-view');
            });
        }

        const searchInput = document.getElementById('search-umkm');
        const filterCategory = document.getElementById('filter-category');
        const umkmItems = document.querySelectorAll('.umkm-item');

        const filterUMKM = () => {
            const searchTerm = searchInput?.value.toLowerCase() || "";
            const category = filterCategory?.value.toLowerCase() || "";

            umkmItems.forEach(item => {
                const title = item.querySelector('h5')?.textContent.toLowerCase() || "";
                const product = item.querySelector('p:nth-of-type(2)')?.textContent.toLowerCase() ||
                    "";
                const itemCategory = item.dataset.category?.toLowerCase() || "";

                const matchesSearch = title.includes(searchTerm) || product.includes(searchTerm);
                const matchesCategory = category === '' || itemCategory === category;

                item.style.display = (matchesSearch && matchesCategory) ? 'block' : 'none';
            });
        };

        searchInput?.addEventListener('input', filterUMKM);
        filterCategory?.addEventListener('change', filterUMKM);

        // Show more / less UMKM
        const showMoreBtn = document.getElementById('show-more-umkm');
        const hiddenItems = document.querySelectorAll('.umkm-item:nth-child(n+7)');

        if (showMoreBtn) {
            hiddenItems.forEach(item => item.style.display = 'none');

            showMoreBtn.addEventListener('click', function() {
                let isHidden = [...hiddenItems].some(item => item.style.display === 'none');
                hiddenItems.forEach(item => {
                    item.style.display = isHidden ? 'block' : 'none';
                });
                showMoreBtn.innerHTML = isHidden ?
                    'Tampilkan Lebih Sedikit <i class="fas fa-chevron-up ms-2"></i>' :
                    'Lihat Semua UMKM <i class="fas fa-chevron-down ms-2"></i>';
            });
        }

        // Card hover effect
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 10px 20px rgba(0,0,0,0.1)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 0.125rem 0.25rem rgba(0,0,0,0.075)';
            });
        });
    });
    </script>

</body>

</html>