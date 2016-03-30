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
    $diemhk1 = $_POST['diemhk1'];
    $diemhk2 = $_POST['diemhk2'];
    if ($diemhk1 > 10 || $diemhk2 > 10 || $diemhk1 < 0 || $diemhk2 < 0) {
        $check = false;
        echo '<script language="javascript">';
        echo 'alert("Nhap lai diem")';
        echo '</script>';
    }
}

function diemTB($diemhk1, $diemhk2) {
    return ($diemhk1 + $diemhk2 * 2) / 3;
}

function ketQua($diemTB) {
    if ($diemTB < 5) {
        return false;
    } 
    return true;
}

function xepLoai($diemTB) {
    if (ketQua($diemTB)) {
        if ($diemTB >= 8) {
            echo "GIOI";
        } else if ($diemTB >= 6.5 ) {
            echo "KHA";
        } else {
            echo "TRUNG BINH";
        }
    } else {
        echo "";
    }
}
?>

    <h2 >Nguyen Truong Duy - 20135248</h2>
    <div id="header" align="center">KET QUA HOC TAP</div>
    <div id="content">
    <form action="Page1.php" method="post" name="thanhtoan">
    <table>
        <tr>
            <td>Diem HK1: </td>
            <td><input type="text" name="diemhk1" value="<?php if (!empty($diemhk1) && !empty($diemhk2)) { echo $diemhk1; } else { echo ""; }?>"/></td>
        </tr>
        <tr>
            <td>Diem HK2: </td>
            <td><input type="text" name="diemhk2" value="<?php if (!empty($diemhk1) && !empty($diemhk2)) { echo $diemhk2; } else { echo ""; }?>"/></td>
        </tr>
        <tr>
            <td>Diem trung binh: </td>
            <td><input type="text" name="diemTB" disabled="true" value="<?php 
                if (!empty($diemhk1) && !empty($diemhk2)) {
                    $diemTB = diemTB($diemhk1, $diemhk2);
                   echo $diemTB; 
                }
                else echo "";
            ?>"/></td>
        </tr>
        <tr>
            <td>Ket qua: </td>
            <td><input type="text" name="ketqua" disabled="true" value="<?php 
                    if (!empty($diemhk1) && !empty($diemhk2)) {
                        if (ketQua($diemTB)) {
                            echo "Duoc len lop";
                        } else {
                            echo "O lai lop";
                        }
                    }
                    else 
                        echo "";
                ?>"
                />
            </td>
        </tr>
        <tr>
            <td>Xep loai hoc luc </td>
            <td><input type="text" name="xeploai" disabled="true" value="<?php if (!empty($diemhk1) && !empty($diemhk2)) xepLoai($diemTB); else echo "";?>"/></td>
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