<?php
include 'koneksi.php';
$sql = "UPDATE Bio SET About1='$_POST[bio1]', About2='$_POST[bio2]', 
PlaceDOB='$_POST[PDoB]', Gender='$_POST[gender]', Religion='$_POST[religion]',
Address='$_POST[address]', Email='$_POST[email]', PhoneNum='$_POST[Pnum]', ElementarySch='$_POST[ES]',
JuniorHighSch='$_POST[JHS]', HighSch='$_POST[HS]', College='$_POST[college]' where FullName='$_POST[BigName]' ;" ;
if ($conn->query($sql)){
    echo "Data Successfully changed";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: index.php");
?>