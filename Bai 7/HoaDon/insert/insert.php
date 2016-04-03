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

<?php
    $link = mysql_connect("localhost", "root", "") or die ("Không kết nối được database");
    mysql_select_db("qlbanhang", $link);
    $strSQLKH = "select * from khachhang";
    $resultKH = mysql_query($strSQLKH, $link);

    $strSQLNV = "select * from nhanvien";
    $resultNV = mysql_query($strSQLNV, $link);
?>

<table>
    <form name="frmPHP" method="post" action="nhanvien_doinsert.php"
          onsubmit="return checkInput();">
        <tr>
            <td align="left" class="content-sm"><b>
                    Please enter ma sp, ten san phẩm, đơn giá
                </b></td>
        </tr>
        <tr>
            <td align="left">Mã Hóa Đơn:</td>
        </tr>
        <tr>
            <td align="left">
                <input type="text" name="txtid_hd" size="25"
                       maxlength="20" class="textbox">
            </td>
        </tr>
        <tr>
            <td align="left">Ngày Lập Hóa Đơn:</td>
        </tr>
        <tr>
            <td align="left">
                <input type="text" name="ngaylaphoadon" size="50"
                       maxlength="50" class="textbox">
            </td>
        </tr>
        <tr>
            <td align="left">Khách Hàng:</td>
        </tr>
        <tr>
            <td align="left">
                <select name="id_kh">
                    <?php
                    while ($row = mysql_fetch_array($resultKH)) {
                        ?>
                        <option value="<?=$row['id_kh']?>"><?=$row['tenkh']?></option>
                        <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td align="left">Nhân Viên:</td>
        </tr>
        <tr>
            <td align="left">
                <select name="id_nv">
                    <?php
                    while ($row = mysql_fetch_array($resultNV)) {
                        ?>
                        <option value="<?=$row['id_nv']?>"><?=$row['tennv']?></option>
                        <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td align="left">Ngày giao hàng:</td>
        </tr>
        <tr>
            <td align="left">
                <input type="text" name="ngaygiaohang" size="12"
                       maxlength="8" class="textbox">
            </td>
        </tr>
        <tr>
            <td align="left">Tổng tiền:</td>
        </tr>
        <tr>
            <td align="left">
                <input type="text" name="tongtien" size="12"
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