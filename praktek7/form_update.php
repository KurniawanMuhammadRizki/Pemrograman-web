<?php
include 'koneksi.php';
$nim = $_GET['nim'];
$sql = "SELECT * FROM mhs WHERE nim='$nim'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
?>
<form action="update.php" method="post">
	NIM <br><input type="text" name="nim" value="<?=$nim;?>" readonly><br>
	Nama <br><input type="text" name="nama" value="<?=$row['nama'];?>"><br>
	Tanggal Lahir <br> <input type="date" name="tgl" value="<?=$row['tgl_lahir'];?>">
	<input type="submit" value="Ubah Data">
</form>
<?php
$conn->close();
} else echo "Data tidak ditemukan";
?>
