<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Quản lý sinh viên::</title>
<script language=JavaScript>
    function checkInput() {
        if (document.frmPHP.txtID.value == "") {
            alert("Invalid ID, Please enter ID");
            document.frmPHP.txtID.focus();
            return false;
        }
        return true;
    }
</script>
<body >
<?php
    include("../../dodatabase.php");
    $strMonHoc = "select * from MONHOC";
    $resultMH = doSomething($strMonHoc);
 ?>
<h2 >Nguyễn Trương Duy - 20135248</h2>
<table>
<form name="frmPHP" method="post" action="monhoc_dodelete.php" onsubmit="return checkInput();">
    <tr>
        <td align="left" class="content-sm"><b>Please enter ID and Name</b></td>
    </tr>
    <tr>
        <td align="left" >Select Mon Hoc Want Delete:</td>
    </tr>
    <tr>
        <td align="left">
            <select name="MaMH">
                <?php 
                    while ($row = mysql_fetch_array($resultMH)) {
                ?>
                    <option value="<?=$row['MaMH']?>"><?=$row['TenMH'] . " " . $row['SoTiet']?></option>
                <?php 
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td align="left" valign="top"> <br>
            <input type="submit" value="Submit" class="button">
            <input type="reset" value="Reset" class="button">
        </td>
    </tr>
    </table>
</form>
</table>
</body>
</html>
