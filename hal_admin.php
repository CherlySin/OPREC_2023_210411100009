<?php 
$koneksi = mysqli_connect("localhost", "root"
, "", "oprec_2023");
$sql = "SELECT * FROM mahasiswa";
$hasil = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
	<style>

	</style>
</head>
<body>
	<h1>DATA MAHASISWA</h1>
	<form>
		<input type="text" name="cari">
		<button type="submit">Cari</button>
	</form>
	<br>
	<a href="hal_admin.php">Refresh</a>

	<table border="1">
		<tr>
			<th>NIM</th>
			<th>NAMA MAHASISWA</th>
			<th>ALAMAT</th>
			<th>JENIS KELAMIN</th>
			<th>TANGGAL LAHIR</th>
		</tr>
		<?php foreach ($row as $hasil => mysqli_fetch_assoc($row)) { ?>

		<tr>
			<td><?php echo $row["nim"] ?></td>
			<td><?php echo $row["nama_mahasiswa"] ?></td>
			<td><?php echo $row["alamat"] ?></td>
			<td><?php echo $row["jenis_kelamin"] ?></td>
			<td><?php echo $row["tanggal_lahir"] ?></td>
		</tr>

	<?php } ?>
	</table>
	<a href="login.php">Logout</a>

</body>
</html>