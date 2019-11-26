<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$pencipta = $_POST['pencipta'];
$keterangan = $_POST['keterangan'];
$gambar = $_POST['gambar'];
 
// update data ke database
mysqli_query($conn,"update fashion set nama='$nama', pencipta='$pencipta', keterangan='$keterangan' gambar='$gambar' where id='$id'");
 
// mengalihkan halaman kembali ke FormUpload.php
header("location:FormUpload.php");
 
?>