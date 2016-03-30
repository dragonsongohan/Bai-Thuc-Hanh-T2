<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Quản lý sinh viên::</title>
<body >
<h2 >Nguyễn Trương Duy - 20135248</h2>
<?php
    $user = "root";
    $url = "localhost";
    $pass = "";
    $database_name = "qlsinhvien";
    
    $link = mysql_connect($url, $user, $pass) or 
        die("Không kết nối được MySQL Database");
    mysql_select_db($database_name, $link);
    $totalRows = 0;
    $strSQL = "select * from MONHOC";
    $result = mysql_query($strSQL, $link);
    $totalRows = mysql_num_rows($result);
?>
<h3>Tổng số mẫu tìm thấy: <?=$totalRows?></h3>
<table>
    <tr>
        <td><b>Mã Môn học</b></td>
        <td><b>Tên Môn Học</b></td>
        <td><b>Số tiết</b></td>
    </tr>
    <?php
        if ($totalRows > 0) {
            $i = 0;
            while ($row = mysql_fetch_array($result)) {
                $i += 1; 
    ?>
    <tr valign="top">
        <td><?=$row["MaMH"]?></td>
         <td><?=$row["TenMH"]?></td>
         <td><?=$row['SoTiet']?></td>
    </tr>
    <?php 
        }
        } else {
    ?>
    <tr valign="top">
        <td>&nbsp;</td>
        <td><b><font face="Arial" color="#FF0000">Không tìm thấy thông tin hàng hóa!</font></b></td>
    </tr>
    <?php 
        }
    ?>
</table>
</body>
</html>
