<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "catcha"; // Nama databasenya
$connect = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL

if($connect->connect_error){
	die('Koneksi Gagal: ' . $db->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS fashion (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama varchar(255) NOT NULL,
    pencipta varchar(255) NOT NULL,
    keterangan varchar(255) NOT NULL,
    gambar blob NOT NULL
  )";

?>

