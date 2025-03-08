<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$host = "sql109.infinityfree.com";
$port = "3306";
$dbname = "if0_38431756_hmsi";
$username = "if0_38431756";
$password = "ggoEFfKAMDt";

// Coba koneksi ke database
$conn = new mysqli($host, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("❌ Koneksi Gagal: " . $conn->connect_error);
}
echo "✅ Koneksi Berhasil!";
?>
