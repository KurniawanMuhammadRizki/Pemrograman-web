<!DOCTYPE html>
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
button{
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
$sql = "SELECT * FROM Bio";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<table border=1 bgcolor=#1f2120 align=center style='border-collapse:collapse;'>
    <tr>
    <th class=f >Full Name</th>
    <th class=f>About </th>
    <th class=f>About</th>
    <th class=f>Place, Date of Birth</th>
    <th class=f>Gender</th>
    <th class=f>Religion</th>
    <th class=f>Address</th>
    <th class=f>Email Address</th>
    <th class=f>Phone Number</th>
    <th class=f>Elementary School</th>
    <th class=f>Junior High School School</th>
    <th class=f>High School</th>
    <th class=f>College</th>
    <th class=f>Action</th>
    </tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr class=f>
        <td>$row[FullName]</td>
        <td>$row[About1]</td>
        <td>$row[About2]</td>
        <td>$row[PlaceDOB]</td>
        <td>$row[Gender]</td>
        <td>$row[Religion]</td>
        <td>$row[Address]</td>
        <td>$row[Email]</td>
        <td>$row[PhoneNum]</td>
        <td>$row[ElementarySch]</td>
        <td>$row[JuniorHighSch]</td>
        <td>$row[HighSch]</td>
        <td>$row[College]</td>";

        echo "<td> <a href=form_update.php?BigName=$row[FullName]>Edit</a></td>
        </tr>";
        
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
<button><a href="form_input.php">Tambah Data</a></button>