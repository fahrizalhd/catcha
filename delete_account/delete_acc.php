<?php

    $conn = mysqli_connect("localhost","root","","catcha");

    session_start();
    $id = $_GET['id'];

    $query = "DELETE FROM user WHERE id = '$id'";

    $delete = mysqli_query($conn, $query);

    if($query){
       echo"<script>alert('berhasil delete account');window.location.href='my_account.php'</script>";
        
    }else{
        echo"<script>alert('gagal delete account');";
    }
?>