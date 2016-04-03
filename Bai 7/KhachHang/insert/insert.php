<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-
8"/>
    <title>Nguyễn Trương Duy - 20135248</title>
    <script language=JavaScript>
        function checkInput() {
            if (document.frmPHP.txtid_kh.value == "") {
                alert("Invalid ID, Please enter ID");
                document.frmPHP.txtid_sp.focus();
                return false;
            }
            if (document.frmPHP.txttenkh.value == "") {
                alert("Please enter Name");
                document.frmPHP.txttenkh.focus();
                return false;
            }
            if (document.frmPHP.txtdienthoai.value == "") {
                alert("Please enter Name");
                document.frmPHP.txtdongia.focus();
                return false;
            }
            if (document.frmPHP.txtdiachi.value == "") {
                alert("Please enter Name");
                document.frmPHP.txtdongia.focus();
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<table>
    <form name="frmPHP" method="post" action="khachhang_doinsert.php"
          onsubmit="return checkInput();">
        <tr>
            <td align="left" class="content-sm"><b>
                    Please enter ma sp, ten san phẩm, đơn giá
                </b></td>
        </tr>
        <tr>
            <td align="left">Mã Khách Hàng:</td>
        </tr>
        <tr>
            <td align="left">
                <input type="text" name="txtid_kh" size="25"
                       maxlength="6" class="textbox">
            </td>
        </tr>
        <tr>
            <td align="left">Tên Khách Hàng:</td>
        </tr>
        <tr>
            <td align="left">
                <input type="text" name="txttenkh" size="50"
                       maxlength="50" class="textbox">
            </td>
        </tr>
        <tr>
            <td align="left">Điện thoại:</td>
        </tr>
        <tr>
            <td align="left">
                <input type="text" name="txtdienthoai" size="12"
                       maxlength="8" class="textbox">
            </td>
        </tr>
        <tr>
            <td align="left">Địa chỉ:</td>
        </tr>
        <tr>
            <td align="left">
                <input type="text" name="txtdiachi" size="12"
                       maxlength="8" class="textbox">
            </td>
        </tr>
        <tr>
            <td align="left" valign="top"><br>
                <input type="submit" value="Submit" class="button">
                <input type="reset" value="Reset" class="button">
            </td>
        </tr>
    </form>
</table>
</body>
</html>