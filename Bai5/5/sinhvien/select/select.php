<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Quản lý sinh viên::</title>
<body >
<h2 style="text-align: center;">Nguyễn Trương Duy - 20135248</h2>
<?php
    $user = "root";
    $url = "localhost";
    $pass = "";
    $database_name = "qlsinhvien";
    
    $link = mysql_connect($url, $user, $pass) or 
        die("Không kết nối được MySQL Database");
    mysql_select_db($database_name, $link);
    $totalRows = 0;
    $strSQL = "select * from SINHVIEN";
    $result = mysql_query($strSQL, $link);
    $totalRows = mysql_num_rows($result);
?>
<h3 style="text-align: center;">Tổng số mẫu tìm thấy: <?=$totalRows?></h3>
<table style="margin: auto;">
    <tr>
        <td><b>Mã Sinh Vien</b></td>
        <td><b>UserName</b></td>
        <td><b>Password</b></td>
        <td><b>Họ Sinh Viên</b></td>
        <td><b>Tên Sinh Viên</b></td>
        <td><b>Giới Tính</b></td>
        <td><b>Ngày Sinh</b></td>
        <td><b>Nơi Sinh</b></td>
        <td><b>Địa Chỉ</b></td>
        <td><b>Mã Khoa</b></td>
        <td><b>Học Bổng</b></td>
    </tr>
    <?php
        if ($totalRows > 0) {
            $i = 0;
            while ($row = mysql_fetch_array($result)) {
                $i += 1; 
    ?>
    <tr valign="top">
        <td><?=$row["MaSV"]?></td>
         <td><?=$row["Username"]?></td>
         <td><?=$row['Password']?></td>
         <td><?=$row["HoSV"]?></td>
         <td><?=$row["TenSV"]?></td>
         <td><?=$row['GioiTinh']?></td>
         <td><?=$row["NgaySinh"]?></td>
         <td><?=$row["NoiSinh"]?></td>
         <td><?=$row['DiaChi']?></td>
         <td><?=$row["MaKH"]?></td>
         <td><?=$row["HocBong"]?></td>
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
