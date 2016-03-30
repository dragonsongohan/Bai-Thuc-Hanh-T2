<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Quản lý sinh viên::</title>
<body >
<h2 >Nguyễn Trương Duy - 20135248</h2>
<h3>Thêm mẩu tin</h3>
<?php 
    $txtID = $_POST['txtID'];
    $txtName = $_POST['txtName'];
    $affectrow = 0;
    $user = "root";
    $url = "localhost";
    $pass = "";
    $database_name = "qlsinhvien";
    
    $link = mysql_connect($url, $user, $pass) or die ("Không kết nối được MySQL Database");
    mysql_select_db($database_name, $link);
    $sql="update KHOA set TenKhoa='";
    $sql .=$txtName."' where MaKH='".$txtID."'";
    $result = mysql_query($sql, $link);
    if ($result) {
        $affectrow = mysql_affected_rows();
        mysql_close($link);
    }
?>
Số mẫu tin thêm vào <?= $affectrow?>
</body>
</html>
