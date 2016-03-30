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
        if (document.frmPHP.txtName.value=="") {
            alert("Please enter Name");
            document.frmPHP.txtName.focus();
            return false;
        }
        return true;
    }
</script>
<body >
<h2 >Nguyễn Trương Duy - 20135248</h2>

<?php 
    include("../../dodatabase.php");
    $strMaKH = "select * from Khoa";
    $resultMaKH = doSomething($strMaKH);
    
?>
<table>
<form name="frmPHP" method="post" action="sinhvien_doinsert.php" onsubmit="return checkInput();">
    <tr>
        <td align="left" class="content-sm"><b>Please enter infomation Sinh Viên</b></td>
    </tr>
    <tr>
        <td align="left" >Mã Sinh Viên:</td>
    </tr>
    <tr>
        <td align="left">
            <input type="text" name="MaSV" size="25" maxlength="3" class="textbox">
        </td>
    </tr>
    <tr>
    <tr>
        <td align="left" >UserName:</td>
    </tr>
    <tr>
        <td align="left" >
            <input type="text" name="txtUser" size="25" maxlength="50" class="textbox">
        </td>
    </tr>
    
    <tr>
        <td align="left" >Pass:</td>
    </tr>
    <tr>
        <td align="left" >
            <input type="text" name="txtPass" size="25" maxlength="50" class="textbox">
        </td>
    </tr>
    
    <tr>
        <td align="left" >Ho Ten:</td>
    </tr>
    <tr>
        <td align="left" >
            <input type="text" name="txtHoTen" size="25" maxlength="50" class="textbox">
        </td>
    </tr>
    
    <tr>
        <td align="left" >Tên:</td>
    </tr>
    <tr>
        <td align="left" >
            <input type="text" name="txtName" size="25" maxlength="50" class="textbox">
        </td>
    </tr>
    
    <tr>
        <td align="left" >Giới tính:</td>
    </tr>
    <tr>
        <td align="left" >
            <input type="radio" name="txtGender" size="25" value="F" > Nữ 
            <input type="radio" name="txtGender" size="25" value="M" > Nam
        </td>
    </tr>
    
    <tr>
        <td align="left" >Ngày sinh:</td>
    </tr>
    <tr>
        <td align="left" >
            <input type="text" name="txtNgaySinh" size="25" maxlength="50" class="textbox">
        </td>
    </tr>
    
    <tr>
        <td align="left" >Noi sinh:</td>
    </tr>
    <tr>
        <td align="left" >
            <input type="text" name="txtNoiSinh" size="25" maxlength="50" class="textbox">
        </td>
    </tr>
    
    <tr>
        <td align="left" >Dia Chi:</td>
    </tr>
    <tr>
        <td align="left" >
            <input type="text" name="txtDiaChi" size="25" maxlength="50" class="textbox">
        </td>
    </tr>
    
    <tr>
        <td>Chọn Khoa: 
            <select name="MaKH">
                <?php 
                    while ($row = mysql_fetch_array($resultMaKH)) {
                ?>
                    <option value="<?=$row['MaKH']?>"><?=$row['TenKhoa']?></option>
                <?php 
                    }
                ?>
            </select>
        </td>
    </tr>
    
    <tr>
        <td align="left" >Hoc Bong:</td>
    </tr>
    <tr>
        <td align="left" >
            <input type="text" name="txtHocBong" size="25" maxlength="50" class="textbox">
        </td>
    </tr>
    
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
