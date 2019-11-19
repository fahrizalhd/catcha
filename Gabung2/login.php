<?php
session_start();

$connection = mysqli_connect('localhost','root','');
mysqli_select_db($connection, 'wad_tubes');

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $s = "select * from user where username = '$username' && password = '$password' ";

    $result = mysqli_query($connection, $s);

    if($result){
       header('location:home.php');
        
    }else{
        header ('location:tampilan.php');
    }

?>