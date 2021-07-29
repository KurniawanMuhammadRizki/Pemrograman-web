<?php
include 'koneksi.php';//menyisipkan file koneksi.php
$sql = "INSERT INTO Bio VALUE('$_POST[BigName]','$_POST[bio1]','$_POST[bio2]',
'$_POST[PDoB]','$_POST[gender]','$_POST[religion]','$_POST[address]','$_POST[email]',
'$_POST[Pnum]','$_POST[ES]','$_POST[JHS]','$_POST[HS]','$_POST[college]')";
if ($conn->query($sql)) {
  echo "Record baru berhasil ditambahkan";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: index.php");
?>