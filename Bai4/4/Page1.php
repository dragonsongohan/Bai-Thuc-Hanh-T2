<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Nguyen Truong Duy - 20135248</title>
<link href="mystyle.css" rel="stylesheet" type="text/css" />
</head>
<body style="text-align: center;"> 

<?php 
define("PI", 3.14);
if (isset($_POST['tinh'])) {
    $bankinh = $_POST['bankinh'];
    $dientich = PI * $bankinh * $bankinh;
    $chuvi = PI * 2 * $bankinh;
}
?>

    <h2 >Nguyen Truong Duy - 20135248</h2>
    <div id="header">DIEN TICH va CHU VI HINH TRON</div>
    <div id="content">
    <form action="Page1.php" method="post">
    <table>
        <tr>
            <td>Ban Kinh: </td>
            <td><input type="text" name="bankinh" value="<?php if (isset($bankinh)) echo $bankinh; else echo "";?>"/></td>
        </tr>
        <tr>
            <td>Dien Tich: </td>
            <td><input type="text" name="dientich" disabled="true" id="dientich" value="<?php if (!empty($bankinh)) { echo $dientich; } else { echo " "; }?>"/></td>
        </tr>
        <tr>
            <td>Chu vi: </td>
            <td><input type="text" name="chuvi" disabled="true" id="chuvi" value="<?php if (!empty($bankinh)) echo $chuvi; else echo " ";?>"/></td>
        </tr>
         <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="tinh" value="Tinh"/></td>
        </tr>
    </table>
    </form>
    </div>
</body>
</html>