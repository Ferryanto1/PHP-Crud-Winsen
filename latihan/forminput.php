<!DOCTYPE html>
<html>

<head>
	<title>Halaman input data</title>
</head>

<body>
	<h2>Halaman input data</h2>
	<a href="mahasiswa.php" style="padding: 0.4% 0.8%; background-color:#3081D0; color:#fff; border-radius:2px;text-decoration: none;">Data Mahasiswa</a><br><br>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim" placeholder="nim" autocomplete="off" required></td>
			</tr>
			<tr>
				<td>Nama lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="nama lengkap" autocomplete="off" required></td>
			</tr>
			<tr>
				<td>No telepon</td>
				<td>:</td>
				<td><input type="text" name="telp" placeholder="No telepon" autocomplete="off" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" placeholder="email" autocomplete="off" required></td>
			</tr>

			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<select name="jurusan">
						<option value="Teknik Informatika">Teknik Informatika</option>
						<option value="Sistem Informasi">Sistem Informasi</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="simpan" placeholder="simpan;" required></td>
			</tr>
		</table>
	</form>
	<?php
	$conn = new mysqli("localhost", "root", "", "latihan");

	// Periksa koneksi
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	if (isset($_POST['simpan'])) {
		$insert = mysqli_query($conn, "INSERT INTO mahasiswa VALUES
			('" . $_POST['nim'] . "',
			'" . $_POST['nama'] . "',
			'" . $_POST['telp'] . "',
			'" . $_POST['email'] . "',
			'" . $_POST['jurusan'] . "')");
		if ($insert) {
			echo "Berhasil disimpan";
		} else {
			"Gagal disimpan" . mysqli_error($conn);
		}
	}
	?>
</body>

</html>