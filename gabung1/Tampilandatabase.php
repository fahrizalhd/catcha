<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>

	<table border="1">
		<tr>
            <th>No</th>
            <th>ID</th>
			<th>Nama Fashion</th>
			<th>Designer</th>
			<th>Description</th>
			<th>Style</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from fashion");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['pencipta']; ?></td>
				<td><?php echo $d['keterangan']; ?></td>
                <td><?php echo $d['gambar']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>