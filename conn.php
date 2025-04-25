<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/config.php';

$host = "167.99.79.36" || 'sql112.infinityfree.com';
$port = 3306;
$dbname = "hmsi_impact_2025" || "if0_38676309_hmsi";
$username = "hmsi" || "if0_38676309";
$password = "hmsiimpact" || "6blJrX3Ojh";

$conn = new mysqli($host, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("❌ Koneksi Gagal: " . $conn->connect_error);
}
// echo "✅ Koneksi Berhasil";