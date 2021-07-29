<?php
include 'koneksi.php';
$nim = $_GET['nim'];
$sql ="DELETE from mhs where nim='$nim'"  ;
if ($conn->query($sql)){
    echo "Data Berhasil Dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: index.php");
?>