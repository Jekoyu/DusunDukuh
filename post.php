<?php
include 'conn.php';

$category = isset($_GET['category']) ? $_GET['category'] : '';
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

if ($category != '' && $slug != '') {
    try {
        $stmt = $conn->prepare("SELECT posts.*, categories.name 
                              FROM posts
                              JOIN categories ON posts.category_id = categories.id
                              WHERE categories.slug = ? AND posts.slug = ?");
        $stmt->bind_param("ss", $category, $slug);
        $stmt->execute();
        $resultSet = $stmt->get_result();
        $post = $resultSet->num_rows > 0 ? $resultSet->fetch_assoc() : null;
    } catch (Exception $e) {
        $error = "Error: " . $e->getMessage();
    }
}

$conn = null;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($post) ? htmlspecialchars($post['title']) : 'Detail Berita' ?> - Desa Kersik</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #f8f9fa;
            --accent-color: #ffc107;
            --text-color: #212529;
            --text-muted: #6c757d;
            --border-color: #dee2e6;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-color);
            background-color: #f8f9fa;
        }

        .news-title {
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        .news-meta {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border-color);
        }

        .news-content {
            line-height: 1.8;
            font-size: 1.05rem;
        }
        
        .news-content p {
            margin-bottom: 1.5rem;
        }

        .news-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Sidebar styles */
        .sidebar-title {
            font-weight: 600;
            padding-bottom: 0.75rem;
            margin-bottom: 1.25rem;
            border-bottom: 2px solid var(--primary-color);
        }

        .latest-news-item {
            padding: 1rem;
            border-bottom: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .latest-news-item:hover {
            background-color: rgba(13, 110, 253, 0.05);
        }

        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                margin-top: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <h1 class="sitename">Dusun Dukuh</h1>
                <span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="berita.php" class="active">Berita</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Pejabat</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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

    <!-- Main Content -->
    <div class="container py-5">
        <div class="row">
            <!-- Main Content Column -->
            <div class="col-lg-8">
                <?php if (isset($error)): ?>
                    <div class="alert alert-danger"><?= $error ?></div>
                <?php elseif (!isset($post)): ?>
                    <div class="alert alert-warning">Post not found!</div>
                <?php else: ?>
                    <div class="card p-4">
                        <h1 class="news-title"><?= htmlspecialchars($post['title']) ?></h1>
                        
                        <div class="news-meta">
                            <span><i class="far fa-calendar-alt"></i> <?= date('d F Y', strtotime($post['created_at'])) ?></span>
                            <span><i class="far fa-user"></i> <?= htmlspecialchars($post['author'] ?? 'Administrator') ?></span>
                            <span><i class="far fa-eye"></i> <?= $post['views'] ?? '0' ?> kali dilihat</span>
                        </div>

                        <?php if (!empty($post['image_url'])): ?>
                            <img src="<?= htmlspecialchars($post['image_url']) ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="news-image">
                        <?php endif; ?>

                        <div class="news-content">
                            <?= nl2br(htmlspecialchars($post['content'])) ?>
                        </div>

                        <div class="mt-4 pt-3 border-top">
                            <h5 class="mb-3">Bagikan Berita:</h5>
                            <a href="#" class="btn btn-primary me-2"><i class="fab fa-facebook-f"></i> Facebook</a>
                            <a href="#" class="btn btn-info me-2"><i class="fab fa-twitter"></i> Twitter</a>
                            <a href="#" class="btn btn-success"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar Column -->
            <div class="col-lg-4 sidebar">
                <!-- Latest News Widget -->
                <div class="card p-4">
                    <h3 class="sidebar-title">Berita Terbaru</h3>
                    
                    <?php
                    // You would typically fetch these from database
                    $latestNews = [
                        ['title' => 'Desa Kersik Raih Penghargaan Desa Terbaik Tingkat Kabupaten', 'date' => '1 September 2024', 'views' => 732],
                        ['title' => 'Pembangunan Jembatan Penghubung Dusun Mulai Dikerjakan', 'date' => '28 Agustus 2024', 'views' => 645],
                        ['title' => 'Posyandu Desa Kersik Adakan Pemeriksaan Kesehatan Gratis', 'date' => '25 Agustus 2024', 'views' => 589]
                    ];
                    
                    foreach ($latestNews as $news): ?>
                        <div class="latest-news-item">
                            <a href="#" class="text-decoration-none text-dark">
                                <h5 class="latest-news-title"><?= htmlspecialchars($news['title']) ?></h5>
                            </a>
                            <div class="latest-news-meta">
                                <span><i class="far fa-calendar-alt"></i> <?= $news['date'] ?></span>
                                <span><i class="far fa-eye"></i> <?= $news['views'] ?> kali</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Categories Widget -->
                <div class="card p-4">
                    <h3 class="sidebar-title">Kategori</h3>
                    <ul class="list-group list-group-flush">
                        <?php
                        $categories = [
                            ['name' => 'Pemerintahan Desa', 'count' => 14],
                            ['name' => 'Pembangunan', 'count' => 8],
                            ['name' => 'Kesehatan', 'count' => 6]
                        ];
                        
                        foreach ($categories as $cat): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= htmlspecialchars($cat['name']) ?>
                                <span class="badge bg-primary rounded-pill"><?= $cat['count'] ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-brand">
                <div class="logo-image-container">
                    <img src="/assets/Logodesa.png" alt="Logo Desa" class="footer-logo">
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
                        <a href="#" class="social-link"><i class="fab fa-facebook social-icon"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram social-icon"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter social-icon"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="footer-section contact">
                <h4>Kontak Desa</h4>
                <p><i class="fas fa-phone"></i> 088888888888</p>
                <p><i class="fas fa-envelope"></i> sindoharjo.desa@gmail.com</p>
                <p><i class="fas fa-clock"></i> Senin - Kamis (08.00 - 15.00) & Jumat (08.00 - 11.00)</p>
                <p><i class="fas fa-map-marker-alt"></i> Jalan Sindoharjo, Desa Sleman, Rt 004 / Rw 005 DIY.</p>
            </div>
            
            <div class="footer-section emergency">
                <h4>Nomor Telephone Penting</h4>
                <p>Jumadi/Kades Kersik<br><strong>08124368478</strong></p>
                <p>Yayan/Ambulan Kersik<br><strong>085392095123</strong></p>
            </div>
        </div>
    </footer>

    <!-- Complaint Button -->
    <section>
        <button class="pengaduan-btn" onclick="toggleForm()">📝 Pengaduan</button>
        <div class="form-container" id="formPengaduan">
            <form>
                <h2>Form Pengaduan</h2>
                <label for="nama">Nama <span>*</span></label>
                <input type="text" id="nama" placeholder="Masukkan nama Anda" required>

                <label for="telepon">Nomor Telepon/WA <span>*</span></label>
                <input type="tel" id="telepon" placeholder="Masukkan nomor HP/WhatsApp" required>

                <label for="kategori">Kategori Pengaduan <span>*</span></label>
                <select id="kategori" required>
                    <option value="">Pilih kategori pengaduan</option>
                    <option value="pelayanan">Pelayanan</option>
                    <option value="infrastruktur">Infrastruktur</option>
                    <option value="administrasi">Administrasi</option>
                </select>

                <label for="pengaduan">Pengaduan <span>*</span></label>
                <textarea id="pengaduan" placeholder="Masukkan detail aduan Anda" required></textarea>

                <label for="lampiran">Lampiran</label>
                <input type="file" id="lampiran">

                <button type="submit" class="kirim-btn">📩 Kirim</button>
            </form>
        </div>
    </section>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="/js/main.js"></script>

    <script>
        // Toggle complaint form
        function toggleForm() {
            const form = document.getElementById('formPengaduan');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }

        // Initialize GSAP animations
        document.addEventListener("DOMContentLoaded", function() {
            // Your animation code here
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>