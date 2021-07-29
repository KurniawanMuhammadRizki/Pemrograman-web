<?php
include 'koneksi.php';//menyisipkan file koneksi.php
$sql = "INSERT INTO mhs VALUE('$_POST[nim]','$_POST[nama]','$_POST[ttanggal]',
'$_POST[jk]','$_POST[agama]','$_POST[alamat]','$_POST[email]','$_POST[nohp]',
'$_POST[sd]','$_POST[smp]','$_POST[sma]')";
if ($conn->query($sql)) {
  echo "Record baru berhasil ditambahkan";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: index.php");
?>