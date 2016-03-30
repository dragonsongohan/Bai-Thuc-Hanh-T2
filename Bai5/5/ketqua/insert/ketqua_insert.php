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
        if (document.frmPHP.txtMaMH.value=="") {
            alert("Please enter Name");
            document.frmPHP.txtName.focus();
            return false;
        }
        if (document.frmPHP.txtDiem.value=="") {
            alert("Please enter Name");
            document.frmPHP.txtName.focus();
            return false;
        }
        return true;
    }
</script>
<body >
<?php 
    include("../../dodatabase.php");
    $strMaSV = "select MaSV, HoSV, TenSV from SINHVIEN";
    $resultMaSV = doSomething($strMaSV);
    
    $strMaMH = "select MaMH, TenMH from MONHOC";
    $resultMaMH = doSomething($strMaMH);
    
?>
<h2 style="text-align: center;;">Nguyễn Trương Duy - 20135248</h2>
<table style="margin: auto;">
<form name="frmPHP" method="post" action="ketqua_doinsert.php" onsubmit="return checkInput();">
    <tr>
        <td align="left" class="content-sm"><b>Please enter ID and Name</b></td>
    </tr>
    <tr>
        <td align="left" >Tên Sinh Viên:</td>
        <td align="left" >Tên Mon Hoc:</td>
        <td align="left" >Điểm:</td>
    </tr>
    <tr>
        <td align="left">
            <select name="MaSV">
                <?php 
                    while ($row = mysql_fetch_array($resultMaSV)) {
                ?>
                    <option value="<?=$row['MaSV']?>"><?=$row['HoSV'] . " " . $row['TenSV']?></option>
                <?php 
                    }
                ?>
            </select>
        </td>
        
        <td align="left">
            <select name="MaMH">
                <?php 
                    while ($row = mysql_fetch_array($resultMaMH)) {
                ?>
                    <option value="<?=$row['MaMH']?>"><?=$row['TenMH']?></option>
                <?php 
                    }
                ?>
            </select>
        </td>
        
        <td align="left" >
            <input type="text" name="txtDiem" size="25" maxlength="50" class="textbox">
        </td>
        
    </tr>
    
    <tr>
        <td>&nbsp;</td>
        <td align="left"> <br>
            <input type="submit" value="Submit" class="button">
            <input type="reset" value="Reset" class="button">
        </td>
    </tr>
    </table>
</form>
</table>
</body>
</html>