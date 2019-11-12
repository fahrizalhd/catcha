<?php
    include 'connect.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $update = mysqli_query($conn, "UPDATE user SET nama='$nama', username='$username', email='$email', password='$password' WHERE id='$id'");
    if ($update) {
        header("location:my_account.php");
    } else {
        echo 'Gagal';
    }
?>