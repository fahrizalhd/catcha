<?php 
include('koneksi.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama Fashion</td>
                <td><input type="text" name="nama"/></td>
            </tr>
            <tr>
                <td>Designer</td>
                <td><input type="text" name="pencipta"/></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><input type="file" name="gambar"/></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><textarea name="keterangan"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tombol"/></td>
            </tr>
        </table>
        </form>

<!--Action Simpan-->

<?php
if(isset($_POST['tombol'])){
    $folder = './file/';
    $name_p = $_FILES['gambar']['name'];
    $sumber_p = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($sumber_p,$folder.$name_p);
    $insert = mysqli_query($connect,"INSERT INTO fashion VALUES (NULL,'".$_POST['nama']."','".$_POST['pencipta']."','".$_POST['keterangan']."',
    '".$name_p."')");

    if($insert){
        echo 'Data Berhasil disimpan';

    }else{
        echo 'Data Gagal Tersimpan';
    }
}
?>

</body>
</html>