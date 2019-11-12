<?php
    include 'koneksi.php';
    $db=mysqli_connect("localhost","root","","katalog");
    $sql = "DELETE * FROM fashion";
    $result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($result)) {

    
    header("location:menubar.php?pesan=hapus");
    }
?>