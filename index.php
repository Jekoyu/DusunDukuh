<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HMSI Home</title>

    <!-- Boostrep -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <!-- Icon CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css"/>
  </head>

  <body>
    <!-- Navbar -->
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between"
      >
        <a href="index.php" class="logo d-flex align-items-center">
          <h1 class="sitename">Dusun Dukuh</h1>
          <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="berita.php">Berita</a></li>
            <li class="dropdown">
              <a href="#"
                ><span>Pejabat</span
                ><i class="bi bi-chevron-down toggle-dropdown"></i
              ></a>
              <ul>
                <li><a href="Kel-Tani.php">Kel. Tani</a></li>
                <li><a href="#">Kel. Maggot</a></li>
                <li><a href="#">Kel. Pemuda</a></li>
                <li><a href="#">PKK</a></li>
                <li><a href="#">LPMKAL</a></li>
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
      <video
        class="video-slide active"
        src="vidio/sawah.mp4"
        autoplay
        muted
        loop
      ></video>
      <video class="video-slide" src="vidio/v2.mp4" autoplay muted loop></video>
      <video class="video-slide" src="vidio/v1.mp4" autoplay muted loop></video>
      <video class="video-slide" src="vidio/v2.mp4" autoplay muted loop></video>

      <div class="content active">
        <h1>Selamat Datang <br /><span>Di Desa Sindoharjo</span></h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
        </p>
      </div>
      <div class="content">
        <h1>Camping.<br /><span>Enjoy</span></h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
        </p>
      </div>
      <div class="content">
        <h1>Adventures.<br /><span>Off Road</span></h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
        </p>
      </div>
      <div class="content">
        <h1>Road Trip.<br /><span>Together</span></h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
        </p>
      </div>

      <!-- Slider nav btn -->
      <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
      </div>
    </section>

    <!-- Intro Kades -->
    <section class="about">
      <div class="about-img">
        <img
          src="assets/Staff/Kades.png"
          alt=""
          class="fade-in-image"
          class="touch-animate-img"
        />
      </div>
      <div class="about-content">
        <h2 class="heading">SAMBUTAN KEPALA DUSUN</h2>
        <h3>Assalamualaikum Warohmatullah Wr.Wb</h3>
        <p class="fw-medium">
          Website ini hadir sebagai wujud transformasi desa Kersik menjadi desa
          yang mampu memanfaatkan teknologi informasi dan komunikasi,
          terintegrasi kedalam sistem online. Keterbukaan informasi publik,
          pelayanan publik dan kegiatan perekonomian di desa, guna mewujudkan
          desa Kersik sebagai desa wisata yang berkelanjutan, adaptasi dan
          mitigasi terhadap perubahan iklim serta menjadi desa yang mandiri.
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
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Alias, excepturi praesentium. Asperiores veritatis doloribus
                  sequi tempore, sint consequatur totam vitae voluptatum ipsum
                  et laudantium atque quis, voluptate voluptates labore
                  repudiandae.
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
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Dolores ut obcaecati itaque eum quasi sint.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-11 d-flex align-items-stretch mb-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <p class="card-text fw-medium">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Et
                  harum, culpa odio dolorem deserunt beatae.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-11 d-flex align-items-stretch mb-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <p class="card-text fw-medium">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus
                  recusandae modi doloribus nam quisquam laudantium?
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-11 d-flex align-items-stretch mb-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <p class="card-text fw-medium">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos,
                  harum nostrum! Nobis aliquam sunt iure?
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-11 d-flex align-items-stretch mb-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <p class="card-text fw-medium">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. In
                  cumque impedit distinctio, unde minima quibusdam.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-11 d-flex align-items-stretch mb-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <p class="card-text fw-medium">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. In
                  cumque impedit distinctio, unde minima quibusdam.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Admistrasi -->
    <section id="stats" class="stats section dark-background">
      <img src="" alt="" data-aos="fade-in" />
      <div
        class="container-fluid position-relative"
        data-aos="fade-up"
        data-aos-delay="100"
      >
        <!-- Subheading Section -->
        <div class="subheading">
          <h2>INFORMASI KEPENDUDUKAN</h2>
          <p>Informasi jumlah kependudukan masyarakat Dusun Dukuh</p>
        </div>

        <!-- Stats Items -->
        <div class="row gy-4">
          <!-- Penduduk -->
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span
                data-purecounter-start="0"
                data-purecounter-end="1000"
                data-purecounter-duration="1"
                class="purecounter"
              ></span>
              <p>Penduduk</p>
            </div>
          </div>

          <!-- Keluarga -->
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span
                data-purecounter-start="0"
                data-purecounter-end="450"
                data-purecounter-duration="1"
                class="purecounter"
              ></span>
              <p>Keluarga</p>
            </div>
          </div>

          <!-- Perempuan -->
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span
                data-purecounter-start="0"
                data-purecounter-end="550"
                data-purecounter-duration="1"
                class="purecounter"
              ></span>
              <p>Perempuan</p>
            </div>
          </div>

          <!-- Laki-laki -->
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span
                data-purecounter-start="0"
                data-purecounter-end="450"
                data-purecounter-duration="1"
                class="purecounter"
              ></span>
              <p>Laki-laki</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="footer-brand">
          <div class="logo-image-container">
            <img
              src="assets/Logodesa.png"
              alt="Logo Desa Sinduharjo"
              class="footer-logo"
            />
          </div>

          <div class="footer-brand-content">
            <div class="footer-address">
              <p class="address-text">
                <span class="address-line">Desa Sinduharjo</span>
                <span class="address-line">Kecamatan Ngaglik</span>
                <span class="address-line">Kabupaten Sleman</span>
                <span class="address-line"
                  >Propinsi Daerah Istimewa Yogyakarta</span
                >
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
          <input
            type="text"
            id="nama"
            placeholder="Masukkan nama Anda"
            required
          />

          <label for="telepon">Nomor Telepon/WA <span>*</span></label>
          <input
            type="tel"
            id="telepon"
            placeholder="Masukkan nomor HP/WhatsApp"
            required
          />

          <label for="kategori">Kategori Pengaduan <span>*</span></label>
          <select id="kategori" required>
            <option value="">Pilih kategori pengaduan</option>
            <option value="pelayanan">Pelayanan</option>
            <option value="infrastruktur">Infrastruktur</option>
            <option value="administrasi">Administrasi</option>
          </select>

          <label for="pengaduan">Pengaduan <span>*</span></label>
          <textarea
            id="pengaduan"
            placeholder="Masukkan kesan, informasi, atau detail aduan Anda"
            required
          ></textarea>

          <label for="lampiran">Lampiran</label>
          <input type="file" id="lampiran" />

          <button type="submit" class="kirim-btn">📩 Kirim</button>
        </form>
      </div>
    </section>

    <!-- Bootstrap CSS (recommended to load before JS) -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />

    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="vendor/bootstrap-icons/bootstrap-icons.min.css"
    />

    <!-- PureCounter.js -->
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>

    <!-- Bootstrap JS (bundle includes Popper.js) -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <!-- Custom JS -->
    <script src="js/main.js" defer></script>
  </body>
</html>
