<!DOCTYPE html>
<style>
    .f{
        font-size: 15px;
        font-family: "Courier New", Courier, monospace;
        color: white;
    }
    body{
    background: url('space-halo-5-1626966.jpg') no-repeat center center fixed;
                -webkit-background-size: 100% 100%;
                -moz-background-size: 100% 100%;
                -o-background-size: 100% 100%;
                background-size: 100% 100%;
}
h1{
    font-size: 200px;
}
button{
    font-size: 16px;
    background: linear-gradient(to bottom, #1c1a1a, #00010a);
    color: #4E4D4B;
    font-weight: bold;
    cursor: pointer;
    width: 100%;
    padding: 10px 0;
    outline:none; 
    }
</style>
<h1> </h1>

<?php
include 'koneksi.php';
$sql = "SELECT * FROM mhs";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<table border=1 bgcolor=#00010a align=center style='border-collapse:collapse;'>
    <tr>
    <th class=f>NIM</th>
    <th class=f>Nama Lengkap</th>
    <th class=f>Tempat, Tanggal Lahir</th>
    <th class=f>Jenis Kelamin</th>
    <th class=f>Agama</th>
    <th class=f>Alamat</th>
    <th class=f>Alamat Email</th>
    <th class=f>Nomor Telepon</th>
    <th class=f>Sekolah Dasar</th>
    <th class=f>Sekolah Menengah Pertama</th>
    <th class=f>Sekolah Menengah Atas</th>
    <th class=f>Action</th>
    </tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr class=f>
        <td>$row[nim]</td>
        <td>$row[nama]</td>
        <td>$row[ttangal]</td>
        <td>$row[jk]</td>
        <td>$row[Agama]</td>
        <td>$row[alamat]</td>
        <td>$row[email]</td>
        <td>$row[nohp]</td>
        <td>$row[sd]</td>
        <td>$row[smp]</td>
        <td>$row[sma]</td>";
        echo "<td> <a href=form_tampil.php?nim=$row[nim]>Tampilkan</a>
                    <a href=form_update.php?nim=$row[nim]>Ubah</a>
                    <a href=delete.php?nim=$row[nim]>Hapus</a>
        </td>
        </tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
<button><a href="form_input.php">Tambah Data</a></button>