<?php

include '../conn.php';
$sql = "SELECT * FROM profile where id='1'";
$result = $conn->query($sql);
                                                $profile = $result->fetch_assoc();
                                                $nama = $profile['nama'];

?>
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo strtoupper($nama) ?></div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Tables -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Menu</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="profile.php">
            <i class="fas fa-fw fa-user"></i>
            <span>Identitas</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>