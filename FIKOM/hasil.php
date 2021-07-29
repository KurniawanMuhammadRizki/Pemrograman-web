<!DOCTYPE html>
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
    background: url('spacemoon.jpg') no-repeat center center fixed;
                -webkit-background-size: 100% 100%;
                -moz-background-size: 100% 100%;
                -o-background-size: 100% 100%;
                background-size: 100% 100%;
}
h1{
    font-size: 200px;
}
</style>
<html>
    <head>
        <title>Praktikum 1</title>  
    </head>
    <h1> </h1>
    
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
            <th colspan="2" class="hi"><?php echo " ".$_POST['BigName']?></th>
        </tr>
        <tr height="20px" >
            <td colspan="2" class="f"><?php echo " ".$_POST['bio1']?></td>
        </tr>
        <tr height="20px">
            <td colspan="2" class="f"><?php echo " ".$_POST['bio2']?>
            </td> 
        </tr>
        <tr>
            <td class="f">Place, Date of Birth</td>
            <td class="f"><?php echo ": ".$_POST['PDoB']?></td>
        </tr>
        <tr>
            <td class="f">Gender</td>
            <td class="f"><?php echo ": ".$_POST['gender']?></td>
        </tr>
        <tr>
            <td class="f">Religion</td>
            <td class="f"><?php echo ": ".$_POST['religion']?></td>
        </tr>
        <tr>
            <td class="f">Address</td>
            <td class="f"><?php echo ": ".$_POST['address']?></td>
        </tr>
        <tr>
            <td class="f">Email Address</td>
            <td class="f"><?php echo ": ".$_POST['email']?></td>
        </tr>
        <tr>
            <td class="f">Phone Number</td>
            <td class="f"><?php echo ": ".$_POST['Pnum']?></td>
        </tr>
        <tr>
            <td class="f">Educational Background</td>
            <td>
                <ul class="f">
                    <li><?php echo " ".$_POST['ES']?></li>
                    <li><?php echo " ".$_POST['JHS']?></li>
                    <li><?php echo " ".$_POST['HS']?></li>
                    <li><?php echo " ".$_POST['college']?></li>
                </ul>
            </td>
        </tr>
    </table> 
    </body>
</html>