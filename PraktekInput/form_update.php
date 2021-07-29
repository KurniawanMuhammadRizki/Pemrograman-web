<style>
    .f{
        font-size: 15px;
        font-family: "Courier New", Courier, monospace;
        color: white;
    }
    body{
    background: url('spacemoon.jpg') no-repeat center center fixed;
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

$BigName =$_GET['BigName'];


$sql = "SELECT * FROM bio WHERE FullName= '$BigName'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    ?>
    <form action = "update.php" method="post">
    <table  border-style: none; bgcolor=#1f2120 align="center">
        <tr height="10px">
            <th colspan="3"></th>
        </tr>
        <tr>
            <td rowspan="11">
                <img src="IMG_1685.jpg" width="300" />
            </td>
        </tr>
        <tr>
            <th colspan="2" class="hi"><input type="text" name="BigName" value="<?=$BigName;?>"readonly ></th>
        </tr>
        <tr height="20px" >
            <td colspan="2" class="f"><input type="text" name="bio1" value="<?=$row['About1'];?>" > </td>
        </tr>
        <tr height="20px">
            <td colspan="2" class="f">
            <input type="text" name="bio2" value="<?=$row['About2'];?>" >
            </td> 
        </tr>
        <tr>
            <td class="f">Place, Date of Birth</td>
            <td class="f"><input type="text" name="PDoB" value="<?=$row['PlaceDOB'];?>" > <br></td>
        </tr>
        <tr>
            <td class="f">Gender</td>
            <td class="f">
                <input type="radio" name="gender"value="<?=$row['Gender'];?> value="Male">Male 
                <input type="radio" name="gender" value="Female">Female 
            </td>
        </tr>
        <tr>
            <td class="f">Religion</td>
            <td class="f"><input type="text" name="religion" value="<?=$row['Religion'];?>" ></td>
        </tr>
        <tr>
            <td class="f">Address</td>
            <td class="f"><input type="text" name="address" value="<?=$row['Address'];?>" ></td>
        </tr>
        <tr>
            <td class="f">Email Address</td>
            <td class="f"><input type="text" name="email" value="<?=$row['Email'];?>" ></td>
        </tr>
        <tr>
            <td class="f">Phone Number</td>
            <td class="f"><input type="text" name="Pnum" value="<?=$row['PhoneNum'];?>" ></td>
        </tr>
        <tr>
            <td class="f">Educational Background</td>
            <td>
                <ul class="f">
                    <li><input type="text" name="ES" value="<?=$row['ElementarySch'];?>" ></li>
                    <li><input type="text" name="JHS" value="<?=$row['JuniorHighSch'];?>"></li>
                    <li><input type="text" name="HS" value="<?=$row['HighSch'];?>" ></li>
                    <li><input type="text" name="college" value="<?=$row['College'];?>" ></li>
                </ul>
            </td>
            
        </tr>
        
    </table> 
    <input class="b" type="submit" value="Edit Data" >
    </form>
    <?php
    $conn->close();
} else echo "No Data Found";
?>