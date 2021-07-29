<?php
include 'koneksi.php';
$sql ="SELECT * from mhs where nim='$_POST[nim]'"  ;
if ($conn->query($sql)){
    echo "Data Berhasil Ditampilkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: index.php");
?>