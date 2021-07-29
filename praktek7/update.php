<?php
include 'koneksi.php';//menyisipkan file koneksi.php
$sql = "UPDATE mhs SET nama='$_POST[nama]', 
		tgl_lahir='$_POST[tgl]' WHERE nim='$_POST[nim]';";
if ($conn->query($sql)) {
  echo "Data berhasil diubah";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: index.php");
?>