<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Nguyen Truong Duy - 20135248</title>
</head>
<body style="text-align: center;"> 
    <h2 >Nguyen Truong Duy - 20135248</h2>
    <h4 style="color: blue">Phep Tinh Tren Hai So</h4>
    <form action="Page2.php" method="get" style="text-align: center;">
        <font>Chon phep tinh:</font> 
    <input type="radio" name="operator" value="Cong" >Cong</input>
    <input type="radio" name="operator" value="Tru" >Tru</input>
    <input type="radio" name="operator" value="Nhan" >Nhan</input>
    <input type="radio" name="operator" value="Chia" >Chia</input>
        <table style="margin: auto">
            <tr>
                <td style="color: blue;">So thu nhat</td>
                <td><input type="text" name="so1"/></td>
            </tr>
            <tr>
                <td style="color: blue;">So thu hai</td>
                <td><input type="text" name="so2"/></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td style="text-align: left;"><input type="submit" name="calculate" value="Tinh"/></td>
            </tr>
        </table>
    </form>
</body>
</html>