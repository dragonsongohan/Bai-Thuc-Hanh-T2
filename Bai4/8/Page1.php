<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Nguyễn Trương Duy - 20135248</title>
<link href="mystyle.css" rel="stylesheet" type="text/css" />
</head>
<body style="text-align: center;"> 

<?php 
if (isset($_POST['tinh'])) {
    $soN = $_POST['soN'];
}
function getSoNguyenTo($soN) {
    $result = "";
    $check = false;
    for ($i = 2; $i <= $soN; $i++) {
        if (checkNguyenTo($i)) {
            $result = $result . $i . " ";
            $check = true;
        }
    }
    if ($check) {
       return $result; 
    }
    return "Không có số nguyên tố nào <= N";
}
function checkNguyenTo($so) {
    for ($j = 2; $j <= sqrt($so); $j++) {
            if ($so % $j == 0) {
                return false;
            }
    }
    return true;
}
?>

    <h2 >NGUYỄN TRƯƠNG DUY - 20135248</h2>
    <div id="header" >TÌM SỐ NGUYÊN TỐ</div>
    <div id="content">
        <form action="Page1.php" method="post" name="dayofmonth">
            <table>
                <tr>
                    <td>Nhập N: </td>
                    <td><input name="soN" type="text" value="<?php
                             if (!empty($soN)) { echo $soN;}
                        ?>"/></td>
                </tr>
            </table>
            <input style="margin-left: 150px;" name="tinh" type="submit" value="Các số nguyên tố &lt;= N"/>
            <br />
            <input type="text" name="result" disabled="true" style="width: 250px; margin-left: 100px; "
                value="<?php
                             if (!empty($soN)) {echo getSoNguyenTo($soN);}
                        ?>"
                />
        </form>
    </div>
</body>
</html>