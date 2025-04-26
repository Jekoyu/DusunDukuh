<?php
include 'conn.php'; // koneksi database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        $stmt = $conn->prepare("INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("ssss", $name, $email, $subject, $message);
            if ($stmt->execute()) {
                echo "success"; // << kirim 'success' string
            } else {
                echo "error";
            }
        } else {
            echo "error";
        }
    } else {
        echo "empty";
    }
    exit(); // stop supaya tidak ngeprint HTML
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Geografis Dusun</title>

    <!-- Boostrep -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Icon CSS -->
    <link rel="stylesheet" href="vendor/bootstrap-icons/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <style>
        @media (max-width: 768px) {
            .contact-section h2 {
                font-size: 20px;
                font-weight: 600;
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
                    <li><a href="about.php">Tentang</a></li>
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
                    <li><a href="grografis.php" class="active">Geografis</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <!-- Maps Dusun -->
    <section class="maps-dusun">
        <div class="p-4 mt-5">
            <h2 class="display-6 text-center pt-5">GEOGRAFIS PADUKUHAN DUKUH</h2>
            <p class="bottom-contact-title mb-2"></p>
            <p class="fw-semibold text-center">
                Informasi terkait lokasi Padukuhan Dukuh.
            </p>
            <div class="map-wrapper">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.662730338572!2d110.41033689999999!3d-7.7192891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a594fc6dc9ffb%3A0x8aeec77f96233e35!2sJl.%20Dukuh%20Raya%2C%20Palgading%2C%20Sinduharjo%2C%20Kec.%20Ngaglik%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1745494987929!5m2!1sid!2sid"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Faq Section -->
    <section>
        <div class="container contact-section">
            <div class="text-center mb-5 mt-5">
                <h2>HUBUNGI KAMI</h2>
                <p class="bottom-contact-title"></p>
                <p class="mt-3 fw-semibold m-3">Silakan gunakan formulir ini untuk menyampaikan pesan atau
                    pertanyaan Anda.
                </p>
            </div>

            <div class="row">
                <div class="col-md-4 contact-info-design">
                    <div class="info-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h5>Timur</h5>
                            <p>Ngelingan</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h5>Barat</h5>
                            <p>Padukuhan Genta</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h5>Selatan</h5>
                            <p>Padukuhan Pedak</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h5>Utara</h5>
                            <p>Padukuhan Nglaban</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 form-input">
                    <form id="contactForm" method="post">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="mb-3">
                            <textarea name="message" class="form-control" style="height: 180px;" placeholder="Message" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="send" class="btn btn-send">Send Message</button>
                        </div>
                    </form>

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

    <!-- Bootstrep JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Js main -->
    <script src="js/navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#contactForm').submit(function(e) {
                e.preventDefault(); // stop reload

                Swal.fire({
                    title: 'Mengirim...',
                    text: 'Mohon tunggu sebentar',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: '', // submit ke halaman ini
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.trim() === 'success') {
                            Swal.fire({
                                title: 'Berhasil!',
                                text: 'Pesan Anda berhasil dikirim!',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = 'grografis.php';
                                }
                            });
                        } else if (response.trim() === 'empty') {
                            Swal.fire({
                                title: 'Form Belum Lengkap!',
                                text: 'Mohon isi semua data.',
                                icon: 'warning'
                            });
                        } else {
                            Swal.fire({
                                title: 'Gagal!',
                                text: 'Terjadi kesalahan. Coba lagi.',
                                icon: 'error'
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Tidak bisa mengirim data. Periksa koneksi Anda.',
                            icon: 'error'
                        });
                    }
                });
            });
        });
    </script>


</body>

</html>