<?php 
include 'koneksi.php';
 
$nomor = $_POST['nomor'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$jenis = $_POST['jenis'];

 
mysqli_query($koneksi, "INSERT INTO servis (nomor, nama, tanggal, jenis) VALUES ('$nomor','$nama','$tanggal','$jenis')");
 
header("location:index.php?pesan=input");
 
?>