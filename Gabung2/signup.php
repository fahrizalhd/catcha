<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'wad_tubes');

if(isset($_POST['insertdata'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO user (email,username,password) VALUES ('$email','$username','$password')";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
        echo '<script> alert("Data Saved"); </script>';
        header('Location: tampilan.php');
    }else{
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
?>