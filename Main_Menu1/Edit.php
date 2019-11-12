<html>
<head>
	<title>EDIT</title>
</head>
<body>
 

	<br/>
	<a href="FormUpload.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA</h3>
 
	<?php
    include 'koneksi.php';
    $db=mysqli_connect("localhost","root","","katalog");
    $sql = "SELECT * FROM fashion";
    $result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($result)) {

		?>
		<form method="post" action="Update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
						<input type="text" name="nama" value="<?php echo $row['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Pencipta</td>
					<td><input type="text" name="Pencipta" value="<?php echo $row['pencipta']; ?>"></td>
				</tr>
				<tr>
					<td>Keterangan</td>
					<td><input type="text" name="ket" value="<?php echo $row['keterangan']; ?>"></td>
				</tr>
                <tr>
					<td>Gambar</td>
					<td><input type="file" name="gambar" value="<?php echo "<img src='file/".$row['gambar']."'>"; ?>"></td>
				</tr>
                 
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>