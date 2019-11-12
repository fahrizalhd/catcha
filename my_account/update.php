<?php
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $usernme = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    include 'connect.php';
    mysqli_query($conn, "UPDATE user SET nama='$nama', username='$username', email='$alamat', password='$password' WHERE id='$id'");
    header ("Location: my_account.php");
?>