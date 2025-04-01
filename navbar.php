<?php
// header.php
?>
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
    <a href="index.php" class="logo d-flex align-items-center">
      <h1 class="sitename">Dusun Dukuh</h1><span>.</span>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php" class="active">About</a></li>
        <li><a href="berita.php">Berita</a></li>
        <li class="dropdown">
          <a href="#"><span>Pejabat</span><i class="bi bi-chevron-down toggle-dropdown"></i></a>
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
