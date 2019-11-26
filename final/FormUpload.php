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
    $nama = $_POST['nama'];
    $pencipta = $_POST['pencipta'];
    $keterangan = $_POST['keterangan'];

    $folder = './file/';
    $name_p = $_FILES['gambar']['name'];
    $x = explode('.',$name_p);
    $ekstensi = strtolower(end($x));
    $sumber_p = $_FILES['gambar']['tmp_name'];
    
    move_uploaded_file($sumber_p,$folder.$name_p);
    // $insert = mysqli_query($conn,"INSERT INTO fashion VALUES ('".$_POST['nama']."','".$_POST['pencipta']."','".$_POST['keterangan']."',
    // '".$name_p."')");
    $query ="INSERT INTO fashion VALUES (null,'$nama','$pencipta','$keterangan','$name_p')";
    $insert = mysqli_query($conn, $query);
    echo mysqli_error($conn);
    var_dump($query);
    if($insert){
        echo 'Data Berhasil disimpan';

    }else{
        echo 'Data Gagal Tersimpan';
    }
}
?>

</body>
</html>