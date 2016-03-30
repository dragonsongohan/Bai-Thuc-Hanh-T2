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
    $month = $_POST['month'];
    $year = $_POST['year'];
}

function getDay($month, $year) {
    $namNhuan = false;
    $result = "Tháng $month năm $year có ";
    if ($year % 4 == 0) {
        $namNhuan = true;
    }
    switch ($month) {
        case 1:
        case 3:
        case 5: 
        case 7:
        case 8:
        case 10:
        case 12:
            $result = $result . "31 ngày.";
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            $result = $result . "30 ngày.";
            break;
        case 2:
            if ($namNhuan) {
                $result = $result . "29 ngày.";
            } else {
                $result = $result . "28 ngày.";
            }
    }
    return $result;
}
?>

    <h2 >NGUYỄN TRƯƠNG DUY - 20135248</h2>
    <div id="header" >TÍNH NGÀY TRONG THÁNG</div>
    <div id="content">
        <form action="Page1.php" method="post" name="dayofmonth">
            <table>
                <tr>
                    <td>Tháng/Năm</td>
                    <td><input name="month" type="text" value="<?php
                             if (!empty($month)) { echo $month;}
                        ?>"/></td>
                    <td>&nbsp; / &nbsp;</td>
                    <td><input name="year" type="text" value="<?php
                             if (!empty($year)) { echo $year;}
                        ?>"/></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td colspan="3"><input size="100" name="tinh" value="Tính số ngày" type="submit"/></td>
                </tr>
                <tr><td colspan="4" style="text-align: center; color: darkred;"><b><input type="text" name="result" disabled="true" style="width: 350px; text-align: center; "
                value="<?php
                             if (!empty($year) && !empty($month)) {echo getDay($month, $year);}
                        ?>"
                /></b></td></tr>
            </table>
        </form>
    </div>
</body>
</html>