<?php
session_start();

if(isset($_session['uname'])){

    session_destroy();
    echo "<script>location.href='tampilan.php'</script>";

}
else{
    echo"<script>location.href='tampilan.php'</script>";

}
?> 