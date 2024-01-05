<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "f_servis";

// Membuat koneksi ke database menggunakan MySQLi
$koneksi = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Set karakter set untuk koneksi
$koneksi->set_charset("utf8");
?>