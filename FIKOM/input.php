<html>
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
    background: linear-gradient(to bottom, #1c1a1a, #0d0c0c);
    border: 1px solid #fffdfc;
    color: #FFF;
    margin: 4px 10px;
    padding: 5px;
    width: 100px;
    }
    input[type=submit] {
        font-size: 16px;
 background: linear-gradient(#1c1a1a 5%, #0d0c0c 100%);
 color: #4E4D4B;
 font-weight: bold;
 cursor: pointer;
 width: 100%;
 padding: 10px 0;
 outline:none;
 
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
<body>
<form action="hasil.php" method="post" >
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
            <th colspan="2" class="hi"><input type="text" name="BigName" placeholder="Your Full Name"></th>
        </tr>
        <tr height="20px" >
            <td colspan="2" class="f"><input type="text" name="bio1" placeholder="About You"> </td>
        </tr>
        <tr height="20px">
            <td colspan="2" class="f">
            <input type="text" name="bio2" placeholder="About You">
            </td> 
        </tr>
        <tr>
            <td class="f">Place, Date of Birth</td>
            <td class="f"><input type="text" name="PDoB" placeholder="Place,Date of Birth"> <br></td>
        </tr>
        <tr>
            <td class="f">Gender</td>
            <td class="f"><input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Female">Female </td>
        </tr>
        <tr>
            <td class="f">Religion</td>
            <td class="f"><input type="text" name="religion" placeholder="Your Religion"></td>
        </tr>
        <tr>
            <td class="f">Address</td>
            <td class="f"><input type="text" name="address" placeholder="Your Address"></td>
        </tr>
        <tr>
            <td class="f">Email Address</td>
            <td class="f"><input type="text" name="email" placeholder="Your Email"></td>
        </tr>
        <tr>
            <td class="f">Phone Number</td>
            <td class="f"><input type="text" name="Pnum" placeholder="Your Phone Number"></td>
        </tr>
        <tr>
            <td class="f">Educational Background</td>
            <td>
                <ul class="f">
                    <li><input type="text" name="ES" placeholder="Elementary School"></li>
                    <li><input type="text" name="JHS" placeholder="Junior High School"></li>
                    <li><input type="text" name="HS" placeholder="High School"></li>
                    <li><input type="text" name="college" placeholder="College"></li>
                </ul>
            </td>
            
        </tr>
        
    </table> 
    <input type="submit" value="Input Data" >
</form>
</body>
</html>

