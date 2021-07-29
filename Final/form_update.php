<style>
    .hi{
        font-size: 30px;
        font-family: "Courier New", Courier, monospace;
        color: white;
    }
    .f{
        font-size: 15px;
        font-family: "Courier New", Courier, monospace;
        color: white;
    }
    input[type=text] {
    background: linear-gradient(to bottom, #1c1a1a, #00010a);
    border: 1px solid #fffdfc;
    color: #FFFFFF;
    margin: 4px 10px;
    padding: 5px;
    width: 100px;
    }
    input[type=submit] {
        font-size: 16px;
        font-family: "Courier New", Courier, monospace;
 background: linear-gradient(to bottom, #1c1a1a, #00010a);
 color: #ffffff;
 font-weight: bold;
 cursor: pointer;
 width: 100%;
 padding: 10px 0;
 outline:none;
 
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
</style>
<?php

include 'koneksi.php';
$nim = $_GET['nim'];
$sql = "SELECT * FROM mhs WHERE nim='$nim'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
?>
<form action= "update.php" method="post" >
<table  border-style: none; bgcolor=#00010a align="center">
        <tr height="10px">
            <th colspan="3"></th>
        </tr>
        <tr>
            <td rowspan="13">
                <img src="IMG_1685.jpg" width="300" />
            </td>
        </tr>
        <tr>
            <td class="hi">BIODATA</td>
        </tr>
        <tr>
            <td class="f">NIM</td>
            <td class="f"><input type="text" name="nim" value="<?=$row['nim'];?>" readonly></td>
        </tr>
        <tr>
            <td class="f">Nama</td>
            <td class="f"><input type="text" name="nama" value="<?=$row['nama'];?>"></td>
        </tr>
        <tr>
            <td class="f">Tempat, Tanggal Lahir</td>
            <td class="f"><input type="text" name="ttanggal" value="<?=$row['ttangal'];?>"> <br></td>
        </tr>
        <tr>
            <td class="f">Jenis Kelamin</td>
            <td class="f"><input type="radio" name="jk" value="Laki-Laki">Laki-Laki<input type="radio" name="jk" value="Perempuan">Perempuan</td>
        </tr>
        <tr>
            <td class="f">Agama</td>
            <td class="f"><input type="text" name="agama" value="<?=$row['Agama'];?>"></td>
        </tr>
        <tr>
            <td class="f">Alamat</td>
            <td class="f"><input type="text" name="alamat" value="<?=$row['alamat'];?>"></td>
        </tr>
        <tr>
            <td class="f">Alamat Email</td>
            <td class="f"><input type="text" name="email" value="<?=$row['email'];?>"></td>
        </tr>
        <tr>
            <td class="f">Nomor Telepon</td>
            <td class="f"><input type="text" name="nohp" value="<?=$row['nohp'];?>"></td>
        </tr>
        <tr>
            <td class="f">Sekolah Dasar</td>
            <td class="f"><input type="text" name="sd" value="<?=$row['sd'];?>"></td>
        </tr>
        <tr>
            <td class="f">Sekolah Menengah Pertama</td>
            <td class="f"><input type="text" name="smp" value="<?=$row['smp'];?>"></td>
        </tr>
        <tr>
            <td class="f">Sekolah Menengah Atas</td>
            <td class="f"><input type="text" name="sma" value="<?=$row['sma'];?>"></td>
        </tr>
        
        
    </table> 
    <input class="b" type="submit" value="Ubah Data" >
</form>
<?php
$conn->close();
} else echo "Data tidak ditemukan";
?>