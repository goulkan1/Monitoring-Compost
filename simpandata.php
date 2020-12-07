<?php
// Parameter untuk database MySQL
$host = "localhost"; // Nama host atau IP server
$user = "root";      // Username MySQL
$pass = "";          // Password MySQL
$name = "kompos";      // Nama database MySQL
 
// Baca parameter get  /simpandata.php?kelembaban=x <===
$kelembaban = $_GET["kelembaban"];
$suhu = $_GET["suhu"];
 
// Buat koneksi ke database MySQL
$conn = new mysqli($host, $user, $pass, $name);
 
// Periksa apakah koneksi sudah berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
 
// Perintah SQL untuk menyimpan data kelembaban ke tabel sensor
$sql = "INSERT INTO monitoring (kelembaban,suhu) VALUES ('$kelembaban','$suhu')";
 
// Jalankan dan periksa apakah perintah berhasil dijalankan
if ($conn->query($sql) === TRUE) {
    echo "Sukses - Tersimpan: ".$kelembaban;
} else {
    echo "Error: ". $conn->error;
}
 
$conn->close();
?>