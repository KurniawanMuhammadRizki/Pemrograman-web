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
.b{
    font-size: 16px;
    background: linear-gradient(#1c1a1a 5%, #0d0c0c 100%);
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

$nim = $_GET['nim'];


$sql = "SELECT nim,nama,ttangal,jk,Agama,alamat,email,nohp,sd,smp,sma
 FROM mhs WHERE nim = '$nim' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    ?>
    
    <table  border-style: none; bgcolor=#00010a align="center">
    <tr height="10px">
        
            <th colspan="3" class="hi">BIODATA</th>
        </tr>
       
        <tr>
            <td rowspan="13">
                <img src="IMG_1685.jpg" width="300" />
            </td>
            <br>
        </tr>
        
        <tr>
            <td class="f">NIM</td>
            <td class="f"><?php echo ": ".$row ['nim'];?></td>
        </tr>
        <tr>
            <td class="f">Nama</td>
            <td class="f"><?php echo ": ".$row ['nama'];?></td>
        </tr>
        <tr>
            <td class="f">Tempat, Tanggal Lahir</td>
            <td class="f"><?php echo ": ".$row ['ttangal'];?></td>
        </tr>
        <tr>
            <td class="f">Jenis Kelamin</td>
            <td class="f"><?php echo ": ".$row ['jk'];?></td>
        </tr>
        <tr>
            <td class="f">Agama</td>
            <td class="f"><?php echo ": ".$row ['Agama'];?></td>
        </tr>
        <tr>
            <td class="f">Alamat</td>
            <td class="f"><?php echo ": ".$row ['alamat'];?></td>
        </tr>
        <tr>
            <td class="f">Alamat Email</td>
            <td class="f"><?php echo ": ".$row ['email'];?></td>
        </tr>
        <tr>
            <td class="f">Nomor Telepon</td>
            <td class="f"><?php echo ": ".$row ['nohp'];?></td>
        </tr>
        <tr>
            <td class="f">Sekolah Dasar</td>
            <td class="f"><?php echo ": ".$row ['sd'];?></td>
        </tr>
        <tr>
            <td class="f">Sekolah Menengah Pertama</td>
            <td class="f"><?php echo ": ".$row ['smp'];?></td>
        </tr>
        <tr>
            <td class="f">Sekolah Menengah Atas</td>
            <td class="f"><?php echo ": ".$row ['sma'];?></td>
        </tr>
        
        
    </table>
    
    <button class="b"><a href=index.php>Kembali</a></button>
    
    <?php
    $conn->close();
} else echo "No Data Found";
?>