<?php
include 'koneksi.php';
$sql = "UPDATE mhs SET nama='$_POST[nama]', ttangal='$_POST[ttanggal]', jk='$_POST[jk]',
 Agama='$_POST[agama]', alamat='$_POST[alamat]', email='$_POST[email]', nohp='$_POST[nohp]',
 sd='$_POST[sd]', smp='$_POST[smp]', sma='$_POST[sma]'
 where nim='$_POST[nim]' ;" ;
if ($conn->query($sql)){
    echo "Data Berhasil Diubah";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: index.php");
?>