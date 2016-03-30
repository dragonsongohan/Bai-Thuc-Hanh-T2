<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Nguyen Truong Duy - 20135248</title>
<link href="mystyle.css" rel="stylesheet" type="text/css" />
</head>
<body style="text-align: center;"> 

<?php 
if (isset($_POST['tinh'])) {
    $tenchuho = $_POST['tenchuho'];
    $chisocu = $_POST['chisocu'];
    $chisomoi = $_POST['chisomoi'];
   $dongia = 2000;
    if (!empty($_POST['dongia'])) {
        $dongia = $_POST['dongia'];
    }
    $result = ($chisomoi - $chisocu) * $dongia;
}
?>

    <h2 >Nguyen Truong Duy - 20135248</h2>
    <div id="header">THANH TOAN TIEN DIEN</div>
    <div id="content">
    <form action="Page1.php" method="post">
    <table>
        <tr>
            <td>Ten chu ho: </td>
            <td><input type="text" name="tenchuho" id="tenchuho" value="<?php if (!empty($tenchuho)) { echo $tenchuho; } else { echo " "; }?>"/></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Chi so cu: </td>
            <td><input type="text" name="chisocu"  id="chisocu" value="<?php if (!empty($chisocu)) { echo $chisocu; } else { echo " "; }?>"/></td>
            <td> (Kw)</td>
        </tr>
        <tr>
            <td>Chi so moi: </td>
            <td><input type="text" name="chisomoi" id="chisomoi" value="<?php if (!empty($chisomoi)) echo $chisomoi; else echo " ";?>"/></td>
            <td> (Kw)</td>
        </tr>
        <tr>
            <td>Don gia: </td>
            <td><input type="text" name="dongia"  value="<?php if (!empty($dongia)) echo $dongia; else echo "2000";?>"/></td>
            <td> (VND)</td>
        </tr>
        <tr>
            <td>So tien thanh toan: </td>
            <td><input type="text" name="result" disabled="true" id="result" value="<?php if (!empty($result)) echo $result; else echo " ";?>"/></td>
            <td> (VND)</td>
        </tr>
         <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="tinh" value="Tinh"/></td>
            <td>&nbsp;</td>
        </tr>
    </table>
    </form>
    </div>
</body>
</html>