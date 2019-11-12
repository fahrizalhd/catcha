<!DOCTYPE html>
<html>
<head>
    <title>menu-bar</title>
</head>
<body>
<div id="content">
<?php
    $db=mysqli_connect("localhost","root","","katalog");
    $sql = "SELECT * FROM fashion";
    $result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<div id='img_div'>";
           
            echo "<img src='file/".$row['gambar']."'>";   
            echo "<p>".$row['nama']."</p>";
            echo "<p>".$row['pencipta']."</p>";
            echo "<p>".$row['keterangan']."</p>"; 
        echo "</div>";
    }
?>
            <a href="Delete.php?id=<?php echo $row['id']; ?>">Hapus</a>
            <a href="Edit.php?id=<?php echo $row['id']; ?>">Edit</a>
</body>
</html>
