<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Nguyễn Trương Duy - 20135248</title>
    <script language=JavaScript>
        function checkInput() {
            if (document.frmPHP.id_kh.value == "") {
                alert("Invalid ID, Please enter ID");
                document.frmPHP.txtID.focus();
                return false;
            }
            if (document.frmPHP.tenkh.value == "") {
                alert("Please enter Name");
                document.frmPHP.txtName.focus();
                return false;
            }
            return true;
        }
    </script>
<body>
<h2>Nguyễn Trương Duy - 20135248</h2>
<table>
    <form name="frmPHP" method="post" action="khachhang_doupdate.php" onsubmit="return checkInput();">
        <tr>
            <td align="left" class="content-sm"><b>Please enter ID and Name</b></td>
        </tr>
        <tr>
            <td align="left">Mã Khách Hàng</td>
        </tr>
        <tr>
            <td align="left">
                <input type="text" name="id_kh" size="25" maxlength="25" class="textbox">
            </td>
        </tr>
        <tr>
        <tr>
            <td align="left">Tên sản phẩm</td>
        </tr>
        <tr>
            <td align="left">
                <input type="text" name="tenkh" size="25" maxlength="50" class="textbox">
            </td>
        </tr>
        <td align="left" valign="top"><br>
            <input type="submit" value="Submit" class="button">
            <input type="reset" value="Reset" class="button">
        </td>
        </tr>
    </form>
</table>
</table>
</body>
</html>
